<?php
   session_start();

   $email = $_POST['email'];
   $pass = $_POST['pass'];
   $link=mysqli_connect("localhost","root","","user_management");
   $query = "SELECT * FROM registration WHERE email='$email' AND new_password='$pass'";
   $result = mysqli_query($link,$query);
   $rows = mysqli_fetch_assoc($result);
   if($rows['email']==$email){

     $_SESSION['username'] = $rows['username'];
     $_SESSION['email'] = $rows['email'];
     $_SESSION['image_url']= $rows['image_url'];
     $_SESSION['id']= $rows['id'];
     $_SESSION['role'] = $rows['role'];


     header("location: ../dashboard-1");
   }
   else{
     header("location: login.php?msg=wrong username password");
   }





 ?>
