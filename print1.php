<html>
<head>
	<STYLE>
	.container{
		padding:25px;
		border:1px solid #eaeaea;
		-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
margin-top: 25px;
border-radius: 25px;
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
        <li ><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="enter.php">SUBMIT YOUR SERVICE</a></li>
		<li class="active"><a href="#">RECENT SUBMISSIONS</a></ll>
        
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
$cpsSimple = new CPS_Simple($cpsConn);
$documents = $cpsSimple->search("*", 0, 100);
foreach ($documents as $id => $document) {
	echo '<div class="container">';
	echo 'NAME OF SERVICE PROVIDER : &nbsp;'.$document->NAME . '<br />';
	echo 'ADDRESS OF SERVICE PROVIDER : &nbsp;'.$document->ADDRESS . '<br />';
	echo 'WHY CHOOSE YOU : &nbsp;'.$document->SPECIALITY . '<br />';
	echo'</div>';

	
} ?>
</body>
</html>