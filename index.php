<?php
/*
$to = "samvthom16@gmail.com";
$subject = "bday response";
$message = "Hello! This is a simple email message from".$_SERVER['REMOTE_ADDR'];
$from = "admin@sputznik.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bday Wishes - Deepa</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<link rel="stylesheet" href="style.css" />
	</head>
<body>
<!--object height="100" width="100" data="song.mp3"></object-->


<div id="top-bar"><?php include "includes/topbar.php";?></div>
<div id="page">
	<div id="u-box-cont"><?php include "includes/conv.php";?></div>
	<div id="bday"><?php include "includes/bday.php";?></div>
</div>
<embed src="song.mp3" width="360" height="165" />
</body>
</html>
