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
  <h2>Category List</h2>



  <table class="table">
    <thead>
      <tr>
        <th>Sl No.</th>
        <th>Category Name</th>
        <th>Category phone</th>
        <th>user_id</th>
      </tr>
    </thead>
	<tbody>
	<?php

        $count=0;


	$link=mysqli_connect("localhost","root","","mamurjor_ecommerce");
if($link==true){
	$query="SELECT * FROM  shipper";

	$result=mysqli_query($link,$query);
		while($rows=mysqli_fetch_assoc($result)){
            $count++;
	?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $rows['company_name']; ?></td>
        <td><?php echo $rows['phone']; ?></td>
        <td><?php echo $rows['user_id']; ?></td>
      </tr>

        <?php

}

}


	?>




    </tbody>
  </table>
</div>

</body>
</html>
