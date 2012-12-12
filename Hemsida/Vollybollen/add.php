<?php
session_start();

include('assets/database.php');
include('assets/functions.php');

$artist = safe($_POST['artist']);
$song = safe($_POST['song']);

if (!isset($artist) OR !isset($song)) {
	$_SESSION['error'] = "Error";
} else {
	if(empty($artist) OR empty($song)){
		$_SESSION['error'] = "Error";
	} else {
		if($_SESSION['latest'] < time()){
			$sql = "INSERT INTO list (artist, song) VALUES ('".$artist."', '".$song."')";
		
			$res = mysql_query($sql) or die(mysql_error());
			if ($res) {
			  $_SESSION['latest'] = time() + 30;
			} else {
			  echo "Det vart ett problem, försök igen senare.";
			}
		} else {
			$_SESSION['error'] = "Error2";
			$time = $_SESSION['latest'] - time();
		}
	}
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='assets/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<title>Vilken låt vill du att vi ska spela?</title>
	</head>
	<body>
		<div class="container">
			<a class="btn btn-large btn-block" href="index.php"><h1>Se kommande låtar</h1></a>
			<a class="btn btn-large btn-block" href="add.php"><h1>Lägg till en låt i listan</h1></a>
			<div class="hero-unit" style="margin-top:10px;">
				<form method="POST" action="add.php">
					<?php
					if ($_SESSION['error'] == "Error"){
						echo "<h2>* Kom ihåg att fylla i alla fälten.</h2><br>";
						unset($_SESSION['error']);
					}
					if ($_SESSION['error'] == "Error2"){
						echo "<h2>* Du måste vänte ".$time."s innan du kan lägga till en låt.</h2><br>";
						unset($_SESSION['error']);
					}
					?>
					<input style="width: 100%; height: 50px; font-size: 24px;" type="text" name="artist" id="artist" placeholder="Artist"><br>
					<input style="width: 100%; height: 50px; font-size: 24px;" type="text" name="song" id="song" placeholder="Låt"><br>
					<input class="btn btn-large btn-block" class="btn" type="submit" value="Lägg till i kö">
				</form>
			</div>
		</div>
	</body>
</html>