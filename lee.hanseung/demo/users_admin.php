<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");

// pretty_dump($_SERVER);
// pretty_dump($_GET);








function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
<form>
   <h2>$user->name</h2>
   <div>
      <p>Type</p>
      <input type="text" placeholder="Enter your type." class="form-input">
   </div>
   <div>
      <p>Email</p>
      <input type="text" placeholder="Enter your email." class="form-input">
   </div>
   <div>
      <p>Classes</p>
      <input type="text" placeholder="Enter your classes" class="form-input">
   </div>
</form>
   <button type="button" class="button display-flex">Submit</button>
HTML;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>User Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php
         if(isset($_GET['id'])) {
            showUserPage($users[$_GET['id']]);
         } else {
         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>
         <?php
         }
         ?>
      </div>
   </div>
</body>
</html>