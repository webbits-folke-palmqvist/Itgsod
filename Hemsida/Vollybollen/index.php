<?php
include('assets/database.php');

$i = 0;
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
				<table class="table table-striped">
					<tr>
						<td style="width: 1%; text-align: center;"><h3>#</h3></td>
						<td style="width: 20%; text-align: center;"><h3>Artist</h3></td>
						<td style="width: 20%; text-align: center;"><h3>Låt</h3></td>
					</tr>
					<?php 
					$getlist = mysql_query("SELECT * FROM list WHERE status = '1' OR status = '2' ORDER BY id") or die(mysql_query()); 
					while($row = mysql_fetch_assoc($getlist)) 
					{
						$i = $i + 1;
					    ?> 
					    <tr>
							<td style="width: 1%; text-align: center;"><h3><?php echo $i; ?></h3></td>
							<td style="width: 20%; text-align: center;"><h3><?php echo $row['artist']; ?></h3></td>
							<td style="width: 20%; text-align: center;"><h3><?php echo $row['song']; ?></h3></td>
						</tr>
					    <?php 
					} 
					?>
				</table>
			</div>
		</div>
	</body>
</html>