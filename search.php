<?php 
include("connection.php");
if(isset($_POST["submit"])){
$search_data=$_REQUEST['search'];
$query1=mysqli_query($con,"select * from student where sid='$search_data'");
while($result=mysqli_fetch_assoc($query1)){
    $sname=$result['student_name'];
}
}
?>

<table border="2">
<tr>
    <td>sid : </td>
    <td><?php echo $search_data;?></td>
</tr>
<tr>
    <td>name: </td>
    <td><?php echo $sname;?></td>
</tr>
<tr><td colspan="2" style="color:blue;">marksheet</td></tr>
<tr>
    <td>
        subject
    </td>
    <td>marks</td>
</tr>
<?php 
echo $search_data;
$query2=mysqli_query($con,"select * from marks where stud_id='$search_data'");
while($result2=mysqli_fetch_assoc($query2)){
    $sub_id=$result2['subject_id'];
    $marks=$result2['marks'];
?>
<tr>
    <td>
<?php echo $sub_id;?>
    </td>
    <td>
<?php echo $marks; ?>
    </td>
</tr>
<?php 
}
?>
</table>