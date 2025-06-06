<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="users">

   <h1 class="title"> employee account </h1>

   <div class="box-container">
      <?php
         $select_employee = mysqli_query($conn, "SELECT * FROM `employee`") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_employee)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_employee['id']; ?></span> </p>
         <p> username : <span><?php echo $fetch_employee['name']; ?></span> </p>
         <p> email : <span><?php echo $fetch_employee['email']; ?></span> </p>
         <p> user type : <span style="color:<?php if($fetch_employee['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_employee['user_type']; ?></span> </p>
         <a href="admin_employee.php?delete=<?php echo $fetch_employee['id']; ?>" onclick="return confirm('delete this employee?');" class="delete-btn">delete user</a>
      </div>
      <?php
         };
      ?>
   </div>

</section>