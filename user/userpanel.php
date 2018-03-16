<?php include_once("user_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
					<?php echo flashmsg(); ?>
				<br/>
				
				<?php
				$userid = $_SESSION['userid'];
									// dataquery 	
									
							
				$query = dataquery($connection,"SELECT `users`.* FROM `users` WHERE `users`.id='$userid'");
														
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
					//pd($row);			
														
				?>
				<table class="table">
					<tr>
						<td> Name : </td>  <td><?php echo $row['full_name'];?> </td>
					</tr>
					<tr>	
						<td> Username : </td>  <td><?php echo $row['username'];?> </td>
					</tr>
					<tr>					
						<td> Company Name : </td>  <td><?php echo $row['company_name'];?> </td>
					</tr>
					
					<tr>
						<td> Email : </td>  <td><?php echo $row['email'];?> </td>
					</tr>	
					<tr>	
						<td> Contact No : </td>  <td><?php echo $row['contactno'];?> </td>
					</tr>	
					<tr>	
						<td> Address : </td>  <td><?php echo $row['address'];?> </td>
					</tr>
					<tr>	
						<td> Join Date : </td>  <td><?php echo date("d-M-Y H:i A",$row['updatetime']);?> </td>
					</tr>	
					

				</table>	
				
			
		</div>	
	</div>	
			

<?php include_once("../footer.php");?>	

		
