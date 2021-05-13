<?php


include('class-lib.php');

$job_placement_course= new Course ();//new object create
//echo $job_placement_course->course_name="job placement course for all"."</br>";

$poly_intern_course= new Course();//new object create

//echo $poly_intern_course->course_name="farm intern for poly";
$job_placement_course->set_course_details("javascript","5000","web development","for one month");

echo $job_placement_course->get_course_details();










 ?>
