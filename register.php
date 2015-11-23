<?php
  
  $conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";
  
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $emailId = $_POST["emailId"];
  $address1 = $_POST["address"];
  #$address2 = $_POST["addressLine2"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  $zipcode = $_POST["zipcode"];
  $phone = $_POST["phone"];
	
 #check whether user is already registered:
 
 $sql = "Select * from userinfo where username = '".$username."'";
 $sql2 = "Select * from userinfo where Emailid='".$emailId."'";
 $result = $conn->query($sql);
 $result2 = $conn->query($sql2);
 if (($result->num_rows > 0)  || ($result2->num_rows > 0))
 {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	#to be removed***********************
        #echo " Name: " . $row["FirstName"]. " " . $row["LastName"];
        //echo $row;
		echo "User already registered";
		echo "Please <a href='login.html'>click here</a> to login";
		echo "<br/>";
    }
	while($row2 = $result2->fetch_assoc()) 
    {
    	#to be removed***********************
        #echo " Name: " . $row2["FirstName"]. " " . $row2["LastName"];
		echo "<html><body><div>Email Id already registered in the system</div></body></html>";
		echo "Please <a href='login.html'>click here</a> to login";
		echo "<br/>";
    }
 } 


 else 
 {
    #echo "inserting data into database...";
	echo "<br>";
    #echo " ";
	$sql = "INSERT INTO userinfo (LastName, FirstName,Address ,State ,City ,postalCode ,EmailId ,Username ,Password ,Phone) VALUES ('".$lastName."', '".$firstName."','".$address1."','".$state."','".$city."','".$zipcode."','".$emailId."','".$username."','".$password."','".$phone."')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "New record created successfully";
		echo "<html><body><div>You will be redirected to login page in few seconds. If not redirected, please <a href='login.html'>click here</a></div></body></html>";
		header('Refresh:5;url=http://localhost/login.html'	);
		echo "<br>";
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}	
 }
$conn->close();
 

	

?>