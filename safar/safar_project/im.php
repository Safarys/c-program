
<html>
    <head>
        <title>
            Mark List
        </title>
    
    </head>
    <body>
    <?php
if(isset($_POST['result']))
{
    $con=new mysqli("localhost","root","","COLLEGE");

$s=$_POST['sub'];
$m=$_POST['mark'];
  for($i=0;$i<5;$i++)
  {
    
    $s1=$s[$i];
    $m1=$m[$i];

    if($s1!='')
    {
        $c1="INSERT INTO INTERNAL_MARKS_1(`sub`, `mark`) VALUES ('$s1','$m1')";
        if($con->query($c1)==TRUE)
        {
            echo "";
        }
        else{
            echo "connection failed",$con->connect_error;
        }
    }
  }
}

?>
        <table border=solid align='center'>
            <tr> <th colspan="4"><center><h1>M A College</h1></center></th><br></tr>
        <tr><th colspan="4"><h2>Kothamangalam,Eranakulam Dt.</h2></th></tr> 
        <tr><th colspan="4"><h2>Date</h2></th></tr>   
            <tr>
               
                <th>
                    Subject
                </th>
                
                <th>
                    Mark 
                </th>
                <th>
                    Pass/Fail
                </th>
        </tr>
       <?php
       
       for($i=0;$i<5;$i++)
       {
       
       ?>
        <tr>
            
            <td><?php echo $s[$i];  ?></td>
            <td><?php echo $m[$i];  ?></td>
            <td><?php if($m[$i]>50) echo "PASS"; else echo "Fail";?>
        </tr>
        
        <?php  } ?>
    </table>
   
        </body>
        </html>
        




