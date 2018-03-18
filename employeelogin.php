<?php 
session_start();
include_once("header.php");
include_once("config/config.php");


//Jodi form submit kora hoy 
include_once("config/function.php");


if(isset($_POST['submit'])){
	// PD() ekta userdefine function ja function.php file e banano hoise //

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `employee` WHERE `username`='$username' AND `password`='$password'";
	 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count > 0){
		$_SESSION['username'] = $username;
		$_SESSION['logintype'] = "employee";
	}else{
		$fmsg = "Invalid Login Credentials.";
		
	}
	
	//3.1.4 if the user is logged in Greets the user with message
	if ($_SESSION['logintype'] == "employee"){
		header('Location: employee/employee.php');
	}else{
		$_SESSION['flash_unsuccess'] = 'Wrong Credentials';
		header('Location: employeelogin.php');
	}
}else{	
?>

			<div class="content">
				<h1> Admin Login </h1>
					<?php flashmsg(); ?>
				
				<div class="login_form cleared">
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

				
					<form action="employeelogin.php" method="POST">
						<fieldset>
							<legend> Login </legend>
							<div class="input_group">
								<label> Username </label>
								<input type="text" name="username" placeholder="Username" required>
							</div>
							
							<div class="input_group">
								<label> Password </label>
								<input type="password" name="password" placeholder="Username" required>
							</div>
							
							<div class="input_group">
								<input type="submit" name="submit" class="button_green text-center right_side">
							</div>
						</fieldset>
					</form>
				</div>
				
			</div>	
			
<?php }?>

			
<?php include_once("footer.php");?>	

		
