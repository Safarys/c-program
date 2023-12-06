<?php
if(isset($_POST['result']))
{
$r=$_POST['rno'];
$s=$_POST['sub'];
$m=$_POST['mark'];
  
}

?>
<html>
    <head>
        <title>
            Mark List
        </title>
    
    </head>
    <body>
        
        <table border=solid align='center'>
            <tr> <th colspan="4"><center><h1>M A College</h1></center></th><br></tr>
        <tr><th colspan="4"><h2>Kothamangalam,Eranakulam Dt.</h2></th></tr> 
        <tr><th colspan="4"><h2>Date</h2></th></tr>   
            <tr>
                <th>
                    Sl No.
                </th>
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
            <td><?php echo '';  ?></td>
        </tr>
        
        
        
        <?php  } ?>
    </table>
        </body>
        </html>
        




