<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" >
           <input type="text" name="fname" id="fname"><br>
           <input type="submit" name="submit" value="submit" id="submit">
       </form>
    </body>
    <?php
    
    if(isset($_POST['submit']))
    {
        $n=$_POST['fname'];
        
        ?>
    <h1><?php echo $n; ?></h1>
    
    <?php 
    
        echo "<script>windows.location('index.php')</script>";
    }
    ?>
</html>
