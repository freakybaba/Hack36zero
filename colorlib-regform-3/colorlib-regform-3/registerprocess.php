<?php

   session_start();
   $db=mysqli_connect("localhost","root","","ngodb");
<<<<<<< HEAD
   if (isset($_POST['donor'])){
=======
   if (isset($_POST['register'])){
>>>>>>> 26b1116c478a0f287eec5a4ca2cf1c69d6f296ea
      $name=mysql_real_escape_string($_POST['name']);
       $email=mysql_real_escape_string($_POST['email']);
        $phone=mysql_real_escape_string($_POST['phone']);
         $password=mysql_real_escape_string($_POST['password']);
          $address=mysql_real_escape_string($_POST['address']);

      $sql="INSERT INTO `register`(`name`, `address`, `email`, `phone`, `password`) VALUES ('$name','$address','$email','$phone','$password')";
      mysqli_query($db,$sql);
      $_SESSION['message']="You are logged in";
      echo "successfully";
   }
?>