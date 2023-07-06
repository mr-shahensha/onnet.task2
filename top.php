<?php 
include("connection.php");
if(isset($_POST['submit']))
{
    $top=$_REQUEST['top'];
    

}
?>

<table border="2">
<tr>
    <td>sid : </td>
    <td><?php echo $top;?></td>
</tr>
<tr>
    <td>name: </td>
    <td><?php 
        $query0=mysqli_query($con,"select student_name from student where sid='$top'");
        while($result0=mysqli_fetch_assoc($query0)){
            $name=$result0['student_name'];
        }
    
    echo $name;?></td>
</tr>
<tr><td colspan="2" style="color:blue;">top 3</td></tr>

<tr>
    <td>
        subject
    </td>
    <td>
marks 
    </td>
</tr>
<?php 
$query=mysqli_query($con,"SELECT * FROM `marks` where stud_id='$top' ORDER BY marks DESC limit 3; ");
while($result=mysqli_fetch_assoc($query)){
 $subject=$result['subject_id'];
 $marks=$result['marks'];
?>
<tr>
    <td><?php
    $query1=mysqli_query($con,"select subject_name from subject where sid='$subject'");
    while($result1=mysqli_fetch_assoc($query1)){
        $subject1=$result1['subject_name'];
    }

    echo $subject1;?></td>
    <td>
<?php echo $marks; ?>
    </td>
    </tr>
    <?php 
}
?>


</table>