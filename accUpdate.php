<?php
    session_start();
    
    $conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	$user = $_POST["user"];
	$fName = $_POST["fname"];
	$lName = $_POST["lname"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];
	
	$sql = "UPDATE userinfo set Phone = '".$phone."',State = '".$state."' ,postalCode = '".$zip."' ,FirstName = '".$fName."',LastName='".$lName."' ,Address= '".$address."',city= '".$city."' , EmailId='".$email."' WHERE Username='".$user."'";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "record updated successfully";
		echo "<br>";
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
    exit;

?>