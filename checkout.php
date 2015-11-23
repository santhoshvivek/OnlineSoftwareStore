<html>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>geek Software Shop</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="logo" align="left"><a href=""><img src="images/logo.png" alt=""/></a></div>
        <div class="menuContainer">
            <div class="menu">
                <ul>
                    <li id="active"><a href="">HOME</a></li>
                     <li><a href="login.html">LOGIN</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                </ul>
            </div>
                <ul class="icons">
                    <li><a href=""><img src="images/twitter.png" alt="" /></a></li>
                    <li><a href=""><img src="images/facebook.png" alt="" /></a></li>
                    <li><a href=""><img src="images/flickr.png" alt="" /></a></li>
                    <li><a href=""><img src="images/stumble.png" alt="" /></a></li>
                </ul>
            <div class="clearfloat"></div>
        </div>
        <div class="clearfloat"></div>
        
    </div>

<?php
session_start();
$userid = $_SESSION['userId'];

$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
$sql1 = "Select * from cart where UserId ='".$userid."'";
$result1 = $conn->query($sql1);
if($result1->num_rows >0)
{
	$temparray = array();
	while($row = $result1->fetch_assoc())
	{
		$temp = array("company"=>$row["ProductCompany"],
						"name"=>$row["ProductName"],
						"pid"=>$row["ProductId"],
						"price"=>$row["ProductPrice"]);
		array_push($temparray,$temp);
	}
}
$sql2 = "Delete from cart where UserId ='".$userid."'";
$result2 = $conn->query($sql2);
#echo json_encode($temparray);
#echo "done";
echo "<div class='registerDiv' align='center'> <h2> Items Checked out successfully.</h2><br> Click <a href='loggedin.html'> here</a> to return to home page or <a href='logout.php'> Logout </a></div> ";
foreach ($temparray as $element)
{
	#echo json_encode($element);
	$pid = $element["pid"];
	$name = $element["name"];
	$company = $element["company"];
	$price = $element["price"];
	$sql3 = "Insert into orders(UserId,ProductId,ProductName,ProductCompany,OrderPrice) values ('".$userid."','".$pid."','".$name."','".$company."','".$price."')";
	$result3 = $conn->query($sql3);
	
}
?>


    <!-- end #header -->
    
    <!-- begin #mainContent -->
    <div id="mainContent">
    	
        
        <div class="clearfloat"></div>
    </div>
    <!-- end #mainContent -->
    <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
    <!-- begin #footer -->
    <div id="footer">
		<p>
        	Terms of Use | <a title="This page validates as XHTML 1.0 Strict" href="http://validator.w3.org/check/referer" class="footerLink"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | 
			Designed by Sankar, Santhosh and Rukmini            
        </p>
	</div>
    <!-- end #footer -->
</div>    </html>



