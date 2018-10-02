<?php require 'includes/common.php';
$as=(isset($_GET['login']) ? $_GET['login'] : '');?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>.ab{padding-top:75px;}</style>	
	
	<script>
function messag(){
	var a=<?php echo $as; ?>;
if(a==0){alert("Enter valid email or password");}}
	</script>

</head>
<body onLoad="messag();">
<?php  include 'includes/header.php'; ?>
 <div class="container ab">
 <div class="col-md-8 col-lg-5 col-lg-offset-4 col-md-offset-2">
 <div class="panel panel-primary ac">
 <div class="panel-heading"><h2>LOGIN</h2></div>
 <div class="panel-body">
 <p class="text-warning">Login to make a purchase</p>
 <form method="POST" action="login_submit.php">
 <div class="form-group">
 <input type="email" class="form-control" placeholder="Email" name="email" required /></div>
 <div class="form-group">
 <input type="password" class="form-control" placeholder="Password" name="password" required /></div>
<div class="form-group"> <input type="submit" class="btn btn-primary" value="Submit"/></div>
 </form></div>
 <div class="panel-footer">Don't have an account?<a href="signup.php"> Register</a></div>
 </div></div></div>
<?php include 'includes/footer1.php'; ?>
 
 </body></html>
