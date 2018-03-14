<?php 

// print_r korar jonno ekta sotto function ja debuggine help korbe
 function pd($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
 }
 
 
// Kaj korar por ekta flash message dile valoi hobe

function flashmsg(){
	if (isset($_SESSION['flash_success'])) {
		echo '<p class="flash_success">'. $_SESSION['flash_success'] . "</p>";
		unset($_SESSION['flash_success']);
	}elseif(isset($_SESSION['flash_unsuccess'])){
		echo '<p class="flash_unsuccess">'.$_SESSION['flash_unsuccess'] . "</p>";
		unset($_SESSION['flash_unsuccess']);
	}
} 
 
 
 // Admin Login kore ase kina test kora
 function isloginAdmin(){
	if($_SESSION['username']=='admin'){
		return true;
	}else{
		return false;
	}
 }
 
 // query korar function
 function dataquery($connection,$sql){
	 $query = mysqli_query($connection,$sql);
	 
	 if(mysqli_num_rows($query)){
		return  $query; 
	 }else{
		 return false;
	 } 
 }
 
 function insertQuery($connection,$sql){
	 $query = mysqli_query($connection,$sql);
	 
	 if($query){
		 return mysqli_insert_id($connection); 
	 }else{
		 return false;
	 }
 }

?>
