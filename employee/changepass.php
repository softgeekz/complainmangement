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
				
				<div class="form_box">
					<form action="changepass.php" method="POST">
						<fieldset>
							<legend> Change Password </legend>
							
							<div class="form-group">
								<label> Current Password </label>
								<input type="password" name="current_password" min="5" required>
							</div>
			
							<div class="form-group">
								<label> New Password </label>
								<input type="password" name="password" min="5" id="password" required>
							</div>
							
							<div class="form-group">
								<label> Confirm Password </label>
								<input type="password" name="password" min="5" id="password_confirm" oninput="check(this)" required>
							</div>
							
							
								
							<div class="form-group">
								<input type="submit" class="button_d" name="submit" style="float: right">
							</div>
							
						</fieldset>
					</form>
				</div>
		</div>	
	</div>	
	
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

		
<?php include_once("../footer.php");?>	

	
<?php }

?>	