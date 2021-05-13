<?php	

   class Bankdeposit {
	   
	   public $current_deposit;
	   public $saving_bank_deposit;
	   public $special_bank_schema;
	   public $special_deposit_schema;
	   public $money_double_program;
	   
	   
	   
	public function setbankdeposit($current,$saving,$special,$specialdeposit,$money){
		
		$this->current_deposit=$current;
		$this->saving_bank_deposit=$saving;
		$this->special_bank_schema=$special;
		$this->special_deposit_schema=$specialdeposit;
		$this->money_double_program=$money;
		//return $this->current_deposit.$this->saving_bank_deposit.$this->special_bank_schema.$this->special_deposit_schema.$this->money_double_program;
		
	}  
	public function getbankdeposit(){
		
		return "Your current deposite : ".$this->current_deposit."</br>"."your saving bank deposit : ".$this->saving_bank_deposit."</br>"."special bank schema : ".$this->special_bank_schema."</br>"."special deposit schema : ".$this->special_deposit_schema."</br>"."money double program : ".$this->money_double_program."</br>";
		
		
	}
	  
	   
	   
	   
   }
   
   class Bankservices {
	   
	   public $treasury_service;
	   public $remittance_service;
	   public $locker_service;
	   public $off_shore_bank_unit;
	   public $valuers_services;
	   
	   public function setservices($treasury,$remittance,$locker,$unit,$valuers){
		   
		   $this->treasury_service= $treasury;
		   $this->remittance_service= $remittance;
		   $this->locker_service= $locker;
		   $this->off_shore_bank_unit= $unit;
		   $this->valuers_services= $valuers;
		   
	   }
	   
	   public function getservices (){
		   
		   return "treasury_service : ".$this->treasury_service."</br>"."remittance_service: ".$this->remittance_service."</br>"."locker_service : ".$this->locker_service."</br>"."off_shore_bank_unit : ".$this->off_shore_bank_unit."</br>"."valuers_services : ".$this->valuers_services;
		   
		   
		   
		   
		   
	   }
	   
   }







?>