<?php


include('database-opareation.php');
$cname = $_GET['cname'];
$description = $_GET['description'];
$active = $_GET['active'];
$inser_query ="INSERT INTO category (catagory_name,description,active)
VALUES ('$cname','$description','$active')";
DB::insert($inser_query);





?>