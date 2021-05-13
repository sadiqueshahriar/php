<?php

  $invoice = $_POST['invoice'];
  $cod_amount = $_POST['cod_amount'];
  $cus_name = $_POST['cus_name'];
  $cus_address  = $_POST['cus_address '];
  $cus_phone = $_POST['cus_phone'];
  $note = $_POST['note'];
  
  $link=mysqli_connect("localhost","root","","add_parcel");
  
 

  if($link==true){

    $query = "INSERT INTO next_day(invoice,cod_amount,cus_name,cus_address,cus_phone,note) VALUES('$invoice','$cod_amount','$cus_name','$cus_address','$cus_phone','$note')";

    $sql= mysqli_query($link,$query);

    if($sql==true){

      header('location: text.html');
    }
    else{
      //echo 'error1');
    }
  }


 ?>
