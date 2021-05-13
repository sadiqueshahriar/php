	
	<?php
	session_start();
		include('header.php');
		?>
		
		<?php include('menuhead.php');?>
		
	<?php	include('nav.php');?>

	<html lang="en">

	<div class="container">
	  <h2 style="text-align:center">User List</h2>
	  
	  
	  
	  <table class="table" style="text-align:center;margin-left:15%;">
		<thead>
		  <tr>
			<th>Sl No.</th>
			<th>username </th>
			<th>fullname</th>
			<th>birthday</th>
			<th>gender</th>
			<th>email</th>
			<th>phone</th>
			<th>role</th>
			<th>image_url</th>

		  </tr>
		</thead>
		<tbody>
		
		<?php
			
			$count=0;
		
		
		$link=mysqli_connect("localhost","root","","user_management");
	    if($link==true){	
		$query="SELECT * FROM  registration";	
		
		
		$result=mysqli_query($link,$query);
			while($rows=mysqli_fetch_assoc($result)){
				$count++;
		?>
		  <tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['fullname']; ?></td>
			<td><?php echo $rows['birthday']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['phone']; ?></td>
			<td><?php echo $rows['role']; ?></td>
			<td> <img src="<?php echo "upload/".$rows['image_url']; ?>" width="60" height="50"</td>
			<td><a href="user-update.php?id=<?php echo $rows['id'];?>"> Assign to role </a>||<a href="delete.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you to delete?')"> Detele </a></td>

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

	
	</html>

		<?php
		include('footer.php');
		?>

	