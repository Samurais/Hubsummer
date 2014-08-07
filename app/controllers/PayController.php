<?php
include_once (REALPATH."/app/library/BaseController.php");
require_once (REALPATH."/include/Class/Nosqlhelp.php");
require_once (REALPATH.'/config/Init.inc.php');
require_once (REALPATH.'/include/Class/util/DateUtil.php');
require_once(REALPATH."/alipay/alipay.config.php");
require_once(REALPATH."/alipay/lib/alipay_submit.class.php");
require_once(REALPATH."/alipay/lib/alipay_notify.class.php");

class PayController extends BaseController
{
	
	private  $ip = "10.11.02.157";
   /**
    * 测试phalcon 的安装
    */
   public function checkinstallAction()
   {
      	print_r(get_loaded_extensions());
   }
 
    /**
	 * 测试helloword
	 */
    public function indexAction()
    {
        echo "<h1>Hello! ".$this->ip."</h1>";
		//echo $this->mybase();
		//echo 'file:'.$config->application->controllersDir;
		//$this->logger->debug("86523323");
    }
	/**
	 * 测试mysql数据库
	 */
	public function  testdbAction()
	{
		
        global $_CFG;
		$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		
		$usrinfo=$dao->getRowByPkOne("select id,nick from userinfo where nick='dressa2z'",'');
		$this->logger->debug("查询成功:".json_encode($usrinfo));
		echo json_encode($usrinfo);
		
	}
	/**
	 * 测试redis
	 */
	public function testredisAction()
	{
		global $_CFG;
		
		$ip =  $_CFG['redis']['ip'];
		$port = $_CFG['redis']['app_port'];
	
		$redis = Nosqlhelp::getredis4parm($ip, $port);
		$value = $redis->hgetall('dressa2z');
	    $this->logger->debug("redis 查询成功:".json_encode($value));
		echo $value;
	}
	/**
 * 支付方法
 */	
 function alipayAction(){
 	global $alipay_config;
	$this->log(Trade_Version);
	$typeid = $_GET['typeid'];//$this->getUrlParam();
	$vipuser=$_GET['type'];
	$nick = $_GET['nick'];
	$this->log('nick:'.$nick.'         typeid:'.$typeid);
	global $_CFG;$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
	$type = $dao->getRowByPk('zzbtrade.smstype', '', 'id', $typeid, '');
	if( $typeid == '' || $type == ''||count($type)<1){
		echo 'sql_error';
	}else{
		//////////////////////  创建订单  ////////////////////////////////////////
		$this->log("email:".$alipay_config['seller_email']);
		$smspaylog = array(
					//'payaccdt'=>getDataForXML($_POST['notify_data'],'/notify/gmt_payment'),
					'sellernick'=>$nick,
					'price'=>$type['price'],
					'typetitle'=>$type['title'],
					'smsnum'=>$type['smsnum'],
					'status'=>'0',
					'createtime'=>'now()',
					'source'=>'pc',
					'payemail'=>$alipay_config['seller_email'],
			);
		$this->log('price:'.$type['price'].'         typetitle:'.$type['title'].'               '.$type['smsnum']);
		$payid = $dao->saveRow('zzbtrade.smspaylog' , $smspaylog,'');
		/////////////////////  支付宝处理  //////////////////////////////////////////
		/**************************请求参数**************************/

        //支付类型
        $payment_type = "1";
		
        //必填，不能修改
        //服务器异步通知页面路径
        //$notify_url = "http://www.xxx.com/create_direct_pay_by_user-PHP-UTF-8/notify_url.php";
        $notify_url=$alipay_config['notify_url'];
        //需http://格式的完整路径，不能加?id=123这类自定义参数

        //页面跳转同步通知页面路径
        //$return_url = "http://www.xxx.com/create_direct_pay_by_user-PHP-UTF-8/return_url.php";
        $return_url=$alipay_config['call_back_url'];
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

        //卖家支付宝帐户
        $seller_email = $alipay_config['seller_email'];//$_POST['WIDseller_email'];
        //必填

        //商户订单号
        $ecryid = encrypt($payid,'txtc');
		$out_trade_no = $ecryid;
		$out_trade_no=$out_trade_no.'_'.$vipuser.'_'.time();
        //$out_trade_no = $_POST['WIDout_trade_no'];
        //商户网站订单系统中唯一订单号，必填

        //请与贵网站订单系统中的唯一订单号匹配
			
        //订单名称
        $subject = "爱用交易短信:".$type['title'];//$_POST['WIDsubject'];
        //必填

        //付款金额
        $total_fee = 1;//$type['price'];//$_POST['WIDtotal_fee'];
        //必填

        //订单描述
        $body = $type['title'];//$_POST['WIDbody'];
        //商品展示地址
        //$show_url = $_POST['WIDshow_url'];
        $show_url='';
        //需以http://开头的完整路径，例如：http://www.xxx.com/myorder.html

        //防钓鱼时间戳
		//$anti_phishing_key = AlipaySubmit::query_timestamp();
		$anti_phishing_key='';
        //若要使用请调用类文件submit中的query_timestamp函数

        //客户端的IP地址
        $exter_invoke_ip = "";
        //非局域网的外网IP地址，如：221.0.0.1
        
/*$this->log('$notify_url:'.$notify_url);
$this->log('$return_url:'.$return_url);
$this->log('$seller_email:'.$seller_email);
$this->log('$out_trade_no:'.$out_trade_no);
$this->log('$subject:'.$subject);
$this->log('$total_fee:'.$total_fee);
$this->log('$body:'.$body);
$this->log('$anti_phishing_key:'.$anti_phishing_key);
$this->log('$exter_invoke_ip:'.$exter_invoke_ip);*/
//构造要请求的参数数组，无需改动
		$parameter = array(
				"service" => "create_direct_pay_by_user",
				"partner" => trim($alipay_config['partner']),
				"payment_type"	=> $payment_type,
				"notify_url"	=> $notify_url,
				"return_url"	=> $return_url,
				"seller_email"	=> $seller_email,
				"out_trade_no"	=> $out_trade_no,
				"subject"	=> $subject,
				"total_fee"	=> $total_fee,
				"body"	=> $body,
				"show_url"	=> $show_url,
				"anti_phishing_key"	=> $anti_phishing_key,
				"exter_invoke_ip"	=> $exter_invoke_ip,
				"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
		);
		//建立请求
		$alipaySubmit = new AlipaySubmit($alipay_config);
		$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
		echo $html_text;
		$this->log($html_text);
		


	}
 }
	
	
    /**
	 * 
	 * 推送
	 *
	 */
	function notifyAction(){
		
	global $alipay_config;
	$this->log('收到支付宝推送w信息...');
				//构造通知函数信息
			
			
	$alipayNotify = new AlipayNotify($alipay_config);
	$verify_result = $alipayNotify->verifyNotify();
    $this->log('通知验证结果:'.$verify_result);
    if($verify_result) {//验证成功
		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//请在这里加上商户的业务逻辑程序代
	
		
		//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
		
	    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
		
		//商户订单号
	
		$out_trade_no = $_POST['out_trade_no'];
	
		//支付宝交易号
	
		$trade_no = $_POST['trade_no'];
	
		//交易状态
		$trade_status = $_POST['trade_status'];
	
		$this->log('验证成功...商户订单号:'.$out_trade_no);
	    if($_POST['trade_status'] == 'TRADE_FINISHED') {
			//判断该笔订单是否在商户网站中已经做过处理
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
				$out_trades =  explode('_', $out_trade_no);
		        $this->payopt($out_trades[0],$out_trades[1]);
			//注意：
			//该种交易状态只在两种情况下出现
			//1、开通了普通即时到账，买家付款成功后。
			//2、开通了高级即时到账，从该笔交易成功时间算起，过了签约时的可退款时限（如：三个月以内可退款、一年以内可退款等）后。
	
	        //调试用，写文本函数记录程序运行情况是否正常
	        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
	    }
	    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
			//判断该笔订单是否在商户网站中已经做过处理
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
				$out_trades =  explode('_', $out_trade_no);
		        $this->payopt($out_trades[0],$out_trades[1],json_encode($_POST));
			//注意：
			//该种交易状态只在一种情况下出现——开通了高级即时到账，买家付款成功后。
	
	        //调试用，写文本函数记录程序运行情况是否正常
	        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
	    }
	
		//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	        
		echo "success";		//请不要修改或删除
		
		}
		else {
		    //验证失败
		    echo "fail";
		
		    //调试用，写文本函数记录程序运行情况是否正常
		    //log_result ("这里写入想要调试的代码变量值，或其他运行的结果记录");
		}
	}
	
	/**
	 * 业务操作
	 *
	 * @param unknown_type $out_trade_no
	 * {"discount":"0.00","payment_type":"1","subject":"\u7231\u7528\u4ea4\u6613\u77ed\u4fe1:10\u5143=100\u6761(\u900110\u6761)","trade_no":"2014052944878415","buyer_email":"306800838@qq.com","gmt_create":"2014-05-29 15:31:27","notify_type":"trade_status_sync","quantity":"1","out_trade_no":"OYBh95GHlFc=_0_1401348670","seller_id":"2088801038692892","notify_time":"2014-05-29 15:31:35","body":"10\u5143=100\u6761(\u900110\u6761)","trade_status":"TRADE_SUCCESS","is_total_fee_adjust":"N","total_fee":"1.00","gmt_payment":"2014-05-29 15:31:35","seller_email":"tp@loveapp.cn","price":"1.00","buyer_id":"2088302134000151","notify_id":"4821cc707f4d83bc975d83eb940765342u","use_coupon":"N","sign_type":"MD5","sign":"82fa624c3354fc7a1abad226c519d357"}
	 */
	function payopt($out_trade_no,$session,$POST){
		$this->log('业务操作****************************'.$POST);
		$alipay=json_decode($POST);
		
		$ddun = decrypt($out_trade_no,"txtc");
		if(empty($ddun)){
			$this->log("kong ~");
			return;
		}else{
			$this->log('购买id'.$ddun);
		}
		global $_CFG;$dao =new CommonDao4sSelf($_CFG['DB']['Host'], $_CFG['DB']['Database'], $_CFG['DB']['User'], $_CFG['DB']['Password'] );
		$payre = $dao->getRowByPk('zzbtrade.smspaylog','','id',$ddun,'');
		$this->log($payre['status']);
		if( $payre == '' ){
			$this->log("kong ~");
			return '';
		}else if($payre['status']==0){//支付宝会把支付成功的消息推两遍
			
			
			
			$smspaylog = array(
								//'payaccdt'=>getDataForXML($_POST['notify_data'],'/notify/gmt_payment'),
								'paytid'=>$alipay->trade_no,
								'status'=>'1',
								'paytime'=>$alipay->gmt_payment,
								'callback'=>json_encode($alipay)
			                   );
			$dao->updateRowByPk('zzbtrade.smspaylog',$smspaylog,'id',$ddun,'');
			$pay_msg= $dao->getRowByPk('zzbtrade.user_sms','','sellernick',$payre['sellernick'],'');
			
			$anums=intval($payre['smsnum'])+intval($pay_msg['smsnum']);
			$this->log('所增加的短信条数:'.$anums);
			
			$userinfo_pay_msg=array(
						'smsnum'=>$anums,
					'issendsms'=>'0'
					);
			$dao->updateRowByPk('zzbtrade.user_sms',$userinfo_pay_msg,'sellernick',$payre['sellernick'],'');
			$this->log('user_sms数据库更新成功**************************');
			/* $userextd=array(
					'lastpayrecode'=>$payrecord['payaccdt']
					); */
	/*		$this->save_daily_msg($payre["username"],$payre['msgnum'],$payre['payprice']);
			
			//给用户加日期
		$this->log('ddun***************:'.$ddun);
		$this->log('$payre["username"]*************:'.$payre["username"]);
		//$this->log('now:'.$payrecord['payaccdt']);
		$dao->updateRowByPk('crm_userinfo_pay_msg',$userinfo_pay_msg,'nick',$payre['username'],'');
		$this->log('crm_userinfo_pay_msg数据库更新成功**************************');
		
		$this->log('crm_payrecord数据库更新成功**************************');
		/* $dao->updateRowByPk('userextd',$userextd,'nick',$payre['username'],'');
		$this->log('userextd数据库更新成功**************************'); */
		}
		
		
		
	}
	
	
	//支付宝同步返回
	function paybackcallAction()	
	{
		//out_trade_no=8mTu4WWZV8c%3D_1a670156144d0e32e6b9a2259ed23a2c&request_token=requestToken&result=success&trade_no=2012112025980905&sign=17ea55d1c91699b18a20ea10f0dc80ba&sign_type=MD5
		//?body=10元%3D100条(送10条)&buyer_email=306800838%40qq.com&buyer_id=2088302134000151&exterface=create_direct_pay_by_user&is_success=T&notify_id=RqPnCoPT3K9%252Fvwbh3InR8Md2FzLwcmQa9wOgTQCmzuH9fzuwMzWr2MaabykjFBld4Si4&notify_time=2014-05-29+15%3A50%3A39&notify_type=trade_status_sync&out_trade_no=SwqKAVkBHCM%3D_0_1401349798&payment_type=1&seller_email=tp%40loveapp.cn&seller_id=2088801038692892&subject=爱用交易短信%3A10元%3D100条(送10条)&total_fee=1.00&trade_no=2014052944967815&trade_status=TRADE_SUCCESS&sign=cb52aa0c57c6a76c4d03ab61fce08d09&sign_type=MD5
		$out_trade_no = $_GET['out_trade_no'];
		$out_trades =  explode('_', $out_trade_no);		
		$paycordid  = decrypt($out_trades[0],"txtc");//支付记录ID
		$auth = $out_trades[1];//session
		$result = $_GET['trade_status'];//结果
		$trade_no = $_GET['trade_no'];//支付宝id
		
		$this->log('paycordid:'.$paycordid.'  auth:'.$auth.'  result:'.$result.'  trade_no:'.$trade_no);
		
		//echo '缴费结果:'.$result;
		if($result=='TRADE_SUCCESS')
		{		//去会员中心			

		/*	if($auth=='1'){
				$url="http://cdn.tbmj.net/trade/mobile/html/tradepaylist?v=".Trade_Version."#isiOS=no&smstime=on";
				header("Location:".$url);
			}else{
				$url="http://cdn.tbmj.net/trade/mobile/html/tradelist?v=".Trade_Version."#isiOS=no&smstime=on";
				header("Location:".$url);
				
			}*/
		echo '订购完成，请返回交易管理刷新页面。';

			
		}else{
			
		
		}
	}
	
/**
	 * 
	 * 
	 * 
	 */
	function returnmsgAction(){
		$this->log('支付宝返回');
		//print_r($_SERVER);
		echo 'success';
			
		
				
	}
	/**
	 * 缴费异常
	 */
	function errorAction()
	{

		$this->log('缴费异常');
		if(strpos($_SERVER["HTTP_USER_AGENT"],"Mac"))
		{
			$data['safari'] = 1;
			$this->log('Safari 浏览器！');
		}
		else{
			$data['safari'] = 0;
		}
		$url="http://cdn.tbmj.net/trade/mobile/html/tradepaylist?v=".Trade_Version."#isiOS=no";
		header("Location:".$url);
	}
}
?>
