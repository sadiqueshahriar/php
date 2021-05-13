 <?php include('head.php');?>
    <?php include('nav.php');?>
	
	
	
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
  <h2>product table</h2>
  
  uorderuorder
  
  <table class="table">
    <thead>
      <tr>
        <th>Sl No.</th>
        <th>sku</th>
        <th>idsku</th>
        <th>product_name</th>
        <th>product_description</th>
        <th>quantity_per_unit</th>
        <th>unit_price</th>
        <th>msrp</th>
        <th>available_size</th>
        <th>size</th>
        <th>color</th>
        <th>discount</th>
        <th>unit_weight</th>
        <th>unit_in_stock</th>
        <th>reorder_level</th>
        <th>product_available</th>
        <th>discount_available</th>
        <th>current_order</th>
        <th>picture</th>
        <th>ranking</th>
        <th>note</th>
        <th>available_colors</th>
        <th>units_on_order</th>
		<th>Upadate/delete</th>
      </tr>
    </thead>
	<tbody>
	<?php
        
        $count=0;
	
	
	$link=mysqli_connect("localhost","root","","mamurjor_ecommerce");
if($link==true){	
	$query="SELECT * FROM  products";	
	
	
	$result=mysqli_query($link,$query);
		while($rows=mysqli_fetch_assoc($result)){
            $count++;
	?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rows['sku']; ?></td>
        <td><?php echo $rows['idsku']; ?></td>
        <td><?php echo $rows['product_name']; ?></td>
        <td><?php echo $rows['product_description']; ?></td>
        <td><?php echo $rows['quantity_per_unit']; ?></td>
        <td><?php echo $rows['unit_price']; ?></td>
        <td><?php echo $rows['msrp']; ?></td>
        <td><?php echo $rows['available_size']; ?></td>
        <td><?php echo $rows['size']; ?></td>
        <td><?php echo $rows['color']; ?></td>
        <td><?php echo $rows['discount']; ?></td>
        <td><?php echo $rows['unit_weight']; ?></td>
        <td><?php echo $rows['unit_in_stock']; ?></td>
        <td><?php echo $rows['reorder_level']; ?></td>
        <td><?php echo $rows['product_available']; ?></td>
        <td><?php echo $rows['discount_available']; ?></td>
        <td><?php echo $rows['current_order']; ?></td>
        <td><?php echo $rows['picture']; ?></td>
        <td><?php echo $rows['ranking']; ?></td>
        <td><?php echo $rows['note']; ?></td>
        <td><?php echo $rows['available_colors']; ?></td>
        <td><?php echo $rows['units_on_order']; ?></td>
		<td><a href="update-form.php?id=<?php echo $rows['id'];?>"> Update </a>|| <a href="delete.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you to delete?')"> Detele </a></td>
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

<?php include('footer.php');?>