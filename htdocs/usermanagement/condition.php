<?php
$link=mysqli_connect("localhost","root","","user_management");
$image_url = $_FILES['image_url'];
$image = $_FILES['image_url']['name'];
$type = explode(".",$image);//image type;
 $type[1];
 $image_url = "upload/".basename($image);
 $extention = array("jpeg","jpg","png","PNG");
 if($type[1]==$extension){
   echo "login sucess";

 }
else {
  echo "sorry";
}

 ?>
