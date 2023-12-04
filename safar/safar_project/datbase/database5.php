<?php
$c=new mysqli("localhost","root","","S1MCA");
$sa="SELECT * FROM student";
$r=$c->query($sa);
if($r->num_rows>0)
{
    echo "<table border ='1'><tr><td>ID</td><td>NAME</td><td>Phone No.</td></tr>";
    while($row=$r->fetch_assoc())
    {
       echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['phone']."</td></tr><br>";
    }
}
?>