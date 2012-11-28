<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("itgsod") or die(mysql_error());

mysql_query( "SET NAMES utf8");
mysql_query( "SET CHARACTER SET utf8");

$kurs = $_POST['kurs'];

if($kurs){
	$result = mysql_query("SELECT antal FROM kurs WHERE namn = '$kurs'");
	$row = mysql_fetch_row($result);

	$old_antal = $row[0];
	$antal = $old_antal + 1;
	
	$result = mysql_query("UPDATE kurs SET antal = '$antal' WHERE antal = '$old_antal' AND namn = '$kurs'") or die(mysql_error());  
}
?>
<html>
	<head>
		<title>IT-Gymnasiet Södertörn</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
			body {
				background-color: #EEEEEE;
				color: #333333;
				font-family: Arial;
			}

			.center {
				width: 200px;
				margin-right: auto;
				margin-left: auto;
			}

			.btn {
				display: inline-block;
				padding: 4px 12px;
				margin-bottom: 0;
				font-size: 14px;
				line-height: 20px;
				color: #333;
				text-align: center;
				text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
				vertical-align: middle;
				cursor: pointer;
				background-color: whiteSmoke;
				background-image: -moz-linear-gradient(top, white, #E6E6E6);
				background-image: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#E6E6E6));
				background-image: -webkit-linear-gradient(top, white, #E6E6E6);
				background-image: -o-linear-gradient(top, white, #E6E6E6);
				background-image: linear-gradient(to bottom, white, #E6E6E6);
				background-repeat: repeat-x;
				border: 1px solid #BBB;
				border-color: #E6E6E6 #E6E6E6 #BFBFBF;
				border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
				border-bottom-color: #A2A2A2;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
				-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
				-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
				box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
			}
		</style>
	</head>
	<body>
		<div class="center">
			<h3>Vilken kurs är du intresserad utav?</h3>
			<form action="index.php" method="POST">
				<input type="radio" name="kurs" value="el">IT EL<br />
				<input type="radio" name="kurs" value="teknik">IT TEKNIK<br />
				<input type="radio" name="kurs" value="sam">IT SAM<br />
				<input type="radio" name="kurs" value="musik">IT MUSIK<br />
				<input type="submit" value="Rösta" class="btn">
			</form>
		</div>
	</body>
</html>