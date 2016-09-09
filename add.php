<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
        
include('config.php');
if(isset($_POST['save']))
{
$name=mysql_real_escape_string($_POST['name']);
$age=mysql_real_escape_string($_POST['age']);
$query1=mysql_query("insert into addd values('','$name','$age')");
echo "insert into addd values('','$name','$age')";
if($query1)
{
header("location:list.php");
}
}
?>
<fieldset style="width:300px;">
<form method="post" action="">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
<br>
<input type="submit" name="save">
</form>
</fieldset>
        
        
    </body>
</html>
