<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>

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
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-xs-6">
                <a class="navbar-brand" href="index.php">KinRaiDee</a>
            </div>
            
            <div class="col-xs-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="signup.php"><button type="button" class="btn btn-secondary">ลงทะเบียน</button></a>   
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <section style="background: url('https://static.vecteezy.com/system/resources/thumbnails/002/372/705/small/abstract-green-geometric-banner-background-free-vector.jpg'); height: 15rem;">
        <center><h1>เข้าสู่ระบบ</h1></center>
    </section>
    
    <div class="container mt-4">

        <?php
require("connectdb.php");
session_start();

if(isset($_POST['email']) && isset($_POST['pword'])){
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($connectdb,$email);
        $pword = stripslashes($_REQUEST['pword']);
        $pword = mysqli_real_escape_string($connectdb,$pword);
        if($email != '' && $pword != ''){
            $sql = "SELECT
            `id`,
            `username`,
            `password`,
            `uname`,
            `email`
        FROM
            `register`
        WHERE
            `email` = '$email' AND `password` = '".md5($pword)."'";
            $querydata = $connectdb->query($sql);
            $num = mysqli_num_rows($querydata);
            if($num>0){
            $auth = $querydata->fetch_assoc();
            $_SESSION['username'] = $auth['username'];
            $_SESSION['id'] = $auth['id'];
            $_SESSION['email'] = $auth['email'];
            header("Location: home.php"); 

            }else{
                echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'ผิดพลาด',
                    text: 'ไม่มีข้อมูลในระบบ'
                })</script>";
            }
        }
        else{
            echo "<script>Swal.fire({
            icon: 'error',
            title: 'ผิดพลาด',
            text: 'ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง'
            })</script>";
        }


}

?>
        <form method="post">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="pword" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="col-lg-8 col-md-8 mt-3">
                <button class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>
                </div>
            </div>
        </form>

    </div>
</body>
</html>