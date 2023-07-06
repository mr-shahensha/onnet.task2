<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>merit list</h2>
    <table border="2">
        <tr style="color:blue;">
            <td>roll number</td>
            <td>student name</td>
        </tr>
        <?php 
        $query=mysqli_query($con,"SELECT stud_id, SUM(marks) as total FROM `marks` GROUP BY stud_id ORDER BY total desc limit 3; ");
        while($result=mysqli_fetch_assoc($query)){
            $sid=$result['stud_id'];
            $marks=$result['total'];
        ?>
            <tr>
            <td><?php echo $sid;?></td>
            <td><?php echo $marks;?></td>

        </tr>
        <?php
        }
        ?>
    </table>
    
    <?php
    $query1=mysqli_query($con,"SELECT top 3 SUM(marks) as total FROM `marks`  group by stud_id ORDER BY total DESC limit 3;");
    while($result2=mysqli_fetch_assoc($query1)){
        $std=$result2['total'];
        
        echo $std;
        echo "<br>";
    }
    
    ?>
</body>
</html>
