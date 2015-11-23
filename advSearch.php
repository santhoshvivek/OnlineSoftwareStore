<?php
    $conn = new mysqli("localhost", "root", "","geeksoftwareshop");
  	if (!$conn) 
  	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	$resultArray =array();
	
	
	$title = $_POST["title"];
	$min = $_POST["min"];
	$company = $_POST["company"];
	$max = $_POST["max"];
	$category = $_POST["category"];
	
	
	$sql="SELECT * FROM ProductInfo WHERE Product_Name like '%".$title."%' AND ProductCompanyName like '%".$company."%' AND ProductCategory like '%".$category."%' AND ProductPrice <=".$max." AND ProductPrice >=".$min."";
	$result = $conn->query($sql);
	
	if($result ->num_rows >0)
	{
		while($row = $result->fetch_assoc())
		{
			$productId = $row["ProductId"];
			$productName = $row["Product_Name"];
			$description = $row["ProductSpecification"];
			$company = $row["ProductCompanyName"];
			$price = $row["ProductPrice"];
			$category = $row["ProductCategory"];
			$link = $row["ProductDemoVideoLink"];
			$releaseDate = $row["ProductReleaseDate"];
			$tempArray = array("productId"=>$productId,
								"productName"=>$productName,
								"description"=>$description,
								"company"=>$company,
								"price"=>$price,
								"category"=>$category,
								"link"=>$link,
								"releaseDate"=>$releaseDate);
			array_push($resultArray,$tempArray);
		}
	}
	echo json_encode($resultArray);
	return $resultArray;
	
?>