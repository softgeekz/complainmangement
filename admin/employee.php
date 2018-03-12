<?php include_once("admin_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
				<?php pd(dataarray($connection,"SELECT * FROM employee"));?>
		</div>	
	</div>	
			

		
<?php include_once("../footer.php");?>	

		
