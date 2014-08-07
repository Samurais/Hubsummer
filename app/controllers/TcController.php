<?php
include_once (REALPATH."/app/library/BaseController.php");
require_once (REALPATH."/include/Class/Nosqlhelp.php");
require_once (REALPATH.'/topsdk/TopClient.php');
require_once (REALPATH.'/topsdk/request/TmcUserPermitRequest.php');
require_once (REALPATH.'/topsdk/RequestCheckUtil.php');
require_once ('include/Class/HttpClient.class.php');
class TcController extends BaseController{
	function sendlog($nick,$resp){
		$target = "http://trade.zzgdapp.com/tc/actuserlog";
		$content = HttpClient::quickPost($target,
				array(
						'nick'=>$nick,
						'res'=>$resp,
				));
	}
	function aynsqlAction(){
		$dao = new CommonDao4sSelf('10.140.255.1', 'zzbtrade', 'tradeuse', '123456');
		$sqlchareter="select sellernick,smsnum,telphone,telnum,issendsms from zzbtrade.user_sms where smsnum>0";
		$sms=$dao->getRowsBySQlCase($sqlchareter);
		$dao->close();
		$dao = new CommonDao4sSelf('10.140.255.1', 'sms', 'smsuser', '123456');
		foreach($sms as $val){
			$usersel=array(
    				'sellernick'=>$val['sellernick'],
    				'smsnum'=>$val['smsnum'],
    				'smsnum_total'=>$val['smsnum'],
    				'telphone'=>$val['telphone'],
    				'telnum'=>$val['telnum'],
    				'issendsms'=>$val['issendsms']
    				);
			$dao->saveRow('sms.sms_userinfo' , $usersel,'');
		}
		echo 'yes';
	}
	function aynsql2Action(){
		$dao = new CommonDao4sSelf('10.140.255.1', 'zzbtrade', 'tradeuse', '123456');
		$sqlchareter="select * from zzbtrade.smspaylog where status='1'";
		$sms=$dao->getRowsBySQlCase($sqlchareter);
		$dao->close();
		$dao = new CommonDao4sSelf('10.140.255.1', 'sms', 'smsuser', '123456');
		foreach($sms as $val){
		/*	$usersel=array(
    				'sellernick'=>$val['sellernick'],
    				'smsnum'=>$val['smsnum'],
    				'smsnum_total'=>$val['smsnum'],
    				'telphone'=>$val['telphone'],
    				'telnum'=>$val['telnum'],
    				'issendsms'=>$val['issendsms']
    				);*/
			$dao->saveRow('sms.smspaylog' , $val,'');
		}
	}
	function upDayactuserAction(){
		$nick=$_POST['nick'];
		$addtime=$_POST['day'];
		if(empty($nick)||empty($addtime)){
			echo 'fail_1';
		}else{
			if (!is_numeric($addtime)) {
				echo 'fail_2';
				return;
			}
			$addtime=intval($addtime);
			$upviptime=$this->getTsession(urlencode($nick),'upvip_time');
			$actviptime=$this->getTsession(urlencode($nick),'actupvip_time');
			if(empty($upviptime)&&empty($actviptime)){
				echo 'fail_3';
				
			}else{
				$viptime=$upviptime;
				if($viptime=='off'||$viptime=='2012-05-31 23:59:59'||$viptime=='0000-00-00 00:00:00'||empty($viptime)){
					echo 'fail_4';
					return;
				}
				if(!empty($actviptime)){
					$viptime=$actviptime;
				}
				$viptime=date('Y-m-d H:i:s',strtotime("$viptime +$addtime day"));
				$this->setOneKey(urlencode($nick),'actupvip_time', $viptime);
				$dao = new CommonDao4sSelf('10.140.255.1', 'zzbtrade', 'tradeuse', '123456');
				$res=$dao->getRowByPk('zzbtrade.actives','','sellernick',$nick,'');
				if(count($res)>0){
					$usersel = array(
						'actvtime' => $viptime,
						'optime' => 'now()',
					);
					$dao->updateRowByPk('zzbtrade.actives',$usersel,'sellernick',$nick,'');
					echo 'success_up#'.$viptime;
				}else{
					$usersel = array(
						'sellernick' => $nick,
						'viptime' => $upviptime,
						'actvtime' => $viptime,
						'optime' => 'now()',
					);
					$dao->saveRow('zzbtrade.actives' , $usersel,'');
					echo 'success_add#'.$viptime;
				}
				$this->sendlog($nick,$viptime);
			}
		}
	}
	function addactuserAction(){
		$nick=$_POST['nick'];
		$upviptime=$_POST['upviptime'];
		$actviptime=$_POST['actviptime'];
		if(empty($nick)||empty($upviptime)||empty($actviptime)){
			echo 'fail';
		}else{
			$this->setOneKey(urlencode($nick),'upvip_time', $upviptime);
			$this->setOneKey(urlencode($nick),'actupvip_time', $actviptime);
			$Dao = new CommonDao4sSelf('10.140.255.1', 'zzbtrade', 'tradeuse', '123456');
			$usersel = array(
				'sellernick' => $nick,
				'viptime' => $upviptime,
				'actvtime' => $actviptime,
				'optime' => 'now()',
			);
			$Dao->saveRow('zzbtrade.actives' , $usersel,'');
			echo 'success';
			$this->sendlog($nick,$actviptime);
		}
	}
	function delactuserAction(){
		$nick=$_POST['nick'];
		if(empty($nick)){
			echo 'fail';
		}else{
			$this->delTSession(urlencode($nick), 'actupvip_time');
			$this->delTSession(urlencode($nick), 'upvip_time');
			$Dao = new CommonDao4sSelf('10.140.255.1', 'zzbtrade', 'tradeuse', '123456');
			$usersel = array(
				'sellernick' => $nick,
			);
			$Dao->deleteRows('zzbtrade.actives', $usersel);
			echo 'success';
			$this->sendlog($nick,'0');
		}
	}
	/**
	 * 短信回掉
	 */
	function tradebackcallAction(){
		$sellernick=$_POST['sellernick'];
		$status=$_POST['status'];
		$tid=$_POST['tid'];
		$this->log($nick,$sellernick);
		$this->log($nick,$status);
		$this->log($nick,$status);
	}
	/**
	 * 交易
	 */
	function tradesAction()
	{
		  $query = $_SERVER['QUERY_STRING'];
		  $this->log('trades  query:'.$query);
		  $event=$_GET['event'];
		  $tid=$_GET['tid'];
          $nick = $_GET['nick'];
        /*if($nick =='dressa2z')
        {
            header("Location:http://iytest.tbmj.net/tc/trades?".$query);
            exit;
        }*/
		  $this->log('aaaaaaaaaaaaaaaaaa:'.$event);
		  if($event=='tradeDetail'&&!empty($tid)){
		  	$this->log('111111111111111111111111111111111:'.$event);
		  	header("Location:".APP_WEB_INDEX_ROOT."/trade/tradedetail#tid=".$tid);
		  }else if($event=='refundDetail'&&!empty($tid)){
		  	$this->log('2222222222222222222222222:'.$event);
		  	header("Location:".APP_WEB_INDEX_ROOT."/trade/tradedetail#tid=".$tid);
		  }else{
		  	$this->log('333333333333333333333333333:'.$query);
		  	header("Location:".APP_WEB_INDEX_ROOT."/pc/index#".$query);
		  }
	}
	
