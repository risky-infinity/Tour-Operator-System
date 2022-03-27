<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">
<title>Untitled Document</title>
<style type="text/css">
	.design{
		font-size: 20px;
		font-family: 'Open Sans', sans-serif;
		font-family: 'Ubuntu', sans-serif;

	}

</style>
</head>

<body>
<table class="design" style="width:100%"><br><br>
<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><p> <a href="adduser.php">• Add User</a></p></td></tr>
<tr><td><a href="updateuser.php">• Update User</a></td></tr>
<tr><td><a href="deleteuser.php">• Delete User</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">• Add Category</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">• Update Category</a></td></tr>
<tr><td><a href="deletecategory.php">• Delete Category</a></td></tr>
<?php }?>



<?php if($_SESSION["usertype"]=="Admin")
{?>
<?php }?>

<tr><td><a href="addpackage.php">• Add Package</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatepackage.php">• Update Package</a></td></tr>
<tr><td><a href="deletepackage.php">• Delete Package</a></td></tr>

<?php }?>

<tr><td><a href="viewpackage.php">• View Package</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<?php }?>

<tr><td><a href="viewenquiry.php">• View Enquiry</a></td></tr>
</table>

</body>
</html>