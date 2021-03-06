<?php include_once("admin_header.php");?>
<!-- https://datatables.net/manual/installation-->

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
						$query = dataquery($connection,"SELECT `complain`.*,`dept`.dept_name,`dept`.dept_name,`users`.full_name,`users`.username FROM `complain` 
														LEFT JOIN `dept` ON `dept`.id=`complain`.department_id
														LEFT JOIN `users` ON `users`.id=`complain`.complainby_userid
														WHERE `complain`.flag=1
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
							<td> <?php echo date("Y-m-d",$row['complain_date']); ?> </td> 
							<td> <?php echo $row['dept_name']; ?> </td> 
							<td> <?php echo $row['full_name']; ?> </td>
							<td> <?php echo date("Y-m-d",$row['updatetime']); ?> </td>
							<td> <a href="assigncomplain.php" class="small_button"> Assign </a> </th>
						</tr>
					<?php }
						}
					?>	
					</tbody>
				</table>
				
				<p>
					<center><form action="assigncomplainAll.php" method="POST"><input type="submit" name="submit" class="button_d" value="Assign">  </form> </center>
				</p>
		</div>	
	</div>	
			

		
<?php include_once("../footer.php");?>	

<script>		
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>