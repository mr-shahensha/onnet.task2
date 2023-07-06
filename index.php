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
    <h2>onnet task2</h2>
    <table border="2">
        <tr style="color:blue;">
            <td>roll number</td>
            <td>student name</td>
            <td>bengali</td>
            <td>hindi</td>
            <td>mathametics</td>
            <td>physics</td>
            <td>total marks</td>
            <td>best of three</td>
        </tr>
        <?php 
        $query=mysqli_query($con,"SELECT * FROM `student` ");
        while($result=mysqli_fetch_assoc($query)){
            $sid=$result['sid'];
            $stud_id=$result['student_name'];
        ?>
            <tr>
            <td><?php echo $sid;?></td>
            <td><?php echo $stud_id;?></td>

            <?php 
            $total=0;
            $query2=mysqli_query($con,"select * from marks where stud_id='$sid'");
            while($result2=mysqli_fetch_assoc($query2)){
                $marks=$result2['marks'];
                $total=$total+$marks; 
            ?>
            <td><?php echo $marks;?></td>
            <?php 
        }
            ?>
            
            <td><?php echo $total;
            ?></td>
            <!--top three-->
            <td>
                <?php
                    $total1=0;
            $query4=mysqli_query($con,"SELECT * FROM `marks` where stud_id='$sid' ORDER BY marks DESC limit 3; ");
while($result4=mysqli_fetch_assoc($query4)){
 $marks1=$result4['marks'];
 $total1=$total1+$marks1; 
}
echo $total1;
 ?>
            </td>
            </tr>
        <?php
        }
        ?>
    </table>
<br><br>
    <a href="next.php">next page -></a>
    <a href="merit.php">merit page -></a>
    <br><br>

    <form action="search.php" method="post" onsubmit="return validation()">
        <input type="text" placeholder="search by student id" name="search" id="search">
        <input type="submit" value="search" name="submit">
    </form>
    <b><p style="color:red;" id="warn"></p></b>

    <br>
    <form action="top.php" method="post" onsubmit="return validation2()">
        <input type="text" placeholder="search top three" name="top" id="top">
        <input type="submit" value="top 3" name="submit">
    </form>
    <b><p style="color:red;" id="warn2"></p></b>

</body>
</html>
<script>
    function validation(){
        $search=document.getElementById("search").value;
        if($search==""){
            text="enter search value";
            document.getElementById("warn").innerHTML=text;
            return false;
        }
    }
    function validation2(){
        $top=document.getElementById("top").value;
        if($top==""){
            text="enter top 3 value";
            document.getElementById("warn2").innerHTML=text;
            return false;
        }
    }
</script>