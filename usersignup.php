<?php include_once("header.php");?>
<?php include_once("config/config.php");?>


<?php
session_start();
//Jodi form submit kora hoy 
include_once("config/function.php");


if(isset($_POST['submit'])){
	// PD() ekta userdefine function ja function.php file e banano hoise //
	$target_dir = "user/userprofilephoto/";

		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			$uploadOk = 0;
			$_SESSION['flash_unsuccess'] = 'Fiel size is bigger';
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$uploadOk = 0;
			$_SESSION['flash_unsuccess'] = 'File Format is not Correct';
		}


		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		   $_SESSION['flash_unsuccess'] = 'File Upload requirement is not Correct';
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			  $filename = basename($_FILES["fileToUpload"]["name"]);
			} else {
				$filename = "0";
				$_SESSION['flash_unsuccess'] = $_SESSION['flash_unsuccess'] ;
			}
		}
// file upload end

	$name 			= $_POST['name'];
	$username 		= $_POST['username'];
	$company_name 	= $_POST['company_name'];
	$address 		= $_POST['address'];
	$email 			= $_POST['email'];
	$contactno 		= $_POST['contactno'];
	$password 		= $_POST['password'];

	$time = time();
	
	
	$sql = "INSERT INTO `users` SET `full_name`='$name',`username`='$username ',`company_name`='$company_name',`email`='$email',`photo`='$filename',
			`contactno`='$contactno ',`address`='$address',`password`='$password',`updatetime`='$time',`flag`='1'";
	 
	$userid = insertQuery($connection,$sql);
	

	$_SESSION['username'] = $username ;
	$_SESSION['userid'] = $userid ;
	$_SESSION['logintype'] = "user";

	
	$_SESSION['flash_success'] = 'Welcome as a New User :) ';	
	
	if($userid){
		$_SESSION['flash_success'] = 'Signup Success  Your SL #' . $userid;
	}else{
		$_SESSION['flash_unsuccess'] = 'Signup Problem with some reason ): ';
	}
	
	
	header('Location: user/userpanel.php');
	
}else{	
?>

			<div class="content">
				<h1> User Login </h1>
				<?php echo flashmsg(); ?>
				
				<div class="login_form cleared">
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

				
					<form action="usersignup.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<legend> User Signup </legend>
							<div class="input_group">
								<label> Name </label>
								<input type="text" name="name" placeholder="Name" required>
							</div>
							
							<div class="input_group">
								<label> Username </label>
								<input type="text" name="username" placeholder="Username" required>
							</div>
							
							<div class="input_group">
								<label> Company Name </label>
								<input type="text" name="company_name" placeholder="Company Name" required>
							</div>
							
							<div class="input_group">
								<label> Address </label>
								<input type="text" name="address" placeholder="address" required>
							</div>
							
							<div class="input_group">
								<label> Email </label>
								<input type="email" name="email" placeholder="Email" required>
							</div>
							
							<div class="input_group">
								<label> Contact No </label>
								<input type="text" name="contactno" placeholder="Contact Number" required>
							</div>
							
							<div class="input_group">
								<label> Password </label>
								<input type="password" name="password" placeholder="Contact Number" required>
							</div>
							
							<div class="input_group">
								<label> Profile Photo </label>
								<input type="file" name="fileToUpload" placeholder="Upload Profile Photo" required>
							</div>
							
							<div class="input_group">
								<input type="submit" name="submit" class="button_green text-center right_side">
							</div>
						</fieldset>
					</form>
					
					<center>
							<h2> Already Registered? </h2>
					
							<a href="userlogin.php" class="button_d"> Login Here </a>
					</center>
				</div>
				
			</div>	
			
<?php }?>

			
<?php include_once("footer.php");?>	

		
