<?php
include_once (REALPATH."/app/library/BaseController.php");
require_once (REALPATH."/include/Class/Nosqlhelp.php");
require_once (REALPATH.'/topsdk/TopClient.php');
require_once (REALPATH.'/topsdk/request/TmcUserPermitRequest.php');
require_once (REALPATH.'/topsdk/RequestCheckUtil.php');
class MytestController extends BaseController
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
        echo "<h1>Hello! ".$this->ip."My Name is WangShuxue</h1>";
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
	 * 测试调用topapi
	 */
	
	public function testtopAction()
	{
		
		global $_CFG;
		
		$ip =  $_CFG['redis']['ip'];
		$port = $_CFG['redis']['app_port'];
		$c = new TopClient;
        $c->appkey = "21085840";
        $c->secretKey = "7eb9e992b2d756715e0803a2915dfcd7";
        $req = new TmcUserPermitRequest;
      
        $redis = Nosqlhelp::getredis4parm($ip, $port);
        $sessionKey = $redis->hget(urlencode("dressa2z"),"trade_access_token_m");
       
        if($sessionKey!='')
        {
            $resp = $c->execute($req, $sessionKey);
            $this->logger->debug("nick: dressa2z  结果:".json_encode($resp));
            echo "nick: dressa2z  结果:".json_encode($resp);
        }else{
            echo "nick: dressa2z  结果: session 过期";
        }
	}
	/**
	 * 获取默认物流公司
	 * @author Duanhq
	 */
    function getSendAction()
    {
    	$nick=$_GET['nick'];
    	$dao = new CommonDao();
    	//取得在线下单快递公司
    	$sql_on = "select * from zzbtrade.usedcompanies where (nick='$nick')";
    	 
    	$company_on= $dao->getRowsBySQl($sql_on,'','','');
    
    	echo json_encode($company_on);
    }
	

}
?>
