<?php
$song = $_POST['song'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='assets/css/main.css' rel='stylesheet' type='text/css'>
		<title>Vilken låt vill du att vi ska spela?</title>
	</head>
	<body>
		<div class="container center text-center">
			<div class="nav">
				<ul>
					<li><a href="index.php">Se kö</a></li>
					<li><a href="index.php?p=add">Lägg på kö</a></li>
				</ul>
			</div>
		</div>
		<div class="container center text-center">
			<h1>Vilken låt vill du att vi ska spela?</h1>
			<form method="POST" action="index.php">
				<table>
					<tr>
						<td><input type="text" name="artist" placeholder="Artist"></td>
					</tr>
					<tr>
						<td><input type="text" name="song" placeholder="Låt"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Lägg på kö"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>