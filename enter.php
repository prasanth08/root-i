<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Route i</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
select
{
	height:34px;
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	border:1px solid #ccc;
	border-radius:4px;
}
h1{
	margin-bottom:50px;
	margin-top:50px;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Route I</a>
    </div>

    <div class="collapse navbar-collapse" >
     
      
      <ul class="nav navbar-nav navbar-right">
        
        
        <li><a href="index.html">HOME</a></li>

                <li class="active"><a href="#">SUBMIT YOUR SERVICE <span class="sr-only">(current)</span></a></li>
                <li><a href="print1.php">Recently listed services</a></li>
                <li><a href="compare.php">Compare services</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<h1>Register your service</h1>

<form action="submit.php" method="get">
	WHAT KIND OF SERVICES DO YOU PROVIDE   <select name="ser"><br>
    <option value="FOOD" name="food ">FOOD</option>
    <option value="OTS" name="ots">OTHER SERVICES</option>
</select><br><br>
NAME : <input type="text" class="form-control" name="name"><br>
ADDRESS (WITH PIN):<br>
<textarea class="form-control" col="20" row="6" name="add"></textarea><br>
WHAT MAKES YOU DIFFERENT FROOM OTHERS:<br>
<textarea class="form-control" col="20" row="6" name="spcl"></textarea><br>
<input class="btn btn-large btn-primary" type="submit">
</form>

</div>

</body>
</html>

