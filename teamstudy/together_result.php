<?php
 $con = mysqli_connect("localhost", "dooiy6116", "wlsgmlsla12!", "dooiy6116");
mysqli_query($con,'SET NAMES utf8');

$id = $_POST['user_id'];
$date = $_POST['date'];
$st_time = $_POST['startTime'];
$end_time = $_POST['endTime'];
$seat = $_POST['seat'];
$hour = intval($_POST['hour']);
$price = intval($_POST['price']);
$title = $_POST['bookstitle'];
$count = intval($_POST['count']);


$statement = mysqli_prepare($con, "INSERT INTO together VALUES (null,?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssssiisi", $id, $date, $st_time, $end_time, $seat, $hour, $price, $title, $count);
    mysqli_stmt_execute($statement);

    echo "<script>alert('예약이 완료되었습니다');</script>"; 
    echo("<script>location.href='./mybook.php';</script>"); 

?>

