<html>
    <head>
        <title>
            My Program
        </title>
    </head>
    <body>
        <form action="samp1.php" method="post">
            <table>
                <tr>
                    <th>Name:</th>
                    <th><input type="text" name="fname"></th><!-- First name -->
                <br>
                </tr>
                <tr>
                    <th>
                        Phone Number:
                    </th>
                    <th><input type="number" name="phno"></th>
                </tr>
                <tr>
                    <th><input type="submit" name="s"></th>
                </tr>
            </table>
                
        </form>
    </body>
</html>    
<?php
$n=$_POST['fname'];
$p=$_POST['phno'];
echo "Name is ",$n;
echo '<br>';
echo "Phone Number is ",$p;
?>

<!-- /* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */ -->

