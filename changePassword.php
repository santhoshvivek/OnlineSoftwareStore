<?php

session_start();
$username = $_SESSION["username"];
$oldpassword = $_GET["oldPassword"];
$newPassword = $_GET["newPassword"];

#conencting to db
$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
  

#check whether user exists:
$sql = "Select * from userinfo where username = '".$username."' and password='".$oldpassword."'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
 	$sql2 = "Update userinfo set password='".$newPassword."' where username='".$username."'";
	$result2 = $conn->query($sql2);
	echo "update successfull";
	#echo '<META HTTP-EQUIV="Refresh" Content="0; URL=loggedIn.html">';  
 }
else
	{
		echo "Old password is incorrect!!";
	}

?>