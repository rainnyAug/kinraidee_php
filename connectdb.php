<?php
$hostfordb = 'localhost';
$usernamefordb = 'root';
$passwordfordb = '';
$dbnamefordb = 'signup';

date_default_timezone_set('Asia/Bangkok');
$connectdb = mysqli_connect($hostfordb,$usernamefordb,$passwordfordb,$dbnamefordb);
mysqli_set_charset($connectdb, "utf8");

if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>