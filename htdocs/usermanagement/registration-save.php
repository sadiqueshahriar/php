<?php

  $link=mysqli_connect("localhost","root","","user_management");
  $username  = $_POST['username'];
  $fullname  = $_POST['fullname'];
  $new_password  = $_POST['new_password'];
  $con_password  = $_POST['con_password'];
  $birthday  = $_POST['birthday'];
  $gender  = $_POST['gender'];
  $email  = $_POST['email'];
  $phone  = $_POST['phone'];
  $image_url = $_FILES['image_url'];
  $image = $_FILES['image_url']['name'];

  $target="upload/";
  $image_url = $target.basename($image);
  $type = explode(".",$image);//image type;
  $type[1];


  $extention = array("jpeg","jpg","png","PNG");

 if($type[1]==$extention[0]||$type[1]==$extention[1]||$type[1]==$extention[2]||$type[1]==$extention[3]){

  if($link==true){

    $query = "INSERT INTO registration (username,fullname,new_password,con_password,birthday,gender,email,phone,image_url) VALUES('$username','$fullname','$new_password','$con_password','$birthday','$gender','$email','$phone','$image')";
    $sql= mysqli_query($link,$query);

    if($sql==true){

      header('location: login.php?msg=login your admin panel');
    }
    else{
      header('location: registration.php?msg=error1');
    }
  }
  else{
    header("location: registration.php?msg=error2");
  }

}
else {
  header("location: registration.php?msg=error3");
}



 ?>
