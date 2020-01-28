<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<?php include "js/homework-3.2.html"; ?>
</head>
<body>

<div class="content">
	<div class="header">	
        <?php include "menu.php"; ?>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Слепая печать</h1>

			<div class="box">
                <div id="blindTyping" style="padding: 5px; color: green"></div>
				<a href="#" onClick="blindTyping(taskText = 1, length = 10);" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

</div>
<div class="footer">
	<?php include "footer.php"; ?>
<div>

</body>
</html>