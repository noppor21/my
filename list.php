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

$query1=mysql_query("select  id, name, age from addd"); // ค้นหา 
echo "<table><tr><td>Name</td><td>Age</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>"; // ไปหน้า แก้ไข
echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>"; // ลบทั้ง
}
?>
</ol>
</table>
    </body>
</html>
