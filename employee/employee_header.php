<html>
	<head>
		<title> Complian Mangement</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	
	<body>
		<div class="wrapper">
			<div id="top">
				<h1 class="text-center"> Company Name </h1>
			</div>
			
			<div class="logo" style="float: left">
			   <a href="index.php" style="background: transparent"> <img src="../images/logo.png" width="140px;">  </a>
			</div>
			
			<div id="navigaion" style="width: 80%;float: right;">
			
				 <div class="navbar">
			

				   <a href="../logout.php" style="float: right">  <i class="fas fa-power-off"></i> Logout</a>
				</div>
			</div>
			
			
<?php 
include_once("../config/config.php");
?>
<?php
session_start();
//Jodi form submit kora hoy 
include_once("../config/function.php");


	if ($_SESSION['logintype'] != "employee"){
		header('Location: ../index.php');
		$_SESSION['flash_unsuccess'] = 'Not login';
	}
	
	
// Employee Info

	
	
	
//pd($_SESSION);
?>			