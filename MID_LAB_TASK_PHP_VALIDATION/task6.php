 <?php


if(isset($_REQUEST['submit']))
{
  $sub=$_REQUEST['submit'];
if ($sub=="") {
  echo "Can not be empty";
}
else
{
  echo "Your Blood Group is:".$sub;
}

}




?> 
    <<!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <fieldset>
         <legend>Blood Group</legend>
            <select>

        <option>A Positive</option>
        <option>A Negative</option>
        <option>A Unknown</option>
        <option>B Positive</option>
        <option>B Negative</option>
        <option>B Unknown</option>
        <option>AB Positive</option>
        <option>AB Negative</option>
        <option>AB Unknown</option>
        <option>O Positive</option>
        <option>O Negative</option>
        <option>O Unknown</option>
        <option>Unknown</option>
    </select>

    <br><input type="submit" name="submit" value="submit">
    </fieldset>

    
    </body>
    </html>
