<?php

session_start();
$userid = $_SESSION['userId'];
$productId1 = $_GET['productId'];


$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "Delete from cart where UserId = '".$userid."' and productId='".$productId1."'";
    $result1 = $conn->query($sql1);
	//$sql3 = "SELECT count(*) FROM cart WHERE UserId='".$userid."' AND ProductId='".$productId."'";
    
 	if ($conn->query($sql1) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>