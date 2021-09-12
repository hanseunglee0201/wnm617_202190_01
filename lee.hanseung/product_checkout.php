<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>




   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card">

               <a href="#" onclick="history.back();return false;">Return to Cart</a>
               <div><h1 class="h1typography" style="padding: 0.2em 0 0 0;">Checkout</h1>
               </div>

               <div><h4 class="h4typography" style="padding: 2em 0 0 0;">Shipping address</h4>
               </div>

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">First Name</label>
                        <input type="text" placeholder="First Name" class="form-input">
                     </div>
                        </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Last Name</label>
                        <input type="text" placeholder="Last Name" class="form-input">
                     </div>
                  </div>
               </div>  

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Address 1</label>
                        <input type="text" placeholder="Address1" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Address 2 (option)</label>
                        <input type="text" placeholder="Apt#" class="form-input">
                     </div>
                  </div>
               </div>

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">City</label>
                        <input type="text" placeholder="City" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                        <label class="form-label">Select a State</label>
                        <div class="form-select">
                        <select>
                        <option value="bird">Select a State</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        </select>
                     </div>
                  </div>
               </div>

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">ZIP code</label>
                        <input type="text" placeholder="ZIP code" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Email</label>
                        <input type="text" placeholder="Email" class="form-input">
                     </div> 
                  </div>
               </div>



               <div><h4 class="h4typography" style="padding: 3em 0 0 0;">Payment Information</h4>
               </div>

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Card Number</label>
                        <input type="text" placeholder="Card Number" class="form-input">
                     </div>
                        </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Name on Card</label>
                        <input type="text" placeholder="Name on Card" class="form-input">
                     </div>
                  </div>
               </div> 

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Expiration Date (MM/YY)</label>
                        <input type="text" placeholder="Expiration Date (MM/YY)" class="form-input">
                     </div>
                        </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label class="form-label">Security Code</label>
                        <input type="text" placeholder="Security Code" class="form-input">
                     </div>
                  </div>
               </div>  


            </div>
         </div>


         <div class="col-xs-12 col-md-1"></div>



         <div class="col-xs-12 col-md-4">
            <div class="card">
            <? 
            echo array_reduce($cart,'makeCondensedCartList');
            echo cartTotals();
            ?>

               <div class="card-section">
                  <a type="submit" class="filled" style="width: 100%; margin-left: 0;" a href="product_actions.php?crud=reset-cart">PLACE ORDER</a>
                  <!-- <button type="submit" class="filled" style="width: 100%; margin-left: 0;" a href="product_actions.php?crud=reset-cart">PLACE ORDER</button> -->
               </div>
            </div>
         </div>
      </div>
   </div>

<?php include "parts/footer.php" ?>


</body>
</html>
