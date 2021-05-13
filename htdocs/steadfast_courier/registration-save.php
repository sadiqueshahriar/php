<?php

  $bname = $_POST['bname'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  
  $link=mysqli_connect("localhost","root","","user_management");
  
 

  if($link==true){

    $query = "INSERT INTO registration (bname,fname,lname,password,password_confirmation,email,phone) VALUES('$bname','$fname','$lname','$password','$password_confirmation','$email','$phone')";

    $sql= mysqli_query($link,$query);

    if($sql==true){

      header('location: Login.php?msg=login your admin panel');
    }
    else{
      header('location: Registration.php?msg=error1');
    }
  }


 ?>
