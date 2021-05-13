<?php

include('database-opareation.php');

$sku = $_POST['sku'];
$idsku = $_POST['idsku'];
$pname = $_POST['pname'];
$pdescription = $_POST['pdescription'];
$pqpu = $_POST['pqpu'];
$uprice = $_POST['uprice'];
$msrp = $_POST['msrp'];
$asize = $_POST['asize'];
$size = $_POST['size'];
$color = $_POST['color'];
$discount = $_POST['discount'];
$uweight = $_POST['uweight'];
$uinstock = $_POST['uinstock'];
$rlevel = $_POST['rlevel'];
$pavailable = $_POST['pavailable'];
$davailable = $_POST['davailable'];
$corder = $_POST['corder'];
$picture = $_FILES['picture']['name'];
$ranking = $_POST['ranking'];
$note = $_POST['note'];
$acolors = $_POST['acolors'];
$uorder = $_POST['uorder'];
//$image = $_FILES['image']['name'];

$url="upload/".time().basename($picture);
move_uploaded_file($_FILES['picture']['tmp_name'],$url);

$query = "INSERT INTO products (sku,idsku,product_name,product_description,quantity_per_unit,unit_price,msrp,available_size,size,color,discount,unit_weight,unit_in_stock,reorder_level,product_available,discount_available,current_order,picture,ranking,note,available_colors,units_on_order)
VALUES ('$sku','$idsku','$pname','$pdescription','$pqpu','$uprice','$msrp','$asize','$size','$color','$discount','$uweight','$uinstock','$rlevel','$pavailable','$davailable','$corder','$picture','$ranking','$note','$acolors','$uorder')";

DB::insert($query);


?>