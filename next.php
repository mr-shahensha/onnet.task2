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
    <h2>highest marks</h2>
    <table border="2">
        <tr style="color:blue;">
            <td>roll number</td>
            <td>student name</td>
            <td>bengali</td>
            <td>hindi</td>
            <td>mathametics</td>
            <td>physics</td>
            <td>total marks</td>
        </tr>
        <?php 
        
        $query=mysqli_query($con,"SELECT stud_id, SUM(marks) as total FROM `marks` GROUP BY stud_id ORDER BY total desc; ");
        while($result=mysqli_fetch_assoc($query)){
            $stud_id=$result['stud_id'];
            $total=$result['total'];
        ?>
            <tr>
            <td><?php echo $stud_id;?></td>
            <td>
            <?php 
            $query3=mysqli_query($con,"select * from student where sid='$stud_id'");
            while($result3=mysqli_fetch_assoc($query3)){
                $sname=$result3['student_name'];
            ?>
            <?php echo $sname;?></td>
            <?php 
       }
            ?>    
        
            </td>

            <?php 
            $query2=mysqli_query($con,"select * from marks where stud_id='$stud_id'");
            while($result2=mysqli_fetch_assoc($query2)){
                $marks=$result2['marks'];
            ?>
            <td><?php echo $marks;?></td>
            <?php 
       }
            ?>
            
            <td><?php echo $total;
            ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>