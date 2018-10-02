<? php
require 'includes/common.php' ; 
if(isset($_SESSION['email'])){header('location:products.php')};
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.ab{padding-top:75px;}	

	</style>
		<?php $as=(isset($_GET['sign']) ? $_GET['sign'] : '');?>
	<script>
function messag(){
	var a=<?php echo $as; ?>;
if(a==0){alert("Email id already Registered");}}
	</script>

	
	
</head>
<body onLoad="messag();">
<?php include 'includes/header.php' ;?>
 <div class="container ab">
 <div class=" col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
 <h1><b>SIGN UP</b></h1>
 <form method="POST" action="signup_script.php">

 <div class="form-group">
 <input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z]{3,}" title="Your username should contain only lower-case or upper-case letters and of length at least 3. e.g.-johnNAsH" required /></div>
 <div class="form-group">
 <input type="email" class="form-control" placeholder="Email" name="email"   required /></div>
  <div class="form-group">
 <input type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number,one uppercase and lowercase letter, and at least 5 or more characters" required /></div>
 <div class="form-group">
 <input type="tel" class="form-control" placeholder="Contact" name="contact" pattern="[0-9]{10}" title="Enter 10-digit phone no. e.g.-9971099999" required /></div>

  <div class="form-group">
 <input type="text" class="form-control" placeholder="City" name="city" required /></div>
  <div class="form-group">
 <input type="text" class="form-control" placeholder="Address" name="address" required /></div>
<div class="form-group"> <input type="submit" class="btn btn-primary" value="Submit"/></div></div></div></form>
<?php include 'includes/footer1.php' ;?>
 
 </body></html>

 