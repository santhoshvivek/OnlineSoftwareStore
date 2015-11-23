<?php
    session_start();
	$user = $_SESSION["username"];
	$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  	if (!$conn) 
  	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM userinfo WHERE Username = '".$user."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$email = $row["EmailId"];
	$fName = $row["FirstName"];
	$lName = $row["LastName"];
	$address = $row["Address"];
	$state = $row["State"];
	$city = $row["City"];
	$zip = $row["postalCode"];
	$phone = $row["Phone"];
	$id = $row["userId"];
	$resultArray1 = array("username"=>$user,
						"email"=>$email,
						"fName"=>$fName,
						"lName"=>$lName,
						"address"=>$address,
						"state"=>$state,
						"city"=>$city,
						"zip"=>$zip,
						"phone"=>$phone,
						"id"=>$id);
	//echo $id;
	$sql2="SELECT * FROM orders WHERE UserId=".$id;
	//echo $sql2;
	$result2 = $conn->query($sql2);
	//$dbarray = mysqli_fetch_array($result2);
	$rowcount = mysqli_num_rows($result2);
	
	//echo "ROWCOUNT    ". $rowcount;
	$resultArray = array();
		$interArray=array();
		if($result2 ->num_rows >0)
		{
		while($row = $result2->fetch_assoc()){
			$id = $row["OrderId"];
			$userId = $row["UserId"];
			$prod = $row["ProductId"];
			$cost = $row["OrderPrice"];
			
			$company=$row["ProductCompany"];
			$name=$row["ProductName"];
			
			$tempArray = array("orderId"=>$id,
							    "userId"=>$userId,
								"productId"=>$prod,
								"company"=>$company,
								"name"=>$name,
								"cost"=>$cost);
			array_push($interArray,$tempArray);			
		}
		}
		array_push($resultArray,$resultArray1,$interArray);
		echo json_encode($resultArray);
		return $resultArray;
	
?>