<?php
$c=new mysqli("localhost","root","","COLLEGE");
$sql="CREATE TABLE INTERNAL_MARKS_1(id INT(2),roll_no VARCHAR(20) NOT NULL,sub VARCHAR(30) NOT NULL,mark VARCHAR(100),grade VARCHAR(30))";
if($c->query($sql)==TRUE)
{
    echo "Database created succefully";
}
else
{
    echo "Connection error".$c->connection_error;
}
?>