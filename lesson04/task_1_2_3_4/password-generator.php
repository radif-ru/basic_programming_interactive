<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var lettersNumbers = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
                            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                            0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

        function randomSymbol () {
            return parseInt(Math.random() * (lettersNumbers.length - 1));
        }

		function readInt(){
			return parseInt(document.getElementById("characters").value);
		}

        function write(text){
			document.getElementById("info").innerHTML = text.join('');
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function passwordGenerator(){
            var randomPassword = [];
            if (readInt() >= 0){
                for(var i = 0; i < readInt(); i++){
                    randomPassword.push(lettersNumbers[randomSymbol()]);
                }
                write(randomPassword);
            }
		}

	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<?php include "menu.php"; ?>
	</div>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<p id="info" style="padding: 5px; color: green">Из скольки символов составить пароль?</p>
				<input type="text" id="characters">
				<br>
				<a href="#" onClick="passwordGenerator();" id="button">Начать</a>				
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