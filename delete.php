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
$query1=mysql_query("delete from addd where id='$id'");
if($query1)
{
header('location:list.php');
}
}
?>
    </body>
</html>
