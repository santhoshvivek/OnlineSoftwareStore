<?php

session_start();
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];

 $conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Geek Software Shop</title>
<link href='http://localhost/styles.css' rel='stylesheet' type='text/css' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	function deleteCartItem(id)
	{
		//var productId = document.getElementById('cartbutton2').name;
		var productId= id;
			  $.ajax({
			  	url : "cartSomething.php",
			  	type : "GET",
			  	data : {'productId':productId},
			  	success : function(data){
			  		window.location.reload();
			  	}});
	}	
</script>
</head>
<body>
<!-- begin #container -->
<div id='container'>
	<!-- begin #header -->
    <div id='header'>
    	<div class='logo' align='left'><a href=''><img src='images/logo.png' alt='' /></a></div>
    	<div class='session1' align='right' ><p>Hello User	 &nbsp;&nbsp;<a href='logout.php'>Logout</a></p> </div>
    	<div class='changePassword' align='right'><p> <a href='changePassword.html'>(Change Password)</a> </p></div>
    	&nbsp;
    	&nbsp;
        <div class='menuContainer' style='background:#484848'>
            <div class='menu' style='float:left ;padding:20px 0 0 0;	margin:0 0 20px 0;'>
                <ul>
                    <li ><a href='loggedin.html'>HOME</a></li>
                     <!--<li><a href='login.html'>LOGIN</a></li>-->
                    <li><a href='account_page.html'>USER ACCOUNT</a></li>
                    <li id='active'><a href='cart.php'>MY CART</a></li>
                    <li><a href='services.html'>SERVICES</a></li>                    
                    <li><a href='location.html'>LOCATION</a></li>
                </ul>
            </div>
      
                <ul class='icons'>
                    <li><a href=''><img src='images/twitter.png' alt='' /></a></li>
                    <li><a href=''><img src='images/facebook.png' alt='' /></a></li>
                    <li><a href=''><img src='images/flickr.png' alt='' /></a></li>
                    <li><a href=''><img src='images/stumble.png' alt='' /></a></li>
                </ul>
            <div class='clearfloat'></div>
        </div>
         </div>
        
    </div> 

<?php


$sql = "Select * from userinfo where username = '".$username."'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	#to be removed***********************
        #echo " Name: " . $row["FirstName"]. " " . $row["LastName"];
        #echo $row['userId'];
        $userid = $row['userId'];
        #echo "<br/>";
		#echo "userid extracted:";
		
    }
    
  }
 
	
	$sql1 = "Select * from cart where UserId = '".$userid."'";
    $result1 = $conn->query($sql1);
	//$sql3 = "SELECT count(*) FROM cart WHERE UserId='".$userid."' AND ProductId='".$productId."'";
    $i=0;
 	if ($result1->num_rows > 0)
 	{
    // output data of each row
    echo "<div class='loginDiv' align='center'>
        	<form name='login' method='post'>
        		
        		<table cellspacing='50' border='0' >";
        $total =0;
	    while($row1 = $result1->fetch_assoc()) 
	    {
	    	#to be removed***********************
	        #echo " Name: " . $row["FirstName"]. " " . $row["LastName"];
	        #echo $row1['Product_Name'];
			$productName = $row1['ProductName'];
			#echo "<br/>";
			#echo $row1['ProductPrice'];
			$productPrice = $row1['ProductPrice'];
			$timestamp = $row1['Timestamp'];
			$productId= $row1['ProductId'];
			#echo "<br/>";
			#echo $row1['ProductCompanyName'];
			$productCompany = $row1['ProductCompany'];
			#echo "<br/>";
			
	        #echo "<br/>";
	       
	       # echo $row1['Timestamp'];
	        
	        echo "<br/>";
	        
	        # echo $row1['ProductId'];
	        
			
			echo "<br/>";
	
	    

	
echo "
	
        			<tr>
        				<td>
        					$timestamp
        				</td>
        				<td>
        					$productName
        				</td>
        				<td>
        					$productCompany
        				</td>
        				<td>
        					$productPrice
        				</td>
        				<td>
        				   
        					<input type='button' id='cartbutton2' name=$productId value='delete' onclick='deleteCartItem($productId)'/>
        				</td>
        				
        			</tr>";
        			$total = $total+$productPrice;
				    
        		//<?php
   	}//endofwhile
   	echo "<tr></tr>";
  echo "<tr><td></td><td></td><td>Total</td><td>$total</td>";
  echo " 	</table>";
  
	}
	
	
?>
        		<br><br>
        		
        		<br /><br />
        		
        	</form>
        	
        </div>
	
	</table>
        		
    <div id='divider' align='right'><a href='loggedIn.html'><input type='button' name='submit' value='Continue Shopping' id='cartbutton'></a>  
    	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href='checkout.php'><input type='button' name='Checkout' value='Checkout' id='cartbutton'></a></div>
    <br><br><br>
        		
	
<?php
}
else
{
	echo "<div id='container'>
    <div id='header'>
    	<div class='logo' align='center'><a href=''> <img src='images/logo.png' /></a></div>
    </div></div>
	<div align='center'><h1>Please <a href='login.html'>login </a> to view cart</h1></div>";
}

?>	
    
</body>
</html>