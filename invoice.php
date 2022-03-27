<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Package Invoice</title>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='css/invoicestyle.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
	<?php include('function.php'); ?>
	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">VSVR Tours
Terna Colony
Nerul, Navi Mumbai 400706

Phone: 9999988888</textarea>

            <div id="logo">

              <!--<div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>-->

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/topfinal.png" alt="logo" height="100px" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		<span>Your Details-</span>
		
		<div id="customer">

            <span id="customer-title">
            	<?php

$s='select * from enquiry order by `Enquiryid` DESC limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[2] . "<br>" ;
		echo $data[4] . "<br>" ;
		echo $data[5];

}
?>
            </span>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php

$s='select * from enquiry order by `Enquiryid` DESC limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[0];


}
?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><?php date_default_timezone_set('Asia/Calcutta'); echo date("d-m-Y") . "<br>" ; echo date("h.m.sa"); ?></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Package Name</th>
		      <th>Description</th>
		      <th>Cost</th>
		      <th>No. of Days</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><textarea><?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[12];

}
?></textarea></td>
		      <td class="description"><span><?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[19];

}
?></span></td>
		      <td><textarea class="cost"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></textarea></td>
		      <td><textarea class="qty"><?php

$s='select * from enquiry order by `Enquiryid` DESC limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[6];


}
?></textarea></td>
		      <td><span class="price"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></span></td>
		  </tr>
		  
		  
		  
		  
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">₹ 0</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"> ₹ <?php

$s='select * from enquiry,package where enquiry.Packageid = package.Packid order by `Enquiryid` desc limit 1';
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo $data[15];

}
?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Kindly Print this page and save it as a pdf for future references.</textarea>
		</div>
	
	</div>
	<center><button onclick="window.print()">Print</button></center><br>

	<center><a href="index.php">Click here to go back to Home Page.</a></center>
</body>

</html>