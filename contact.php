<?php include_once("header.php");?>
			<div class="content">
				<h1> Complain Management System</h1>
				
				
				
				<div class="contact_form">
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

				
					<form action="adminlogin.php" method="POST">
						<fieldset>
							<legend> Contact </legend>
							<div class="input_group">
								<label> Subject </label>
								<input type="text" name="subject" placeholder="Subject" required>
							</div>
							
							<div class="input_group">
								<label> Message </label>
								<br/>
								<textarea cols="73" rows="5"> </textarea>
							</div>
					
							<div class="input_group">
								<input type="submit" name="submit" class="button_green text-center right_side">
							</div>
						</fieldset>
					</form>
				</div>	
				
				<div class="cleared">======== </div>
				
				
			</div>	
<?php include_once("footer.php");?>			
