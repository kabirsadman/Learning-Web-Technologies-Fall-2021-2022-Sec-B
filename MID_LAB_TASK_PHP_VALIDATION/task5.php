<?php


if(isset($_REQUEST['submit']))
{
  $degree=$_REQUEST['Degree'];
if ($degree=="") {
  echo "Can not be empty";
}
else
{
  echo "Degree:".$degree;
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

    <form class=""  method="get">
      <fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="Degree" value="male"> SSC
        <input type="checkbox" name="Degree" value="male"> HSC
        <input type="checkbox" name="Degree" value="male"> BSc
        <br>
        <input type="submit" name="" value="Submit"><br>
      </fieldset>

    </form>
  </body>
</html>