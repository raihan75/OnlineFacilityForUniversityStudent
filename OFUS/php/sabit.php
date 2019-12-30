<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Hello </title>
    </head>
    <body>
        <?php
        // put your code here
        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $database = "abc";
        $data = new mysqli($host, $user, $password, $database);
        
        
        if($data == null){
            echo "Connection Failed<br>" ;
        }else{
            echo "Connection Successful<br>";
        }
        
        $result = $data->query("Select * from student");
        
        echo "<table>
        <tr>
            <th>ID</th> 
            <th>Name</th> 
            <th>Department Name</th>
            <th>Total Credit</th>
        </tr>";
        while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>".$row['ID']."</td> 
            <td>".$row['name']."</td> 
            <td>".$row['dept_name']."</td>
            <td>".$row['tot_cred']."</td>
        </tr>";
        
        }
        echo "</table>";
        
        
        
        $data->close();
        
        ?>
    </body>
</html>
