<?php
$c=new mysqli("localhost","root","","BILL");
// if(isset($_POST['BillInvoice']))
// {
// //     $cl="INSERT INTO BILLINVOICE(id,name,phone) VALUES(1,'Mahi',7559876152)";
// // if($c->query($cl)==TRUE)
// // {
// //     echo "New record created succefully";
// // }
// // else{
// //     echo "unsuccessfull".$c->connection_error;
// // }
$i=$_POST['id'];
    $item1=$_POST['itemname1'];
    $item2=$_POST['itemname2'];
    $item3=$_POST['itemname3'];
   
    
    $q1=$_POST['qty1'];
    $q2=$_POST['qty2'];
    $q3=$_POST['qty3'];
    
    
    $u1=$_POST['unitpr1'];
    $u2=$_POST['unitpr2'];
    $u3=$_POST['unitpr3'];
   
    
    // $total1=$q1*$u1;
    // $total2=$q2*$u2;
    // $total3=$q3*$u3;
  
    // $total=$total1+$total2+$total3;

    $cl="INSERT INTO BILLINVOICE(`id`, `item_name`, `unit`, `quantity`) VALUES('$i','$item1','$u1','$q1')";
    $c2="INSERT INTO BILLINVOICE(`id`, `item_name`, `unit`, `quantity`) VALUES('$i','$item2','$u2','$q2')";
    $c3="INSERT INTO BILLINVOICE(`id`, `item_name`, `unit`, `quantity`) VALUES('$i','$item3','$u3','$q3')";

?>
<html>
    <head>
        <title>
            bill
        </title>
    
    </head>
    <body>
        
        <table border=solid align='center'>
            <tr> <th colspan="4"><center><h1>SYS Supermarket</h1></center></th><br></tr>
        <tr><th colspan="4"><h2>Date</h2></th></tr>   
            
        <?php

$sa="SELECT * FROM BILLINVOICE";
$r=$c->query($sa);
if($r->num_rows>0)
{
    echo "<tr><th>Sl No.</th><th>Item Name</th><th>Quantity</th><th>Unit price</th><th>Total price</th></tr>";
    while($c1=$r->fetch_assoc())
    {
       echo "<tr><td>".$c1['itemname1']."</td><td>".$c1['qty1']."</td><td>".$c1['unitpr1']."</td></tr><br>";
       
    }
    while($c2=$r->fetch_assoc())
    {
        echo "<tr><td>".$c2['itemname2']."</td><td>".$c2['qty2']."</td><td>".$c2['unitpr2']."</td></tr><br>";
       
    }
    while($c3=$r->fetch_assoc())
    {
        echo "<tr><td>".$c3['itemname3']."</td><td>".$c3['qty3']."</td><td>".$c3['unitpr3']."</td></tr><br>";
       
    }
    
       
}
?>
       
         
       
     

        
        </body>
        </html>
        


