<?php

include "lib/php/functions.php";

// pretty_dump($_POST);

$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
$cart_product = cartItemById($product->id);

// pretty_dump($product);

?><!DOCTYPE html>
<html lang="en">
<head>
   <!-- <title>Added To Cart</title> -->
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="card">
         <?php

         if(!isset($_GET['id'])) {
            echo "You dun goofed";
         } else {
            ?>
            <div class="product-title" style="font-size: 2.1em; font-weight: 300;"><?= $cart_product->amount ?> <?= $product->name ?> In Your Cart</div>




            <!-- <div class="display-flex" style="padding-top: 2em;"> -->
               <div class="grid gap" style="margin-top: 0.5em;">
                     <div class="col-xs-12 col-md-3 flex-none"><a class="button" href="javascript:window.history.back();">Back To Product</a></div>

                     <div class="col-xs-12 col-md-9">
                        <div class="flex-none" style="margin-right: 0;"><a class="button" href="product_list.php">Continue Shopping</a></div>
                     </div>
               </div>
            <!-- </div> -->
            <?
         }
         ?>
        </div>
    </div>



<div style="background-color: var(--color-light); padding-bottom: 10em;">
   <div class="container">
         <div class="product-info" style="padding: 8em 0 6em 0; text-align: center; font-weight: 600; letter-spacing: 0.08em;">YOU MAY ALSO LIKE</div>

         <div class="grid gap product-list">
            <div class="col-xs-12 col-md-4">
               <a href="product_item.php?id=9" class="product1">
                  <div class="product-image">
                     <img src="img/decor_vase_2.png" alt="">
                  </div>
                  <figcaption class="product-caption" style="background-color: var(--color-light);">
                     <div class="product-title">Multi Stem Vase in Dark Moon Horizon</div>
                     <div class="product-price">&dollar;170</div>
                  </figcaption>
               </a>
            </div>
            <div class="col-xs-12 col-md-4">
               <a href="product_item.php?id=10" class="product1">
                  <div class="product-image">
                     <img src="img/decor_pitcher_1.png" alt="">
                  </div>
                  <figcaption class="product-caption" style="background-color: var(--color-light);">
                     <div class="product-title">Small Pitcher in Light Grey Whale Gradient</div>
                     <div class="product-price">&dollar;262</div>
                  </figcaption>
               </a>
            </div>
            <div class="col-xs-12 col-md-4">
               <a href="product_item.php?id=6" class="product1">
                  <div class="product-image">
                     <img src="img/kitchen_cuttingboard_2.png" alt="">
                  </div>
                  <figcaption class="product-caption" style="background-color: var(--color-light);">
                     <div class="product-title">Round Walnut Cutting Board with Leather Tab</div>
                     <div class="product-price">&dollar;164</div>
                  </figcaption>
               </a>
            </div>
         </div>

   </div>
</div>

<?php include "parts/footer.php" ?>
</body>
</html>