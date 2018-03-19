<?php include_once("employee_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
				<p style="margin-top: 20px; ">
					<hr>
				</p>
				
				<table class="table" id="myTable">
					<thead>
						<tr>
							<th> Complain No.</th>  
							<th> Username </th>
							<th> Type </th> 	
							<th> Detail </th> 	
							<th> Created On </th> 	
							<th> Department </th> 	
							<th> Open By </th> 	
							<th> Update on </th> 	
							<th> Action </th> 	
						</tr>
					</thead>
					<tbody>
					<?php
								// dataquery 	
						$dept_id = $_SESSION['department'];		
					
						$query = dataquery($connection,"SELECT `complain`.*,`dept`.dept_name,`dept`.dept_name,`users`.full_name,`users`.username FROM `complain` 
														LEFT JOIN `dept` ON `dept`.id=`complain`.department_id
														LEFT JOIN `users` ON `users`.id=`complain`.complainby_userid
														WHERE `complain`.flag=1 AND  `complain`.department_id='$dept_id'
														");
														
						//pd(mysqli_fetch_array($query,MYSQLI_ASSOC));
											
						if($query){
							while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){	

							?>
						<tr>
							<td> <?php echo $row['id']; ?></td>  
							<td> <?php echo $row['username']; ?> </td>
							<td> <?php echo $row['dept_name']; ?> </td> 	
							<td> <?php echo $row['complain_description']; ?> </td> 	
							<td> <?php echo $row['complain_date']; ?> </td> 
							<td> <?php echo $row['dept_name']; ?> </td> 
							<td> <?php echo $row['full_name']; ?> </td>
							<td> <?php echo date("Y-m-d",$row['updatetime']); ?> </td>
							<td> <a href="processcomplain.php?id=<?php echo $row['id'];?>" class="small_button"> Process </a> </th>
						</tr>
					<?php }
						}
					?>	
					</tbody>
				</table>
				
				
		</div>	
	</div>	
			
<script>		
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
		
<?php include_once("../footer.php");?>	

		
