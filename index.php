<?php
error_reporting(E_ALL & ~E_NOTICE);
@header("Content-Type: text/html; charset=UTF-8");
define('REALPATH',__DIR__);
define('BASEPATH',__DIR__);

try {
	
	//Read the configuration
	$config = new Phalcon\Config\Adapter\Ini(__DIR__.'/app/config/config.ini');

    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        __DIR__.$config->application->controllersDir,
        __DIR__.$config->application->configDir,
        __DIR__.$config->application->pluginsDir,
        __DIR__.$config->application->libraryDir,
        __DIR__.$config->application->modelsDir,
    ))->register();

    //Create a DI
    $di = new Phalcon\DI\FactoryDefault();

    //Setting up the view component
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('./app/views/');
        return $view;
    });
	
	$di->set('logger', function() use ($config)  {
    $logger = new \Phalcon\Logger\Adapter\File(__DIR__.$config->application->logDir .  'access.' . date('Ymd', time()) . '.log');
    return $logger;
    });
    
    

    //Handle the request
    $application = new \Phalcon\Mvc\Application();
    $application->setDI($di);
    echo $application->handle()->getContent();

   } catch(\Phalcon\Exception $e) {
     $pos = strpos($e->getMessage(), "class cannot");
   	if($pos===false)
	{
		echo "出错啦: ", $e->getMessage();
	}else{
     echo '亲，欢迎来到爱用交易， 但此地址并不存在，可能只是个传说。。。';
	}
}


?>
