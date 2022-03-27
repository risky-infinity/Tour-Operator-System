<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
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
	.submitd{
		font-family: ubuntu;
		border-radius: 16px;
		padding: 10px;
		font-size: 16px;
		transition: 0.3s;
		border-style: none;

	}
	.submitd:hover{
		cursor: pointer;
		color: white;
		background-color: #b99884;

	}
	#p.back:hover{
		color: #748960;
	}


</style>
</head>
<body>
<!--header-->
<!--sticky-->

<?php include('function.php'); ?>
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
$data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["Username"]= $_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>
<br><br><br><br><br>
<form method="post" class="center">

	<div class="heading">
		<h1>Admin Login</h1>
	</div>
	<div class="login-box">
		
			<input type="text" name="t1" class="login" placeholder="Username"/>
			<input type="password" name="t2" class="password" placeholder="Password"/>
			<input class="submitd" type="submit" value="LOGIN" name="sbmt"/>
			<p class="back"><a  href="../index.php" style="color:black;font-family:ubuntu;font-size:20px;text-decoration: none;">Click here to go back</a></p>
	</div>

</center>

<!--
<?php //include('topforlogin.php'); ?>
-->

<!--
<div>login</div>
<div>
<form method="post">
<center>
<div class="heading">
<h1>Admin</h1>
</div>
	<div class="login-box">
		<form action="index" method="post"> 
			<input type="text" name="t1" class="login" id="text" placeholder="Username" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" />
			<input type="password" name="t2" id="text" class="password" placeholder="Password" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password"/>
			<a href="/dash"><button name="login" type="submit" class="button">Login</button></a>						
					</form>
			<p><a href="/forgotten" style="color:#999;font-family:ubuntu;font-size:13px;">Forgotten your password?</a></p>
	</div>
</center>
</form>
</div>
<div>Helloooo</div>
<p>Hello</p>-->
<!--/sticky-->
<!--
<div>




<form method="post">
<table width="950px" height="500px" align="center" class="tableshadow">
<tr><td class="toptd">

<tr>
<td class="lefttxt"><table border="0" width="100px" height="200px"><td>User Name</td></td><td><input type="text" name="t1" required pattern="[a-zA-z _]{1,10}" title="Please Enter Only Characters between 1 to 10 for User Name" /></td></tr>
<tr><td class="lefttxt">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title="Please Enter Only Characters between 1 to 10 for Password" /></td></tr></table>
<tr><td></td><td><input type="submit" value="LOGIN" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div> 
-->





</body>
</html>