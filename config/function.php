<?php 

// print_r korar jonno ekta sotto function ja debuggine help korbe
 function pd($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
 }
 
 
 function islogin(){
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

?>
