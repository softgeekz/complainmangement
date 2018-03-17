<?php include_once("user_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
				<p style="margin-top: 20px; ">
					<hr>
				</p>
				
				<table class="table">
					<thead>
						<tr>
							<th> Complain No.</th>  
							<th> Department </th>
							<th> Type </th> 	
							<th> Detail </th> 	
							<th> File </th> 	
							<th> Status </th> 	
							<th> Solution </th> 	
							<th> Created on </th> 	
							<th> Solved by </th> 	
							<th> Updated on </th> 	
						</tr>
					</thead>
					<tbody>
					<?php
					$userid =  $_SESSION['userid'];
								// dataquery 	
						$query = dataquery($connection,"SELECT `complain`.*,`dept`.dept_name,`dept`.dept_name,`users`.full_name,`users`.username FROM `complain` 
														LEFT JOIN `dept` ON `dept`.id=`complain`.department_id
														LEFT JOIN `users` ON `users`.id=`complain`.complainby_userid
														WHERE `complain`.complainby_userid='$userid'
														");
														
						//pd(mysqli_fetch_array($query,MYSQLI_ASSOC));
											
						if($query){
							while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){	

							?>
						<tr>
							<td> <?php echo $row['id']; ?></td>  
							<td> <?php echo $row['dept_name']; ?> </td>
							<td> <?php echo $row['type']; ?> </td> 	
							<td> <?php echo $row['complain_description']; ?> </td> 	
							<td> <?php $photo = $row['photo']; if($photo!=""){ ?> <img src="uploadscomplain/<?php echo $row['photo'];?>"  width="50px;"> <?php }else{   echo "No file"; } ?>  </td> 
							<td> <?php $status =  $row['status']; if($status==1){ echo "Solved";}else{ echo "Waiting";} ; ?> </td> 
							<td> <?php echo $row['solution']; ?> </td>
							<td> <?php echo date("Y-m-d",$row['updatetime']); ?> </td>
							<td> <?php echo ""; ?> </td>
							<td> <?php $solvedtime = $row['solvedtime']; if($solvedtime!=0){ echo date("Y-m-d",$row['solvedtime']);}else{ echo "Waiting";}  ?> </td>
							
							
						</tr>
					<?php }
						}
					?>	
					</tbody>
				</table>
				
				<p>
					
				</p>
		</div>	
	</div>	
			

		
<?php include_once("../footer.php");?>	

		
