<?php
   session_start();

   $email = $_POST['email'];
   $password = $_POST['password'];
   $link=mysqli_connect("localhost","root","","user_management");
   $query = "SELECT * FROM registration WHERE email='$email' AND password_confirmation='$password'";
   $result = mysqli_query($link,$query);
   $rows = mysqli_fetch_assoc($result);
   if($rows['email']==$email){

     $_SESSION['email'] = $rows['email'];
     header("location: text.html");
   }
   else{
     header("location: login.php?msg=wrong username password");
   }


 ?>