	/**
	 * 商品
	 */
	function itemsAction()
	{  
		$query = $_SERVER['QUERY_STRING'];
		$event=$_GET['event'];
		$iid=$_GET['iid'];
		$itemStatus=$_GET['itemStatus'];
		$this->log('items  query:'.$query);
		$this->log('items  event:'.$event);
		$this->log('items  iid:'.$iid);
		$this->log('items  itemStatus:'.$itemStatus);
        $nick = $_GET['nick'];
        if($nick =='dressa2z')
        {
            header("Location:http://iytest.tbmj.net/tc/items?".$query);
            exit;
        }
		
		if($event=='itemDetail'&&!empty($iid)){
			header("Location:".APP_WEB_INDEX_ROOT."/item/itemdetail#iid=".$iid);
		}else if($event=='itemList'){
			header("Location:".APP_WEB_INDEX_ROOT."/item/index#".$query);
		}else if($event=='itemAuditDetail'&&!empty($iid)){
			header("Location:".APP_WEB_INDEX_ROOT."/item/itemdetail#iid=".$iid);
		}else if($event=='itemHealthReport'&&!empty($iid)){
			header("Location:".APP_WEB_INDEX_ROOT."/item/baby_medical");
		}else{			
			header("Location:".APP_WEB_INDEX_ROOT."/pc/item#".$query);
		}
		
	}
    /**
     * 数据
     */
	function staticsAction()
	{
		$query = $_SERVER['QUERY_STRING'];
		$this->log('statics  query:'.$query);
        $nick = $_GET['nick'];
        if($nick =='dressa2z')
        {
            header("Location:http://iytest.tbmj.net/tc/statics?".$query);
            exit;
        }
		echo '登录成功';
		header("Location:".APP_WEB_INDEX_ROOT."/udp/index");
	}

    /**
     * 旺旺插件
     */
    function wwtradesAction()
    {
        $query = $_SERVER['QUERY_STRING'];
        $this->log('statics  query:'.$query);
        header("Location:".APP_WEB_INDEX_ROOT."/pc/wwindex#".$query);
    }

/*    function   wwitems()
    {
        $query = $_SERVER['QUERY_STRING'];
        $this->log('statics  query:'.$query);
        header("Location:".APP_WEB_INDEX_ROOT."/wwitem/wwindex#".$query);
    }*/

