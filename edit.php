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
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query3=mysql_query("update addd set name='$name', age='$age' where id='$id'");
if($query3)
{
header('location:list.php');
}
}
$query1=mysql_query("select * from addd where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
Age:<input type="text" name="age" value="<?php echo $query2['age']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
    </body>
</html>
