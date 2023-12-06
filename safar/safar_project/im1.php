<?php
$c=new mysqli("localhost","root","");
$s="CREATE DATABASE COLLEGE";
if($c->query($s)==TRUE)
{
    echo "Database created succefully";
}
else
{
    echo "Connection error".$c->connection_error;
}
?>