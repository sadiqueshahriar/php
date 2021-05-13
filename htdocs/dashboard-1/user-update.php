	<?php
		
		include('header.php');
	?>
	<?php
		
		include('menuhead.php');
	?>
	<?php
	//include('nav.php');
	?>
	<h3 style="text-align:center;"> Assign to role</h3>

	</h3>

<?php
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$link= mysqli_connect("localhost","root","","user_management");
	$query = "SELECT * FROM registration WHERE id='$id'";
    $result = mysqli_query($link,$query);
    $rows = mysqli_fetch_assoc($result);
	echo $rows['id'];
?>


		<form role="form" action="role-update.php?id=<?php echo $rows['id'];?>" method="POST" style="margin-left:20%">
		
		<label> username </label></br>
		<input type="text" value="<?php echo $rows['username'];?>" name="username"></br>
		
		
		<label> email </label></br>
		<input type="text" value="<?php echo $rows['email'];?>" name="email"></br>
		
		<label> phone </label></br>
		<input type="text" value="<?php echo $rows['phone'];?>" name="phone"></br>
		

		
		<select name="role">
		<option value="admin">Admin </option>
		<option value="editor">Editor </option>
		<option value="author">Author </option>
		<option value="general">General </option>
		
		
		</select>
		

		
		<input type="submit" name="Assign" value="Assign">
		
		</form>
		
		
		
		
		
		

	
	
	
	
	
	<?php
	include('footer.php');
	?>
