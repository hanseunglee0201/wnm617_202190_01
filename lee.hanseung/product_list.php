<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

// pretty_dump([$_GET,$_POST]);

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','12'); // limit

// pretty_dump($_GET);


function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Highest Price"],
      ["price","ASC","Lowest Price"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
       <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $name</option>
      ";
   }
}


if(isset($_GET['t'])) {
      $result = makeStatement($_GET['t']);
      $products = isset($result['error']) ? [] : $result;
} else {
      $result = makeStatement("products_all");
      $products = isset($result['error']) ? [] : $result;
}

$_SESSION['num'] = isset($_SESSION['num']) ?
   $_SESSION['num']+1 :
   0;

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Products</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	 <img src="img/dinnerwaretop.jpg" alt="">


	<div class="container" style="margin-top: 9em;">
		<div class="card" style="margin-bottom: 0em; padding: 2em 0 0 0;">
         <div class="grid gap product-display" style="margin-bottom: 3em;">
            <div class="col-xs-12 col-md-6">
                  <h1 class="h1typography" style="padding: 0 0 0 0;">Explore our products</h1>
                  <p>Timeless and durable handmade ceramic dinnerware, kitchen and accessories-beautiful to look, easy to hold, and proudly crafted.</p>
            </div>

            <div class="col-xs-12 col-md-6"></div>
         </div>

         <div class="grid gap" style="margin-bottom: -0.5em;">
            <div class="col-xs-12 col-md-8"> 
               <form action="product_list.php" method="get" class="hotdog" style="margin-top: 0.5em">
                  <input type="hidden" name="t" value="search">
                  <input type="hidden" name="s" value="<?=$_GET['s']?>">
                  <input type="hidden" name="o" value="<?=$_GET['o']?>">
                  <input type="hidden" name="l" value="<?=$_GET['l']?>">
                  <input type="search" name="s" placeholder="Search" value="<?= $_GET['s'] ?>">
               </form>
            </div>

            <div class="col-xs-12 col-md-4">
               <form action="product_list.php" method="get">
                  <input type="hidden" name="t" value="search">
                  <input type="hidden" name="s" value="<?=$_GET['s']?>">
                  <input type="hidden" name="d" value="<?=$_GET['d']?>">
                  <input type="hidden" name="o" value="<?=$_GET['o']?>">
                  <input type="hidden" name="l" value="<?=$_GET['l']?>">
                  <div class="form-select">
                     <select onChange="checkSort(this)">
                        <? makeSortOptions() ?>
                     </select>
                  </div>
               </form>
            </div>
         </div>

               <div>
                  <a href="product_list.php?t=products_by_category&category=dinnerware&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="form-button inline">Dinnerware</a>
                  <a href="product_list.php?t=products_by_category&category=kitchen&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="form-button inline">Kitchen</a>
                  <a href="product_list.php?t=products_by_category&category=decor&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="form-button inline">Decor</a>
               </div>

            </div>
   		</div>	
		</div>
	</div>


	  <div class="container" id="product" style="margin-bottom: 10em; margin-top: 5em;">

         <div class="grid gap product-list">

         <?php

         if(empty($products)) {
            echo "No products found.";
         } else {
            echo array_reduce($products,'makeProductList');
         }  
          
         ?>
         </div>

      </div>

      <div class="container">
         <a class="button" href="admin" style="margin-bottom: 1em;">User Admin</a>
      </div>

<?php include "parts/footer.php" ?>
</body>
</html>



