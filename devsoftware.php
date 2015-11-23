<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Geek Software Shop</title>
		<link href="styles.css" rel="stylesheet" type="text/css" />

		<script src="jquery-2.1.0.js"></script>
		<script>
			var searchthis;
			var prodtypeis;
				$(document).ready(function(){
				searchthis = $('#searchtext').val();
				prodtypeis = $('#producttype').val();
				$.ajax({
					url : 'typesearch.php',
					type : 'GET',
					data : {
						"productcat" : prodtypeis
					},
					success : function(data) {
						console.log(data);
						$('#main').empty();
						$('#sidebar').empty();
						var newsInfo = $.parseJSON(data);
						var newsContainer = $('<div id="fetcheddata"></div>');
						var topten= $('<div id="topten"></div>');	
							for (var j = 0; j < newsInfo[1].length; j++) {
							newsContainer.append('<div class ="box"> <h3>' + newsInfo[1][j].productname + '</h3><div id="prodcat">' + "PRODUCT CATEGORY:" + newsInfo[1][j].productcategory + '</div><div id="company">' + "COMPANY:" + newsInfo[1][j].companyname + '</div><div id="release">' + "RELEASE DATE:" + newsInfo[1][j].releasedate + '</div><div id="prodprice">' + "PRODUCT PRICE:" + newsInfo[1][j].productprice + '</div><div><a href="productdesc.php?productid='+ newsInfo[1][j].productid+'">MORE..</a></div>');
						}
						for (var j = 0; j < newsInfo[0].length; j++) {	
							topten.append('<div> <h3>' + newsInfo[0][j].productname + '</div><div id="prodcat">' + "PRODUCT CATEGORY:" + newsInfo[0][j].productcategory + " software"+'</div><div id="release">' + "RELEASE DATE:" + newsInfo[0][j].releasedate + '</div><div><a href="productdesc.php?productid='+ newsInfo[0][j].productid+'">MORE..</a></div>');

						}
						//Add newsContainer to DOM
						$('#main').append(newsContainer);
						$('#sidebar').append(topten);

					},
					error : function() {
						alert('Server not found!!');

					}
				});

			});
			
			
			
		
			//$(document).ready(function(){
			function someFunction() {
				searchthis = $('#searchtext').val();
				prodtypeis = $('#producttype').val();
				$.ajax({
					url : 'searchresult.php',
					type : 'GET',
					data : {
						"look" : searchthis,
						"productcat" : prodtypeis
					},
					success : function(data) {
						console.log(data);
						$('#main').empty();
						$('#sidebar').empty();
						var newsInfo = $.parseJSON(data);
						var newsContainer = $('<div id="fetcheddata"></div>');
						var topten= $('<div id="topten"></div>');	
							for (var j = 0; j < newsInfo[1].length; j++) {
							newsContainer.append('<div class ="box"> <h3>' + newsInfo[1][j].productname + '</h3><div id="prodcat">' + "PRODUCT CATEGORY:" + newsInfo[1][j].productcategory + '</div><div id="company">' + "COMPANY:" + newsInfo[1][j].companyname + '</div><div id="release">' + "RELEASE DATE:" + newsInfo[1][j].releasedate + '</div><div id="prodprice">' + "PRODUCT PRICE:" + newsInfo[1][j].productprice + '</div><div><a href="productdesc.php?productid='+ newsInfo[1][j].productid+'">MORE..</a></div>');
						}
						for (var j = 0; j < newsInfo[0].length; j++) {	
							topten.append('<div> <h3>' + newsInfo[0][j].productname + '</div><div id="prodcat">' + "PRODUCT CATEGORY:" + newsInfo[0][j].productcategory + " software"+'</div><div id="release">' + "RELEASE DATE:" + newsInfo[0][j].releasedate + '</div><div><a href="productdesc.php?productid='+ newsInfo[0][j].productid+'">MORE..</a></div>');

						}
						//Add newsContainer to DOM
						$('#main').append(newsContainer);
						$('#sidebar').append(topten);

					},
					error : function() {
						alert('Server not found!!');

					}
				});
			};
		</script>
	</head>
	<body>
		<!-- begin #container -->
		<div id="container">
			<!-- begin #header -->
			<div id="header">
				<div class="logo">
					<a href=""><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="menuContainer">
					<div class="menu">
						<ul>
							<li>
								<a href="loggedIn.html">HOME</a>
							</li>
							<li>
								<a href="services.html">SERVICES</a>
							</li>
							<li>
								<a href="location.html">LOCATION</a>
							</li>
							<li>
								<a href="cart.php">MY CART</a>
							</li>
						</ul>
					</div>
					<ul class="icons">
						<li>
							<a href=""><img src="images/twitter.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/delicious.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/facebook.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/feed.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/flickr.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/linkedin.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/myspace.png" alt="" /></a>
						</li>
						<li>
							<a href=""><img src="images/stumble.png" alt="" /></a>
						</li>
					</ul>
					<div class="clearfloat"></div>
				</div>
				<div class="clearfloat"></div>
			</div>
			<div id="header">

				<div class="menuContainer">
					<div class="menu">
						<form name="search"  method="GET">
							<h1>&nbsp;&nbsp;&nbsp;DEVELOPMENT SOFTWARE PACKAGES:</h1>
							<div id=tfnewsearch>
								<input type="hidden" name="producttype" id="producttype" value="dev">
								<input type="text" class="tftextinput" name="searchtext" id="searchtext" size="21" maxlength="120">
								<input type="button" id="searchsubmit" value="search" class="tfbutton" onclick="someFunction()">
								<input type="button" id="searchsubmit1" value="Advanced search" class="tfbutton" onclick="location.href='adv_search.html'">
								
							</div>
						</form>

					</div>
					<div class="clearfloat"></div>

				</div>

				<!-- end #header -->
				<div id="main"></div>
				<div>
					<h2>TOP TRENDING:</h2>
				<div id="sidebar">
					
				</div>
				</div>

			</div>

			<!-- end #mainContent -->
			<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
			<br class="clearfloat" />
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
