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
            background-color:rgb(238, 238, 238) ;
            font-family: 'Prompt', sans-serif;
            color: black;
        }
        .topic{
            text-align: center;
            padding: 90px;
            color: white;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-xs-6">
                <a class="navbar-brand" href="index.php"><img src="pic/kinraidee_icon.png" class="img-fluid" alt="..." width="60" height="60">KinRaiDee</a>
            </div>
            
            <div class="col-xs-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
                    </li>
                    </li>
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link" href="kongwan.php">ของหวาน</a>
                    </li>
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link" href="kongkao.php">ของคาว</a>
                    </li>
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link" href="drink.php">เครื่องดื่ม</a>
                    </li>
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link" href="oenoen.php">อื่น ๆ</a>
                    </li>
                 
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <section style="background: url('pic/med.jpg'); height: 15rem;">
        <h1 class="topic">เข้าสู่ระบบ</h1>
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
            $_SESSION['uname'] = $auth['uname'];
            $_SESSION['id'] = $auth['id'];
            $_SESSION['email'] = $auth['email'];
            header("Location: index.php"); 

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
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                    <form method="post">
                    
                            <div class="col-lg-12 col-md-4 mt-2">
                                <label for="email" class="form-label">Email address <small>ที่อยู่อีเมล</small></label>
                                <input type="email" name="email" class="form-control" placeholder="name@example.com">
                            </div>
                            <div class="col-lg-12 col-md-4 mt-2">
                                <label for="pword" class="form-label">Password <small>รหัสผ่าน</small></label>
                                <input type="password" name="pword" class="form-control">
                            </div>
                            <div class="col-lg-12 col-md-12 mt-3">
                            <button class="w-100 btn btn-primary" type="submit">เข้าสู่ระบบ</button>
                            <a href="signup.php" class="mt-2 btn btn-secondary w-100">ลงทะเบียน</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                
        </div>
        

    </div>
</body>
</html>