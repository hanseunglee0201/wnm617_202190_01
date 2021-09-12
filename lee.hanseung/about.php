<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>

	<?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card" style="margin-bottom: 2em;">
			<h1 style="padding-top: 1em;">Making & Gathering Good Design</h1>
			<h4>Since 2010 in California, Our products are made with thoughtfulness, honesty and pride. With the delicate<br>touch of professionals, our designs bring pure joy to your daily life and business.</h4>
		</div>
	</div>

	<!-- <img src="img/about_3.jpg" alt=""> -->
	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(img/about.jpg); height: 47vh">
			<!-- <h2 class="card soft">Product</h2> -->
	</div>

	<div class="container" style="margin-top: 5em; margin-bottom: 13em; width: 50%;">
			   <h2 style="text-align: center;">Our Vision</h2>
					<p style="text-align: center; padding-bottom: 2em;">Transparent and honest, with nothing to hide, and everything to celebrate. we celebrate process, material, and the people and places behind the products we make.</p>
			<div class="center">
			<a class="button1" href="product_list.php" style="font-size: 0.9em;">View our products</a>
		</div>


			<div class="grid gap">
	         	<div class="col-xs-12 col-md-4">
		            <img src="img/honesty.png" alt="">
	         	</div>
	         	<div class="col-xs-12 col-md-4">
		            <img src="img/thoughtfulness.png" alt="">
	         	</div>
	         	<div class="col-xs-12 col-md-4">
		            <img src="img/pride.png" alt="">
	         	</div>

	        </div>
	     </div> 

	</div>


	<?php include "parts/footer.php" ?>
</body>
</html>