	function  indexAction()
	{
		/*$session = $_GET['auth'];
		
		$Tall = $this->getTall($session);
		$pro = TopApiThriftHelp::getTopApiClientProtocol();
		$topapi = new topapi_TopApiThriftClient($pro);
		$top_session = $Tall['top_session'];
		if(strpos($_SERVER["HTTP_USER_AGENT"],"Mac"))
		{
			$data['safari'] = 1;
				
			$sql= "select * from proclamation where (platform='iphone' OR platform='all') AND ( '".date("Y-m-d H:i:s",$datatime)."' between starttime and endtime) ORDER BY id DESC ";
			$this->log('Safari 浏览器！');
		}
		else{
			$data['safari'] = 0;
			$sql= "select * from proclamation where (platform='android' OR platform='windowsphone' OR platform='all') AND( '".date("Y-m-d H:i:s",$datatime)."' between starttime and endtime)  ORDER BY id DESC ";
		}
		
		$shopinfo = $topapi->getShop('title',$top_session,$user_nick, TOP_Appcode , TOP_Appsign ,$this->getClientinfo());
		if($shopinfo->opterflag==1){
			$optresult_shop = json_decode($shopinfo->optresult);
			$title = $optresult_shop->shop_get_response->shop->title;//得到店铺名称
			$data['title'] = $title;
		}
		
		$data['auth'] = $session;
		
		$this->regView('tc/index',$data);*/
		header("Location:".APP_WEB_INDEX_ROOT."/pc/index");
	}
	
	/**
	 * 授权返回
	 */
	function callbackAction()
	{	$this->log('item::');
		//uid=88591187&event=event_go_plugin&plugInType=60262003&
		$event = $_GET['event'];
		$authString = $_GET['authString'];
		$uid = $_GET['uid'];
		$plugInType = $_GET['plugInType'];
		$pro = TopApiThriftHelp::getTopApiClientProtocol();
		$topapi = new topapi_TopApiThriftClient($pro);
		$this->log('authString:'.$authString);
		if(($event=='event_go_plugin'||$event=='event_sso')&& strlen($authString)>0)//sso 
		{
			$result = json_decode($authString);
		
			$data['nick'] = urldecode($result->taobao_user_nick);
			$shopinfo = $topapi->getShop('title',$result->access_token,urldecode($result->taobao_user_nick), '21085840','7eb9e992b2d756715e0803a2915dfcd7' ,$this->getClientinfo());
			if($shopinfo->opterflag==1){
				$optresult_shop = json_decode($shopinfo->optresult);
				$title = $optresult_shop->shop_get_response->shop->title;//得到店铺名称
				$data['title'] = $title;
			}
		}else if($event==='event_itemList')
		{//商品列表
			$itemStatus = $_GET['itemStatus'];//取得状态
		}else if($event==='event_itemDetail')
		{//商品详情
		}
		$data['uid'] = $uid;
		$this->log('url:'.$_SERVER["REQUEST_URI"]);
		//$this->log('收到信息:'.$event.'   authString:'.$authString);	
         $this->regView('tc/test',$data);
	}
	
	function tc_pluginAction()
	{
		$this->log('url:'.$_SERVER["REQUEST_URI"]);
		$this->regView('tc/test',$data);
	}
	
	function testAction()
	{
		global $_CFG;
		$ip = $_CFG['redis']['ip'];
		$port = $_CFG['redis']['port'];
		$pageno = $_GET['p'];
		$pr = ($pageno-1)*10000;
		$ex = $pageno*10000;
		$sql = "select nick,xpd from webapp.userextd where xpd<>'' limit ".$pr.",".$ex; //150000,200000
		$dao = new CommonDao();
		$userextds = $dao->getRowsBySQl($sql,'','','');	
		$redis = Nosqlhelp::getredis4parm($ip, $port);
		foreach ($userextds as $user)
		{			
			//$this->log('nick:'.$user['nick']);
			if($user['nick']!=''&&count($user['xpd'])>0)
			{		
				$redis->hSet('xpd' , urlencode($user['nick']) , $user['xpd']);
			}
		}
		
		//$this->log('任务已完成!');
		
		echo '任务已完成!';
	}
	
	function sendAction()
	{
		$Client = new HttpClient('tgd.tbmj.net');
		for($i=1;$i<59;$i++)
		{
		$url = "http://tgd.tbmj.net/tc/test";
		$method = "GET";
		$data = array('ei'=> 'UTF-8',
		                 'p' => $i);
		$ret = $Client->HttpRequest($url,$method, $data );
		echo $ret['body'];
		}
	}
	function svAction(){
		
	}
	
}

?>