<?php
	session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: login.html');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
</head>
<body>

</body>
</html>