<?php

$servername="localhost";
$username="durakathanapala_phonesite";
$password="50cqT)Wqd3ZA";
$dbname = "durakathanapala_phone";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){ 
die('Could not Connect My Sql:' .mysql_error());
}
 
?>