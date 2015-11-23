<?php

session_start();

$username = $_GET["username"];
$_SESSION['username']=$username;
$password = $_GET["password"];

#conencting to db
$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
if($username=="admin")
{
	$sql2 = "Select * from userinfo where username = '".$username."' and password='".$password."'";
$result1 = $conn->query($sql2);
if ($result1->num_rows > 0)
 {	
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin_page.html">';  
 }
else
	{
		echo "Invalid username and password";
	}
}  
else 
{
	

#check whether user exists:
$sql = "Select * from userinfo where username = '".$username."' and password='".$password."'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {	
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=loggedIn.html">';  
 }
else
	{
		echo "Invalid username and password";
	}
}
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
        $_SESSION['userId'] = $row['userId'];
        #echo "<br/>";
		#echo "userid extracted:";
		
    }
    
  }
?>