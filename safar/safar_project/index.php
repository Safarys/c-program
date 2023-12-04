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
        <?php
        $s=array('s1mca'=>'60','s2mca'=>'80');
        echo $s['s1mca'],'<br>';
        $arr=array('12','13','14');
        for($i=0;$i<count($arr);$i++)
        {
            echo $arr[$i];
        }
        foreach ($arr as $v)
        {
            echo '<br>',$v;
        }
        ?>
    </body>
</html>
