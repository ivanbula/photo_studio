<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo studio</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Internal CSS -->
    <link rel="stylesheet" href="style.css" type='text/css'>
</head>
<body>
   <!-- nav -->
   <nav class="container">
       <div class="logo">
            <i class="fas fa-camera"></i>
            <a href="#">PHOTOHENIX</a>
       </div>
       <ul>
           <li class="<?php if($page == 'home'){echo 'active';}?>"><a href="index.php">HOME</a></li>
           <li class="<?php if($page == 'about'){echo 'active';}?>"><a href="about.php">ABOUT</a></li>
           <li class="<?php if($page == 'pricing'){echo 'active';}?>"><a href="pricing.php">PRICING</a></li>
           <li class="<?php if($page == 'contact'){echo 'active';}?>"><a href="contact.php">CONTACT</a></li>
       </ul>
   </nav>