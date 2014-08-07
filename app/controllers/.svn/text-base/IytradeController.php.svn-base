<?php
include_once (REALPATH."/app/library/BaseController.php");
require_once (REALPATH."/include/Class/Nosqlhelp.php");
require_once (REALPATH.'/topsdk/TopClient.php');
require_once (REALPATH.'/topsdk/request/VasSubscribeGetRequest.php');
require_once (REALPATH.'/topsdk/RequestCheckUtil.php');
require_once (REALPATH.'/topsdk/osssdk/sdk.class.php');
include_once (REALPATH."/include/Class/util/Iywaf.php");
/**云打印**/
require_once (REALPATH.'/topsdk/TopClient.php');
require_once (REALPATH.'/topsdk/request/VasSubscribeGetRequest.php');
require_once (REALPATH.'/topsdk/request/UserGetRequest.php');
require_once (REALPATH.'/topsdk/RequestCheckUtil.php');
require_once (REALPATH.'/topsdk/request/WlbWaybillGetRequest.php');
require_once (REALPATH.'/topsdk/request/LogisticsAddressSearchRequest.php');
require_once (REALPATH.'/topsdk/request/WlbWaybillUpdateRequest.php');
require_once (REALPATH.'/topsdk/request/WlbWaybillSearchRequest.php');
require_once (REALPATH.'/topsdk/request/LogisticsAddressReachableRequest.php');
require_once (REALPATH.'/topsdk/request/LogisticsPartnersGetRequest.php');
class IytradeController extends BaseController
{    private  $ip = "10.11.02.157";
	 private  $appKey='21085840';
	 private  $secretKey='7eb9e992b2d756715e0803a2915dfcd7';
	 private  $httproot="http://iytradegule.com/sendsms/tradebackcall2";
    /**
     * 这是我重启php-fpm的判断方法，千万别动这个方法！！！
	 * @author Duanhq
     */
	 function indexAction()
	{//这是我重启php-fpm的判断方法，千万别动这歌方法
		echo 'yes';
		//	echo "My Name is WangShuXue";
	}
	 /**
     * 发送订购错误到后台
     */
    function sendviperrorAction(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$sug=$_POST['textarea'];
    	$sug=explode("=>",$sug);
    	if(!empty($sug[1])){
    		$errortop=$sug[0];
    		$sug=$sug[1];
    	}else{
    		$errortop='no';
    		$sug=$sug[0];
    	}
    	$errorpage=$_POST['errorpage'];
    	$info = $_SERVER["HTTP_USER_AGENT"];//得到客户端信息
    	/*$this->log('data:'.$info,$nick,$sug);*/
    	$dao = new CommonDao();
    	$usersuggest = array(
    			'sellernick'=>$nick,
    			'errortop'=>$errortop,
    			'error'=>$sug,
    			'remack'=>$errorpage,//.'#'.$info,
    			'optime'=>date( 'Y-m-d H:i:s' ),
    	);
    	$id=$dao->saveRow('zzbtrade.viperror',$usersuggest,'');
    	echo $id;
    }
	/**
	 * 短信套餐获取
	 * @author Duanhq
	 */
	 function smsbuyAction(){
	 	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$type=$_POST['type'];
    	$smstype="";
    	global $_CFG;
    	$dao =new CommonDao4sSelf($_CFG['DB']['Host'], 'sms', 'smsuser', $_CFG['DB']['Password'] );
    	$data=array();
    	if(!empty($nick)){
    		$smstype=$dao->getRowsBySQlCase("select id,title from sms.smstype where status='1'");
			$data['set']=$smstype;
			$smstype=$dao->getRowsBySQlCase("select paytime,price,typetitle from sms.smspaylog where sellernick='$nick' and status='1' order by paytime desc");
  			$data['log']=$smstype;
			
    	}
		echo json_encode($data);
		
	 }
	 /**
     * @param 短信关怀页面载入
     */
    function smsAction(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	global $_CFG;
		$smspay=$this->getTsession(urlencode($nick), 'smspay');
		$smssend=$this->getTsession(urlencode($nick), 'smssend');
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], 'sms', 'smsuser', $_CFG['DB']['Password'] );
		$smssz=$dao->getRowByPk('sms.sms_userinfo','','sellernick',$nick,'');
		if(count($smssz)>0){
			$smsnum=$smssz['smsnum'];
    		$telphone=$smssz['telphone'];
    		$telnum=$smssz['telnum'];
		}else{
			$usersel=array(
    				'sellernick'=>$nick,
    				'smsnum'=>'0',
    				'smsnum_total'=>'0',
    				'telphone'=>'',
    				'telnum'=>'',
    				'issendsms'=>0
    				);
    		$dao->saveRow('sms.sms_userinfo' , $usersel,'');
			$smsnum=0;
    		$telphone='';
    		$telnum=0;
		}
		$starttime = date('Y-m-d',time());
		$sql = "select smsnum,type from sms.sms_sendlog where sellernick='$nick' and smstime='$starttime'";
		$sms_msg = $dao->getRowsBySQl($sql,'','','');
		$data['total']=$sms_msg;
		$dao->close();
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
        $pjsz = $dao->getRowByPk('zzbtrade.user_sms','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$smsspan=$pjsz['smsspan'];
			if(empty($smspay)){
				$smspay=$pjsz['smspay'];
			}
    		if(empty($smssend)){
    			$smssend=$pjsz['smssend'];
    		}
    	}else{
    		$usersel=array(
    				'sellernick'=>$nick,
    				'smsspan'=>'',
    				'smspay'=>'off',
    				'smssend'=>'off',
    				);
    		$dao->saveRow('zzbtrade.user_sms' , $usersel,'');
    		$this->setOneKey(urlencode($nick), 'smspay', 'off');
    		$this->setOneKey(urlencode($nick), 'smssend', 'off');
    		$smsspan='';
    		$smspay='off';
    		$smssend='off';
    	}
    	/*$this->log("smspay:".$smspay);
    	$this->log("smssend:".$smssend);
	  	$starttime = date('Y-m-d',time());
    	$sql = "select smsnum from zzbtrade.sms_sendlog where sellernick='$nick' and smstime='$starttime' and type='smspay'";
    	$pay_msg = $dao->getRowsBySQl($sql,'','','');
    	if(count($pay_msg)>0){
    		$data['smspaynum']=$pay_msg[0]['smsnum'];
    	}else{
    		$data['smspaynum']=0;
    	}
    	$sql = "select smsnum from zzbtrade.sms_sendlog where sellernick='$nick' and smstime='$starttime' and type='smssend'";
    	$pay_msg = $dao->getRowsBySQl($sql,'','','');
    	if(count($pay_msg)>0){
    		$data['smssendnum']=$pay_msg[0]['smsnum'];
    	}else{
    		$data['smssendnum']=0;
    	}*/
    	$data['smsnum']=$smsnum;
    	$data['telphone']=$telphone;
    	$data['telnum']=$telnum;
    	$data['smsspan']=$smsspan;
		$data['smspay']=$smspay;
		$data['smssend']=$smssend;
    	if($smspay=='on'&&$smssend=='on'){
    		$data['off']='on';
    	}else{
    		$data['off']='off';
    	}
		
		

		/*if(count($sms_msg)>0){
			foreach($sms_msg as $msg){
				$type=$msg['type'].'_total';
				$data[$type]=$msg['smsnum'];
			}
		}*/

		
    	echo json_encode($data);
    }
	/**
     *@param 短信催付页面载入
     */
    function smspayAction(){
    	Iywaf::waf($_POST);
    	$type=$_POST['type'];
    	$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
    	$paysz = $dao->getRowByPk('zzbtrade.'.$type,'','sellernick',$nick,'');
    	if(count($paysz)>0){
    		if($type=='smspay'){
    			$data['sendsmstime']=$paysz['sendsmstime'];
    		}else if($type=='smssend'){
    			$data['isnosend']=$paysz['isnosend'];
    		}
    		$data['smsflag']=$paysz['smsflag'];
    		$data['smstext']=$paysz['smstext'];
    		$data['isblackbuyer']=$paysz['isblackbuyer'];
    		$data['ismoney']=$paysz['ismoney'];
    		$data['maxmoney'] = $paysz['maxmoney'];
    	}else{
    		/*新用户*/
    	    if($type=='smspay'){
	    		$usersel = array(
	    				'sellernick'=>$nick,
	    				'sendsmstime'=>10,
	    				'smsflag'=>0,
	    				'smstext'=>"",
	    				'isblackbuyer'=>0,
	    				'ismoney'=>0,
	    				'maxmoney'=>0.00,
	    				'optime'=>'now()'
	    		);
    		}else if($type=='smssend'){
	    		$usersel = array(
	    				'sellernick'=>$nick,
	    				'smsflag'=>0,
	    				'smstext'=>"",
	    				'isnosend'=>1,
	    				'isblackbuyer'=>0,
	    				'ismoney'=>0,
	    				'maxmoney'=>0.00,
	    				'optime'=>'now()'
	    		);
    		}

    		$dao->saveRow('zzbtrade.'.$type , $usersel,'');
    		$data['smsflag']=0;
    		if($type=='smspay'){
    			$data['sendsmstime']=10;
    		}else if($type=='smssend'){
    			$data['isnosend']=1;
    		}
    		$data['smstext']="";
    		$data['isblackbuyer']=0;
    		$data['ismoney']=0;
    		$data['maxmoney'] = '0.00';
    	}
		
		$smscompy=$this->getTsession('loveapp', $type);
		if(empty($smscompy)){
			$smscompy='1';
			/*$this->setTsession('loveapp', 'smspay', '3');*/
		}
		$data['smscompy']=$smscompy;
    	//$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.blacklog where sellernick='".$nick."' and mytime<='".$end_time."' and mytime>='".$start_time."' order by mytime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
    	echo json_encode($data);
    	
    }
	/**
	 * 一键开启短信关怀
	 * @author Duanhq
	 */
	 function opensmsAction(){
	 	Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		$smsoff=$_POST['smsoff'];
		if(empty($nick)){
			return;
		}
		$types=array("smspay","smssend");
		global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		foreach($types as $type){
			$usersel=array($type=>$smsoff);
    		$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
			$this->setOneKey(urlencode($nick), $type, $smsoff);
		}

	 }
	/**
	 * 设置短信开启开关
	 * @author Duanhq
	 */
	function switchoptionAction(){
		Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		$type=$_POST['type'];
    	$smsoff=$_POST['smsoff'];
		if(empty($nick)){
			return;
		}
		global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		$usersel=array($type=>$smsoff);
    	$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
		$this->setOneKey(urlencode($nick), $type, $smsoff);
	}
	/**
	 * 设置发送短信最低金额
	 * @author Duanhq
	 */
	function setsmspaymoneyAction(){
		Iywaf::waf($_POST);
    	$type=$_POST['type'];
    	$maxmoney=$_POST['maxmoney'];
    	$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
    	global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
    	$paysz = $dao->getRowByPk('zzbtrade.'.$type,'','sellernick',$nick,'');
    	if(count($paysz)>0){
    			$usersel=array('maxmoney'=>$maxmoney);
    			$dao->updateRowByPk('zzbtrade.'.$type,$usersel,'sellernick',$nick,'');
    	}else{
    			/*新用户*/
    			$usersel = array('sellernick'=>$nick,'maxmoney'=>$maxmoney);
    			$dao->saveRow('zzbtrade.'.$type , $usersel,'');
    	}
	}
	/**
	 * 保存系统设置-短信
	 * @author Duanhq
	 */
	 function savesmssetsAction(){
	 	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	$telphone=$_POST['telphone'];
    	$telnum=$_POST['telnum'];
    	$smsspan=$_POST['smsspan'];
    	global $_CFG;
		if(empty($nick)){
			return;
		}
    	$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		$usersel=array(
    				'smsspan'=>$smsspan,
    	);
    	$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
		$dao->close();
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], 'sms', 'smsuser', $_CFG['DB']['Password'] );
    	if(empty($telphone)){
    		$usersel=array(
    				'telnum'=>$telnum
    		);
    	}else{
    		$usersel=array(
    				'telphone'=>$telphone,
    				'telnum'=>$telnum,
    		);
    	}
		$dao->updateRowByPk('sms.sms_userinfo',$usersel,'sellernick',$nick,'');


	 }
	 /**
	  * 保存短信关怀设置
	  * @author Duanhq
	  */
	function savesmsAction(){
	  	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
		$type=$_POST['type'];
    	$smspayoff=$_POST['smspayoff'];
    	$sendsmstime=$_POST['sendsmstime'];
    	$smsflag=$_POST['smsflag'];
		$isblackbuyer=$_POST['isblackbuyer'];
		$ismoney=$_POST['ismoney'];
		$maxmoney=$_POST['maxmoney'];
		if(empty($nick)){
			return;
		}
		global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		if($type=='smspay'){
			$usersel = array(
	    				//'sellernick'=>$nick,
	    				'sendsmstime'=>$sendsmstime,
	    				'smsflag'=>$smsflag,
	    				'isblackbuyer'=>$isblackbuyer,
	    				'ismoney'=>$ismoney,
	    				//'maxmoney'=>$maxmoney,
	    				'optime'=>'now()'
	    		);
		}else if($type=='smssend'){
			$usersel = array(
	    				//'sellernick'=>$nick,
	    				'isnosend'=>$sendsmstime,
	    				'smsflag'=>$smsflag,
	    				'isblackbuyer'=>$isblackbuyer,
	    				'ismoney'=>$ismoney,
	    				//'maxmoney'=>$maxmoney,
	    				'optime'=>'now()'
	    		);
			
		}
		
		$dao->updateRowByPk('zzbtrade.'.$type,$usersel,'sellernick',$nick,'');
		
	}
	/**
	 * 短信日志
	 * @author Duanhq
	 */
	function smslogAction(){
		Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
		$currentpage = $_POST['page'];//当前页数
		$type=$_POST['type'];//查询短信类型
		$page_num=20;//每页显示的条数
		if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
			$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
		}
		global $_CFG;
		$sql1='';
		$sql2='';
		if($type=='all'){
			$sql1="select count(id) as total from zzbtrade.sms_record where sellernick='$nick'";
			$sql2="select * from zzbtrade.sms_record where sellernick='".$nick."'  order by smstime desc limit ".($currentpage-1)*$page_num.",".$page_num."";
		}else{
			$sql1="select count(id) as total from zzbtrade.sms_record where sellernick='$nick' and smstype='$type'";
			$sql2="select * from zzbtrade.sms_record where sellernick='".$nick."' and smstype='$type'  order by smstime desc limit ".($currentpage-1)*$page_num.",".$page_num."";
		}
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		$all_cout = $dao->getRowByPkOne($sql1, '');
		$assessTotal = $all_cout['total'];//累计自动评价数
		/*
		date_default_timezone_set ( "PRC" );
		$end_time=date ( 'Y-m-d H:i:s' ,time()+600*60);
		$start_time=date ( 'Y-m-d H:i:s', strtotime ( "-29day" ) );//近30天推荐记录
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.rate_record where sellernick='".$nick."' and opttime<='".$end_time."' and opttime>='".$start_time."' order by opttime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		*/
		$zdpj=$dao->getRowsBySQlCase($sql2);	
		$data['smslog']=$zdpj;
		$data['assessTotal']=$assessTotal;//累计自动评价数量
		echo json_encode($data);
	}

    function ssoTestAction(){
    	/*$oss_sdk_service = new ALIOSS();

    	//设置是否打开curl调试模式
    	$oss_sdk_service->set_debug_mode(FALSE);
    	$bucket = 'itradeprint';
    	$options = array(
    			'delimiter' => '',
    			'prefix' => '',
    			'max-keys' => 1000,
    			//'marker' => 'myobject-1330850469.pdf',
    	);
    	
    	$response = $oss_sdk_service->list_object($bucket,$options);
    	$this->_format($response);
    	//$response = $this->upload_by_file($oss_sdk_service);
    	//$response = $this->get_object_meta($oss_sdk_service);*/
    }
    /**
     * 更新数据库订购到期时间viptime
     */
    function upViptimeAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$viptime=$_POST['viptime'];
    	$this->log($nick."#授权开关：".$viptime);
    	$dao = new CommonDao();
    	$usersel=array(
    			'subdatetime'=>$viptime
    	);
    	$dao->updateRowByPk('zzbtrade.userextd',$usersel,'nick',$nick,'');
    	$this->setOneKey(urlencode($nick),'upvip_time', $viptime);
    	//$this->setOneKey(urlencode($nick),'trade_lasttime_m', $viptime);
    }

    
    /**
     * wap 授权
     * @param $authstrig
     */
    function webauthAction()
    {
    	Iywaf::waf($_GET);
    	/*
    	 * "state=trade%2C13783668101048&code=dmC4I6X52n3zY7V3QWwMrUZm4146003&state="
    	 */
    	$this->log('我是PC授权');
    	$code=$_GET['code'];
		$state=$_GET['state'];
    	$authstr = $this->authcode($code,TOP_Appcode_Trade,TOP_Appsign_Trade,AUTH_CALLBACK_Trade);
    	if($authstr!='')
    	{
    		$opt = json_decode($authstr);
    		$access_token =  $opt->access_token;
    		$refresh_token = $opt->refresh_token;
    		$nick = $opt->taobao_user_nick;
    		$nick=urldecode($nick);
    		$uid =  $opt->taobao_user_id;
    		$w1_expires_in = $opt->w1_expires_in;
    		$now = date("Y-m-d H:i:s");
    		$nows = strtotime($now);
    		$nows  =  $nows+intval($w1_expires_in);
    		$lasttime =  date('Y-m-d H:i:s', $nows);
    
    		//$this->log("session22222:".$access_token.','.$refresh_token.','.$nick.','.$uid.','.$w1_expires_in.','.$now.','.$nows.','.$lasttime);
    
    		//存入我方标识
    		/*  $templist = array('trade_access_token'=>$access_token,
    		 'trade_refresh_token'=>$refresh_token,
    				'trade_uid'=>$uid,
    				'trade_r1_lasttile'=>$lasttime);
    
    		$this->setHmset(urlencode($nick),$templist);*/
    		$this->setOneKey(urlencode($nick), 'trade_access_token_ispckey', $access_token);//合key后判断值
    		$this->setOneKey(urlencode($nick), 'trade_access_token_m', $access_token);
    		$this->setOneKey(urlencode($nick), 'trade_refresh_token_m', $refresh_token);
    		$this->setOneKey(urlencode($nick), 'trade_uid', $uid);
    		$this->setOneKey(urlencode($nick), 'trade_r1_lasttile_m', $lasttime);
    		$this->log('R1授权时效：'.$lasttime);
    		$trade_lasttime=$this->getTsession(urlencode($nick), "trade_lasttime_m");//订购关系到期时间
    		//$this->log("trade_lasttime1:".$nick);
    		$this->log('R1授权时效sssssssss：'.$trade_lasttime);
    		if(empty($trade_lasttime)||time()-strtotime($trade_lasttime)>0){
    			$this->log('33333333333333333333xxxxxxxxx'.$trade_lasttime);
    			$c=new TopClient();
    			$c->appkey=$this->appKey;
    			$c->secretKey=$this->secretKey;
    			$req=new VasSubscribeGetRequest();
    			$req->setNick($nick);
    			$req->setArticleCode('FW_GOODS-1827490');
    			$result=$c->execute($req);
    			if($result->article_user_subscribes){
    				$this->log(json_encode($result));
					$due_time=$result->article_user_subscribes->article_user_subscribe->deadline;
					$this->log($due_time);
    				$trade_lasttime=''.$due_time;
    				$this->setOneKey(urlencode($nick), "trade_lasttime_m", $trade_lasttime);
    			}else{
    				$this->log(json_encode($result));
    			}
    		}else{
    			$this->log('33333333333333333333'.$trade_lasttime);
    		}
    		$dao = new CommonDao();
    		$usersel=array(
    				'mark'=>$refresh_token,
    				'subdatetime'=>$trade_lasttime
    		);
    		$dao->updateRowByPk('zzbtrade.userextd',$usersel,'nick',$nick,'');
    		$this->log("授权结束，存入数据库:".$trade_lasttime);
            /*       if(empty($trade_lasttime)||time()-strtotime($trade_lasttime)>0){
               $url="http://cdn.zzgdapp.com/trade/web/html/index#vipuser=1&vip_time=".$trade_lasttime;
            }else{
            	
               $url="http://cdn.zzgdapp.com/trade/web/html/zdrate#vipuser=1&1&vip_time=".$trade_lasttime;
            }*/
            if(empty($trade_lasttime)||time()-strtotime($trade_lasttime)>0){
            	$url="http://cdn.zzgdapp.com/trade/web/htmlpro/index#vipuser=1&vip_time=".$trade_lasttime;
            }else{
            	if($state=='tradepczdrate'){
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/zdrate#vipuser=1&vip_time=".$trade_lasttime;
            	}else if($state=='tradepcdefen'){
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/interceptor#vipuser=1&vip_time=".$trade_lasttime;
            	}else if($state=='tradepcsms'){
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/sms";
            	}else if($state=='ActBdefen'){
            		//$url="http://tradetest.zzgdapp.com/trade/index#actType=defen";
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/index#actType=defen";
            	}else if($state=='ActBzdrate'){
            		//$url="http://tradetest.zzgdapp.com/trade/index#actType=zdrate";
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/index#actType=zdrate";
            	}else{
            		$url="http://cdn.zzgdapp.com/trade/web/htmlpro/index";
            	}
            
            }
    		header("Location:". $url);
    		/*echo 'ok';
    		 exit;*/
    	}
    }
    /**
     * 授权取topsession
     * @param unknown_type $code
     * @param unknown_type $appcode
     * @param unknown_type $Appsign
     * @param unknown_type $backurl
     * @return mixed
     */
    function authcode($code,$appcode,$Appsign,$backurl)
    {
    	$index = 0;
    	while(true)
    	{
    		$post_url = 'https://oauth.taobao.com/token';
    		$postData = "code=".$code."&grant_type=authorization_code&client_id=".$appcode."&client_secret=".$Appsign."&redirect_uri=".$backurl;
    		$this->log('postdata:'.$postData);
    		//https 取得token
    		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_URL,$post_url);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    		$pagecontent = curl_exec($ch);
    		curl_close($ch);
    
    
    		//  print_r($pagecontent);
    
    		$this->log('授权结果:'.$pagecontent);
    		$result = json_decode($pagecontent);
    
    		if($result->access_token!='')
    		{
    			break;
    		}
    		if($index>=3)
    		{
    			$data['error'] = '可能是网络原因，授权失败，请重试！';
    			break;
    		}
    		$index++;
    	}
    	return $pagecontent;
    }

    /**
     * 自动评价
     */
    function  zdrateAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$trade_lasttime=$this->getTsession(urlencode($nick), "trade_lasttime_m");//订购关系到期时间
    	if(empty($trade_lasttime)){
    		   $trade_lasttime=$this->getTsession(urlencode($nick), "trade_lasttime_ispckey");//订购关系到期时间
				if(!empty($trade_lasttime)){
					$this->setTsession(urlencode($nick), "trade_lasttime_m", $trade_lasttime);
					$this->delTSession(urlencode($nick), "trade_lasttime_ispckey");
				}
       	}
    	$dao = new CommonDao();
    	
    	/*if(empty($trade_lasttime)){
    		$sql = "select * from zzbtrade.userextd where nick='$nick'";
    		$user = $dao->getRowsBySQl($sql,'','','');
    		$trade_lasttime=$id = $user[0]['subdatetime'];	
    		$this->setOneKey(urlencode($nick), "trade_lasttime_m", $trade_lasttime);
    	}*/
    	$this->log("订购（授权）到期时间sssss：".$trade_lasttime);
    	if(empty($trade_lasttime) || time()-strtotime($trade_lasttime)>0){
    		$isoff='off';
    		$rate = $dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    		if(count($rate)>0){
    			$usersel=array('autorate'=>$isoff,'flag'=>'3');
	    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
	    		
    		}else{
    			$usersel=array('sellernick'=>$nick,'autorate'=>$isoff,'flag'=>'3');
    			$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    			$this->setOneKey(urlencode($nick), 'autorate', $isoff);
    		}
    	}else{
    		$isoff='on';
    	}
    	
    	//$top_session =$this->getTsession(urlencode($nick), 'trade_access_token_ispckey');//取 top_session
    	$top_session =$this->getTsession(urlencode($nick), 'trade_access_token_m');//取 top_session
    	$refresh_token =$this->getTsession(urlencode($nick), 'trade_refresh_token_m');//取刷新key
    	if(empty($top_session)||empty($refresh_token)){
    		$isoff='off';
    	}else{
    		$this->log("top_session：".$top_session);
    		$this->log("refresh_token：".$refresh_token);
    	}
    	$this->log("订购（授权）到期时间：".$isoff);
    	echo $isoff;
    }
    function showzdrateAction(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$this->log("用户昵称：".$nick);
    	$dao = new CommonDao();
    	$autorate=$this->getTsession(urlencode($nick), 'autorate');//自动评价开关
    	$this->log("用户昵称33：".$autorate);
    	if(empty($autorate)){
    		$pjsz = $dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	
    		if(count($pjsz)>0){
    			$autorate=$pjsz['autorate'];
    			$this->setOneKey(urlencode($nick), 'autorate', $autorate);
    	
    		}else{
    			$usersel=array('sellernick'=>$nick,'autorate'=>'off');
    			$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    			$this->setOneKey(urlencode($nick), 'autorate', 'off');
    			$autorate = 'off';
    		}
    	}
    	$zdsz = $dao->getRowsByCondition('zzbtrade.autorates','',array("sellernick"=>$nick),"modifydate desc","","");
    	if(empty($zdsz)){
    		$zdsz=0;
    		if($autorate =='on'){
    			$usersel=array('autorate'=>"off");
    			$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    			 
    		}
    		$autorate = 'off';
    		$this->setOneKey(urlencode($nick), 'autorate', 'off');
    	}
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$data['alreadyrate']=$pjsz['alreadyrate'];
    		$data['flag']=$pjsz['flag'];;//身份识别
    		$data['blackrate']=$pjsz['blackrate'];//不评价黑名单用户
    		$data['zdblackrate']=$pjsz['zdblackrate'];;//自动添加黑名单用户
    		$data['robday']=$pjsz['robday'];
    		$data['robhouser']=$pjsz['robhouser'];
    		$data['timingday']=$pjsz['timingday'];
    		$data['timinghouser']=$pjsz['timinghouser'];
    		$data['emailrate']=$pjsz['emailrate'];
    		$data['selleremail']=$pjsz['selleremail'];
    	}else{
    		$data['alreadyrate']=0;
    		$data['flag']=3;
    		$data['blackrate']=0;//不评价黑名单用户
    		$data['zdblackrate']=0;//自动添加黑名单用户
    		$data['robday']=14;
    		$data['robhouser']=23;
    		$data['timingday']=14;
    		$data['timinghouser']=23;
    		$data['emailrate']=0;
    		$data['selleremail']=0;
    	}


    	
    	/*
    	$all_cout = $dao->getRowByPkOne("select count(id) as total from zzbtrade.rate_record where sellernick='".$nick."'", '');
    	//$this->log('total1:'.$all_cout['total']);
    	$assessTotal = $all_cout['total'];//累计自动评价数

    	$all_cout = $dao->getRowByPkOne("select count(id) as total from zzbtrade.autorates where sellernick='".$nick."'", '');
    	//$this->log('total2:'.$all_cout['total']);
    	$contentTotal=$all_cout['total'];//评价内容总数
    	if($contentTotal=="" || empty($contentTotal)){
    		if($autorate =='on'){
    			$usersel=array('autorate'=>"off");
    			$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	
    		}
    		$autorate = 'off';
    		$this->setOneKey(urlencode($nick), 'autorate', 'off');
    	}
    	$data['assessTotal']=$assessTotal;//累计自动评价数量
    	$data['contentTotal']=$contentTotal;//评价内容总数
    	*/
    	/*$pjsz = $dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	$data['flag']=$pjsz['flag'];
    	for($i=0;$i<count($zdsz);$i++)
    	{
    		$zdsz[$i]['id'] = encrypt($zdsz[$i]['id'],"wangshuxue");
    	}*/
    	$data['myoff'] = $autorate;//开关
    	$data['ratetexts']=$zdsz;//评价内容
    	echo json_encode($data);
    }
    
    /**
     * 评价开关设置
     */
    function pjszAction(){
    	Iywaf::waf($_POST);
    	$sel=$_POST['sel'];
    	$nick= $_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
		date_default_timezone_set('PRC');
		$starttime = date('Y-m-d H:i:s',time());
    	if(count($pjsz)>0){
    		if($sel=='on'){
    			$usersel=array('autorate'=>$sel,'flag'=>'1','opentime'=>$starttime);
    		}else{
    			$usersel=array('autorate'=>$sel,'flag'=>'3','closetime'=>$starttime);
    		}
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    		$this->setOneKey(urlencode($nick), 'autorate', $sel);
    	}else{
    		if($sel=='on'){
    			$usersel=array('sellernick'=>$nick,'autorate'=>$sel,'flag'=>'1','opentime'=>$starttime);
    		}else{
    			$usersel=array('sellernick'=>$nick,'autorate'=>$sel,'flag'=>'3','closetime'=>$starttime);
    		}
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    		$this->setOneKey(urlencode($nick), 'autorate', $sel);
    	}
    	/*$allnum['sz_jg'] =$sz_jg;
    	 echo json_encode($allnum);*/
    }
    /**
     * 仅评价买家已评交易
     */
    function check_pjAction(){
    	Iywaf::waf($_POST);
    	$alreadyrate=$_POST['check']; //仅评价买家已评交易
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('alreadyrate'=>$alreadyrate);
        $pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'alreadyrate'=>$alreadyrate);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    	/* $allnum['sz_jg'] =$sz_jg;
    	 echo json_encode($allnum); */
    }
    /**
     * 定时抢评
     */
    function svaerate1Action(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$day=$_POST['day']; //仅评价买家已评交易
    	$houser=$_POST['houser'];
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('robday'=>$day,'robhouser'=>$houser);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'robday'=>$day,'robhouser'=>$houser);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    }
   /**
    * 定时评价
    */
    function svaerate2Action(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$day=$_POST['day']; //仅评价买家已评交易
    	$houser=$_POST['houser'];
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('timingday'=>$day,'timinghouser'=>$houser);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'timingday'=>$day,'timinghouser'=>$houser);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    }
    /**
     * 不评价黑名单用户
     */
    function check_hmdAction(){
    	Iywaf::waf($_POST);
    	$alreadyrate=$_POST['check'];
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('blackrate'=>$alreadyrate);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'blackrate'=>$alreadyrate);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    }
    /**
     * 邮件预警
     */
    function check_emailAction(){
    	Iywaf::waf($_POST);
    	$emailrate=$_POST['check'];
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('emailrate'=>$emailrate);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'blackrate'=>$emailrate);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	} 
    }
    /**
     * 设置预警邮箱
     */
    function saveemailAction(){
    	Iywaf::waf($_POST);
    	$selleremail=$_POST['email'];
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('selleremail'=>$selleremail);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'blackrate'=>$selleremail);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    }
    /**
     * 自动添加黑名单
     */
    function check_zdhmdAction(){
    	Iywaf::waf($_POST);
    	$alreadyrate=$_POST['check'];
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$usersel=array('zdblackrate'=>$alreadyrate);
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array('sellernick'=>$nick,'zdblackrate'=>$alreadyrate);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    }
    /**
     * 添加黑名单
     */
    function addblacknameAction(){
    	Iywaf::waf($_POST);
    	$sellernick=$_POST['sellernick'];
    	if(empty($sellernick)){
    		return;
    	}
    	$blacknick=$_POST['blacknick'];
    	$blackreason=$_POST['blackreason'];
    	$remark=$_POST['remark'];
    	$dao = new CommonDao();
    	$zdsz = $dao->getRowsByCondition('zzbtrade.user_black','',array("sellernick"=>$sellernick,"blacknick"=>$blacknick),"","","");
    	if(count($zdsz)>0){
    		echo 0;
    	}else{
    		date_default_timezone_set ( "PRC" );
    		if(!empty($remark)){
    			$userblack=array(
    					"sellernick"=>$sellernick,
    					"blacknick"=>$blacknick,
    					"blackreason"=>$blackreason,
    					"blacktime"=>date ( 'Y-m-d H:i:s' ),
    					"remark"=>$remark
    					 
    			);
    		}else{
    			$userblack=array(
    					"sellernick"=>$sellernick,
    					"blacknick"=>$blacknick,
    					"blackreason"=>$blackreason,
    					"blacktime"=>date ( 'Y-m-d H:i:s' )
    		
    			);
    		}
    		
    		$dao->saveRow('zzbtrade.user_black' , $userblack,'');
    		echo 1;
    	}
    }
    /**
     * 确认更新评价
     */
    function upAction(){
    	Iywaf::waf($_POST);
    	$yooz=$_POST['yooz'];
    	if(empty($yooz)){
    		return;
    	}
    	$content=$_POST['content'];
    	date_default_timezone_set ( "PRC" );
    	$rec=array( "modifydate"=>date ( 'Y-m-d H:i:s' ),"content"=>$content);
    	$dao = new CommonDao();
    	$dao->updateRowByPk('zzbtrade.autorates',$rec,'id',$yooz,'');
    }
    /**
     * 添加评价内容
     */
    function addAction(){
    	Iywaf::waf($_POST);
    	$nick= $_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$dao = new CommonDao();
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$zdsz = $dao->getRowsByCondition('zzbtrade.autorates','',array("sellernick"=>$nick),"","","");
    	if(count($zdsz)<10){
    		date_default_timezone_set ( "PRC" );
    		$usersel=array(
    				"sellernick"=>$nick,
    				"content"=>$_POST['content'],
    				"modifydate"=>date ( 'Y-m-d H:i:s' )
    		);
    		$dao->saveRow('zzbtrade.autorates' , $usersel,'');
    	}
    	/*$this->zdpj_nrsz($session);*/
    }
	function saveActBzdrateAction(){
		Iywaf::waf($_POST);
    	$nick= $_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
		if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
		global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		
		$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
    	if(count($pjsz)>0){
    		$usersel=array(
    					"alreadyrate"=>$_POST['alreadyrate'],
    					"autorate"=>'on',
    					"flag"=>'1',
    					"blackrate"=>$_POST['blackrate'],
    					"zdblackrate"=>$_POST['zdblackrate'],
    					"robday"=>'14',
    					"robhouser"=>$_POST['robhouser'],
    					"timingday"=>$_POST['timingday'],
    					"timinghouser"=>$_POST['timinghouser'],
    					"emailrate"=>$_POST['emailrate'],
    					'opentime'=>date ( 'Y-m-d H:i:s' )
    			);
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    	}else{
    		$usersel=array(
    					"nick"=>$nick,
    					"alreadyrate"=>$_POST['alreadyrate'],
    					"autorate"=>'on',
    					"flag"=>'1',
    					"blackrate"=>$_POST['blackrate'],
    					"zdblackrate"=>$_POST['zdblackrate'],
    					"robday"=>'14',
    					"robhouser"=>$_POST['robhouser'],
    					"timingday"=>$_POST['timingday'],
    					"timinghouser"=>$_POST['timinghouser'],
    					"emailrate"=>$_POST['emailrate'],
    					'opentime'=>date ( 'Y-m-d H:i:s' )
    			);
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    	}
    	$this->setOneKey(urlencode($nick), 'autorate', 'on');
		$usersel=array(
    				"sellernick"=>$nick,
    				"content"=>"谢谢亲的支持，欢迎下次惠顾！",
    				"modifydate"=>date ( 'Y-m-d H:i:s' )
    	);
    	$dao->saveRow('zzbtrade.autorates' , $usersel,'');
		
		echo json_encode($userblack);
	}
    /**
     * 确认删除评价
     */
    function delAction(){
    	Iywaf::waf($_POST);
    	$yooz=$_POST['yooz'];
    	if(empty($yooz)){
    		return;
    	}
    	$dao = new CommonDao();
    	$dao->deleteBySql("delete from zzbtrade.autorates where id=".$yooz);
    }
    /**
     * 评价日志
     */
	function zdratelogAction(){
		Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
		$currentpage = $_POST['page'];//当前页数
		if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
			$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
		}
		$dao = new CommonDao();
		$all_cout = $dao->getRowByPkOne("select count(id) as total from zzbtrade.rate_record where sellernick='".$nick."'", '');
		//$this->log('total1:'.$all_cout['total']);
		$assessTotal = $all_cout['total'];//累计自动评价数
		$page_num=20;//每页显示的条数
		/*
		date_default_timezone_set ( "PRC" );
		$end_time=date ( 'Y-m-d H:i:s' ,time()+600*60);
		$start_time=date ( 'Y-m-d H:i:s', strtotime ( "-29day" ) );//近30天推荐记录
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.rate_record where sellernick='".$nick."' and opttime<='".$end_time."' and opttime>='".$start_time."' order by opttime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		*/
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.rate_record where sellernick='".$nick."'  order by opttime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		$data['assessTotal']=$assessTotal;//累计自动评价数量
		echo json_encode($data);
	}
	/**
	 * 黑名单
	 */
	function ratebalcknameAction(){
		Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
		$currentpage = $_POST['page'];//当前页数
		if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
			$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
		}
		$dao = new CommonDao();
		$all_cout = $dao->getRowByPkOne("select count(id) as total from zzbtrade.user_black where sellernick='".$nick."'", '');
		//$this->log('total1:'.$all_cout['total']);
		$assessTotal = $all_cout['total'];//累计自动评价数
		$page_num=20;//每页显示的条数
		/*
		 date_default_timezone_set ( "PRC" );
		$end_time=date ( 'Y-m-d H:i:s' ,time()+600*60);
		$start_time=date ( 'Y-m-d H:i:s', strtotime ( "-29day" ) );//近30天推荐记录
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.rate_record where sellernick='".$nick."' and opttime<='".$end_time."' and opttime>='".$start_time."' order by opttime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		*/
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.user_black where sellernick='".$nick."'  order by blacktime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		$data['assessTotal']=$assessTotal;//累计自动评价数量
		echo json_encode($data);
	}
	/**
	 * 黑名单拦截日志
	 */
	function blacklogsAction(){
		Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
		$currentpage = $_POST['page'];//当前页数
		if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
			$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
		}
		$dao = new CommonDao();
		$all_cout = $dao->getRowByPkOne("select count(id) as total from zzbtrade.blacklog where sellernick='".$nick."'", '');
		$assessTotal = $all_cout['total'];//累计自动评价数
		$page_num=20;//每页显示的条数
		$zdpj=$dao->getRowsBySQlCase("select * from zzbtrade.blacklog where sellernick='".$nick."'  order by mytime desc limit ".($currentpage-1)*$page_num.",".$page_num."");
		$data['zdpj']=$zdpj;
		$data['assessTotal']=$assessTotal;//累计自动评价数量
		echo json_encode($data);
	}
	/**
	 * 编辑黑名单备注
	 */
	function upremarkAction(){
		Iywaf::waf($_POST);
		$yooz=$_POST['yooz'];
		if(empty($yooz)){
			return;
		}
		$content=$_POST['content'];
		date_default_timezone_set ( "PRC" );
		$this->log('total1:'.$id);
		$this->log('total2:'.$content);
		$rec=array( "blacktime"=>date ( 'Y-m-d H:i:s' ),"remark"=>$content);
		$dao = new CommonDao();
		$jigeuo=$dao->updateRowByPk('zzbtrade.user_black',$rec,'id',$yooz,'');
		$this->log('total3:'.$jigeuo);
	}
	/**
	 * 删除黑名单
	 */
	function delblacknameAction(){
		Iywaf::waf($_POST);
		$yooz=$_POST['yooz'];
		if(empty($yooz)){
			return;
		}
		$dao = new CommonDao();
		$dao->deleteBySql("delete from zzbtrade.user_black where id=".$yooz);
	}
	/**
	 * 一键导入黑名单
	 */
	function blackratesAction(){
		Iywaf::waf($_POST);
		$sellernick=$_POST['nick'];
		if(empty($sellernick)){
			return;
		}
		$neutral=$_POST['neutral'];//中评买家
		$bad=$_POST['bad'];//差评买家
		$dao = new CommonDao();
		if(!empty($neutral)){
			foreach($neutral as $key => $val){
				//$this->log($val);
				$zdsz = $dao->getRowsByCondition('zzbtrade.user_black','',array("sellernick"=>$sellernick,"blacknick"=>$val),"","","");
				if(count($zdsz)>0){
				}else{
					date_default_timezone_set ( "PRC" );
					$userblack=array(
								"sellernick"=>$sellernick,
								"blacknick"=>$val,
								"blackreason"=>'中评买家',
								"blacktime"=>date ( 'Y-m-d H:i:s' ),
								"remark"=>'卖家手动一键导入生成'
				
					);
					$dao->saveRow('zzbtrade.user_black' , $userblack,'');
				}
			}
		}
		if(!empty($bad)){
			foreach($bad as $key => $val){
				$zdsz = $dao->getRowsByCondition('zzbtrade.user_black','',array("sellernick"=>$sellernick,"blacknick"=>$val),"","","");
				if(count($zdsz)>0){
				}else{
					date_default_timezone_set ( "PRC" );
					$userblack=array(
								"sellernick"=>$sellernick,
								"blacknick"=>$val,
								"blackreason"=>'差评买家',
								"blacktime"=>date ( 'Y-m-d H:i:s' ),
								"remark"=>'卖家手动一键导入生成'
				
					);
					$dao->saveRow('zzbtrade.user_black' , $userblack,'');
				}
			}
		}
	}
	/**
	 * 旺旺客服
	 */
	function wwkfAction()
	{
	$rsp =   HttpClient::quickGet("http://oper.tbmj.net/op/show?name=zzbtrade");
	echo $rsp;
	}

    /**
     * 提交意见
     */
    function saveMemoAction()
    {
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $sug=$_POST['textarea'];
        $info = $_SERVER["HTTP_USER_AGENT"];//得到客户端信息
        //$this->log('data:'.$info,$nick,$sug);
        $dao = new CommonDao();
        $usersuggest = array(
            'nick'=>$nick,
            'content'=>$sug,
            'source'=>0,
            'createdt'=>date( 'Y-m-d H:i:s' ),
            'uagent'=>$info,
        	'sources'=>2
        );
        $id=$dao->saveRow('zzbtrade.usersuggest',$usersuggest,'');
        echo $id;
    }
    /**
     * 获取常用评价
     */
    function getPingAction()
    {
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
        $dao = new CommonDao();
        $sql = "select * from zzbtrade.fast_rate where nick='$nick'";
        $rate = $dao->getRowsBySQl($sql,'','','');
        $id='';
        if(count($rate)>0){
        	$id = $rate[0]['id'];
        }else{
        	$id='';
        }
        //if($rate==null||$rate=='null') $id == '';else 
        if($id == ''){
            $content='谢谢，很好的买家！\n谢谢，欢迎下次惠顾小店！\n谢谢亲的支持！欢迎下次惠顾！\n期待您的下次光临，我们会做得更好！\n谢谢您的光临，新款随时上请继续关注小店！';
        }else{
            $content=$rate[0]['content'];
        }
        echo $content;
    }
    /**
     * 取得快捷短语并设置默认快捷短语
     */
    function getFastAction()
    {
    	Iywaf::waf($_POST);
        $types=$_POST['types'];
        $user_nick=$_POST['nick'];
        if(empty($user_nick)){
        	return;
        }
        $dao = new CommonDao();
        if($types=="fast_beiw"){
            $sql1 = "select content from zzbtrade.fast_beiw where nick='$user_nick'";
            $beiw = $dao->getRowsBySQl($sql1,'','','');
            if(count($beiw)>0){
            	$id1 = $beiw[0]['content'];
            }else{
            	$id1='';
            }
            if($id1 == ''){
                $content='已安排发货\n已由客服办理\n周末不收货\n送赠品\n发EMS\n缺货\n回电脑办理\n老客户';
                $fastcontent1 = array(
                    'nick'=>$user_nick,
                    'content'=>$content,
                );
                $dao->saveRow('zzbtrade.fast_beiw' ,$fastcontent1,'');
            }else{
                $content=$beiw[0]['content'];
            }
        }elseif($types=="fast_rate"){
            $sql2 = "select content from zzbtrade.fast_rate where nick='$user_nick'";
            $rate = $dao->getRowsBySQl($sql2,'','','');
            if(count($rate)>0){
            	$id2 = $rate[0]['content'];
            }else{
            	$id2='';
            }
            if($id2 == ''){
                $content='谢谢，很好的买家！\n谢谢，欢迎下次惠顾小店！\n谢谢亲的支持！欢迎下次惠顾！\n期待您的下次光临，我们会做得更好！\n谢谢您的光临，新款随时上请继续关注小店！';
                $fastcontent2 = array(
                    'nick'=>$user_nick,
                    'content'=>$content,
                );
                $dao->saveRow('zzbtrade.fast_rate' ,$fastcontent2,'');
            }else{
                $content=$rate[0]['content'];
            }
        }else{
            $sql3 = "select content from zzbtrade.fast_memo where nick='$user_nick'";
            $memo = $dao->getRowsBySQl($sql3,'','','');
            if(count($memo)>0){
            	$id3 = $memo[0]['content'];
            }else{
            	$id3='';
            }
            if($id3 == ''){
                $content='非质量问题不属于退货范围\n请原包装寄回，避免影响二次销售\n请上传有质量问题产品的照片\n退换地址：XXX省XXX市XXX区 电话: XXXX 收件人：XXX  如需换货请填写要换的货号、颜色、尺码';
                $fastcontent3 = array(
                    'nick'=>$user_nick,
                    'content'=>$content,
                );
                $dao->saveRow('zzbtrade.fast_memo' ,$fastcontent3,'');
            }else{
                $content=$memo[0]['content'];
            }

        }
        echo $content;
    }
    /**
     * 设置快捷短语
     */
    function setFastAction()
    {
       /*  $types=$_POST['types'];
        $nick=$_POST['nick'];
        $text=$_POST['text']; */
    	Iywaf::waf($_POST);
    	$types=$_POST['types'];
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$text=$_POST['text'];
        $param = str_replace(';', '\n', $text);
       /* 	$this->log("ddddddddddddddddddd--------++++++++++++++".$param); */
        $dao = new CommonDao();
        if($types=="fast_beiw"){
            if($param==''||empty($param)){
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>'已安排发货\n已由客服办理\n周末不收货\n送赠品\n发EMS\n缺货\n回电脑办理\n老客户',
                );
            }else{
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>$param,
                );
            }
            $sql = "select * from zzbtrade.fast_beiw where nick='$nick'";
            $beiw = $dao->getRowsBySQl($sql,'','','');
            if(count($beiw)>0){
            	$id = $beiw[0]['id'];
            }else{
            	$id='';
            }
            if($id == '' ){
                $dao->saveRow('zzbtrade.fast_beiw',$fastcontent,'');
            }else{
                $dao->updateRowByPk('zzbtrade.fast_beiw',$fastcontent,'id',$id,'');
            }
            /*$sql="update zzbtrade.fast_beiw set content='".$param."' where nick='".$nick."'";*/
        }elseif ($types=="fast_rate"){
            if($param==''||empty($param)){
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>'谢谢，很好的买家！\n谢谢，欢迎下次惠顾小店！\n谢谢亲的支持！欢迎下次惠顾！\n期待您的下次光临，我们会做得更好！\n谢谢您的光临，新款随时上请继续关注小店！',
                );
            }else{
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>$param,
                );
            }
            $sql = "select * from zzbtrade.fast_rate where nick='$nick'";
            $rate = $dao->getRowsBySQl($sql,'','','');
            if(count($rate)>0){
            	$id = $rate[0]['id'];
            }else{
            	$id='';
            }
            if($id == '' ){
                $dao->saveRow('zzbtrade.fast_rate',$fastcontent,'');
            }else{
                $dao->updateRowByPk('zzbtrade.fast_rate',$fastcontent,'id',$id,'');
            }
        }else{
            if($param==''||empty($param)){
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>'非质量问题不属于退货范围\n请原包装寄回，避免影响二次销售\n请上传有质量问题产品的照片\n退换地址：XXX省XXX市XXX区 电话: XXXX 收件人：XXX  如需换货请填写要换的货号、颜色、尺码',
                );
            }else{
                $fastcontent = array(
                    'nick'=>$nick,
                    'content'=>$param,
                );
            }
            $sql = "select * from zzbtrade.fast_memo where nick='$nick'";
            $memo = $dao->getRowsBySQl($sql,'','','');
            if(count($memo)>0){
            	$id = $memo[0]['id'];
            }else{
            	$id='';
            }
            if($id == '' ){
                $dao->saveRow('zzbtrade.fast_memo',$fastcontent,'');
            }else{
                $dao->updateRowByPk('zzbtrade.fast_memo',$fastcontent,'id',$id,'');
            }
        }

        /*$dao->updateBySql($sql);*/
        echo 1;
    }
    /**
     * 取得地区
     *
     */
    function getAreaAction()
    {
        $dao = new CommonDao();
        //获取所有省,直辖市
        $sql = "select address,addcode from area where pid='1'";
        $por =  $dao->getRowsBySQl($sql,'','','');
        //取得城市
        $sql1 = "select pid,address,addcode,zip from area where pid<>'1' and types='3'";
        $city =  $dao->getRowsBySQl($sql1,'','','');

        $citys = array();
        if(!empty($por)){
            foreach ($por as $po)
            {
                $temp = array();
                foreach ($city as $ct)
                {
                    if($po['addcode']==$ct['pid'])
                    {
                        array_push($temp,$ct);
                    }
                }
                $citys[$po['addcode']] =  $temp;
            }
        }

        //取得县
        $sql2 = "select pid,address,addcode,zip from area where  pid<>'1' and types='4'";
        $district =  $dao->getRowsBySQl($sql2,'','','');

        //print_r($district);
        $districts = array();
        if(!empty($city)){
            foreach ($city as $ct)
            {
                $temp = array();
                foreach ($district as $dis)
                    if($ct['addcode']==$dis['pid'])
                    {
                        {
                            array_push($temp,$dis);
                        }
                    }
                $districts[$ct['addcode']]=$temp;
            }
        }

        $area['province'] = $por;
        $area['citys'] = $citys;
        $area['districts'] = $districts;
        //echo json_encode($area);
		//$this->setOneKey("redisArea", "luaArea", json_encode($area));
		//$this->setOneKey("redisArea", "luaArea", urlencode(json_encode($districts)));
        echo json_encode($area);
    }

    /**
     * 取得快递公司
     *
     */
    function getSendAction()
    {
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $dao = new CommonDao();
        //取得在线下单快递公司
        $sql_on = "select * from zzbtrade.usedcompanies where (nick='$nick')";

        $company_on= $dao->getRowsBySQl($sql_on,'','','');

        echo json_encode($company_on);
    }
    /**
     * 发货
     */
    function tosendAction()
    {
    	Iywaf::waf($_POST);
        $user_nick= $_POST['nick'];
        if(empty($user_nick)){
        	return;
        }
        $mode=$_POST['mode'];
        $offtrade = $_POST['offtrade'];
        $last_way =$mode.','.$offtrade;
        $dao = new CommonDao();
        $usedcompany = array(       'nick'=>$user_nick,
            'mode'=>'online',
            'last_way'=>$last_way
        );
        $sql = "select * from zzbtrade.usedcompanies where (nick='$user_nick' and mode='online')";
        $user = $dao->getRowsBySQl($sql,'','','');
        if(count($user)>0){
        	$id = $user[0]['id'];
        }else{
        	$id='';
        }
        if( $id == '' ){
            $dao->saveRow('zzbtrade.usedcompanies' ,$usedcompany,'');
            $jieguo='1';
        }else{
            $dao->updateRowByPk('zzbtrade.usedcompanies',$usedcompany,'id',$id,'');
            $jieguo='2';
        }
        echo json_encode($last_way);
    }
    /**
     * 设置默认物流公司
     */
    function saveSendAction()
    {
    	Iywaf::waf($_POST);
        $user_nick=$_POST['nick'];
        if(empty($user_nick)){
        	return;
        }
        $mode=$_POST['mode'];
        $checkboxs=$_POST['checkbox'];
		$this->log($mode);
		$this->log($checkboxs);
        $lwid='';
        $code='';
        $name='';
        $i=1;
        $checkboxs2=explode(";",$checkboxs);
        if(!empty($checkboxs2)){
            foreach($checkboxs2 as $value){
                $checkbox=explode(",",$value);
                if($i==5||!isset($checkboxs2[$i])){
                    $lwid =$lwid.$checkbox[0];
                    $code =$code.$checkbox[1];
                    $name =$name.$checkbox[2];
                    break;}else{++$i;}
                $lwid =$lwid.$checkbox[0].',';
                $code =$code.$checkbox[1].',';
                $name =$name.$checkbox[2].',';
            }
        }
        $dao = new CommonDao();
        $usedcompany = array(
            'nick'=>$user_nick,
            'lwid'=>$lwid,
            'code'=>$code,
            'name'=>$name,
            'mode'=>$mode
        );
        $this->setOneKey(urlencode($user_nick), $mode, json_encode($usedcompany));
        /*$sql = "select * from zzbtrade.usedcompanies where (nick='$user_nick' and mode='$mode')";
        //$user = $dao->getRowByPk('usedcompanies','','nick',$user_nick,'');
        $user = $dao->getRowsBySQl($sql,'','','');
        $id = $user[0]['id'];
        //print_r($user);
        if( $id == '' ){
            $dao->saveRow('zzbtrade.usedcompanies' ,$usedcompany,'');
        }else{
            $dao->updateRowByPk('zzbtrade.usedcompanies',$usedcompany,'id',$id,'');
        }*/
        echo json_encode($usedcompany);
    }
    /**
     * 取得公共模版
     *
     */
    function getMoAction()
    {
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $state=$_POST['state'];
        $publics=$_POST['publics'];
        $mouldname=$_POST['mouldname'];
        $companie=$_POST['companie'];
        $dao = new CommonDao();
        if($state==''||empty($state)){
	            $sql = "select * from zzbtrade.companiemould where mouldname='$mouldname'";
	        }else{
	        	if($publics==1){
	        		$sql = "select * from zzbtrade.companiemould where mouldname='$mouldname'";
	        	}else{
		            $sql = "select * from zzbtrade.usercompanmould where nick='$nick' and mouldname='$mouldname'";
	        	}
	        }
        $com= $dao->getRowsBySQl($sql,'','','');
        echo json_encode($com);
    }
    /**
     * 根据快递公司查模版
     *
     */
    function selectMoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$tablename=$_POST['tablename'];
    	$companie=$_POST['companie'];
    	$pageno=$_POST['pageno'];
    	$page_num=20;
    	$dao = new CommonDao();
    	if($tablename=='companiemould'){
    		$sqq="select mouldname from zzbtrade.usercompanmould where nick='$nick' and sign=1";
    		$mo = $dao->getRowsBySQl($sqq,'','','');
    		$data['mouldname']=$mo[0]['mouldname'];
    		$sq="select count(id) as total from zzbtrade.companiemould where companie LIKE '%".$companie."%'";
    		$all_cout = $dao->getRowByPkOne($sq,'');
    		$sql = "select * from zzbtrade.companiemould where companie LIKE '%".$companie."%' limit ".($pageno-1)*$page_num.",".$page_num;
    	}else{
    		$sq="select count(id) as total from zzbtrade.usercompanmould where nick='$nick' and companie LIKE '%".$companie."%'";
    		$all_cout = $dao->getRowByPkOne($sq,'');
    		$sql = "select * from zzbtrade.usercompanmould where nick='$nick' and companie LIKE '%".$companie."%' limit ".($pageno-1)*$page_num.",".$page_num;
    	}
    	$com= $dao->getRowsBySQl($sql,'','','');
    	$data['total']=$all_cout['total'];
    	$data['com']=$com;
    	echo json_encode($data);
    }
    /**
     * 删除个人模版
     *
     */
    function delMoAction()
    {
    	//Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$mouldname=$_POST['mouldname'];
    	$dao = new CommonDao();
    	$sql="delete from zzbtrade.usercompanmould where mouldname='".$mouldname."' and nick='".$nick."'";
    	$dao->deleteBySql($sql);
    	echo 1;
    }
    /**
     *默认个人模版defaultpuMo
     *
     */
    function defaultMoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$mouldname=$_POST['mouldname'];
    	$dao = new CommonDao();
    	$sqlup="update zzbtrade.usercompanmould set sign=0 where nick='".$nick."'";
    	$sqlup2="update zzbtrade.usercompanmould set sign=1 where nick='".$nick."' and mouldname='".$mouldname."'";
    	$dao->updateBySql($sqlup);
    	$dao->updateBySql($sqlup2);
    	echo 1;
    }
    /**
     *默认公共到个人模版
     *
     */
    function defaultpuMoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$mouldname=$_POST['mouldname'];
    	$dao = new CommonDao();
    	$sqlup="update zzbtrade.usercompanmould set sign=0 where nick='".$nick."'";
    	$dao->updateBySql($sqlup);
    	$sq="select count(id) as total from zzbtrade.usercompanmould where nick='$nick' and mouldname='$mouldname'";
    	$all_cout = $dao->getRowByPkOne($sq,'');
    	if($all_cout['total']<1){
    		$sqall="select count(id) as total from zzbtrade.usercompanmould where nick='$nick'";
    		$all_cout = $dao->getRowByPkOne($sqall,'');
    		if($all_cout['total']<80){
	    		$sql="select * from zzbtrade.companiemould where mouldname='$mouldname'";
	    		$com= $dao->getRowsBySQl($sql,'','','');
	    		$offset="'".$com[0]['offset'];
		    	$content = array(
		    			'nick'=>$nick,
		    			'mouldname'=>$mouldname,
		    			'companie'=>$com[0]['companie'],
		    			'size'=>$com[0]['size'],
		    			'mould'=>$com[0]['mould'],
		    			'moprice'=>$com[0]['moprice'],
		    			'offset'=>$offset,
		    			'sign'=>1
		    	);
		    	$id=$dao->saveRow('zzbtrade.usercompanmould',$content,'');
    		}else{
    			echo 1;
    		}
    	}else{
	    	$sqlup2="update zzbtrade.usercompanmould set sign=1 where nick='".$nick."' and mouldname='".$mouldname."'";
	    	$dao->updateBySql($sqlup2);
	    		echo 2;
    	}
    	
    }
    /**
     * 取得个人所有快递单模版
     *
     */
    function getonlyMoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$dao = new CommonDao();
    	$pageno=$_POST['pageno'];
    	if($pageno==''||empty($pageno))$pageno=1;
    	$page_num=20;
    	$sq="select count(id) as total from zzbtrade.usercompanmould where nick='$nick'";
    	$all_cout = $dao->getRowByPkOne($sq,'');
    	$sql = "select companie,mouldname,size,sign,mould,moprice from zzbtrade.usercompanmould where nick='$nick' order by sign desc limit ".($pageno-1)*$page_num.",".$page_num;
    	$com= $dao->getRowsBySQl($sql,'','','');
    	$data['total']=$all_cout['total'];
    	$data['com']=$com;
    	echo json_encode($data);
    }
    
    /**
     * 取得所有快递单模版
     *
     */
    function getPrintmoAction()
    {
    	Iywaf::waf($_POST);
		$nick=$_POST['nick'];
		if(empty($nick)){
			return;
		}
    	$dao = new CommonDao();
    	$scookie = $_COOKIE["u"];
		$this->log('nick:'.$nick.'  cookies:'.$scookie);
		
    	if(strlen($nick)>0)
		{
	    	$sql="select mouldname,companie,size,offset,mould,moprice,sign from zzbtrade.usercompanmould where nick='$nick' order by sign desc";
	    	$privatemo = $dao->getRowsBySQl($sql,'','','');
	    	$sql2 = "select companie,mouldname,size,mould,moprice,offset from zzbtrade.companiemould";
	    	$publicmo= $dao->getRowsBySQl($sql2,'','','');
	    	$data['privatemo']=$privatemo;
	    	$data['publicmo']=$publicmo;
	    	echo json_encode($data);
		}else{
			echo 'no params:'.$nick.' s:'.$scookie;
		}
    }
    /**
     * 取得公共所有快递单模版
     *
     */
    function getallMoAction()
    {
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$pageno=$_POST['pageno'];
    	if($pageno==''||empty($pageno))$pageno=1;
    	$page_num=20;
    	$sqq="select mouldname from zzbtrade.usercompanmould where nick='$nick' and sign=1";
    	$mo = $dao->getRowsBySQl($sqq,'','','');
    	$sq="select count(id) as total from zzbtrade.companiemould";
    	$all_cout = $dao->getRowByPkOne($sq,'');
    	$sql = "select companie,mouldname,size,mould,moprice from zzbtrade.companiemould limit ".($pageno-1)*$page_num.",".$page_num;
    	$com= $dao->getRowsBySQl($sql,'','','');
    	$data['total']=$all_cout['total'];
    	$data['com']=$com;
    	$data['mouldname']=$mo[0]['mouldname'];
    	echo json_encode($data);
    }
    /**
     *获取个人模版所有名字
     *
     */
     function getMonameAction()
     {
     	Iywaf::waf($_POST);
     	$nick=$_POST['nick'];
     	if(empty($nick)){
     		return;
     	}
     	$dao = new CommonDao();
     	$sql="select mouldname,sign,moprice,companie from zzbtrade.usercompanmould where nick='$nick'";
    	$mo = $dao->getRowsBySQl($sql,'','','');
    	$sqls="select mouldname,moprice,companie from zzbtrade.companiemould";
    	$mos = $dao->getRowsBySQl($sqls,'','','');
    	$data['mo']=$mo;
    	$data['mos']=$mos;
     	echo json_encode($data);
     }
    /**
     * 取得个人发货递单模版
     *
     */
    
    function sendModelAction()
    {
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];//($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
    	if(empty($nick)){
    		return;
    	}
    	$user_IP = false;
    	$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
    	if(!empty($nick)||$nick!=''){
	    	$sq="select count(id) as total from zzbtrade.sendModel where nick='$nick'";
	    	$all_cout = $dao->getRowByPkOne($sq,'');
	    	if($all_cout['total']<1){
	    		$content = array(
	    				'nick'=>$nick,
	    				'size'=>"'0X0",
	    				'buyerop'=>"买家-姓名|,|买家-旺旺|,|买家-电话|,|买家-手机|,|买家-地址|,|买家-邮编|,|买家-留言|,|购买时间|,|发货时间|,|模版标题|:|发货单",
	    				'sellerop'=>"店铺名称|:||,|卖家-旺旺|:||,|卖家-电话|:||,|卖家-手机|:||,|卖家-地址|:||,|卖家-网址|:||,|给买家的留言|:|",
	    				'babyop'=>"订单编号,商品名称,商品编号,属性,单价,数量,优惠,金额,合计,发货单编号",
	    				'sizewh'=>"241X140",
	    				'ipaddr'=>$user_IP
	    		);
	    		$dao->saveRow('zzbtrade.sendModel',$content,'');
	    	}
	    		$sql = "select * from zzbtrade.sendModel where nick='$nick'";
	    		$com= $dao->getRowsBySQl($sql,'','','');
	    	echo json_encode($com);
    	}
    }
    /**
     * 取得个人发货递单模版大小和偏移
     *
     */
    
    function sendSizeAction()
    {
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$user_IP = false;
    	$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
    	if(!empty($nick)||$nick!=''){
	    	$sq="select count(id) as total from zzbtrade.sendModel where nick='$nick'";
	    	$all_cout = $dao->getRowByPkOne($sq,'');
	    	if($all_cout['total']<1){
	    		$content = array(
	    				'nick'=>$nick,
	    				'size'=>"'0X0",
	    				'buyerop'=>"买家-姓名|,|买家-旺旺|,|买家-电话|,|买家-手机|,|买家-地址|,|买家-邮编|,|买家-留言|,|购买时间|,|发货时间|,|模版标题|:|发货单",
	    				'sellerop'=>"店铺名称|:||,|卖家-旺旺|:||,|卖家-电话|:||,|卖家-手机|:||,|卖家-地址|:||,|卖家-网址|:||,|给买家的留言|:|",
	    				'babyop'=>"订单编号,商品名称,商品编号,属性,单价,数量,优惠,金额,合计,发货单编号",
	    				'sizewh'=>"241X140",
	    				'ipaddr'=>$user_IP
	    		);
	    		$dao->saveRow('zzbtrade.sendModel',$content,'');
	    	}
	    	$sql = "select sizewh,size from zzbtrade.sendModel where nick='$nick'";
	    	$com= $dao->getRowsBySQl($sql,'','','');
	    	echo json_encode($com);
    	}
    }
    /**
     * 主页面取发货单模版
     *
     */
    function sendMtextAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
		$scookie = $_COOKIE["u"];
    	if((!empty($nick)||$nick!='')){
    		$user_IP = false;
    		$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
	    	$dao = new CommonDao();
	    	$sq="select count(id) as total from zzbtrade.sendModel where nick='$nick'";
	    	$all_cout = $dao->getRowByPkOne($sq,'');
	    	if($all_cout['total']<1){
	    		$content = array(
	    				'nick'=>$nick,
	    				'size'=>"210X297",
	    				'buyerop'=>"买家-姓名|,|买家-旺旺|,|买家-电话|,|买家-手机|,|买家-地址|,|买家-邮编|,|买家-留言|,|购买时间|,|发货时间|,|模版标题|:|发货单",
	    				'sellerop'=>"店铺名称|:||,|卖家-旺旺|:||,|卖家-电话|:||,|卖家-手机|:||,|卖家-地址|:||,|卖家-网址|:||,|给买家的留言|:|",
	    				'babyop'=>"订单编号,商品名称,商品编号,属性,单价,数量,优惠,金额,合计,发货单编号",
	    				'sizewh'=>"241X140",
	    				'ipaddr'=>$user_IP
	    		);
	    		$dao->saveRow('zzbtrade.sendModel',$content,'');
	    	}
	    	$sql = "select * from zzbtrade.sendModel where nick='$nick'";
	    	$com= $dao->getRowsBySQl($sql,'','','');
	    	echo json_encode($com);
    	}else{
    		echo 'no params';
    	}
    }
    /**
     * 主页面取模版
     *
     */
    function maingetMoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$dao = new CommonDao();
    	$sql = "select * from zzbtrade.usercompanmould where sign=1 and nick='$nick'";
    	$com= $dao->getRowsBySQl($sql,'','','');
    	if(count($com)<1){
    		$sql = "select * from zzbtrade.companiemould where id=1";
    		$com= $dao->getRowsBySQl($sql,'','','');
    	}
    	echo json_encode($com);
    }
    /**
     * 保存个人发货递单模版
     *
     */
    function saveSendmoAction()
    {
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if(!empty($nick)||$nick!=''){
    		$user_IP = false;
    		$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
	    	$dao = new CommonDao();
	    	$size="'".$_POST['size'];
	    	$sizewh="'".$_POST['sizewh'];
	    	$buyerop=$_POST['buyerop'];
	    	$sellerop=$_POST['sellerop'];
	    	$babyop=$_POST['babyop'];
	    		$content = array(
	    				'nick'=>$nick,
	    				'size'=>$size,
	    				'buyerop'=>$buyerop,
	    				'sellerop'=>$sellerop,
	    				'babyop'=>$babyop,
	    				'sizewh'=>$sizewh,
	    				'ipaddr'=>$user_IP
	    		);
	    		$dao->updateRowByPk('zzbtrade.sendModel',$content,'nick',$nick,'');
	    	echo 1;
    	}
    }
    function upMoAction(){
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $mouldname=$_POST['mouldname'];
        $companie=$_POST['companie'];
        $size=$_POST['size'];
        $offset="'".$_POST['offset'];
        $mould=$_POST['mould'];
        $moprice=$_POST['moprice'];
        $dao = new CommonDao();
        $sq="select count(id) as total from zzbtrade.usercompanmould where nick='$nick'";
        $all_cout = $dao->getRowByPkOne($sq,'');
	        $content = array(
	            'nick'=>$nick,
	            'mouldname'=>$mouldname,
	            'companie'=>$companie,
	            'size'=>$size,
	        	'offset'=>$offset,
	            'mould'=>$mould,
	        	'moprice'=>$moprice
	        );
	        $sql = "select * from zzbtrade.usercompanmould where nick='$nick' and mouldname='$mouldname'";
	        $moup = $dao->getRowsBySQl($sql,'','','');
	        if(count($moup)>0){
	        	$id = $moup[0]['id'];
	        }else{
	        	$id='';
	        }
	        if($id == '' ){
		        if($all_cout['total']<80){
		            $id=$dao->saveRow('zzbtrade.usercompanmould',$content,'');
		            if($id>0)echo json_encode("保存成功！");else echo json_encode("保存失败！");
		        }else{
			        echo json_encode("保存失败！个人模版最多不能超过80个");
		        }
	        }else{
	            $dao->updateRowByPk('zzbtrade.usercompanmould',$content,'id',$id,'');
		        if($id>0)echo json_encode("保存成功！");else echo json_encode("保存失败！");
	        }
    }
    function scpriceAction(){
    	//$nick=$_POST['nick'];
    	$scp = $_FILES['file'];
    	$logo_name=$scp["tmp_name"];
    	if ($_FILES["file"]["error"] > 0)
    	{
    		$this->log('Error:'.$_FILES["file"]["error"]);
    		echo json_encode("fail");
    	}
    	else
    	{
    		$pinfo=pathinfo($_FILES["file"]["name"]);
    		$photo_type=$pinfo['extension'];
    		$this->log('Type:'.$photo_type);
    	//	$pic_path="/home/tmp/".$_FILES["file"]["name"];
    		//$this->log('path:'.$pic_path);
    		$pic_name=time().rand(10,100).".".$photo_type;
    		$this->log('name:'.$pic_name);
    		$pic_path="source/images/print/nickimage/".$pic_name;
    		$this->log('path:'.$pic_path);
    		if(!move_uploaded_file ($_FILES["file"]["tmp_name"], $pic_path))
    		{
    			echo json_encode("fail");
    		}else{
    			$this->log('临时存储成功:'.$pic_path);
    			$oss_sdk_service = new ALIOSS();
    			//设置是否打开curl调试模式
    			$oss_sdk_service->set_debug_mode(FALSE);
    			$this->log("建立链接，开始上传");
    			$response = $this->upload_by_file($oss_sdk_service,$pic_name,$pic_path);
    			//$this->log('status:'.$response->status);
    			//$this->log('Header:'.$response->header);
    			if(unlink($pic_path)){
    				$this->log('已删除');
    			}else{
    				$this->log('删除出错');
    			}
    			
    			if($response->status==200){
    				echo json_encode($pic_name);
    				$this->log("成功");
    			}else{
    				echo json_encode("fail");
    				$this->log("失败");
    			}
    		}
    	}
    }
    
    //格式化返回结果
    function _formatAction($response) {
    	echo '|-----------------------Start---------------------------------------------------------------------------------------------------'."\n";
    	echo '|-Status:' . $response->status . "\n";
    	echo '|-Body:' ."\n";
    	echo $response->body . "\n";
    	echo "|-Header:\n";
    	print_r ( $response->header );
    	echo '-----------------------End-----------------------------------------------------------------------------------------------------'."\n\n";
    }
    
    //通过路径上传文件
    function upload_by_file($obj,$pic_name,$pic_path){
    	$bucket = 'itradeprint';
    	$object = $pic_name;
    	$file_path = $pic_path;
    	$this->log('文件名2:'.$object);
    	$this->log('文件path2:'.$file_path);
    
    	$response = $obj->upload_file_by_file($bucket,$object,$file_path);
    	return $response;
    	//$this->_format($response);
    }
    //获取object meta
    function get_object_meta($obj){
    	$bucket = 'itradeprint';
    	$object = '138839287281.jpg';
    	$response = $obj->get_object_meta($bucket,$object);
    	$this->_format($response);
    }
    
    function MkFolder($path){
    	if(!is_readable($path)){
    		if(!is_file($path)) mkdir($path,0777);
    			}
    }
    /**
     *自定义模版添加与更新
     */
    function saveCustomAction(){
    	Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$fmessage=$_POST['fmessage'];
    	$smessage=$_POST['smessage'];
    	$dmessage=$_POST['dmessage'];
    	$bmessage=$_POST['bmessage'];
    	$remark=$_POST['remark'];
    	$nowtimes=$_POST['nowtimes'];
    	if(empty($nowtimes)||$nowtimes==''){
    		$nowtimes = date("Y-m-d H:i:s");
    	}
    	$dao = new CommonDao();
    	$sq="select count(id) as total from zzbtrade.custommessge where nick='$nick' and nowtimes='$nowtimes'";
    	$all_cout = $dao->getRowByPkOne($sq,'');
    	$content = array(
    			'nick'=>$nick,
    			'fmessage'=>$fmessage,
    			'smessage'=>$smessage,
    			'dmessage'=>$dmessage,
    			'bmessage'=>$bmessage,
    			'remark'=>$remark,
    			'state'=>1,
    			'nowtimes'=>$nowtimes,
    		);
    		if($all_cout['total']<1){
    			$id=$dao->saveRow('zzbtrade.custommessge',$content,'');
    			if($id>0)echo json_encode($nowtimes);else echo json_encode("保存失败");
    		}else{
	    		$dao->updateRowByPk('zzbtrade.custommessge',$content,'nowtimes',$nowtimes,'');
	    		echo json_encode("更新成功！");
    		}
    }
    /**
     * 查找保存过的打印信息
     *
     */
    function selCustomAction()
    {
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$state=$_POST['state'];
    	$pageno=$_POST['pageno'];
    	if($pageno==''||empty($pageno))$pageno=1;
    	$page_num=20;
    	$sq="select count(id) as total from zzbtrade.custommessge where nick='$nick' and state='$state'";
    	$all_cout = $dao->getRowByPkOne($sq,'');
    	$sql = "select * from zzbtrade.custommessge where nick='$nick' and state='$state' limit ".($pageno-1)*$page_num.",".$page_num;
    	$com= $dao->getRowsBySQl($sql,'','','');
    	$data['total']=$all_cout['total'];
    	$data['com']=$com;
    	echo json_encode($data);
    }
    /**
     * 更新打印状态
     *
     */
    function upPrinttimeAction()
    {
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$printtime=$_POST['printtime'];
    	$sendtime=$_POST['sendtime'];
    	$nowtimes=$_POST['nowtimes'];
    	if($sendtime==1){
    		$printtime = date("Y-m-d H:i:s");
    		$sql = "select sendtime from zzbtrade.custommessge where nick='$nick' and nowtimes='$nowtimes'";
    		$com= $dao->getRowsBySQl($sql,'','','');
    		if($com[0]['sendtime']!=''){
    			$sqlp="update zzbtrade.custommessge set printtime='$printtime',state=2 where nick='$nick' and nowtimes='$nowtimes'";
				$dao->updateBySql($sqlp);
    		}else{
    			$sqlp="update zzbtrade.custommessge set printtime='$printtime' where nick='$nick' and nowtimes='$nowtimes'";
				$dao->updateBySql($sqlp);
    		}
    	}else{
    		$sendtime = date("Y-m-d H:i:s");
	    	$sql = "select printtime from zzbtrade.custommessge where nick='$nick' and nowtimes='$nowtimes'";
    		$com= $dao->getRowsBySQl($sql,'','','');
    		if($com[0]['printtime']!=''){
    			$sqlp="update zzbtrade.custommessge set sendtime='$sendtime',state=2 where nick='$nick' and nowtimes='$nowtimes'";
				$dao->updateBySql($sqlp);
    		}else{
    			$sqlp="update zzbtrade.custommessge set sendtime='$sendtime' where nick='$nick' and nowtimes='$nowtimes'";
    			$dao->updateBySql($sqlp);
    			}
    	}
    }
    /*
     * 主页面tid打印状态
     */
    function printStateAction(){
    	Iywaf::waf($_POST);
    	$dao = new CommonDao();
    	$nick=$_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	$fhtid=$_POST['fhtid'];
    	$kdtid=$_POST['kdtid'];
    	$fhtids=$_POST['fhtids'];
    	$kdtids=$_POST['kdtids'];
    	$printid=$_POST['printid'];
    	$time=date('Y-m-d H:i:s',time());
    	$sql="select id from print_logs where nick='$nick'";
    	$states= $dao->getRowsBySQl($sql,'');
    	if(empty($printid))$printid=date("y",time()).date("m",time()).date("d",time()).'0001';
    	if(empty($states)){
    		$values=array(
    				"nick"=>$nick,
    				"time"=>$time,
    				"printid"=>$printid,
    				"fhtid"=>$fhtid,
    				"fhtids"=>$fhtids,
    				"kdtids"=>$kdtids,
    				"kdtid"=>$kdtid
    		);
    		$dao->saveRow('print_logs', $values, '' );
    	}else{
	    	if(!empty($fhtid)||$fhtid!=''){
	    		$updatesql ="update print_logs set fhtid='$fhtid' , time='$time' , printid='$printid' where nick='$nick'";
	    		$dao->updateBySql ( $updatesql, '' );
	    	}elseif(!empty($fhtids)||$fhtids!=''){
	    			$updatesql ="update print_logs set fhtids='$fhtids' , time='$time' , printid='$printid' where nick='$nick'";
	    			$dao->updateBySql ( $updatesql, '' );
	    	}elseif(!empty($kdtid)||$kdtid!=''){
	    				$updatesql ="update print_logs set kdtid='$kdtid' , time='$time' where nick='$nick'";
		    			$dao->updateBySql ( $updatesql, '' );
	    	}else{
		    	$updatesql ="update print_logs set kdtids='$kdtids' , time='$time' where nick='$nick'";
		    	$dao->updateBySql ( $updatesql, '' );
	    	}
    	}
    	
    }

    /**
     * 拒绝退款
     */
    function aaxxdAction(){
        if ($_FILES["file"]["error"] > 0)
        {
            $this->log('Error:'.$_FILES["file"]["error"]);
        }
        else
        {
            $this->log('Upload:'.$_FILES["file"]["name"]);
            /*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
             echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Stored in: " . $_FILES["file"]["tmp_name"];*/
            if (file_exists("/home/tmp/".$_FILES["file"]["name"]))
            {


                move_uploaded_file($_FILES["file"]["tmp_name"],"/home/tmp/".$_FILES["file"]["name"]);
                $this->log('文件已覆盖:'."/home/tmp/".$_FILES["file"]["name"]);
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],"/home/tmp/".$_FILES["file"]["name"]);
                $this->log('Stored in:'."/home/tmp/".$_FILES["file"]["name"]);
            }
        }

        $file='@/home/tmp/'.$_FILES["file"]["name"];
        $refund_id=$_POST['rerid'];//退款编号
        $refuse_message=$_POST['refusetxt'];
        $nick=$_POST['reuid'];

        $tid=$_POST['retid'];
        $oid=$_POST['reoid'];
        $this->log('-------------:'.$nick);
        $top_session=$this->getTsession($nick, 'trade_pc_session');
        $this->log('trade_pc_session:'.$top_session);
       /* $heander=$this->getTsession($uid, 'heander');
        $this->log('heander:'.$heander);
        $heander=json_decode($heander);*/
        $c = new TopClient;
        $c->gatewayUrl ="http://gw.api.taobao.com/router/rest";
        $c->format ="json";
        $c->appkey=TOP_Appcode_Trade;
        $c->secretKey=TOP_Appsign_Trade;
        $req = new RefundRefuseRequest;
        $req->setRefundId($refund_id);
        $req->setRefuseMessage($refuse_message);
        $req->setTid($tid);
        $req->setOid($oid);
        $req->setRefuseProof($file);

        $resp = $c->execute($req, $top_session);
        $this->log('send :'.json_encode($resp));
        if(!empty($resp->refund)){
            echo 'on';
        }else{
            echo json_encode($resp);
        }
        if(unlink('/home/tmp/'.$_FILES["file"]["name"])){
            $this->log('已删除');
        }else{
            $this->log('删除出错');
        }

    }




    /*********************获取用户打印设置信息*****************************/
    function getprintsetAction(){
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $dao = new CommonDao();
        $sql="select * from zzbtrade.printset where nick='$nick'";
        $setdata = $dao->getRowsBySQl($sql,'','','');
        if($setdata== null||$setdata== 'null' ){
            $content = array(
                'nick'=>$nick,
                'hpflag'=>'on',
                'autoflag'=>'on',
                'autoid'=>'1',
                'companyno'=>'online',
                'companyno'=>''
            );
            $dao->saveRow('zzbtrade.printset',$content,'');
            $setdata = $dao->getRowsBySQl($sql,'','','');
        }
        $data['setdata']=$setdata[0];
        $lsql="select * from zzbtrade.print_logs where nick='$nick'";
        $logdata = $dao->getRowsBySQl($lsql,'','','');
        if(count($logdata)>0){
        	$data['logdata']=$logdata[0];
        }else{
        	$data['logdata']=null;
        }
		echo json_encode($data);
    }
    function saveprintsetAction(){
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $hpflag=$_POST['hpflag'];
        $autoflag=$_POST['autoflag'];
        $autoid=$_POST['autoid'];
        $sendplan=$_POST['sendplan'];
        $companyno=$_POST['companyno'];
        $gtitlestu=$_POST['gtitlestu'];
        $this->log('------------------'.$hpflag.'-----------'.$autoflag);
        $dao = new CommonDao();
        if($hpflag!=''&&$autoflag!=''&&$autoid!=''){
            $content = array(
                'hpflag'=>$hpflag,
                'autoflag'=>$autoflag,
                'autoid'=>$autoid,
                'sendplan'=>$sendplan,
                'companyno'=>$companyno,
            	'memo'=>$gtitlestu
            );
            $id=$dao->updateRowByPk('zzbtrade.printset',$content,'nick',$nick,'');
            $this->log('------------------'.$id);
        }

    }
    function selectTidAction(){
    	$dao = new CommonDao();
    	/*
    	$sql="select * from zzbtrade.print_logs";
    	$setdata = $dao->getRowsBySQl($sql,'','','');*/
    	$sql="select count(id) as total from zzbtrade.usercompanmould where sign=1";
    	$all_cout = $dao->getRowByPkOne($sql,'');
    	echo json_encode($all_cout);
    }

    /**
     * 催付内容
     */
    function fastpayAction(){
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $dao = new CommonDao();
        $zdsz =$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
        if(count($zdsz)>0){
            $fastpay=$zdsz['fastpay'];
            if(empty($fastpay)){
                $fastpay='亲爱的<买家姓名>，您拍下的订单<订单编号>我们一直留着，麻烦付款一下。稍后我们会立即为您发货。';
                $userblack=array(
                    "fastpay"=>$fastpay
                );
                $dao->updateRowByPk('zzbtrade.user_func',$userblack,'sellernick',$nick,'');
            }
        }else{
            $fastpay='亲爱的<买家姓名>，您拍下的订单<订单编号>我们一直留着，麻烦付款一下。稍后我们会立即为您发货。';
            $userblack=array(
                "sellernick"=>$nick,
                "fastpay"=>$fastpay
            );
            $dao->saveRow('zzbtrade.user_func' , $userblack,'');
        }
        echo $fastpay;
    }
    /**
     * 保存催付内容
     */
    function savefastpayAction(){
    	Iywaf::waf($_POST);
        $nick=$_POST['nick'];
        if(empty($nick)){
        	return;
        }
        $fastpay=$_POST['fastpay'];
        $dao = new CommonDao();
        $zdsz =$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
        if(count($zdsz)>0){
            $userblack=array(
                "fastpay"=>$fastpay
            );
            $dao->updateRowByPk('zzbtrade.user_func',$userblack,'sellernick',$nick,'');
        }else{
            $userblack=array(
                "sellernick"=>$nick,
                "fastpay"=>$fastpay
            );
            $dao->saveRow('zzbtrade.user_func' , $userblack,'');
        }
        echo $fastpay;
    }
	 /**
	  *获取个人模版所有名字
	  *
	  */
	 function getMemoAction()
	 {
	 	$mouldname=$_GET['mouldname'];
	 	if(empty($mouldname)){
	 		echo '请输入模版名！';
	 		return;
	 	}
	 	$dao = new CommonDao();
	 	$sql="select * from zzbtrade.usercompanmould where nick='dressa2z' and mouldname='申通快递'";
	 	$mos = $dao->getRowsBySQl($sql,'','','');
	 	$mouldinfo=array(
	 			'companie'=>$mos[0]['companie'],
	 			'mouldname'=>$mos[0]['mouldname'],
	 			'size'=>$mos[0]['size'],
	 			'offset'=>$mos[0]['offset'],
	 			'mould'=>$mos[0]['mould'],
	 			'moprice'=>$mos[0]['moprice'],
	 			'memo'=>$mos[0]['memo']
	 	);
	 	$id=$dao->saveRow('zzbtrade.companiemould',$mouldinfo,'');
	 	echo '<pre>';
	 	var_dump($mouldinfo);
	 	var_dump($sql);
	 	var_dump($id);
	 }
	 /**
	  * 获取当前用户所有设置的宝贝
	  *
	  */
	 function getTitleAction(){
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['nick'];
	 	if(empty($nick)){
	 		return;
	 	}
	 	$dao = new CommonDao();
	 	$sql="select num_iid,title,uptitle,status from zzbtrade.titleSet where nick='$nick'";
	 	$title = $dao->getRowsBySQl($sql,'','','');
	 	echo json_encode($title);
	 }

	 function gettmcinfoAction(){
	 	Iywaf::waf($_POST);
	 	$type=$_POST['type'];
	 	$nick=$_POST['nick'];
	 	if(empty($nick)){
	 		return;
	 	}
	 	$dao = new CommonDao();
	 	$smspaysz=$dao->getRowByPk('zzbtrade.user_sms','','sellernick',$nick,'');
	 	$ratesz = $dao->getRowByPkOne("select autorate from zzbtrade.user_func where sellernick='".$nick."'", '');
	 	$defenratesz=$dao->getRowByPkOne("select denfenon from zzbtrade.defenrate where sellernick='".$nick."'", '');
	 	$smspayoff='off';
	 	$smssendoff='off';
	 	$zdrateoff='off';
	 	$defenoff='off';
	 	if(count($smspaysz)>0){
	 		$smspayoff=$smspaysz['smspay'];
	 		$smssendoff=$smspaysz['smssend'];
	 	}
	 	if(count($ratesz)>0){
	 		$zdrateoff=$ratesz['autorate'];
	 	}
	 	if(count($defenratesz)>0){
	 		$defenoff=$defenratesz['denfenon'];
	 	}
	 	if($type=="smspay"){/*短信催付*/
	 		/**
	 		 * yes,关闭tmc推送
	 		 * no,不关闭tmc推送
	 		 */
	 		if($smssendoff!='on'&&$zdrateoff!='on'&&$defenoff!='on'){
	 			echo 'yes';
	 		}else{
	 			/*不关闭tmc推送,即直接关闭短信催付自动服务*/
	 			if(count($smspaysz)>0){
	 				$usersel=array('smspay'=>'off');
	 				$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
	 			}else{
	 				$usersel=array('sellernick'=>$nick,'smspay'=>'off');
	 				$dao->saveRow('zzbtrade.user_sms' , $usersel,'');
	 			}
	 			$this->setOneKey(urlencode($nick), 'smspay', 'off');
	 			echo 'no';
	 		}
	 	}else if($type=='smssend'){
	 		/*卖家发货*/
	 		/**
	 		 * yes,关闭tmc推送
	 		 * no,不关闭tmc推送
	 		 */
	 		if($smspayoff!='on'&&$zdrateoff!='on'&&$defenoff!='on'){
	 			echo 'yes';
	 		}else{
	 			/*不关闭tmc推送,即直接关闭短信催付自动服务*/
	 			if(count($smspaysz)>0){
	 				$usersel=array('smssend'=>'off');
	 				$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
	 			}else{
	 				$usersel=array('sellernick'=>$nick,'smssend'=>'off');
	 				$dao->saveRow('zzbtrade.user_sms' , $usersel,'');
	 			}
	 			$this->setOneKey(urlencode($nick), 'smssend', 'off');
	 			echo 'no';
	 		}
	 	}else if($type=='zdrate'){
	 		/*自动评价*/
	 		if($smspayoff!='on'&&$smssendoff!='on'&&$defenoff!='on'){
	 			echo 'yes';
	 		}else{
	 			/*不关闭tmc推送,即直接关闭短信催付自动服务*/
	 			date_default_timezone_set('PRC');
	 			$starttime = date('Y-m-d H:i:s',time());
	 			if(count($ratesz)>0){
	 				$usersel=array('autorate'=>'off','flag'=>'3','closetime'=>$starttime);
	 				$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
	 				$this->setOneKey(urlencode($nick), 'autorate', 'off');
	 			}else{
	 				$usersel=array('sellernick'=>$nick,'autorate'=>'off','flag'=>'3','closetime'=>$starttime);
	 				$dao->saveRow('zzbtrade.user_func' , $usersel,'');
	 				$this->setOneKey(urlencode($nick), 'autorate', 'off');
	 			}
	 			echo 'no';
	 		}
	 	}else if($type=='defenserate'){/*差评师拦截*/
	 		if($zdrateoff!='on' && $smssendoff!='on' && $smspayoff!='on'){
	 			echo 'yes';
	 		}else{
	 			date_default_timezone_set('PRC');/*默认时间,否则时间会很大的误差*/
	 			$optime= date('Y-m-d H:i:s');
	 			if (count($defenratesz)>0) {
	 				$userinfo=array(
	 						'denfenon'=>'off',
	 						'optime'=>$optime
	 				);
	 				$res=$dao->updateRowByPk('zzbtrade.defenrate',$userinfo,'sellernick',$nick,'');/*更新*/
	 				$this->setOneKey(urlencode($nick), 'denfenon', 'off');
	 			}else{/*用户无数据增加一条*/
	 				$userinfo=array(
	 						'sellernick'=>$nick,
	 						'denfenon'=>'off',
	 						'goodrate'=>'off;',
	 						'conditions'=>'off|Y|',
	 						'smallmoney'=>'off;',
	 						'bigmoney'=>'off;',
	 						'credit'=>'off;',
	 						'regdays'=>'off;',
	 						'neutralon'=>'off',
	 						'badon'=>'off',
	 						'handon'=>'off',
	 						'publicon'=>'off',
	 						'sellernote'=>'',
	 						'optime'=>$optime
	 				);
	 				$res=$dao->saveRow('zzbtrade.defenrate',$userinfo,'');/*插入一条*/
	 			}
	 			$this->setOneKey(urlencode($nick), 'denfenon', 'off');
	 			echo 'no';
	 		}
	 
	 	}else if($type=='sms'){
	 		/*一键关闭短信关怀*/
	 		if($zdrateoff!='on'&&$defenoff!='on'){
	 			echo 'yes';
	 		}else{
	 			/*不关闭tmc推送,即直接关闭短信催付自动服务*/
	 			if(count($smspaysz)>0){
	 				$usersel=array(
	 						'smspay'=>'off',
	 						'smssend'=>'off',
	 				);
	 				$res=$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
	 					
	 			}else{
	 				$usersel=array(
	 						'sellernick'=>$nick,
	 						'smsnum'=>'0',
	 						'telphone'=>'',
	 						'telnum'=>'',
	 						'smsspan'=>'',
	 						'smspay'=>'off',
	 						'smssend'=>'off',
	 				);
	 				$dao->saveRow('zzbtrade.user_sms' , $usersel,'');
	 
	 			}
	 			$this->setOneKey(urlencode($nick), 'smspay', 'off');
	 			$this->setOneKey(urlencode($nick), 'smssend', 'off');
	 			echo 'no';
	 		}
	 
	 	}
	 }
	 /**
	  * @author chenlongke
	  * @param 保存差评师拦截信息
	  */
	 function savedefenserateAction(){
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){exit;}
	 	$denfenon=$_POST['denfenon'];
	 	$goodrate=$_POST['Tgoodvalues'];
	 	$bigmoney=$_POST['Tbigmoney'];
	 	$smallmoney=$_POST['Tsmallmoney'];
	 	$credit=$_POST['crevalues'];
	 	$regdays=$_POST['Tregdayvalues'];
	 	$zhongping=$_POST['Tzhongpingoff'];
	 	$chaping=$_POST['Tchapingoff'];
	 	$shoudong=$_POST['Tshoudongoff'];
	 	$closetext=$_POST['Tclosetent'];
	 	$condikey=$_POST['condikey'];
	 	$publicon=$_POST['publicon'];
	 	date_default_timezone_set('PRC');
	 	$optime= date('Y-m-d H:i:s');
	 	$dao=new CommonDao();
	 	$total=$dao->getRowByPkOne("SELECT COUNT(sellernick) as total from defenrate where sellernick='".$sellernick."'","");
	 	if($total['total'] > 0 ||$total['total']!=0){/*UPDATE*/
	 		$userinfo=array(
	 				'sellernick'=>$sellernick,
	 				'denfenon'=>$denfenon,
	 				'goodrate'=>$goodrate,
	 				'smallmoney'=>$smallmoney,
	 				'conditions'=>$condikey,
	 				'bigmoney'=>$bigmoney,
	 				'credit'=>$credit,
	 				'regdays'=>$regdays,
	 				'neutralon'=>$zhongping,
	 				'badon'=>$chaping,
	 				'handon'=>$shoudong,
	 				'publicon'=>$publicon,
	 				'sellernote'=>$closetext,
	 				'optime'=>$optime
	 		);
	 		$dao->updateRowByPk('zzbtrade.defenrate',$userinfo,'sellernick',$sellernick,'');
	 		if($denfenon=='on'){
	 			$this->setOneKey(urlencode($sellernick), 'denfenon', 'on');
	 		}else if($denfenon=='off'){
	 			$this->setOneKey(urlencode($sellernick), 'denfenon', 'off');
	 		}
	 	}else{/*INSERT*/
	 		$userinfo=array(
	 				'sellernick'=>$sellernick,
	 				'denfenon'=>'off',
	 				'goodrate'=>$goodrate,
	 				'smallmoney'=>$smallmoney,
	 				'conditions'=>$condikey,
	 				'bigmoney'=>$bigmoney,
	 				'credit'=>$credit,
	 				'regdays'=>$regdays,
	 				'neutralon'=>$zhongping,
	 				'badon'=>$chaping,
	 				'handon'=>$shoudong,
	 				'publicon'=>$publicon,
	 				'sellernote'=>$closetext,
	 				'optime'=>$optime
	 		);
	 		$dao->saveRow('zzbtrade.defenrate',$userinfo,'');
	 		$this->setOneKey(urlencode($sellernick), 'denfenon', 'off');
	 	}
	 	echo 'success';
	 }
	 /**
	  * @author chenlongke
	  * @param 开启关闭差评师开关
	  */
	 function defenonchangeAction(){
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){exit;}
	 	$types=$_POST['type'];
	 	date_default_timezone_set('PRC');
	 	$optime= date('Y-m-d H:i:s');
	 	if($types=='off'){$type='on';}else{$type='off';}
	 	$dao=new CommonDao();
	 	$total=$dao->getRowByPkOne("SELECT COUNT(sellernick) as total from defenrate where sellernick='".$sellernick."'", "");
	 	if($total['total']< 0 ||$total['total']==0 || empty($total['total'])){/*用户没有数据*/
	 		$userinfo=array(
	 				'sellernick'=>$sellernick,
	 				'denfenon'=>$type,
	 				'goodrate'=>'off;',
	 				'conditions'=>'off|Y|',
	 				'smallmoney'=>'off;',
	 				'bigmoney'=>'off;',
	 				'credit'=>'off;',
	 				'regdays'=>'off;',
	 				'neutralon'=>'off',
	 				'badon'=>'off',
	 				'handon'=>'off',
	 				'publicon'=>'off',
	 				'sellernote'=>'订单状态错误，请联系售后客服',
	 				'optime'=>$optime
	 		);
	 		$dao->saveRow('zzbtrade.defenrate',$userinfo,'');
	 		$this->setOneKey(urlencode($sellernick), 'denfenon', 'on');
	 	}else{
	 		$userinfo=array(
	 				'denfenon'=>$type,
	 				'optime'=>$optime
	 		);
	 		$dao->updateRowByPk('zzbtrade.defenrate',$userinfo,'sellernick',$sellernick,'');
	 		if($type=='on'){
	 			$this->setOneKey(urlencode($sellernick), 'denfenon', 'on');
	 		}else if($type=='off'){
	 			$this->setOneKey(urlencode($sellernick), 'denfenon', 'off');
	 		}
	 	}
	 	echo "success";
	 }
	 /**
	  * @author chenlongeke
	  * @param 查询单个拉黑的用户
	  */
	 function getblaByOneAction() {
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){exit;}
	 	$buyernick=$_POST['nickid'];
	 	$dao=new CommonDao();
	 	$rs=$dao->getRowByPkOne("SELECT COUNT(buyernicklist) as total ,buyernicklist,reason,optime from blacktable where sellernick='".$sellernick."' AND buyernicklist='".$buyernick."'", "");
	 	echo json_encode($rs);
	 }
	 /**
	  * @author chelongke
	  * @param 获取某个用户的拦截记录
	  */
	 function getblaRecByListAction() {
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){exit;}
	 	$pageno=$_POST['pageno'];
	 	$buyernick=$_POST['nickid'];
	 	$sellernick=$_POST['usernick'];
	 	if($pageno==''||empty($pageno))
	 	{
	 		$pageno=1;
	 	}
	 	$dao =new CommonDao();
	 	$page_num=30;
	 	$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.defenrecord where sellernick='".$sellernick."' AND buyernick= '".$buyernick."'","");
	 	$sql = "select buyernick,tid,msg,optime from zzbtrade.defenrecord where sellernick= '".$sellernick."' AND buyernick= '".$buyernick."' Order By optime Desc limit ".($pageno-1)*$page_num.",".$page_num;
	 	$result= $dao->getRowsBySQl($sql,'','','');
	 
	 	if($all_count['total']==0||$all_count['total']<0){
	 		$data['total']=0;
	 		$data['msg']=array('error'=>'该用户没有拦截记录','sellernick'=>$sellernick);
	 	}else{
	 		$data['total']=$all_count['total'];
	 		$data['sum']=ceil($all_count['total']/30);
	 		$data['res']=$result;
	 	}
	 	echo json_encode($data);
	 }
	 /**
	  * @author chenlongke
	  * @param 获取用户差评师拦截信息
	  */
	 function getdefenseSetAction() {
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['usernick'];
	 	if(empty($nick)){
	 		exit;
	 	}
	 	$dao=new CommonDao();
	 	$sqlStr="select optime,conditions,denfenon,goodrate,smallmoney,bigmoney,credit,regdays,neutralon,handon,badon,publicon,sellernote from defenrate where sellernick='".$nick."'";
	 	$result=$dao->getRowByPkOne($sqlStr,'');
	 	echo json_encode($result);
	 }
	 /**
	  * @author chen long ke
	  * @param 获取某用户的拦截记录
	  */
	 function getblacklistAction(){
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	$pageno=$_POST['page_no'];
	 	$dao =new CommonDao();
	 
	 	if($pageno==''||empty($pageno))
	 	{
	 		$pageno=1;
	 	}
	 
	 	$page_num=30;/*多少条*/
	 
	 	$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.defenrecord where sellernick='".$sellernick."'","");
	 	$sql = "select buyernick,tid,msg,optime from zzbtrade.defenrecord where sellernick= '".$sellernick."' Order By optime Desc limit ".($pageno-1)*$page_num.",".$page_num;
	 	$result= $dao->getRowsBySQl($sql,'','','');
	 
	 	if($all_count['total']==0||$all_count['total']<0){
	 		$data['total']=0;
	 		$data['msg']=array('error'=>'该用户没有拦截记录','sellernick'=>$sellernick);
	 	}else{
	 		$data['total']=$all_count['total'];
	 		$data['sum']=ceil($all_count['total']/30);
	 		$data['res']=$result;
	 	}
	 	echo json_encode($data);
	 }
	 /**
	  * @author chen long ke
	  * @param 获取用户的差评师拦截的黑名单
	  */
	 function getaddBlackAction()
	 {
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['user_nick'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	$pageno=$_POST['page_no'];
	 	$dao =new CommonDao();
	 
	 	if($pageno==''||empty($pageno)){
	 
	 		$pageno=1;
	 	}
	 	$pagenum=30;/*多少条*/
	 	$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.blacktable where sellernick='".$sellernick."'","");
	 	$sql="select buyernicklist,reason,optime from zzbtrade.blacktable where sellernick ='".$sellernick."' Order By optime Desc  limit ".($pageno-1)*$pagenum.",".$pagenum;
	 	$result= $dao->getRowsBySQl($sql,'','','');
	 	if($all_count['total']<0 || $all_count['total']==0){
	 		$data['total']=0;
	 		$data['msg']=array('error'=>'该用户不存在记录','sellernick'=>$sellernick);
	 	}else{
	 		$data['total']=$all_count['total'];
	 		$data['sum']=ceil($all_count['total']/30);
	 		$data['res']=$result;
	 	}
	 	echo json_encode($data);
	 }
	 /**
	  * @author chenlongke
	  * @param 保存黑名单用户
	  */
	 function saveblaNickAction() {
	 	Iywaf::waf($_POST);
	 	$buyernick=$_POST['nicks'];
	 	$reason=$_POST['reason'];
	 	$sellernick=$_POST['user_nick'];
	 	$type=$_POST['type'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	if($type=='black'){
	 		$info='zzbtrade.blacktable';
	 		$bb='buyernicklist';
	 	}else if($type=='white'){
	 		$info='zzbtrade.whitetable';
	 		$bb='buyernick';
	 	}else{
	 		exit;
	 	}
	 	$this->log(json_encode($buyernick).'---------'.$reason.'---------'.$sellernick);
	 	$dao=new CommonDao();
	 	date_default_timezone_set('PRC');/*默认时间,否则时间会很大的误差*/
	 	$optime= date('Y-m-d H:i:s');
	 
	 	if(count($buyernick)==1){/*只有一条*/
	 		$setlist=array(
	 				'sellernick'=>$sellernick,
	 				$bb=>$buyernick[0],
	 				'reason'=>$reason,
	 				'optime'=>$optime
	 		);
	 		$dao->saveRow($info,$setlist,'');
	 	}else{
	 		for($i=0;$i<count($buyernick);$i++){
	 			$setlist=array(
	 					'sellernick'=>$sellernick,
	 					$bb=>$buyernick[$i],
	 					'reason'=>$reason,
	 					'optime'=>$optime
	 			);
	 			$dao->saveRow($info,$setlist,'');
	 			if($i>21){/*约束用户一次只能插入20条*/
	 				exit;
	 			}
	 		}
	 	}
	 	echo 5;
	 }
	 /**
	  * @author chen long ke
	  * @param 获取用户的差评师拦截的白名单
	  */
	 function getaddWhilAction()
	 {
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['user_nick'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	$pageno=$_POST['page_no'];
	 	$dao =new CommonDao();
	 
	 	if($pageno==''||empty($pageno)){
	 
	 		$pageno=1;
	 	}
	 	$pagenum=30;/*多少条*/
	 	$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.whitetable where sellernick='".$sellernick."'","");
	 	$sql="select buyernick,reason,optime from zzbtrade.whitetable where sellernick ='".$sellernick."' Order By optime Desc  limit ".($pageno-1)*$pagenum.",".$pagenum;
	 	$result= $dao->getRowsBySQl($sql,'','','');
	 	if($all_count['total']<0 || $all_count['total']==0){
	 		$data['total']=0;
	 		$data['msg']=array('error'=>'该用户不存在记录','sellernick'=>$sellernick);
	 	}else{
	 		$data['total']=$all_count['total'];
	 		$data['sum']=ceil($all_count['total']/30);
	 		$data['res']=$result;
	 	}
	 	echo json_encode($data);
	 }
	 function getbabylistAction(){/*获取宝贝列表*/
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['usernick'];
	 	if(empty($nick)){
	 		exit;
	 	}
	 	$dao=new CommonDao();
	 	$result=$dao->getRowsBySQl("select num_id,title,imgurl,optime from babylist where sellernick='".$nick."'", "");
	 	echo json_encode($result);
	 }
	 /**
	  * @author chenlongke
	  * @param 宝贝白名单界面黑名单按钮
	  */
	 function changeByblackAction(){
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['usernick'];
	 	if(empty($nick)){
	 		exit;
	 	}
	 	date_default_timezone_set('PRC');
	 	$optime= date('Y-m-d H:i:s');
	 	$type=$_POST['type'];
	 	$dao=new CommonDao();
	 	$total=$dao->getRowByPkOne("SELECT COUNT(sellernick) as total from defenrate where sellernick='".$nick."'","");
	 	if($total['total'] > 0 ||$total['total']!=0){/*UPDATE*/
	 		$info=array('whiteon'=>$type,'optime'=>$optime);
	 		$dao->updateRowByPk('zzbtrade.defenrate', $info, 'sellernick', $nick);
	 		echo 0;
	 	}else{/*insert*/
	 		$info=array(
	 				'sellernick'=>$nick,
	 				'denfenon'=>'off',
	 				'goodrate'=>'off;',
	 				'conditions'=>'off|Y|',
	 				'smallmoney'=>'off;',
	 				'bigmoney'=>'off;',
	 				'credit'=>'off;',
	 				'regdays'=>'off;',
	 				'neutralon'=>'off',
	 				'badon'=>'off',
	 				'handon'=>'off',
	 				'whiteon'=>$type,
	 				'publicon'=>'off',
	 				'sellernote'=>'订单状态错误，请联系售后客服',
	 				'optime'=>$optime
	 		);
	 		$this->setOneKey(urlencode($nick), 'denfenon', 'off');
	 		$dao->saveRow('zzbtrade.defenrate', $info);
	 		echo 1;
	 	}
	 }
	 /**
	  * @author chenlongke
	  * @param 删除手动拉黑
	  */
	 function delblackbynickAction() {
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	$buyernick=$_POST['nicks'];
	 	$type=$_POST['type'];
	 	$dao =new CommonDao();
	 	if($type=='black'){
	 		$sql="delete from zzbtrade.blacktable where buyernicklist='".$buyernick."' And sellernick ='".$sellernick."'";
	 	}else{
	 		$sql="delete from zzbtrade.whitetable where buyernick='".$buyernick."' And sellernick ='".$sellernick."'";
	 	}
	 	$dao->deleteBySql($sql);
	 	echo 5;
	 }
	 /**
	  * @author chenlongke
	  * @param 获取用户手动拉黑的数量
	  */
	 function getuserallAction(){
	 	Iywaf::waf($_POST);
	 	$sellernick=$_POST['usernick'];
	 	if(empty($sellernick)){
	 		exit;
	 	}
	 	$type=$_POST['type'];
	 	$dao =new CommonDao();
	 	if($type=='black'){
	 		$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.blacktable where sellernick='".$sellernick."'","");
	 		$data['total']=$all_count['total'];
	 	}else if($type=='white'){
	 		$all_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.whitetable where sellernick='".$sellernick."'","");
	 		$whiteon=$dao->getRowByPkOne("select whiteon from zzbtrade.defenrate where sellernick='".$sellernick."'","");
	 		$white_count=$dao->getRowByPkOne("select count(id) as total from zzbtrade.babylist where sellernick='".$sellernick."'", "");
	 		$data['total']=$all_count['total'];/*旺旺白名单*/
	 		$data['whiteon']=$whiteon['whiteon'];/*宝贝白名单中黑名单开关*/
	 		$data['white_count']=$white_count['total'];/*宝贝白名单数量*/
	 	}
	 	echo json_encode($data);
	 }
	 /**
	  * @author chenlongke
	  * @param 获取单个旺旺白名单
	  */
	 function getaddWhilByOneAction(){
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['nick'];
	 	$sellernick=$_POST['user_nick'];
	 	if(empty($sellernick)||empty($nick)){
	 		exit;
	 	}
	 	$dao=new CommonDao();
	 	$datas=$dao->getRowsBySQl("select buyernick,reason,optime from whitetable where sellernick='".$sellernick."' and buyernick='".$nick."' limit 5;", "");
	 	echo json_encode($datas);	
	 }
	 
	 /**
	  * @author chenlongke
	  * @param 存储用户的功能设置
	  */
	 function saveglszAction(){
	 	$sellernick=$_POST['nick'];
	 	if(empty($sellernick)){exit;}
	 	$tsdz=$_POST['tsdz'];
	 	$this->setOneKey(urlencode($sellernick), 'tsdz', $tsdz);
	 	echo 123456;
	 }
	 /**
	  * @author chenlongke
	  * @param 获取用户设置
	  */
	 function getuserglszAction(){
	 	$sellernick=$_POST['nick'];
	 	if(empty($sellernick)){exit;}
	 	$data['tsdz']=$this->getTsession(urlencode($sellernick), 'tsdz');
	 	echo json_encode($data);
	 }
	 /**
	  * @author chenlongke
	  * @param 删除白名单设置中的宝贝白名单
	  */
	 function delwhiteBylogAction(){
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['usernick'];
	 	if(empty($nick)){
	 		exit;
	 	}
	 	$num_id=$_POST['num_id'];
	 	$dao=new CommonDao();
	 	$delsql="delete from zzbtrade.babylist where num_id='".$num_id."' and sellernick='". $nick ."'";
	 	$dao->deleteBySql($delsql,"");
	 	echo 123;
	 }
	 /**
	  * @author wangsx
	  * @param yunPrint
	  */
	 function getRequestAction()
	 {
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6100e13fa3e42215e57311145a9266b59343631e82b66042054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	$req = new LogisticsAddressSearchRequest();
	 	$req->setrdef(json_encode(''));
	 	$resp = $client->execute($req,$appsesson);
	 	echo json_encode('11111111112'.json_encode($resp));
	 	echo json_encode($resp);
	 }
	 /**
	  * @author wangsx
	  * @param yunPrint
	  */
	 function getFaceIdAction()
	 {
	 	//$this->log('data:'.$shippingAddress);
	 	Iywaf::waf($_POST);
	 	$cpCode=$_POST['cpCode'];
	 	$shippingAddress=$_POST['shippingAddress'];
	 	$tradeOrderInfoCols=$_POST['tradeOrderInfoCols'];
	 	$shippingAddress = str_replace('\"', '"', $shippingAddress);
	 	$tradeOrderInfoCols = str_replace('\"', '"', $tradeOrderInfoCols);
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6100e13fa3e42215e57311145a9266b59343631e82b66042054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	$req = new WlbWaybillGetRequest();
	 	$req->setcpCode($cpCode);
	 	$req->setshippingAddress($shippingAddress);
	 	$req->settradeOrderInfoCols($tradeOrderInfoCols);
	 	$resp = $client->execute($req,$appsesson);
	 	echo json_encode($resp);
	 }
	 
	 function upFaceIdAction()
	 {
	 	Iywaf::waf($_POST);
	 	$cpCode=$_POST['cpCode'];
	 	$nick=$_POST['nick'];
	 	$tradeOrderInfoCols=$_POST['tradeOrderInfoCols'];
	 	$tradeOrderInfoCols = str_replace('\"', '"', $tradeOrderInfoCols);
	 	$this->log($tradeOrderInfoCols);
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6100e13fa3e42215e57311145a9266b59343631e82b66042054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	$req = new WlbWaybillUpdateRequest();
	 	$req->setcpCode($cpCode);
	 	$req->settradeOrderInfo($tradeOrderInfoCols);
	 	$resp = $client->execute($req,$appsesson);
	 	echo json_encode($resp);
	 }
	 function getUserbuyAction()
	 {
	 	Iywaf::waf($_POST);
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6101d299583930c1c53b3c6a8936b2fb54b381047dd465c2054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	$req = new WlbWaybillSearchRequest();
	 	$resp = $client->execute($req,$appsesson);
	 	echo json_encode($resp);
	 }
	 function yunAddtoAction()
	 {
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6101d299583930c1c53b3c6a8936b2fb54b381047dd465c2054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	$userId="2054718218";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	//$client = new TopClient($serverUrl , $appKey , $appSecret, "json");
	 
	 	$req = new LogisticsAddressReachableRequest();
	 	$req->setaddress("浙江省杭州市文三路华星时代广场");
	 	$req->setareaCode("990000");
	 	$req->setpartnerIds("1000000952");
	 	$req->setserviceType("88");
	 	$req->setsourceAreaCode("330110011");
	 	//$req->setoutBizCode("10000");
	 	//$req->setuserId($userId);
	 	/**设置API业务入参**/
	 	echo json_encode('1111111111');
	 	$resp = $client->execute($req,$appsesson);
	 	echo json_encode('222222222222');
	 	/**正常请求，获取用户信息，由于email是需要用户授权才能获取，因此返回的信息中不包含emaill信息**/
	 	echo json_encode($resp);
	 	/**传入用户授权的sessionkey， 可获取用户 的email**/
	 	//$resp = $client->execute($req, "6101e28582e7711480b9a38081b1625343be13f153f4ef72054718218");
	 }
	 function yunPartnersAction()
	 {
	 	$appKey="1021085840";
	 	$appSecret="sandbox2b2d756715e0803a2915dfcd7";
	 	$appsesson="6101d299583930c1c53b3c6a8936b2fb54b381047dd465c2054718218";
	 	$serverUrl = "http://gw.api.tbsandbox.com/router/rest";
	 	$userId="2054718218";
	 	/**创建client**/
	 	$client=new TopClient();
	 	$client->appkey=$appKey;
	 	$client->secretKey=$appSecret;
	 	$client->gatewayUrl=$serverUrl;
	 	$client->format="json";
	 	//$client = new TopClient($serverUrl , $appKey , $appSecret, "json");
	 
	 	$req = new LogisticsPartnersGetRequest();
	 	$req->setgoodsValue("30");
	 	$req->setisNeedCarriage("false");
	 	$req->setserviceType("cod");
	 	$req->setsourceId("110000");
	 	$req->settargetId("110000");
	 	//$req->setoutBizCode("10000");
	 	//$req->setuserId($userId);
	 	/**设置API业务入参**/
	 	echo 111111;
	 	$resp = $client->execute($req,$appsesson);
	 	echo 222222;
	 	/**正常请求，获取用户信息，由于email是需要用户授权才能获取，因此返回的信息中不包含emaill信息**/
	 	echo json_encode($resp);
	 	/**传入用户授权的sessionkey， 可获取用户 的email**/
	 	//$resp = $client->execute($req, "6101e28582e7711480b9a38081b1625343be13f153f4ef72054718218");
	 }
	 /**
	  *面单招募商家
	  */
	 function recruitAction(){
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['nick'];
	 	if(empty($nick)){
	 		return;
	 	}
	 	$xzlogc=$_POST['xzlogc'];
	 	$printfjr=$_POST['printfjr'];
	 	$printfsj=$_POST['printfsj'];
	 	$printfdh=$_POST['printfdh'];
	 	$printnums=$_POST['printnums'];
	 	$printfaddr=$_POST['printfaddr'];
	 	$dao = new CommonDao();
	 	$sq="select count(id) as total from zzbtrade.recruit where nick='$nick'";
	 	$all_cout = $dao->getRowByPkOne($sq,'');
	 	$content = array(
	 			'nick'=>$nick,
	 			'printfaddr'=>$printfaddr,
	 			'printnums'=>$printnums,
	 			'printfdh'=>$printfdh,
	 			'printfsj'=>$printfsj,
	 			'printfjr'=>$printfjr,
	 			'xzlogc'=>$xzlogc,
	 	);
	 	if($all_cout['total']<1){
	 		$id=$dao->saveRow('zzbtrade.recruit',$content,'');
	 		if($id>0)echo json_encode('提交成功');else echo json_encode("提交失败");
	 	}else{
	 		$dao->updateRowByPk('zzbtrade.recruit',$content,'nick',$nick,'');
	 		echo json_encode("更新成功！");
	 	}
	 }
	 /**
	  *获取面单招募商家名单
	  */
	 function getrecruitAction(){
	 	Iywaf::waf($_POST);
	 	$dao = new CommonDao();
	 	$sq="select * from zzbtrade.recruit where printnums>0";
	 	$alls = $dao->getRowsBySQl($sq,'');
	 	echo json_encode($alls);
	 }
	 function getrecruitsAction(){
	 	Iywaf::waf($_POST);
	 	$dao = new CommonDao();
	 	$sq="select * from zzbtrade.recruit where printnums>0";
	 	$alls = $dao->getRowsBySQl($sq,'');
	 	$llll='';
	 	for($i=0;$i<count($alls);$i++){
	 				$llll=$llll.','.$alls[$i]['nick'];
	 	}
	 	echo '<pre>';
	 	echo var_dump($llll);
	 }
	 /**
	  * @author chenlongke
	  * @param 发送短信
	  */
	 function sendsmsAction(){
	 	Iywaf::waf($_POST);
	 	$smstext=$_POST['smstext'];
	 	$tid=$_POST['tid'];
	 	$buyertel=$_POST['buyertel'];
	 	$buyer_nick=$_POST['buyer_nick'];
	 	$nick=$_POST['nick'];
	 	$type=$_POST['type'];
	 	$smsspan=$_POST['smsspan'];
	 	$smstype=$_POST['smstype'];/*短信类型，fahuo,haoping,quren,tuikuan,cuifu,yanchi*/
	 	$port=$_POST['port'];
	 	$smstext2=$smstext;
		if(empty($buyer_nick)||empty($nick)){
			echo '提交失败！缺乏用户名';
			exit;
		}
		$issend=$this->issendtel($smstype, $buyertel);
		if($issend){/*issend为true为真代表发送过*/
			echo "今天已经发送过该类型的短信啦~";
			exit;
		}
		$sign='@'.$smsspan;
		$smstext=str_replace("【发货提醒】", "", $smstext);
		$smstext=str_replace("【订单提醒】", "", $smstext);
		$smstext=str_replace("【收货提醒】", "", $smstext);
		$smstext=str_replace("【好评奖励】", "", $smstext);
		$smstext=str_replace("【退款成功】", "", $smstext);
		$smstext=str_replace("【延时发货】", "", $smstext);
		$smstext=str_replace($sign, "", $smstext);
		$tid=$tid.'#'.date('dis').$smstype;
		/*echo '提交失败！缺乏用户名';*/
		/*exit;*/
	 	global $_CFG;
	 	$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	 	$data['smstext']=$smstext;
	 	$data['tid']=$tid;
	 	$data['buyertel']=''.$buyertel;
	 	$data['buyer_nick']=$buyer_nick;
	 	$data['nick']=$nick;
	 	$data['type']='smstrade';
	 	$data['backcall']=$this->httproot;
	 	$data['company_sms']=$port;/*发送端口*/
	 	if($smstype=='cuifu'){
	 		$data['smstrade']='01';
	 	}else if($smstype=='yanchi'){
	 		$data['smstrade']='02';
	 	}else if($smstype=='fahuo'){
	 		$data['smstrade']='03';
	 	}else if($smstype=='queren'){
	 		$data['smstrade']='04';
	 	}else if($smstype=='haoping'){
	 		$data['smstrade']='05';
	 	}else if($smstype=='tuikuan'){
	 		$data['smstrade']='06';
	 	}
	 	if(empty($smsspan)){
	 		$smsspan=$nick;
	 		if (preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$smsspan)) {
	 		}else{
	 			$smsspan=$smsspan.'店';
	 		}
	 		$smsrecord=array('smsspan'=>$smsspan);
	 		$dao->updateRowByPk('zzbtrade.user_sms',$smsrecord,'sellernick',$nick,'');
	 	}
	 	$data['smsspan']=$smsspan;
	 	$value=json_encode($data);
	 	$value=urlencode($value);
	 	$sendparam = array('url'=>'http://sms.zzgdapp.com/send/smsopt','parm'=>base64_encode($value));
	 	$rsp=$this->sendMetaq('yycrm',json_encode($sendparam));/*发队列*/
	 	$stas=9;
	 	if($rsp!='-1')
	 	{
	 		/*$this->log($nick,'提交短信池成功');*/
	 		$starttime = date('Y-m-d',time());
	 		$this->setOneKey($starttime, $smstype.$buyertel, 'yes');
	 		echo "短信提交成功";
	 	}else{
	 		$stas=0;
	 		/*$this->log($nick,'提交短信池失败');*/
	 		$this->log($nick,json_encode($rsp));
	 		echo "短信提交失败";
	 	}
	 	$smsrecord=array(
	 			'sellernick'=>$nick,
	 			'buyernick'=>$buyer_nick,
	 			'tid'=>$tid,
	 			'smstext'=>$smstext2,
	 			'smstime'=>'now()',
	 			'status'=>$stas,
	 			'smstype'=>'smstrade',
	 			'sendphone'=>''.$buyertel,
	 	);
	 	$dao->saveRow('zzbtrade.sms_record' , $smsrecord,'');
	 	$dao->close();
	 }
	 /**
	  * 查询今日是否发送过短信-短信关怀
	  */
	 function issendtel($type,$tel){
	 	$starttime = date('Y-m-d',time());
	 	$val=explode('-',$starttime);
	 	$day=$val[2]-1;
	 	if(checkdate(2,29,$val[0])){
	 		//闰年
	 		if($val[1]==1||$val[1]==3||$val[1]==5||$val[1]==7||$val[1]==8||$val[1]==10||$val[1]==12){
	 			if($day>31){
	 				$day=$day-31;
	 				$val[1]=$val[1]+1;
	 			}
	 		}else if($val[1]==4||$val[1]==6||$val[1]==9||$val[1]==11){
	 			if($day>30){
	 				$day=$day-30;
	 				$val[1]=$val[1]+1;
	 			}
	 		}else{
	 			if($day>29){
	 				$day=$day-29;
	 				$val[1]=$val[1]+1;
	 			}
	 		}
	 	}else{
	 		if($val[1]==1||$val[1]==3||$val[1]==5||$val[1]==7||$val[1]==8||$val[1]==10||$val[1]==12){
	 			if($day>31){
	 				$day=$day-31;
	 				$val[1]=$val[1]+1;
	 			}
	 		}else if($val[1]==4||$val[1]==6||$val[1]==9||$val[1]==11){
	 			if($day>30){
	 				$day=$day-30;
	 				$val[1]=$val[1]+1;
	 			}
	 		}else{
	 			if($day>28){
	 				$day=$day-28;
	 				$val[1]=$val[1]+1;
	 			}
	 		}
	 	}
	 	if($val[1]>12){
	 		$val[1]=$val[1]-12;
	 		$val[0]=$val[0]+1;
	 	}
	 	if($day<10){
	 		$day=$day+0;
	 		$day='0'.$day;
	 	}
	 	if($val[1]<10){
	 		$val[1]=$val[1]+0;
	 		$val[1]='0'.$val[1];
	 	}
	 	$val=$val[0].'-'.$val[1].'-'.$day;
	 	$issend=$this->getTsession($starttime, $type.$tel);//取刷新key
	 	$isdel=$this->getTsession($starttime, 'isdel');
	 	if(empty($isdel)){
	 		$this->delAllKey($val);
	 		$this->setOneKey($starttime, 'isdel', 'yes');
	 	}
	 	if(empty($issend)){
	 		return false;
	 	}else{
	 		return true;
	 	}
	 }
	 function SmsByTypeAction(){/*index.php短信操作控制器*/
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['nick'];
	 	$smsspan=$_POST['smsspan'];
	 	$type=$_POST['type'];
	 	global $_CFG;
	 	if(empty($nick) || empty($type)){/*nick 或type为空*/
	 		exit;
	 	}
	 	if($type=='saveSign'){/*保存签名*/
	 		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		 	$usersel=array(
		 			'smsspan'=>$smsspan,
		 	);
		 	$dao->updateRowByPk('zzbtrade.user_sms',$usersel,'sellernick',$nick,'');
		 	$dao->close();
		 	echo 1;
	 	}else if($type=='readSign'){/*读取签名*/
	 		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	 		$rs=$dao->getRowByPkOne("select smsspan from zzbtrade.user_sms where sellernick='".$nick."'",'');
	 		echo json_encode($rs);
	 	}else if($type=='select'){/*查询短信剩余量*/
	 		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], 'sms', 'smsuser', $_CFG['DB']['Password'] );
			$rs=$dao->getRowByPkOne("select smsnum from sms_userinfo where sellernick='".$nick."'",'');
			if(count($rs)>0){
				$data=$rs;
			}else{
				$data['smsnum']=0;
			}
			echo json_encode($data);	 		
	 	}else if($type=='words'){/*读取关键字*/
	 		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	 		$data=$dao->getRowsBySQl("select words from sms_words", "");
	 		echo json_encode($data);
	 	}else if($type=='template'){/*读取模版*/
	 		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	 		$smspay=$dao->getRowByPkOne("select smsflag,smstext from smspay where sellernick='".$nick."'", "");/*获取催付*/
	 		$smssend=$dao->getRowByPkOne("select smsflag,smstext from smssend where sellernick='".$nick."'", "");/*发货提醒*/
	 		$smsconfirm=$dao->getRowByPkOne("select smsflag,smstext from smsconfirm where sellernick='".$nick."'", "");/*确认模版提醒*/
	 		$smsgood=$dao->getRowByPkOne("select smsflag,smstext from smsgood where sellernick='".$nick."'", "");/*好评模版提醒*/
	 		$smsrefund=$dao->getRowByPkOne("select smsflag,smstext from smsrefund where sellernick='".$nick."'", "");/*退款模版提醒*/
	 		$smsdelay=$dao->getRowByPkOne("select smsflag,smstext from smsdelay where sellernick='".$nick."'", "");/*延迟模版提醒*/
	 		$smscompy=$this->getTall('loveapp');
	 		$data['smspay']=$smspay;
	 		$data['smssend']=$smssend;
	 		$data['smsconfirm']=$smsconfirm;
	 		$data['smsgood']=$smsgood;
	 		$data['smsrefund']=$smsrefund;
	 		$data['smsdelay']=$smsdelay;
	 		$data['smscompy']=$smscompy;
	 		echo json_encode($data);
	 	}
	 }
	 function savedefaultsmsAction(){/*保存自定义短信*/
	 	Iywaf::waf($_POST);
	 	$nick=$_POST['user_nick'];
	 	if(empty($nick)){
	 		exit;
	 	}
	 	global $_CFG;
	 	$types=$_POST['types'];/*来自于哪个类型*/
	 	$type=$_POST['type'];/*表名*/
	 	$smsflag=$_POST['smsflag'];
	 	$smstext=$_POST['smstext'];
	 	$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	 	if($types=='sms'){
	 		$dao->updateBySql("update zzbtrade.".$type." set smstext='".$smstext."' where sellernick='".$nick."'");
	 		echo 46546546546;
	 	}else if($types=='index'){
	 		$total=$dao->getRowByPkOne("select * from zzbtrade.".$type." where sellernick='".$nick."'", "");
	 		if (count($total)>0) {/*update*/
	 			/*$dao->updateBySql("update zzbtrade.".$type." set smstext='".$smstext."' , smsflag ='".$smsflag."' where sellernick='".$nick."'","");*/
	 			$dao->updateBySql("update zzbtrade.".$type." set smstext='".$smstext."' where sellernick='".$nick."'","");
	 			echo "update zzbtrade.".$type." set smstext='".$smstext."' where sellernick='".$nick."'";
	 		}else{
	 			
				$info=array("sellernick"=>$nick,"smstext"=>$smstext,'smsflag'=>3);
				$dao->saveRow("zzbtrade.".$type, $info);
				echo 123;		
	 		}
	 	}else{
	 		$dao->updateBySql("update zzbtrade.".$type." set smstext='".$smstext."' where sellernick='".$nick."'");
	 		echo 46546546546;
	 	}
	 	
	 }
	 /**
	  * @author wangsx
	  * @param 获取利润和重要数据。
	  */
	 function synchronousAction()
	 {
	 	Iywaf::waf($_POST);
	 	$page_no = $_POST['page_no'];
	 	$size = $_POST['size'];
	 	$nick = $_POST['nick'];
	 	if( empty($page_no) || empty($size) || empty($nick) ) {
	 		echo "不准进来！";
	 		return;
	 	}
	 	$dao =new CommonDao();
	 	$sta_pos = ($page_no - 1) * $size;
	 	$end_pos = $sta_pos + $size;
	 	$sq="select title,num_iid,properties,price,width from priceset where nick='$nick' limit $sta_pos,$end_pos"; /*根据nick和num_iid查询数据库*/
	 	$result = $dao->getRowsBySQl($sq,'');
	 	$sq = "select count(*) as total_results from priceset where nick='$nick'";
	 	$all_cout = $dao->getRowByPkOne($sq,'');
	 	$data = array( 'data' => $result, 'total_results' => $all_cout['total_results']);
	 	echo json_encode($data);
	 }
	 /**
     * 评价开关设置
     */
    function closeautoAction(){
    	Iywaf::waf($_POST);
    	$sel=$_POST['sel'];
    	$nick= $_POST['nick'];
    	if(empty($nick)){
    		return;
    	}
    	if (strpos ( $nick, ':' ) != false) { // 说明是子帐号
    		$nick = substr ( $nick, 0, strpos ( $nick, ':' ) );
    	}
    	$dao = new CommonDao();
    	$pjsz=$dao->getRowByPk('zzbtrade.user_func','','sellernick',$nick,'');
		date_default_timezone_set('PRC');
		$starttime = date('Y-m-d H:i:s',time());
    	if(count($pjsz)>0){
    		if($sel=='on'){
    			$usersel=array('autorate'=>$sel,'flag'=>'1','opentime'=>$starttime);
    		}else{
    			$usersel=array('autorate'=>$sel,'flag'=>'3','closetime'=>$starttime);
    		}
    		$dao->updateRowByPk('zzbtrade.user_func',$usersel,'sellernick',$nick,'');
    		$this->setOneKey(urlencode($nick), 'autorate', $sel);
    	}else{
    		if($sel=='on'){
    			$usersel=array('sellernick'=>$nick,'autorate'=>$sel,'flag'=>'1','opentime'=>$starttime);
    		}else{
    			$usersel=array('sellernick'=>$nick,'autorate'=>$sel,'flag'=>'3','closetime'=>$starttime);
    		}
    		$dao->saveRow('zzbtrade.user_func' , $usersel,'');
    		$this->setOneKey(urlencode($nick), 'autorate', $sel);
    	}
		
    	$info=array("sellernick"=>$nick,"denfenon"=>'off',"optime"=>$starttime);
    	$dao->updateRowByPk("zzbtrade.defenrate", $info, "sellernick", $nick);
    	$this->setOneKey(urlencode($nick), "denfenon", "off");
    	/*$allnum['sz_jg'] =$sz_jg;
    	 echo json_encode($allnum);*/
    }
    /**
     * 删除个人模版
     *
     */
    function delPrintmsgAction()
    {
    	//Iywaf::waf($_POST);
    	$nick=$_POST['nick'];
    	$printid=$_POST['printid'];
    	if(empty($nick)){
    		return;
    	}
    	$dao = new CommonDao();
    	$sql="delete from zzbtrade.custommessge where id='".$printid."' and nick='".$nick."'";
    	$dao->deleteBySql($sql);
    	echo 1;
    }
	function setTuserAction(){
		/*$this->setOneKey(urlencode('vigossde'), 'tmark', 'T20140731170719');
		$this->setOneKey(urlencode('dressa2z'), 'tmark', 'T20140731170719');
		$this->setOneKey(urlencode('xianhui889'), 'tmark', 'T20140731170719');*/
		$this->setOneKey(urlencode('小月月1204'), 'tmark', 'A20140806140829');
	}
}
?>
