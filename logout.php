<?php
session_start();
session_unset();
session_destroy();


$_SESSION['flash_success'] = 'Your are Logged Out';


header("location:index.php");
exit();
?>`