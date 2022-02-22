<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>

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

    <?php require('navbar.php')?>

    <section style="background: url('pic/med.jpg'); height: 15rem;">
        <h1 class="topic">ลงทะเบียน</h1>
    </section>
    
    <div class="container mt-4">
        <form method="post">
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" id="uname" class="form-control" required placeholder="สมพร โปรดนอนเถอะ">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="username" id="username" class="form-control" required placeholder="Exampleusername">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <div class="col-lg-6 col-md-6" style="padding-right: 12px">
                        <input type="email" id="email" class="form-control" required placeholder="name@example.com">
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <div class="col-lg-6 col-md-6" style="padding-right: 12px">
                        <input type="password" id="password" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="col-lg-6 col-md-6">
                        <button type="button" class="btn btn-success btn-block signup">สมัครสมาชิก</button>
                    </div>
                </div>
            </div>

        </form>

    </div><script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
   
    <script>

        $(document).on('click','.signup',function(){
          uname = document.getElementById("uname").value;
          username = document.getElementById("username").value;
          email = document.getElementById("email").value;
          password = document.getElementById("password").value;
          if(uname == ""){
            document.getElementById("uname").focus();
            }
            else if(username == ""){
            document.getElementById("username").focus();
            }
            else if(email == ""){
            document.getElementById("email").focus();
            }
            else if(password == ""){
            document.getElementById("password").focus();
            }
          $.ajax({
            url: 'app.php',
            method:"POST",
            data: {program:"signup",uname:uname,username:username,email:email,password:password},
            success:function(msg){
                if(msg == 'ok'){
                Swal.fire(
                'สมัครสมาชิกสำเร็จ',
                '',
                'success'
                ).then(function() {window.location.href="login.php";})
            }
            else if(msg == 'email'){
                Swal.fire(
                'เกิดข้อผิดพลาด!',
                'อีเมลนี้ถูกใช้ไปแล้ว',
                'error'
                )
            }
            else if(msg == 'user'){
                Swal.fire(
                'เกิดข้อผิดพลาด!',
                'ชื่อผู้ใช้ถูกใช้ไปแล้ว',
                'error'
                )
            }
            else if(msg == 'pw'){
                Swal.fire(
                'เกิดข้อผิดพลาด!',
                'รหัสผ่านต้องมี 8 ตัวอักษรขึ้นไป',
                'error'
                )
            }
            else{
                Swal.fire(
                'เกิดข้อผิดพลาด!',
                'โปรดลองใหม่อีกครั้ง',
                'error'
                )
            }
        }
        });

        });

    
</script>
    
</body>
</html>