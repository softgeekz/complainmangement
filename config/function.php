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
 

 
 
 // query korar function
 function dataquery($connection,$sql){
	 $query = mysqli_query($connection,$sql);
	 
	 if($query){
		return  $query; 
	 }else{
		 return false;
	 } 
 }
 
 
 // Data insert kora
 function insertQuery($connection,$sql){
	 $query = mysqli_query($connection,$sql);
	 
	 if($query){
		 return mysqli_insert_id($connection); 
	 }else{
		 return false;
	 }
 }

// Data Update 

 
 // Row gula count kora
 function countrows($connection,$sql){
	 $query = mysqli_query($connection,$sql);
	
	if($query){
		 return$rowcount=mysqli_num_rows($query);
	 }else{
		 return false;
	 }
	 
 }

?>
