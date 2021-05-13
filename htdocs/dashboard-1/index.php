<?php
  session_start();
  if(isset($_SESSION['username'])){
  
  include('header.php');
  include('menuhead.php');
  include('nav.php');
  include('body.php');
  include('footer.php');
  }
  else{
	  header("location: usermanagement/login.php?msg=please login" );
  }
  
?>