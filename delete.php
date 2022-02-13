<?php
require('connectdb.php');
$id = $_GET['id'];

$sql = "DELETE FROM `register` WHERE `id` ='$id'"; //คำสั่งเก็บตรงนี้
$query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
if($query_sql){
    echo "ok"; //ถ้าใช้ได้ขึ้นโอเค
    header( "location: select.php" );
    exit(0);
}
else{
    echo "notok"; //ถ้าใช้ไม่ได้
}
?>