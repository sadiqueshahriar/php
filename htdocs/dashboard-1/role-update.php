<?php
 
 $id = $_GET['id'];
 $role = $_POST['role'];

 $link = mysqli_connect("localhost","root","","user_management");
 $query ="UPDATE registration SET role='$role' WHERE id='$id'";
 $sql=mysqli_query($link,$query);

 if($sql==true){
	 header("Location: userlist.php?msg=Data Update done");
 }
 else{
	 	header("Location: user-update.php?msg=Data Update not done");
	 
 }




?>