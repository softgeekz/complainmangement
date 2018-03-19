<html>
	<head>
		<title> Complian Mangement</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"> </script>
	
	
	
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