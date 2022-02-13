<?php
session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION['username'])){
      header("Location: login.php");
      exit();
    } //เช็กการ LOGIN
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body{
            background-color:white ;
            font-family: 'Prompt', sans-serif;
            color: black;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <?php require('navbar2.php')?>

    <section style="background: url('https://static.vecteezy.com/system/resources/thumbnails/002/372/705/small/abstract-green-geometric-banner-background-free-vector.jpg'); height: 12rem;">
        <center><h1>Write</h1></center>
    </section>
    
    <!--
    <form action="insert.php" method="post">
    ชื่อผู้ใช้งาน : <input type="text" name="username">  <br>
    รหัสผ่าน : <input type="password" name="password">    <br>
    ชื่อ-นามสกุล : <input type="text" name="uname"> <br>
    <input type="submit" value="บันทึกข้อมูล">
    </form>
    -->
    <div class="container mt-4">
        <form method="post">
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">หัวเรื่อง</label>
                        <input type="text" id="topic" class="form-control">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">ชื่อร้าน</label>
                    <input type="text" id="r_name" class="form-control">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <label for="exampleFormControlInput1" class="form-label">ประเภท</label>
                    <div class="col-lg-6 col-md-6" style="padding-right: 12px">
                        <input type="text" id="category" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="col-lg-6 col-md-6">
                        <button type="button submit" class="btn btn-success btn-block signup">Post</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>
</html>