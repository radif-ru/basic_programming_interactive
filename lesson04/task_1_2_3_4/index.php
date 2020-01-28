<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	<div class="header">
		<?php include "menu.php"; ?>
	</div>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Радиф</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru/go/P~mg6q" target="_blank">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<?php include "menu.php"; ?>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	<?php include "footer.php"; ?>
<div>


</body>
</html>