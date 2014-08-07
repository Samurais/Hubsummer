<?php
include_once (REALPATH."/config/Init.inc.php");
require_once (REALPATH.'/include/Class/metaq/lib/MetaQ.php');
require_once (REALPATH.'/include/Class/Nosqlhelp.php');
class BaseController extends \Phalcon\Mvc\Controller
{
	
	

    public function mybase(){
        echo 'hello......';
    }
	
	/**
	 * 打日志 限调试时使用
	 */
	public function  log($str)
	{
		global $_CFG;
		if($_CFG['log'] == 1)//如果为1 则为开启
		{
			$this->logger->debug($str);
		}
	}
	
	
	/**
     * 向Metaq 发消息
     * @param $url
     */
    public function sendMetaq($queue, $datas)
        {
                global $_CFG;
                $metaq = new MetaQ\MetaQ ( $_CFG ['metaq_config'], REALPATH . "/logs" );
                $result = $metaq->put ( $queue, $datas );
                return $result;
        }
	/**
     * 存储session
     *
     * @param string $key
     * @param string $value
     */
    function setTsession($mapname,$keyname,$value)
	    {
	
	            global $_CFG;
	            $ip = $_CFG['redis']['ip'];
	            $port = $_CFG['redis']['app_port'];
	
	            $redis = Nosqlhelp::getredis4parm($ip, $port);
	            $redis->hSet( $mapname , $keyname , $value );
	
	    }
		
	 /**
     * 获取session
     * @param unknown_type $mapname
     * @param unknown_type $keyname
     */
     function  getTsession($mapname,$keyname)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $value = $redis->hget($mapname,$keyname);
                return $value;
        }
   /**
     * 存储一个map的值
     *
     * @param string $key
     * @param string $value
     */
    function setOneKey($mapname,$keyname,$value)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $redis->hSet( $mapname , $keyname , $value );

        }
    /**
     * 取得一个map的所有值
     */
     function getTall($mapname)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $all  = $redis->hGetAll($mapname);
                return $all;
        }
    /**
     * 删除一个map的所有值
     */
     function delAllKey($mapname)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $result = $redis->delete($mapname);
                return $result;
        }

    /**
     * 删除一个key
     * @param unknown_type $auth
     * @return unknown
     */
       function delTSession($mapname,$keyname)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $result = $redis->hdel($mapname,$keyname);
                return $result;
        }
   /**
     * 取得key 的失效时长
     * @param unknown_type $keyname
     */
        function  getTTL($keyname)
        {
                global $_CFG;
                $ip = $_CFG['redis']['ip'];
                $port = $_CFG['redis']['app_port'];
                $redis = Nosqlhelp::getredis4parm($ip, $port);
                $ttl = $redis->ttl($keyname);
                return $ttl;
        }

}
?>
