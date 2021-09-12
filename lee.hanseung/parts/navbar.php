<header class="navbar">
		<div class="container display-flex flex-align-center">
			<div class="flex-none">
				<h1><a href="index.php" style="padding-left: 0em;">Logo</a></h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav flex">
				<ul>
					<li><a href="index.php">Work</a></li>
					<!-- <li><a href="product_list.php">Products</a></li> -->
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">
						<span>Resume</span>
		                <span class="badge"><?= makeCartBadge() ?></span>
		            </a></li>
				</ul>
			</nav>
		</div>
	</header>