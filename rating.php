<html>
<head>
	<STYLE>
	.col-md-6{
		padding:25px;
		border:1px solid #eaeaea;
		
	}
	</STYLE>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body>
	
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Root  I</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="enter.php">Submit your service</a></li>
		<li><a href="#">Recently listed services</a></ll>
      <li><a href="index.html">Compare service></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
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
$cpsSimple = new CPS_Simple($cpsConn);?>
<div class="container">
<div class="row">
  <div class="col-md-6">
 <?php

  $document = $cpsSimple->retrieveSingle('5573ce24ea81b');
  echo '<u>'.$document->NAME  . '</u><br />';


?>
  </div>
  <div class="col-md-6">

  <?php
  $document = $cpsSimple->retrieveSingle('5573ce987f720');
   echo '<u>'.$document->NAME  . '</u><br />';
?>
  </div>
   <div class="col-md-6">
 <?php

  $document = $cpsSimple->retrieveSingle('5573ce24ea81b');
  

echo $document->SPECIALITY . '<br />';
?>
  </div>
   <div class="col-md-6">
 <?php

  $document = $cpsSimple->retrieveSingle('5573ce24ea81b');
 

echo $document->SPECIALITY . '<br />';
?>
  </div>
</div></div>




</body>
</html>