<?php 
$db_host = 'localhost'; 
$db_user = 'id6090718_admin'; 
$db_pass = '7622335'; 
$db_database = 'id6090718_bd_daniil'; 
$link = new mysqli($db_host,$db_user,$db_pass,$db_database); 
mysqli_query($link,'SET NAMES utf8'); 
mysqli_query($link,'SET CHARACTER SET utf8'); 
mysqli_query($link,'SET COLLATION_CONNECTION="utf8_general_ci"'); 
?>
