<?php

$cname = $_GET['cname'];
$sfname = $_GET['sfname'];
$slname = $_GET['slname'];
$stitle = $_GET['stitle'];
$saddone = $_GET['saddone'];
$saddtwo = $_GET['saddtwo'];
$scity = $_GET['scity'];
$sstate = $_GET['sstate'];
$sstate = $_GET['sstate'];
$spcode = $_GET['spcode'];
$scountry = $_GET['scountry'];
$sphone = $_GET['sphone'];
$sfax = $_GET['sfax'];
$semail = $_GET['semail'];
$surl = $_GET['surl'];
$spmethod = $_GET['spmethod'];
$sdtype = $_GET['sdtype'];
$sgtype = $_GET['sgtype'];
$snote = $_GET['snote'];
$sdavailable = $_GET['sdavailable'];
$sodercount = $_GET['sodercount'];
$slogo = $_GET['slogo'];
$ssizeurl = $_GET['ssizeurl'];

$link=mysqli_connect("localhost","root","","mamurjor_ecommerce");


if($link==true){
	
	
	$query="INSERT INTO suppliers(company_name,contact_first_name,contact_last_name,contact_title,address_one,address_two,city,state,postal_code,country,phone,fax,email,url,payment_method,discount_type,goods_type,note,discount_available,order_count,logo,size_url) VALUES('$cname','$sfname','$slname','$stitle','$saddone','$saddtwo','$scity','$sstate','$spcode','$scountry','$sphone','$sfax','$semail','$surl','$spmethod','$sdtype','$sgtype','$snote','$sdavailable','$sodercount','$slogo','$ssizeurl') ";
    //var_dump($query);
    //exit();
	
	$sql=mysqli_query($link,$query);
	
	
	if($sql==true){
		header("Location: category-list.php");
	}
	else{
		header("Location: category-form.php");
	}
	
	
}
else{
	echo "Sorry";
}

?>