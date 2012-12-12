<?php
function safe($unsafe) {
	$unsafe = stripslashes($unsafe);
	$unsafe = htmlentities($unsafe);
	$unsafe = strip_tags($unsafe);
	$safe = mysql_real_escape_string($unsafe);

	return $safe;
}
?>