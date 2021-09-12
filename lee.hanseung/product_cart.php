<?php

include "lib/php/functions.php";
include "parts/templates.php";

// resetCart();
// pretty_dump(getCart());

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
     	<!-- <div class="grid gap"> -->
     		<!-- <div class="col-xs-12 col-md-6"> -->
     			<div class="card" style="margin-bottom: 3em;">
     				<div class="product-title" style="font-size: 2.1em; font-weight: 300;">My Cart</div>

            <!-- <div class="grid gap" style="padding-bottom: 1em; border-bottom: solid 1px var(--color-neutral-medium);">
               <div class="col-xs-12 col-md-2">
                  <div class="product-info">ITEMS</div>
               </div>

               <div class="col-xs-12 col-md-4">
                  <div class="product-info">NAME</div>
               </div>

               <div class="col-xs-12 col-md-2">
                  <div class="product-info">QUANTITY</div>
               </div>

               <div class="col-xs-12 col-md-3">
                  <div class="product-info">PRICE</div>
               </div>
            </div> -->


  		         <?php

  		        if(!count($cart)) {
  		        	echo "<div class='card-section'>No Items In Cart Yet.</div>";
  		        }
  		        else {
  		        	echo array_reduce($cart,'makeCartList');
  		        }

  		         ?>
       	 	</div>
    		<!-- </div> -->
      <!-- </div> -->
   </div>



<div style="background-color: var(--color-light); padding-bottom: 10em;">
   <div class="container">
    <div class="grid gap">
      <div class="col-xs-12 col-md-5">
      <div class="card" style="background-color: var(--color-light);">
          <div class="product-info">IS THIS A GIFT?</div>
          <form>
            <input type="text" placeholder="Add your message here." class="form-input" style="height: 150px; font-size: 0.9em;">
          </form>
        </div>
      </div>

      <div class="col-xs-12 col-md-1"></div>

      <div class="col-xs-12 col-md-6">
      <div class="card" style="background-color: var(--color-light);">
        <div class="grid gap">
          <div class="col-xs-12 col-md-9">
            <form>
              <input type="text" placeholder="Gift card or discount code" class="form-input" style="font-size: 0.9em; margin-top: 2.2em;"> 
            </form>
          </div>
          <div class="col-xs-12 col-md-3">
                    <button type="submit" class="filled" style="width: 100%; margin-left: 0; margin-top: 31px; height: 50px;">Apply</button>
          </div>
        </div>

          <?= cartTotals() ?>
                <a class="button1 filled" href="product_checkout.php" style="width: 100%; text-align: center; margin-top: 1em; margin-left: 0;">Checkout</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "parts/footer.php" ?>

</body>
</html>