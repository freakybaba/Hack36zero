<?php
   $username=$_POST['username'];
   $password=$_POST['password'];
   mysql_connect('localhost','root','');
   mysql_select_db("ngodb");
   $result=mysql_query("select * from login where username='$username' and password='$password' ") or die("Unable to access".mysql_error());
   $row=mysql_fetch_array($result);
   if($row['username']==$username && $row['password']==$password)
   {

   header('Location:./test.php');

     // http_redirect("C://xampp//htdocs//Hack36//test.php");
   }
   else
   {
      echo "Not";
   }
?>