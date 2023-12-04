<?php
$c=new mysqli("localhost","root","","S1MCA");
$sql="CREATE TABLE student(id INT(2),name VARCHAR(30) NOT NULL,phone VARCHAR(10))";
if($c->query($sql)==TRUE)
{
    echo "Database created succefully";
}
else
{
    echo "Connection error".$c->connection_error;
}
?>
