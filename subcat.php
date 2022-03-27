<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:20px; color:#09F; font-family: 'Raleway', sans-serif;"><b>To go back</b></td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px; font-family: 'Raleway', sans-serif;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}

?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText" style="font-family: 'Raleway', sans-serif;">Available Tours</td></tr>
<tr><td class="paraText" width="900px">




<table cellpadding="0" cellspacing="0" width="900px">

<?php

$s="select * from subcategory where Catid='" .$_GET["catid"] . "'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
		


<tr>
<?php

	}?>
<td>
<table border="0" width="100px" bordercolor="#FF6666">

<tr><td align="center" style="background-color:#60B0E6; color:#FFF; font-family: 'Raleway', sans-serif;"><?php echo $data[1];?> </td></tr>
<tr><td class="image"><img src="Admin/subcatimages/<?php echo $data[3]; ?>" width="250px" height="200px" /></td></tr><br/><br/>
<tr><td align="center" style="background-color:#60B0E6; font-family: 'Raleway', sans-serif;"><a href="package.php?subcatid=<?php echo $data[0];?>"><font color="#FFFFFF">View Detail</font></a></td></tr>

</table>
</td>
<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>




</td></tr></table>

</div>

</div>

<div style="clear:both"></div><br><br><br>

<?php include('bottom.php'); ?>
</body>
</html>