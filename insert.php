<?php
$username = $_POST['username'];
$password = $_POST['password'];
$uname = $_POST['uname'];
$email = $_POST['email'];

require('connectdb.php');
$sql = "INSERT INTO `register`(`username`, `password`, `uname`, `email`) VALUES ('$username','".md5($password)."','$uname','$email')"; //คำสั่งเก็บตรงนี้
$query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
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