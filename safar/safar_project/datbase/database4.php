<?php

$c=new mysqli("localhost","root","","S1MCA");
$cl="INSERT INTO student(id,name,phone) VALUES(1,'Mahi',7559876152)";
if($c->query($cl)==TRUE)
{
    echo "New record created succefully";
}
else{
    echo "unsuccessfull".$c->connection_error;
}


?>