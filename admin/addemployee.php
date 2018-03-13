<?php include_once("admin_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
			
				<a href="employee.php" class="button_d"> All Employee </a>
				
				<p style="margin-top: 20px; ">
					<hr>
				</p>
				
				<div class="form_box">
					<form action="addemployee.php">
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
								<input type="text" name="password" required>
							</div>
							
							<div class="form-group">
								<label> Dept </label>
								<select name="dept" required>
									<option value=""> Select Department </option>
									<option value="1"> Techinical </option>
									<option value="2"> Sales </option>
								</select>
							</div>
							
						</fieldset>
					</form>
				</div>
		</div>	
	</div>	


		
<?php include_once("../footer.php");?>	

		
