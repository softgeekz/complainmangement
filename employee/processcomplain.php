<?php include_once("employee_header.php");?>


<?php 
// Add employee process here

if(isset($_POST['submit'])){
	
	$userid = $_SESSION['userid'];
	$current_password = $_POST['current_password'];
	$password = $_POST['password'];
	
	$time = time(); // Now unix time
	
	 $sql = "UPDATE `employee` SET `password`='$password' WHERE `id`='$userid'";
	
	$query = mysqli_query($connection,$sql); // $connection variable ta config.php file e ase r insertQuery() method/function ta function.php file e ase jar kaj dta insert kore mysql er id column er data return kora 
	
	if($query){
		$_SESSION['flash_success'] = 'Password Updated' ;
	}else{
		$_SESSION['flash_unsuccess'] = 'Something Goes wrong (: ';
	}
	

	header('Location: changepass.php');	
}else{

?>

	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
			
				<p style="margin-top: 20px; ">
				<?php flashmsg(); ?>
					<hr>
				</p>
				
				Complain Detail for Solution: 
				
				<?php
								// dataquery 	
					$id = $_GET['id'];		
					
					$query = dataquery($connection,"SELECT `complain`.*,`dept`.dept_name,`dept`.dept_name,`users`.full_name,`users`.username FROM `complain` 
														LEFT JOIN `dept` ON `dept`.id=`complain`.department_id
														LEFT JOIN `users` ON `users`.id=`complain`.complainby_userid
														WHERE `complain`.id='$id'");
														
						//pd(mysqli_fetch_array($query,MYSQLI_ASSOC));
											
	
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
					pd($row);
				
				?>
		</div>	
	</div>	
	

		
<?php include_once("../footer.php");?>	

	
<?php }

?>	