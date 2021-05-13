<?php


   class Course {

//member veriable or property declare
     var $course_name;
     var $course_fee;
     var $course_outline;
     var $course_duration;

//value set :
     function set_course_details($name,$fee,$outline,$duration){

       $this->course_name= $name;//declare variable
       $this->course_fee= $fee;
       $this->course_outline= $outline;
       $this->course_duration= $duration;

     }
//value get:
     function get_course_details(){

       return "Your course name is :".$this->course_name."your course fee :".$this->course_fee."your course outline :".$this->course_outline."your course duration :".$this->course_duration;




     }








   }













 ?>
