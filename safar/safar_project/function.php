
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cube</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="val" id="" placeholder="Enter Value"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php

if(isset($_POST['submit']))
{
    $s=$_POST['val'];
    function fact($s)
    {
        if($s==1){
            return $s;
        }
        else
        {
            return $s*fact($s-1);
        }
        
    }
    
    echo "The factorial is ",fact($s);
}

?>
</body>
</html>