<?php 
session_start();
?>
<html>
	<head>
		<title> Complian Mangement</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	
	<body>
<?php 
include_once("../config/config.php");
?>
<?php
//Jodi form submit kora hoy 
include_once("../config/function.php");



	if ($_SESSION['logintype'] != "user"){
		header('Location: ../index.php');
		$_SESSION['flash_unsuccess'] = 'Not login';
	}
?>		
		<div class="wrapper">
			<div id="top">
				<h1 class="text-center"> Company Name </h1>
			</div>
			
			<div class="logo" style="float: left">
			   <a href="index.php" style="background: transparent"> <img src="../images/logo.png" width="140px;">  </a>
			</div>
			
			<div id="navigaion" style="width: 80%;float: right;">
			
			<?php 
				$userid =  $_SESSION['userid'];								// dataquery 	
				$query = dataquery($connection,"SELECT `users`.* FROM `users` WHERE `id`='$userid'");		
				$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
				
			?>
			
				 <div class="navbar">					
				  <a href="../logout.php" style="float: right">  <img src="userprofilephoto/<?php echo $row['photo'];?>" width="50px;"><?php echo "<br/>".$_SESSION['username'];?> <i class="fas fa-power-off"></i> Logout </a>
				</div>
			</div>
			
			
		