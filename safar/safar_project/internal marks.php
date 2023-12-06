<html>
    <head>
        <title>
            Internal Marks
        </title>
    
    </head>
    <body>
        <form action="im.php" method="post">
        <table border= 2px solid align='center'>
            <tr> <th colspan="2"><center><h1>MA College</h1></center></th><br></tr>
        <tr><th colspan="2"><h2>Kothamangalam,Eranakulam Dt.</h2></th></tr>   
        <tr><th colspan="0"><h3>Roll No:</h3></th>
                <th><input type="number" name="rno" style="height:100%;width:100%" ></th>
        </tr>
        <tr>
                
                <th>
                    Subject
                </th>
                <th>Mark</th>
            </tr>
            
           
                <?php
                      for($i=0;$i<5;$i++)
                      {
                ?>
             <tr>
                
                <th><input type="text" name='sub[]' placeholder="Subject"></th>
                <th><input type="number" name='mark[]' placeholder="mark"></th>
                 </tr>
                <?php 
                      }
                ?>
           <br>
            
            <tr>
                <th colspan="2" align="center"><input type="submit" name="result" value="submit"></th>
            </tr>
        </table>
            </form>
    </body>
</html>



