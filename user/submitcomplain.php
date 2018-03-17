<?php include_once("user_header.php");?>


<?php 
// Add employee process here

if(isset($_POST['submit'])){
	
// File upload
$target_dir = "uploadscomplain/";

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
	
	
	
 	$dept_id = $_POST['dept_name'];
	$complain_type = $_POST['complain_type'];
	$detail = $_POST['detail'];
	$userid = $_SESSION['userid'];
	$time = time(); // Now unix time
	
	
	$sql = "INSERT INTO `complain` SET `complainby_userid`='$userid', `department_id`='$dept_id',`type`='$complain_type', `assignedto_employeeid`='0' , `complain_date`='$time',`complain_description`='$detail',
		    `photo`='$filename',`status`='0',`updatetime`='$time',`flag`=1";
	
	$query = insertQuery($connection,$sql); // $connection variable ta config.php file e ase r insertQuery() method/function ta function.php file e ase jar kaj dta insert kore mysql er id column er data return kora 
	
	if($query){
		$_SESSION['flash_success'] = 'Complain Submitted Successfully  and Complain # ' . $query;
	}else{
		$_SESSION['flash_unsuccess'] = 'Something Goes wrong for AComplain ';
	} 
	

	header('Location: submitcomplain.php');	
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
	
					<form action="submitcomplain.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<legend> Submit Complain </legend>
						
							
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
								<label> Complain Type </label>
								<input type="text" name="complain_type" required>
							</div>
			
							<div class="form-group">
								<label> Detail </label> <br/>
								<textarea name="detail" rows="4" cols="70" required> </textarea>
							</div>
							
							
							<br/>
							
							<div class="form-group">
								<label> File (JPEG, JPG, GIF, PNG)</label>
								<input type="file" name="fileToUpload" id="fileToUpload" >
							</div>
							<!--https://www.w3schools.com/php/php_file_upload.asp-->
								
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