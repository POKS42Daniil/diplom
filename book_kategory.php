<?php
define('myeshop', true); 
include("bd_daniil.php"); 
$type = isset($_GET['type']) ? $_GET['type'] : null; 
?> 

<!DOCTYPE html>
<html>
<head>
	   
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="text/css" rel="stylesheet" href="template/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="template/style.css" />

</head>
<body>
	<header class="ContentBlock1">
	    	<section class="AristBack1">
		<section class="AristHeaderMenu">
			<img src="template/images/1227.gif" class="AristLogo">

			<a href="index.php" class="IconCenter"><i class="material-icons">home</i><p>Главная</p></a>
			<a href="book_kategory.php?type=Оглавление" class="IconCenter"><i class="material-icons">book</i><p>Книга</p></a>
			<a href="AristoPoems.php" class="IconCenter"><i class="material-icons">subject</i><p>Стихи</p></a>
			<a href="AristoСontacts.php" class="IconCenter"><i class="material-icons">account_box</i><p>Контакты</p></a>
			
		</section>	

		</section>
	
    	
 

	</header>
	<main>
		<section class="">
			
	
		<section class="AristSloganStih">
		 <?php
	
	$result = mysqli_query($link,"SELECT * FROM book_aristo "); 

if (mysqli_num_rows($result) > 0) 
{ 
$row = mysqli_fetch_array($result); 

do{ 
echo ' 
<pre >'.$row['text'].'</pre>

';

} 
while ($row = mysqli_fetch_array($result)); 
}
?>
		</section>
	
	</section>
	</main>

        <footer class="page-footer">
      
        </footer>
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="template/js/materialize.min.js"></script>

</body>

</html>