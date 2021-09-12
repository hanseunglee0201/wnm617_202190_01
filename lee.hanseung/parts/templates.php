<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
      <a href="product_item.php?id=$o->id" class="product1">
            <div class="product-image">
               <img src="$o->image_thumb" alt="product">
            </div>
               <figcaption class="product-caption">
                     <div class="product-title">$o->name</div>
                     <div class="product-price">&dollar;$o->price</div>
               </figcaption>
      </a>
</div>
HTML;
}

function selectAmount($amount=1,$total=10) {
   $output = "<select name='amount'>";
   for($i=1;$i<$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output;
}


function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$amountselect = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="grid gap" style="margin-bottom: 1.5em;">
   <div class="col-xs-12 col-md-2">
         <div class="flex-none image-thumbs">
            <img src="$o->image_thumb">
         </div>
   </div>

   <div class="col-xs-12 col-md-4">
            <div class="product-title">$o->name</div>
   </div>

   <div class="col-xs-12 col-md-2">
            <form action="product_actions.php?crud=update-cart-item" method="post" onchange="this.submit()" style="font-size:0.8em; width: 50%;">
               <input type="hidden" name="id" value="$o->id">
               <div class="form-select">
                  $amountselect
               </div>
            </form>
   </div>

   <div class="col-xs-12 col-md-1">
            <div>&dollar;$totalfixed</div>
   </div>

   <div class="col-xs-12 col-md-3">
            <form action="product_actions.php?crud=delete-cart-item" method="post" style="font-size:0.9em; text-align: right;" >
               <input type="hidden" name="id" value="$o->id">
               <input type="submit" value="Remove" class="form-button inline">
            </form>
   </div>
</div>
HTML;
}



function makeCondensedCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$amountselect = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex card-section">
   <div class="flex-stretch">
      <strong>$o->name</strong>
   </div>
   <div class="flex-none">
      <div>&dollar;$totalfixed</div>
   </div>
</div>
HTML;
}




function cartTotals() {
$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,".","");
$tax = number_format($cartprice*0.0275,2,".","");
$taxed = number_format($cartprice*1.0275,2,".","");

return <<<HTML
            <div class="container" style="width: 99%; padding-top: 2em;">
                  <div class="display-flex" style="padding-bottom: 1.5em; padding-top: 1.5em; border-top: 0.1em solid #C0BEAC;">
                     <div class="flex-stretch">
                        <product-title>Sub Total</product>
                     </div>
                     <div class="flex-none">&dollar;$pricefixed</div>
                  </div>
                   <div class="display-flex" style="padding-bottom: 1.5em;">
                     <div class="flex-stretch">
                        <product-title>Taxes</product>
                     </div>
                     <div class="flex-none">&dollar;$tax</div>
                   </div>
                  <div class="display-flex" style="padding-bottom: 1.5em;">
                     <div class="flex-stretch">
                        <product-title>Total</product>
                     </div>
                     <div class="flex-none">&dollar;$taxed</div>
                   </div>
            </div>
HTML;

}










