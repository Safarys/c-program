
<html>
    <head>
        <title>
            Bill Invoice
        </title>
    
    </head>
    <body>
  
        <form action="" method="post">
        <table border=solid align='center'>
            <tr> <th colspan="3"><center><h1>SYS Supermarket</h1></center></th><br></tr>
        <tr><th colspan="3"><h2><?php echo date("d/m/y"),date("l"); ?></h2></th></tr>   
            <tr>
                <th>
                    Item Name
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Unit price
                </th>
                
            </tr>
            <?php
            $a=0;
            while($a< 5){
                ?>
            
            <tr>
            
                <th><input type="text" name='itemname1[]' placeholder="item name"></th>
                <th><input type="number" name='qty1[]' placeholder="quantity"></th>
                <th><input type="number" name='unitpr1[]' placeholder="unit price"></th>
                  
            </tr>
           <?php
           $a++;
            }
            ?>
           
           
            <tr>
                <th><input type="submit" name="BillInvoice" value="bill"></th>
            </tr>
        </table>
        </form>
        <?php


if (isset($_POST['BillInvoice'])) 
{
    $con=new mysqli("localhost","root","","BILL");
   
    $item1=$_POST['itemname1'];
    $q1=$_POST['qty1'];
    $u1=$_POST['unitpr1'];
    for($i=0;$i<5;$i++)
    {
  
        $item=$item1[$i];
        $q=$q1[$i];
        $u=$u1[$i];

        if($item!='')
        {
            $cl="INSERT INTO billinvoice(`item_name`,`unit`,`quantity`) VALUES('$item','$u','$q')";
            if ($con->query($cl)==TRUE) {
    
                echo "<script> alert('added successfully');</script>";
            }
            else {
                    echo "connection failed:",$con->connect_error;
            }
        }

    }

  echo "<script>alert('added');</script>"; 
 
  
}

?>
    </body>
</html>

