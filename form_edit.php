<?php
require('connectdb.php');
$id = $_GET['id'];
$sql = "SELECT `id`, `username`, `password`, `uname`, 'email' FROM `register` WHERE id = '$id'"; //คำสั่งเก็บตรงนี้
$query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
$row = $query_sql->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form action="update.php" method="post">
    <div class="row mb-3">
        <div class="col-lg-4 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" name="uname" class="form-control" id="exampleFormControlInput1" placeholder="สมคิด จิตปั่นป่วน">
        </div>
        <div class="col-lg-4 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="username" name="username" class="form-control" id="exampleFormControlInput1" placeholder="@Exmapleusername">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-4 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </div>
            
    <div class="row mb-3">
        <div class="col-lg-4 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="exampleFormControlInput1">
        </div>
    </div>
            
    <input type="submit" value="บันทึกข้อมูล"> <br>
</form>

</body>
</html>