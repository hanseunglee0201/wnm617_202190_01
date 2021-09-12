<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>

	<?php include "parts/meta.php" ?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php include "parts/navbar.php" ?>

   <div class="container" style="margin-bottom: 41em;">
      <div class="card" style="margin-bottom: 0em; padding: 2em 0 0 0;">
         <h1 class="h1typography" style="padding: 0 0 0 0;">Payment confirmed</h1>
            <p>Thank you, we’ve sent your order confirmation email with all the details.</p>
            <a class="button" href="product_list.php">Continue shopping</a>
      </div>
   </div>


   <?php include "parts/footer.php" ?>

</body>
</html>