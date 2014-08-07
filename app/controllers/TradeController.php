<?php
include_once (REALPATH."/app/library/BaseController.php");
require_once (REALPATH."/include/Class/Nosqlhelp.php");
require_once (REALPATH.'/topsdk/TopClient.php');
require_once (REALPATH.'/topsdk/request/TmcUserPermitRequest.php');
require_once (REALPATH.'/topsdk/RequestCheckUtil.php');
class TradeController extends BaseController{
    
    function  indexAction()
    {
    	$data=array();
    	$this->view->setVar("data", $data);
    }
    
    function interceptorAction(){
    	$data=array();
    	$this->view->setVar("data",$data);
    }
    
	function smsAction(){
		$data=array();
    	$this->view->setVar("data",$data);
	}
	function zdrateAction(){
		$data=array();
    	$this->view->setVar("data",$data);
	}
	
	function batchEvaluationAction(){
		$data=array();
		$this->view->setVar("data",$data);
	}
	
	function evaluateAction(){
		$data=array();
		$this->view->setVar("data",$data);
	}
	
    function themeAction(){
    	$data=array();
		$this->view->setVar("data",$data);
    }
    
    function  tradedetailAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function  printSendAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function  customPrintAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function  openFastAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function  openSendAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function  sendMtextAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function gentlytaskAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function details_pageAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function editMoAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function fastMoAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function sendMoAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function printPreviewAction()
    {
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function refundinfoAction(){
    	
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function upLogAction(){
		$data=array();
		$this->view->setVar('data',$data);    	
    }
    
    function recruitAction(){
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
    function wwindexAction(){
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function facePrintAction(){
    	$data=array();
    	$this->view->setVar('data',$data);
    }

    function faceMtextAction(){
    	$data=array();
    	$this->view->setVar('data',$data);
    }
    
}


?>