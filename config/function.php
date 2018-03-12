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
 
 
 function dataarray($connection,$sql){
	 $query = mysqli_query($connection,"SELECT * FROM  employee");
	 
	 if(mysqli_num_rows($query)){
		return  $row= mysqli_fetch_array($query,MYSQLI_ASSOC);
	 } 
 }

?>
