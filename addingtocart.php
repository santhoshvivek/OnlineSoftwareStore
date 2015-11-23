<?php
session_start();
$username = $_SESSION['username'];
$find= $_GET['look'];
$time= time();
$timestamp= date('Y-m-d', $time);
    $conn = mysqli_connect("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$sql1="Select * from userinfo WHERE Username='".$username."'";

$result1 = mysqli_query($conn, $sql1);
$userid;
 if( $result1 ->num_rows >0){
 while($row = mysqli_fetch_array($result1)) {
 
	$userid=$row['userId'];	
	
}}else{
	
	echo 'No row';
	
}

$sql1 = "Select * from productinfo where ProductId = '".$find."'";
    $result1 = $conn->query($sql1);
	
 	if ($result1->num_rows > 0)
 	{
           
	    while($row1 = $result1->fetch_assoc()) 
	    {
	    	$productName = $row1['Product_Name'];
			$productPrice = $row1['ProductPrice'];
			$productCompany = $row1['ProductCompanyName'];
		}
	}
$sql2 = "INSERT INTO cart VALUES ('".$userid."','".$timestamp."','".$find."','".$productCompany."','".$productName."',".$productPrice.")";
$result2 = mysqli_query($conn, $sql2);
 mysqli_close($conn);
 

   
?>