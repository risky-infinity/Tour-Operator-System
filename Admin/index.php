<?php if(!isset($_SESSION)) { session_start(); } ?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
<style type="text/css">
	.col-sm-9{
		padding-left: 20%;
		padding-top: 5%;
		font-family: 'Open Sans', sans-serif;
		font-family: 'Ubuntu', sans-serif;
	}
</style>
</head>
<body>
<!--header-->
<!--sticky-->

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9" align="" style="font-size: 80px;">Welcome<br> To<br>Admin Panel</div>


</div>

</body>
</html>