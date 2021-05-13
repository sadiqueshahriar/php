<h1>Deposit Details</h1>

<?php

    include ('bank-main.php');
	
	$depositdetails = new Bankdeposit();
	
	$depositdetails->setbankdeposit("20000 taka","100000 taka","500000","No deposit","200000");
	
	echo $depositdetails->getbankdeposit();
	
?>
	
	<h1> Bank Services</h1>
	
<?php
	
	
	$servicedetails = new Bankservices();
	
	$servicedetails->setservices("available","available","available","yes","first priority");
	
	echo $servicedetails->getservices();
	


?>