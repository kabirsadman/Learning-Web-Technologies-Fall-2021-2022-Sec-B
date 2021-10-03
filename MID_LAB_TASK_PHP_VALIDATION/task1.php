<?php


if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['myname'];
if ($name=="") {
	echo "Can not be empty";
}
else
{
	echo "Your Name is:".$name;
}

}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="get"> 
		<fieldset>
			<legend>Name</legend>
		Name:<input type="text" name="myname" value=""><br>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>