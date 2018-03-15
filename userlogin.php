<?php include_once("header.php");?>
<?php include_once("config/config.php");?>


<?php
session_start();
//Jodi form submit kora hoy 
include_once("config/function.php");


if(isset($_POST['submit'])){
	// PD() ekta userdefine function ja function.php file e banano hoise //

	$userpin = $_POST['userpin'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `users` WHERE `username`='$userpin' AND `password`='$password'";
	 
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	$fetchdata = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$userid = $fetchdata['id']; 
	
	if ($count == 1){
		$_SESSION['username'] = $userpin;
		$_SESSION['userid'] = $userid ;
	}else{
		$fmsg = "Invalid Login Credentials.";
	}
	
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		//header('Location: user/userpanel.php');
	}else{
		$_SESSION['flash_unsuccess'] = 'Wrong Credentials';
		//header('Location: userlogin.php');
	}
}else{	
?>

			<div class="content">
				<h1> User Login </h1>
				<?php flashmsg(); ?>
				
				<div class="login_form cleared">
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

				
					<form action="userlogin.php" method="POST">
						<fieldset>
							<legend> User Login </legend>
							<div class="input_group">
								<label> User Pin </label>
								<input type="text" name="userpin" placeholder="User Pin" required>
							</div>
							
							<div class="input_group">
								<label> Password </label>
								<input type="password" name="password" placeholder="Password" required>
							</div>
							
							<div class="input_group">
								<input type="submit" name="submit" class="button_green text-center right_side">
							</div>
						</fieldset>
					</form>
					
					<center>
							<h2> Not Registered? </h2>
					
							<a href="" class="button_d"> Click Here </a>
					</center>
				</div>
				
			</div>	
			
<?php }?>

			
<?php include_once("footer.php");?>	

		
