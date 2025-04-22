<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/img_01.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why people choose us</h3>
         <p>Join our vibrant community of clothing collection to improve your look. Mainly we are focus on gents formal cloths and recently we are trying to 
            add mens accessories. Currently we are selling shirts and trousers. We good collection of materials and designs with affordable price. Other than 
            that our main target is give a quality products to our valuable customers. Therefore, we giving discount and loyalty rewards to our customers.
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="products">

<h1 class="title">Products</h1>

<div class="box-container">

   <div class="box">
    <h3> Shirts</h3>
      
     
      
   </div>

   <div class="box">
   <h3>Trousers</h3>
      
      
      
   </div>

   <div class="box">
   <h3>Accessories</h3>
      
      
   </div>

</div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>