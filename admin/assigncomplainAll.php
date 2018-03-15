<?php include_once("admin_header.php");?>


<?php 
// Add employee process here

if(isset($_POST['submit'])){
	
	pd($_POST);
	
	$time = time(); // Now unix time
	
	
	echo $sql = "UPDATE  `complain` SET `flag`='1' WHERE `flag`=0";
	
	$query = mysqli_query($connection,$sql); // $connection variable ta config.php file e ase r insertQuery() method/function ta function.php file e ase jar kaj dta insert kore mysql er id column er data return kora 
	
	if($query){
		$_SESSION['flash_success'] = 'Complain Assign to Department';
	}else{
		$_SESSION['flash_unsuccess'] = 'Something Goes wrong ';
	}
	

	header('Location: complainhistory.php');	
}else{

 echo "No direct Access";
 
}

?>	