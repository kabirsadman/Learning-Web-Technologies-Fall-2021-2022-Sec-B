<?php


if(isset($_REQUEST['submit']))
{
	$gender=$_REQUEST['gender'];
if ($gender=="") {
	echo "Can not be empty";
}
else
{
	echo "Your Gender is:".$gender;
}

}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class=""  method="post">
      <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" value="male"> male
        <input type="radio" name="gender" value="male"> Female
        <input type="radio" name="gender" value="male"> Other
        <br>
        <input type="submit" name="" value="Submit"><br>

      </fieldset>

    </form>
  </body>
</html>
