
<?php
require 'includes/common.php' ; 
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $aas=(isset($_GET['pass']) ? $_GET['pass'] : '');?>
	<script>
	function message(){
		var js=<?php echo $aas ;?>;
		if(js==0){
		alert("Enter Entries Carefully");}
		if(js==1){
	alert("Password Changed Successfully !!");}}
	</script>
</head>
<body onLoad="message();">
<?php
include 'includes/header.php' ; 
?>
 <div class="container ab" style="padding-top:80px;">
 <div class=" col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4">
 <h4><b>Change Password</b></h4>
 <form action="settings_script.php" method="POST">

 <div class="form-group">
 <input type="password" class="form-control" placeholder="Old Password" name="old_pass" required /></div>
 <div class="form-group">
 <input type="password" class="form-control" placeholder="New Password" name="new_pass" required /></div>
  <div class="form-group">
 <input type="password" class="form-control" placeholder="Re-type New Password" name="re_new_pass" required /></div>
<div class="form-group"> <input type="submit" class="btn btn-primary" value="Change"required /></div></div></div></form>
 <?php
include 'includes/footer1.php' ; 
?>
 </body></html>

 