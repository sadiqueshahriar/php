<?php

 class Supershop {
	 
	 public $winter_collection;
	 public $new_arrival;
	 public $flash_sales;
	 
	 
	 public function setsuper($winter,$new,$flash){
		 
		 $this->winter_collection = $winter;
		 $this->new_arrival = $new;
		 $this->flash_sales = $flash;
		 
		 
	 }
	 public function getsuper(){
		 
		 return "winter_collection : ".$this->winter_collection."</br>"."new_arrival : ".$this->new_arrival."</br>"."flash_sales : ".$this->flash_sales."</br>";
	 }
	 
 }

 class Supershopbabycare {
	 
	 public $new_born_essentials;
	 public $feeders;
	 public $fooding;
	 public $baby_accessories;
	 
	 
	 public function setSupershopbabycare($new,$feed,$food,$accessories){
		 
		 $this->new_born_essentials = $new;
		 $this->feeders = $feed;
		 $this->fooding = $food;
		 $this->baby_accessories = $accessories;
		 
	 }
	 
	 public function getSupershopbabycare(){
		 
		 return "new_born_essentials : ".$this->new_born_essentials."</br>"."feeders : ".$this->feeders."</br>"."fooding : ".$this->fooding."</br>"."baby_accessories : ".$this->baby_accessories."</br>";
	 }
	 
 }
 
  class SupershopFood {
	 
	public $fruits_and_vegetables;
	public $breakfast;
	public $meat_and_fish;
	public $dairy;
	public $snacks;
	public $frozen;
	 
	 public function setSupershopFood($fruits,$break,$meat,$newdairy,$snack,$froz){
		 
		 $this->fruits_and_vegetables = $fruits;
		 $this->breakfast = $break;
		 $this->meat_and_fish = $meat;
		 $this->dairy = $newdairy;
		 $this->snacks = $snack;
		 $this->frozen = $froz;
		 
		 
	 }
	 public function getSupershopFood(){
		 
		 return "fruits_and_vegetables : ".$this->fruits_and_vegetables."</br>"."breakfast : ".$this->breakfast."</br>"."meat_and_fish : ".$this->meat_and_fish."</br>"."dairy : ".$this->dairy."</br>"."snacks : ".$this->snacks."</br>"."frozen : ".$this->frozen;
	 }
 }
 




?>