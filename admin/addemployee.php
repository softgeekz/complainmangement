<?php include_once("admin_header.php");?>


<?php 
// Add employee process here

if(isset($_POST['submit'])){
	
	pd($_POST);
	
	$employee_name = $_POST['employee_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$dept_name = $_POST['dept_name'];
	
	$time = time(); // Now unix time
	
	
	$sql = "INSERT INTO `employee` SET `emoplyee_name`='$employee_name', `username`='$username' , `password`='$password' , `dept`='$dept_name',`updatetime`='$time',`flag`=1";
	
	$query = insertQuery($connection,$sql); // $connection variable ta config.php file e ase r insertQuery() method/function ta function.php file e ase jar kaj dta insert kore mysql er id column er data return kora 
	
	if($query){
		$_SESSION['flash_success'] = 'Employee Added Successfully :) and id is :  ' . $query;
	}else{
		$_SESSION['flash_unsuccess'] = 'Something Goes wrong for Adding Employee:) ';
	}
	

	header('Location: addemployee.php');	
}else{

?>

	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
			
				<a href="employee.php" class="button_d"> All Employee </a>
				
				<p style="margin-top: 20px; ">
				<?php flashmsg(); ?>
					<hr>
				</p>
				
				<div class="form_box">
					<form action="addemployee.php" method="POST">
						<fieldset>
							<legend> Add Employee </legend>
							
							<div class="form-group">
								<label> Employee Name</label>
								<input type="text" name="employee_name" required>
							</div>
			
							<div class="form-group">
								<label> Username</label>
								<input type="text" name="username" required>
							</div>
							
							<div class="form-group">
								<label> Password</label>
								<input type="password" name="password" required>
							</div>
							
							<div class="form-group">
								<label> Dept </label>
								<select name="dept_name" required>
								<option value=""> Select Department </option>
								<?php
								$query = dataquery($connection,"SELECT * FROM dept");
						
									if($query){
									while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){	
								?>								
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['dept_name']; ?></option>
								<?php }
									}
								?>
				
								</select>
							</div>
							
								
							<div class="form-group">
								<input type="submit" class="button_d" name="submit" style="float: right">
							</div>
							
						</fieldset>
					</form>
				</div>
		</div>	
	</div>	


		
<?php include_once("../footer.php");?>	

	
<?php }

?>	