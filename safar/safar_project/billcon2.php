<?php
$c=new mysqli("localhost","root","","BILL");
$sql="CREATE TABLE BILLINVOICE(id INT(2),item_name VARCHAR(30) NOT NULL,unit VARCHAR(10),quantity VARCHAR(30))";
if($c->query($sql)==TRUE)
{
    echo "Database created succefully";
}
else
{
    echo "Connection error".$c->connection_error;
}
?>