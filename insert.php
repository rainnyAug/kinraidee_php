<?php
$username = $_POST['username'];
$password = $_POST['password'];
$uname = $_POST['uname'];
$email = $_POST['email'];

require('connectdb.php');
$sql = "INSERT INTO `register`(`username`, `password`, `uname`, `email`) VALUES ('$username','".md5($password)."','$uname','$email')";
$query_sql = $connectdb->query($sql);
if($query_sql){
    echo "<script>Swal.fire({
        icon: 'error',
        title: 'ผิดพลาด',
        text: 'ไม่มีข้อมูลในระบบ'
    })</script>";
    exit(0);
}
else{
    echo "notok"; //ถ้าใช้ไม่ได้
}

$topic = $_POST['topic'];
$r_name = $_POST['r_name'];
$category = $_POST['category'];
$score = $_POST['score'];

require('connectdb.php');
$sql = "INSERT INTO `register`(`topic`, `r_name`, `category`, `score`) VALUES ('$topic','"$r_name"','$category','$score')";
$query_sql = $connectdb->query($sql);
if($query_sql){
    echo "<script>Swal.fire({
        icon: 'error',
        title: 'ผิดพลาด',
        text: 'ไม่มีข้อมูลในระบบ'
    })</script>";
    exit(0);
}
else{
    echo "notok"; //ถ้าใช้ไม่ได้
}
?>