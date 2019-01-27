<?php

   session_start();
   $db=mysqli_connect("localhost","root","","ngodb");
   if (isset($_POST['register'])){
      $name=mysql_real_escape_string($_POST['name']);
       $email=mysql_real_escape_string($_POST['email']);
        $phone=mysql_real_escape_string($_POST['phone']);
          $address=mysql_real_escape_string($_POST['address']);
           $type=mysql_real_escape_string($_POST['subject']);

      $sql="INSERT INTO `donor`(`name`, `address`, `email`, `phone`,`type`) VALUES ('$name','$address','$email','$phone','$type')";
      mysqli_query($db,$sql);
      $_SESSION['message']="You are logged in";
      header('Location: ../home.php');
   }
?>