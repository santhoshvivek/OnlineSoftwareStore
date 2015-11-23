<?php
 
  $conn = mysqli_connect("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$find= $_GET['look'];
 #check whether user is already registered:
 //where ProductName LIKE '%".$find."%' AND ProductCategory='".$prodtype."' 
 //LIKE '%.$find.%'
 
 $sql = "Select * from productinfo WHERE ProductId='".$find."'";

/* $result = $conn->query($sql); 
 foreach($result['data'] as $result) {
    echo $result['type'], '<br>';
}
 */
 $resultArray= array();
 $result = mysqli_query($conn, $sql);
 
 
 while($row = mysqli_fetch_array($result)) {
	$productid=$row['ProductId'];
	//echo $productid;
	$productname=$row['Product_Name'];
//echo $productname;
	$productprice=$row['ProductPrice'];
	//echo $productprice;
	$productcategory=$row['ProductCategory'];
	//echo $productcategory;
	$companyname=$row['ProductCompanyName'];
	//echo $companyname;
	$releasedate=$row['ProductReleaseDate'];
	$link = $row['ProductDemoVideoLink'];
	//echo $releasedate;
	$specs=$row['ProductSpecification'];
	//echo $specs;
	$averagerating=$row['ProductAverageRating'];
	//echo $averagerating;
	$mytempArray= array("productid"  => $productid,
						 "productname" => $productname,
						 "productprice" => $productprice,
						 "productcategory" => $productcategory,
						"companyname" => $companyname,
						"releasedate" => $releasedate,
						"specs" => $specs,
						"link" => $link,
						"averagerating" => $averagerating);
						
	                    
	array_push($resultArray, $mytempArray);
	
}
 
 	echo json_encode($resultArray);
	return json_encode($resultArray);

//$conn->close();
 mysqli_close($conn);

	

?>