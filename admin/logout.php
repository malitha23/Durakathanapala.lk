<?php
session_start(); 
    $_SESSION['adminLogin'] = 'no';
	header("Location:index.php");

?>