<?php require 'includes/common.php';
if(isset($_SESSION['email'])) {
header('location: products.php');
} ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
#banner_image{
padding-top: 75px;
padding-bottom: 50px;
text-align: center;
color: #f8f8f8;
background: url(intro-bg_1.jpg) no-repeat center center; background-size: cover;
min-height:600px;}
#banner_content{position: relative;
 padding-top: 6%;
padding-bottom: 6%;
margin-top: 12%;
margin-bottom: 12%;
background-color: rgba(0, 0, 0, 0.7);
}	
</style>	
</head>
<body>
<?php include 'includes/header.php' ?>
 <div id="banner_image">
 <div class="container">
 <div id="banner_content"> <h2>We sell lifestyle</h2>
 <p>Flat 40% OFF on premium brands</p>
 <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
</div></div></div>
<?php include 'includes/footer.php' ?>
</body></html>