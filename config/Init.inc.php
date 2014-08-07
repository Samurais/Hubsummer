<?php

header('Cache-control: private');
/* Get the Application real root path. */

define('REAL_ROOT_PATH', REALPATH);
$_CFG['RealRootPath'] = REAL_ROOT_PATH;
$_CFG['BasePath'] = REAL_ROOT_PATH;


if(!file_exists(REAL_ROOT_PATH . '/config/Config.inc.php'))
{
    die(" <h1>File 'config/Config.inc.php' cannot be found. </h1>");
}
define('REAL_ROOT_VER', '1.3.3');

/* Create the BaseURL of Application system.
 * If the url of Application is wrong, you can specify it by hand, for example: http://www.test.com/Application.
 * Note: No "/" at the end of the url.
 */
/*if(strtolower($_SERVER["HTTPS"]) == "on")
{
    $ServerProtocol = "https";
    $ServerPort = "";
}
else
{*/
    $ServerProtocol = "http";
    $ServerPort = $_SERVER["SERVER_PORT"] == "80" ? "":":" . $_SERVER["SERVER_PORT"];
//}

$_CFG["BaseURL"] = $ServerProtocol . "://" . $_SERVER["SERVER_NAME"] . $ServerPort . $_CFG["BasePath"];
define('HTTP_DOCMENT_ROOT',$ServerProtocol."://".$_SERVER['HTTP_HOST'].'');
define('APP_WEB_INDEX_ROOT',HTTP_DOCMENT_ROOT);
/* Require config, functions and class files. */
require(REAL_ROOT_PATH . '/include/Class/Page.class.php');                  // Page class.
require(REAL_ROOT_PATH . '/include/Class/ADOLite/adodb.inc.php');           // ADO class.
require(REAL_ROOT_PATH . '/include/Class/TemplateLite/class.template.php'); // Smarty class.
//wingfeng add it on 2008-09-16
require(REAL_ROOT_PATH . '/include/CommanDaoFm.php');   
require(REAL_ROOT_PATH . '/include/CommonDao4sSelf.php');                     // common DAO 
require(REAL_ROOT_PATH . '/include/CommonService.php');                    // common Servcie                  // project common Servcie
require(REAL_ROOT_PATH . '/include/Class/imagesample.php');   
/**
 * 爱用交易,已修改为手机KEY
 */
define('TOP_Appcode_Trade','21085840');

define('TOP_Appsign_Trade','7eb9e992b2d756715e0803a2915dfcd7');
define('AUTH_CALLBACK_Trade','http://iymtrade.zzgdapp.com/tc/trades');

define('ITEM_CODE','ts-1801030');//订购代码ts-1801030



//if(empty($_CFG['UserLang']))       $_CFG['UserLang']  = $_CFG['DefaultLang'];
//if(empty($_CFG['UserStyle']))      $_CFG['UserStyle'] = $_CFG['DefaultStyle'];
if(empty($_CFG['UserLang']))       $_CFG['UserLang']  = $_CFG['DefaultLang'];

/* include the Language file, send heard info. */
if($_CFG['UserLang'] == '')$_CFG['UserLang'] = $_CFG['DefaultLang'];
$LangCommon = $_CFG['RealRootPath'] . '/source/Lang/' . $_CFG['UserLang'] . '/_COMMON.php';
if(file_exists($LangCommon)) require($LangCommon);
$LangPinYin = $_CFG['RealRootPath'] . '/source/Lang/' . $_CFG['UserLang'] . '/PinYin.php';
if(file_exists($LangPinYin)) require($LangPinYin);

@header("Content-Type: text/html; charset=".$_LANG["Charset"]);


/**
 * close the db
 */ 
function sysCloseDB()
{
    global $MyDB, $MyUserDB, $_CFG;
    if( !empty($MyDB)){
	    $MyDB->Close();
	    if(!empty($_CFG['UserDB']))
	    {
	        $MyUserDB->Close();
	    }
    }
    
    global  $mydbpools;
    if( !empty($mydbpools)){
    
    	foreach ( $mydbpools as $key =>$value){
    		if( !empty($key) && !empty($value)){
    			$value->Close();
    		}
    	}
    
    }
    
}

$mydbpools = array();
$MyDB = &ADONewConnection('mysql', 'pear');
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
register_shutdown_function('sysCloseDB');


/* Add slashes to REQUEST, GET, POST, COOKIE, FILES vars. */
if(!get_magic_quotes_gpc())
{
    $_REQUEST = sysAddSlash($_REQUEST);
    $_GET     = sysAddSlash($_GET);
    $_POST    = sysAddSlash($_POST);
    //$_COOKIE  = sysAddSlash($_COOKIE);
    //$_FILES   = sysAddSlash($_FILES);
}

if($_SERVER["SERVER_NAME"] != '')
{
    $_CFG['BrowserMode'] = true;

}

//是否打开系统日志文件
ini_set('error_log',REAL_ROOT_PATH.'/log/phperror.txt');
ini_set('display_errors',1);
ini_set('log_errors',1);


?>
