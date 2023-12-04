<?php
$c=new mysqli("localhost","root","");

if($c->connect_error)
{
    die("connection failed".$c->connection_error);
}
else
{
    echo "success";
}
?>
