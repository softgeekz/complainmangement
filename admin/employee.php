<?php include_once("admin_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
			
				<a href="addemployee.php" class="button_d"> Add Employee </a>
				
				<p style="margin-top: 20px; ">
					<hr>
				</p>
				
				<table class="table">
					<thead>
						<tr>
							<th> Employee Name</th>  
							<th> Username </th>
							<th> Password </th> 	
							<th> Department </th> 	
							<th> Joining </th> 	
						</tr>
					</thead>
					<tbody>
					<?php
								// dataquery 	
						$query = dataquery($connection,"SELECT * FROM employee");
						
						if($query){
							while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){	
							?>
						<tr>
							<td> <?php echo $row['emoplyee_name']; ?></td>  
							<td> <?php echo $row['username']; ?> </td>
							<td> <?php echo $row['password']; ?> </td> 	
							<td> <?php echo $row['dept']; ?> </td> 	
							<td> <?php echo date("Y-M-d",$row['updatetime']); ?> </td> 
						</tr>
					<?php }
						}
					?>	
					</tbody>
				</table>
		</div>	
	</div>	
			

		
<?php include_once("../footer.php");?>	

		
