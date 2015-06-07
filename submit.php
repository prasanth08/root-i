<?php
require_once 'cps_api.php';
require_once 'cps_simple.php';



$connectionStrings = array(	
  'tcp://cloud-us-0.clusterpoint.com:9007',	
  'tcp://cloud-us-1.clusterpoint.com:9007',	
  'tcp://cloud-us-2.clusterpoint.com:9007',	
  'tcp://cloud-us-3.clusterpoint.com:9007',	
);	

$cpsConn = new CPS_Connection(new CPS_LoadBalancer($connectionStrings), 'testdata', 'alvinzach@gmail.com', 'kattanam', 'document', '//document/id', array('account' => 100167));	

$cpsSimple = new CPS_Simple($cpsConn);	

$ser=$_GET["ser"];
$name=$_GET["name"];
$add=$_GET["add"];
$spcl=$_GET["spcl"];
$document = array(
	'SERVICE' =>$ser ,
	'NAME' =>$name ,
	'ADDRESS' =>$add ,
	'SPECIALITY' =>$spcl ,
	)
;

// Insert
$cpsSimple->insertSingle(uniqid(), $document);

