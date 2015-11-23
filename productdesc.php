<?php
     $prodid=$_GET['productid'];
	//echo $prodid;
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Description</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="jquery-2.1.0.js"></script>
		<script>	
			$(document).ready(function(){
				var searchthis = <?php echo $prodid ?>;		
				//alert("inside some functon");
				$.ajax({
					url : 'productdescfetch.php',
					type : 'GET',
					data : {
						"look" : searchthis,
					},
					success : function(data) {
						console.log(data);
						//alert("success");
						
						var newsInfo = $.parseJSON(data);
						//alert(newsInfo.length);
						//Create news-story div
						var newsContainer = $('<div id="fetcheddata"></div>');
							for (var j = 0; j < newsInfo.length; j++) {
							
							newsContainer.append('<div class ="box" style="height: 200px; width:600px" > <h3>' + newsInfo[j].productname + '</h3><div id="productid">' + "PRODUCT ID:" + newsInfo[j].productid + '</div><div id="prodcat">' + "PRODUCT CATEGORY:" + newsInfo[j].productcategory + '</div><div id="company">' + "COMPANY:" + newsInfo[j].companyname + '</div><div id="release">' + "RELEASE DATE:" + newsInfo[j].releasedate + '</div><div id="spec" align="justify">' + "SPECIFICATIONS: " + newsInfo[j].specs + '</div><div id="prodprice">' + "PRODUCT PRICE:" + newsInfo[j].productprice + '</div></div>');
							var imageurl = newsInfo[j].link;
							var imgvar = "<img src='images/"+imageurl+"' alt='"+newsInfo[j].productname+"' height='250px' width='250px'/>";

						}
						
						$('#main3').append(imgvar);
						$('#main4').append(newsContainer);
						


					},
					error : function() {
						alert('Server not found!!');

					}
		});
});

function addtocart(){
var searchthis = <?php echo $prodid ?>;
$.ajax({
					url : 'addingtocart.php',
					type : 'GET',
					data : {
						"look" : searchthis,
					},
					success : function(data) {
						console.log(data);
						window.location="cart.php";
					},
					error : function() {
						alert('Server not found!!');

					}
		});


	
	
	
}


		</script>

</head>
<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="logo"><a href=""><img src="images/logo.png" alt="" /></a></div>
        <div class="menuContainer">
            <div class="menu">
                <ul>
                    <li><a href="loggedIn.html">HOME</a></li>
                     <li><a href="cart.php">MY CART</a></li>
                   
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="location.html">LOCATION</a></li>
                    
                </ul>
            </div>
                <ul class="icons">
                    <li><a href=""><img src="images/twitter.png" alt="" /></a></li>
                    <li><a href=""><img src="images/delicious.png" alt="" /></a></li>
                    <li><a href=""><img src="images/facebook.png" alt="" /></a></li>
                    <li><a href=""><img src="images/feed.png" alt="" /></a></li>
                    <li><a href=""><img src="images/flickr.png" alt="" /></a></li>
                    <li><a href=""><img src="images/linkedin.png" alt="" /></a></li>
                    <li><a href=""><img src="images/myspace.png" alt="" /></a></li>
                    <li><a href=""><img src="images/stumble.png" alt="" /></a></li>
                </ul>
            <div class="clearfloat"></div>
        </div>
        <div class="clearfloat"></div>
    </div>
<div id="header">
    	<div class="menuContainer">
           <div class="menu">
				<h1>&nbsp;&nbsp;&nbsp;PRODUCT INFO:</h1>
				
        	</div>
        <div class="clearfloat"></div>
       </div>
    <div id="main2">
    	<div id= "main3" style="float:left; height:250px; width:250px"> </div>
 		<div id= "main4" style="height:300px; width:650px; float:right"> </div>
    	<div style="height: 50px; width:680px; float:left"> </div>
    	<div class="clearfloat"></div>
    	<input type="button" name="" value="Add To Cart" id="button" onclick="addtocart()">  

	</div>
	
</div>
    <!-- end #mainContent -->
    <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
    <!-- begin #footer -->
 <div id="footer">
	<p>
        	Terms of Use | <a title="This page validates as XHTML 1.0 Strict" href="http://validator.w3.org/check/referer" class="footerLink"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | 
			Designed by Sankar, Santhosh and Rukmini            
        </p>
	</div>
    <!-- end #footer -->
</div>
<!-- end #container -->
</body>
</html>
