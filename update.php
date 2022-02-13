<?php
require('connectdb.php');

$username = $_POST['username'];
$password = $_POST['password'];
$uname = $_POST['uname'];
$uid = $_POST['uid'];

$sql = "UPDATE `register` SET `username`='$username',`password`='$password',`uname`='$uname' WHERE `id` = '$uid'"; //คำสั่งเก็บตรงนี้
$query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
if($query_sql){
    echo "ok"; //ถ้าใช้ได้ขึ้นโอเค
    header("location: select.php");
    exit(0);
}
else{
    echo "notok"; //ถ้าใช้ไม่ได้
}
?>