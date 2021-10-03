 <?php


if(isset($_REQUEST['submit']))
{
  $email=$_REQUEST['date'];
if ($email=="") {
  echo "Can not be empty";
}
else
{
  echo "Date is:".$date;
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

    <form class="" action="" method="post">
      <fieldset>
        <legend><b>Date of Birth</b></legend>
        DD MM YYYY <br>
        <input type="number" name="date" width="2" value="">/
        <input type="number" name="date" size="2" value="">/
        <input type="number" name="date" size="4" value="">
        <br>
        <input type="submit" name="" value="Submit"><br>
      </fieldset>
    </form>
  </body>
</html>
