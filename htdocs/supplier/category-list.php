<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Supplier table</h2>
  
  
  
  <table class="table">
    <thead>
      <tr>
        <th>Sl No.</th>
        <th>Company Name</th>
        <th>Contact Fname</th>
        <th>Contact Lname</th>
        <th>Contact Title</th>
        <th>Adds one</th>
        <th>Adds two</th>
        <th>City</th>
        <th>State</th>
        <th>Postal code</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Fax</th>
        <th>Email</th>
        <th>Url</th>
        <th>Payment method</th>
        <th>Discount type</th>
        <th>Goods type</th>
        <th>Note</th>
        <th>Discount available</th>
        <th>Order count</th>
        <th>Logo</th>
        <th>Size url</th>
      </tr>
    </thead>
	<tbody>
	<?php
        
        $count=0;
	
	
	$link=mysqli_connect("localhost","root","","mamurjor_ecommerce");
if($link==true){	
	$query="SELECT * FROM  suppliers";	
	
	
	$result=mysqli_query($link,$query);
		while($rows=mysqli_fetch_assoc($result)){
            $count++;
	?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rows['company_name']; ?></td>
        <td><?php echo $rows['contact_first_name']; ?></td>
        <td><?php echo $rows['contact_last_name']; ?></td>
        <td><?php echo $rows['contact_title']; ?></td>
        <td><?php echo $rows['address_one']; ?></td>
        <td><?php echo $rows['address_two']; ?></td>
        <td><?php echo $rows['city']; ?></td>
        <td><?php echo $rows['state']; ?></td>
        <td><?php echo $rows['postal_code']; ?></td>
        <td><?php echo $rows['country']; ?></td>
        <td><?php echo $rows['phone']; ?></td>
        <td><?php echo $rows['fax']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['url']; ?></td>
        <td><?php echo $rows['payment_method']; ?></td>
        <td><?php echo $rows['discount_type']; ?></td>
        <td><?php echo $rows['goods_type']; ?></td>
        <td><?php echo $rows['note']; ?></td>
        <td><?php echo $rows['discount_available']; ?></td>
        <td><?php echo $rows['order_count']; ?></td>
        <td><?php echo $rows['logo']; ?></td>
        <td><?php echo $rows['size_url']; ?></td>
      </tr>       
        
        <?php 
        }
		
		
}
else{
	echo "Sorry";
}
	
	?>
	
    

      
    </tbody>
  </table>
</div>

</body>
</html>
