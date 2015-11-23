<?php
 
  $conn = mysqli_connect("localhost", "root", "","geeksoftwareshop");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// $find = $_GET['look'];
 $prodtype=$_GET['productcat'];
 #check whether user is already registered:
 //where ProductName LIKE '%".$find."%' AND ProductCategory='".$prodtype."' 
 //LIKE '%.$find.%'
 
 $sql1 = "Select * from productinfo WHERE ProductCategory='".$prodtype."' ";
 $sql2= "Select * from productinfo WHERE ProductCategory='".$prodtype."' AND  Product_Name LIKE '%word%' OR Product_Name LIKE '%visual%' OR Product_Name LIKE '%windows%' OR Product_Name LIKE '%photoshop%'";
/* $result = $conn->query($sql); 
 foreach($result['data'] as $result) {
    echo $result['type'], '<br>';
}
 */
 $resultArray1= array();
 $resultArray2=array();
 $resultArray3=array();
 
 $result1 = mysqli_query($conn, $sql1);
 $result2= mysqli_query($conn, $sql2);
 
 while($row = mysqli_fetch_array($result2)) {
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
	//echo $releasedate;
	$specs=$row['ProductSpecification'];
	//echo $specs;
	$averagerating=$row['ProductAverageRating'];
	//echo $averagerating;
	$mytempArray2= array("productid"  => $productid,
						 "productname" => $productname,
						 "productprice" => $productprice,
						 "productcategory" => $productcategory,
						"companyname" => $companyname,
						"releasedate" => $releasedate,
						"specs" => $specs,
						"averagerating" => $averagerating);
						
	                    
	array_push($resultArray2, $mytempArray2);
	
}
 array_push($resultArray3,$resultArray2);
 
 
 
 
 if( $result1 ->num_rows >0){
while($row = mysqli_fetch_array($result1)) {
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
	//echo $releasedate;
	$specs=$row['ProductSpecification'];
	//echo $specs;
	$averagerating=$row['ProductAverageRating'];
	//echo $averagerating;
	$mytempArray1= array("productid"  => $productid,
						 "productname" => $productname,
						 "productprice" => $productprice,
						 "productcategory" => $productcategory,
						"companyname" => $companyname,
						"releasedate" => $releasedate,
						"specs" => $specs,
						"averagerating" => $averagerating);                    
	array_push($resultArray1, $mytempArray1);
	
	//array_push($resultArray3,$resultArray2);	
	//echo $row['Product_Name'];
//$send= $row['Product_Name'];
}//end while
array_push($resultArray3,$resultArray1);
echo json_encode($resultArray3);
	//var_dump(json_encode($resultArray3));
	return json_encode($resultArray3);
	

 }
else{

	//array_push($resultArray3,$resultArray2);
	echo json_encode($resultArray3);
	return json_encode($resultArray3);
}
/*
 if ($result->num_rows >0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	
		echo $row[0];
    }
	
 } 
 else{
 	echo "norow";
 }
*/







//$conn->close();
 mysqli_close($conn);

	

?>