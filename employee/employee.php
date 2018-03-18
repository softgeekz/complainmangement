<?php include_once("employee_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
			
							
				<p style="margin-top: 20px; ">
				<?php echo $_SESSION['department'];?>
					<hr>
				</p>
				
				<table class="table">
					<tr> 
						<td> Total Solved </td>  <td>0  </td>
					</tr>
					<tr> 
						<td> Total Pending </td>  <td> 0 </td>
					</tr>
				
				</table>
				
				
		</div>	
	</div>	
			

		
<?php include_once("../footer.php");?>	

		
