<?php
#conencting to db


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'ADD':
            insert();
            break;
        case 'FIND':			
            select();
            break;
		case 'DELETE':
			delete();
			break;
		case 'UPDATE':
			update();
			break;
    }
}

function select() {
	$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  	$productId = $_POST["prodId"];
	if($productId!=null)
	{
		$sql = "Select * from ProductInfo where ProductId= '".$productId."'";	
		$result = $conn->query($sql);
		if($result == null)
		{
			echo "No such Product exists with the product ID";
		}
		else
		{
			$row = $result->fetch_assoc();
			$productId = $row["ProductId"];
			$productName = $row["Product_Name"];
			$description = $row["ProductSpecification"];
			$company = $row["ProductCompanyName"];
			$price = $row["ProductPrice"];
			$category = $row["ProductCategory"];
			$link = $row["ProductDemoVideoLink"];
			$releaseDate = $row["ProductReleaseDate"];
			
			$resultArray = array("productId"=>$productId,
								"productName"=>$productName,
								"description"=>$description,
								"company"=>$company,
								"price"=>$price,
								"category"=>$category,
								"link"=>$link,
								"releaseDate"=>$releaseDate);
			echo json_encode($resultArray);
			
			
			return $resultArray;
		}		
	}
	
	exit;
}

function insert() {
		$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $productId = $_POST["prodId"];
	$productName = $_POST["prodName"];
	$description = $_POST["prodDescription"];
	$company = $_POST["company"];
	$price = $_POST["prodPrice"];
	$category = $_POST["category"];
	//$link = $_POST["link"];
	$releaseDate = $_POST["date"];
	$sql = "INSERT INTO productInfo (ProductId,Product_Name,ProductPrice,ProductCategory,ProductCompanyName,ProductReleaseDate,ProductSpecification) VALUES ('".$productId."', '".$productName."','".$price."','".$category."','".$company."','".$releaseDate."','".$description."')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "New record created successfully";
		echo "<br>";
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
    exit;
}

function update() {
		$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $productId = $_POST["prodId"];
	$productName = $_POST["prodName"];
	$description = $_POST["prodDescription"];
	$company = $_POST["company"];
	$price = $_POST["prodPrice"];
	$category = $_POST["category"];
	//$link = $_POST["link"];
	$releaseDate = $_POST["date"];
	$sql = "UPDATE productInfo set Product_Name = '".$productName."',ProductPrice = ".$price.",ProductCategory='".$category."' ,ProductCompanyName= '".$company."',ProductReleaseDate= '".$releaseDate."' ,ProductSpecification='".$description."' WHERE ProductId='".$productId."'";
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
}

function delete(){
		$conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$productId = $_POST["prodId"];
	$productName = $_POST["prodName"];
	$description = $_POST["prodDescription"];
	$company = $_POST["company"];
	$price = $_POST["prodPrice"];
	$category = $_POST["category"];
	//$link = $_POST["link"];
	$releaseDate = $_POST["date"];
	if($productId!=null && $productName!=null && $description!=null && $company!=null && $price!=null && $category!=null /*&& $link!=null */&& $releaseDate!=null)
	{
		$sql= "DELETE FROM productInfo WHERE ProductId = '".$productId."'";
		if($conn->query($sql)==TRUE)
		{
			echo "Record deleted successfully";
			echo "<br>";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	exit;
}
?>