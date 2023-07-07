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
        $query=mysqli_query($con,"SELECT stud_id, sum(marks) as summ_mrks from( select stud_id,marks ,row_number() over (PARTITION by stud_id order by marks desc)  as rank from marks) as ranked_marks where rank<=3 GROUP BY stud_id ORDER by summ_mrks desc; ");
        while($result=mysqli_fetch_assoc($query)){
            $sid=$result['stud_id'];
            $marks=$result['summ_mrks'];
        ?>
            <tr>
            <td><?php echo $sid;?></td>
            <td><?php echo $marks;?></td>

        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>
