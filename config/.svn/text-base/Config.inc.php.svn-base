<?php

$_CFG['LangList']['EN_UTF-8']    = 'English UTF-8';
$_CFG['LangList']['ZH_CN_UTF-8'] = 'ZH_CN UTF-8';
$_CFG['DefaultLang']             = 'ZH_CN_UTF-8';



/* 3. Define the username and password of the BugFree database. */
$_CFG['DB']['User']        = 'tradeuse';
$_CFG['DB']['Password']    = '123456';
$_CFG['DB']['Host']        = '10.140.255.1';
$_CFG['DB']['Database']    = 'zzbtrade';
$_CFG['DB']['TablePrefix'] = 'nb_';
$_CFG['DBCharset']         = 'UTF8';


//redis config
$_CFG['redis']['ip']='10.128.7.156'; //外网
$_CFG['redis']['app_port']= 22151 ;


//日志开关 (0：关闭, 1:开启)
$_CFG['log'] = 1;

/***
 * metaq 队列
 */
 $_CFG['metaq_config']  = array(
    'zkHosts' => '10.128.5.228:2181',
    'brokers' => array(
        0 => array(
            'role' => 'master',
            'host' => '10.128.5.228',
            'port' => 8123,
            'topics' => array(
               'iytrade' => array(
                    'partitions' => array(
                        0
                    ),
                ),
            ),
        ),
    ),
);

?>
