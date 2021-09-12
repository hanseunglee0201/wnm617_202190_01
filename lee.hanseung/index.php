<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>
	<?php include "parts/navbar.php" ?>


	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image: url(https://images.squarespace-cdn.com/content/v1/5442b6cce4b0cf00d1a3bef2/1593557313695-9EYZGRVU1WLFCTAVJQWE/ke17ZwdGBToddI8pDm48kH12H_EdUeZY-Tvv_svcNx9Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PI4AEFf-Jlj0yHs2ru3Hd-GQga4EnrFO4bxXsJo1lTp14KMshLAGzx4R3EDFOm1kBS/Ceramic-Plates-Mondays)">
			<!-- <h2 class="card soft">Product</h2> -->
	</div>


	<div class="container" style="margin-bottom: 1.5em;">
		<h1>Goods of timeless and beautiful design</h1>
		<h4>Since 2010 in California, Our products are made with thoughtfulness, honesty and pride. With the delicate<br>touch of professionals, our designs bring pure joy to your daily life and business.</h4>
		<div class="center">
			<a class="button1" href="about.php" style="font-size: 0.9em;">About Us</a>
		</div>
	</div>




	<div class="container">
	     <div class="card" style="margin-bottom: 0em;">
			<div class="grid gap">
	         	<div class="col-xs-12 col-md-3">
		            
		            <h3>Bestsellers</h3>
		         	<h2>Dinnerware</h2>
					<p>Enjoy every day, and any special day with timeless, durable, handcrafted ceramic dinnerware.</p>
					<a class="button" href="product_list.php">See all</a>

	         	</div>

	         	<div class="col-xs-12 col-md-1"></div>

				<div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/dinnerware_plate_3.png" alt="">
	            </div>
	            <div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/dinnerware_bowl_2.png" alt="">
	            </div>
	         </div>
	     </div>    


	     <div class="card" style="margin-bottom: 0em;">
			 <div class="grid gap">
			 	<div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/kitchen_cuttingboard_1.png" alt="">
	            </div>

	            <div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/kitchen_flatware_1.png" alt="">
	            </div>

	            <div class="col-xs-12 col-md-1"></div>

				<div class="col-xs-12 col-md-3">
		            <h3>Bestsellers</h3>
		         	<h2>Kitchen</h2>
					<p>Products carefully crafted to fit the way we eat, live and connect. Enjoy!</p>
					<a class="button" href="product_list.php">See all</a>
	         	</div>
	         </div>
	     </div> 



		<div class="card" style="margin-bottom: 0em;">
			<div class="grid gap">
	         	<div class="col-xs-12 col-md-3">
		            <h3>Bestsellers</h3>
		         	<h2>Decor</h2>
					<p>We create a beautiful and livable environment using well-designed objects that respect the purpose of the space.</p>
					<a class="button" href="product_list.php">See all</a>
	         	</div>

	         	<div class="col-xs-12 col-md-1"></div>

				<div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/decor_vase_1.png" alt="">
				</div>
				<div class="col-xs-12 col-md-4">
						<img class="categoryimage" src="img/decor_vase_4.png" alt="">
				</div>

	          </div>
	     </div>
	 </div> 




		<div class="container quote">
			<!-- <div class="container card">
					<article id="article3" class="card content center">
						<h3 class="h3center">Our story</h3>-->
						<p style="font-size: 2.5em; text-align: center; font-weight: 300; line-height: 1.em">"I have always wished I could learn to be a potter. I love collecting ceramics; it would be so fulfilling to create something lovely."</p>
						<div class="article-body">
							<p style="font-size: 1em; text-align: center; font-weight: 300">— Julie Andrews</p>
						</div>
		</div>
		</div>
	 <img src="img/making.jpg" alt="">


	<?php include "parts/footer.php" ?>

</body>
</html>