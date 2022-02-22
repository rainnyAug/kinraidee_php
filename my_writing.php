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
    <title>My writing</title>

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
        .profile{
            font-size: 18px;
            text-align: center;
        }
        .topic{
            text-align: center;
            padding: 70px;
            color: white;
        }
        .white{
            background-color:white ;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <?php require('navbar.php')?>
    
    <?php
    require('connectdb.php');
    $sql = "SELECT `username`, `uname`, `email` FROM `register` WHERE 1";
    $query_sql = $connectdb->query($sql);
    ?>
    
    <?php
    $w_id = $_SESSION['id'];
    $sql = "SELECT `id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des` FROM `writing` WHERE writer_id='$w_id'";
    $query_sql = $connectdb->query($sql);
    ?>

    <section style="background: url('pic/small.jpg'); height: 12rem;">
        <h1 class="topic">My Writing</h1>
    </section>

    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-3 col-md-3" style="padding-right: 24px; padding-left: 0px;">
            <div class="card">
                <div class="card-body">
                <img src="https://i.pinimg.com/originals/d2/28/71/d22871b6c9e94e1d973663bbe1d0b276.jpg" class="img-fluid rounded mx-auto d-block" alt="...">
                <div class="profile mt-3 mb-2">
                    <font size="6px"><b><?php echo $_SESSION['username']; ?></b></font> <br>
                    <?php echo $_SESSION['email']; ?>
                </div>
                <center><a href="write.php"><button type="button" class="btn btn-warning">+ เพิ่มงานเขียน</button></a></center>
                </div>
            
            </div>
                
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">    
                                <thead style="font-size: 19px;">
                                    <td>หัวเรื่อง</td>
                                    <td>ชื่อร้าน</td>
                                    <td>ประเภท</td>
                                    <td>คะแนน</td>
                                    <td>จัดการ</td>
                                </thead>    
                                <?php while($row = mysqli_fetch_array($query_sql)){ ?>
                                <tr>
                                    <td><?php echo $row['topic']; ?></td> 
                                    <td><?php echo $row['r_name']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['score']; ?></td>
                                    <td>
                                        <a href=""><button type="button" class="btn btn-danger delete_data" id="<?php echo $row['id']; ?>">ลบ</button></a>
                                        <a href="edit_write.php?id=<?php echo $row['id']; ?>"  class="btn btn-secondary">แก้ไข</a> 
                                        <a href="arnbotkwarm.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">ดู</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    
                    </div>
                </div>
                
            </div>
        </div>
        
        
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
    <script>
    $(document).on('click','.delete_data',function(){
          id = $(this).attr("id");
          Swal.fire({
                    title: 'ยืนยันการลบบทความนี้หรือไม่?',
                    text: "หากลบแล้วจะไม่สามารถกู้คืนได้อีก",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ยืนยันการลบรายการ',
                    cancelButtonText: 'ยกเลิก'
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                url: 'app.php',
                                method:"POST",
                                data: {id:id,program:"delete_data"},
                                success:function(msg){
                                    if(msg == 'ok'){
                                        Swal.fire(
                                        'ลบรายการสำเร็จ!',
                                        '',
                                        'success'
                                        ).then(function() {window.location.reload();})
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
                        }else if (result.dismiss === Swal.DismissReason.cancel) {
                                Swal.fire(
                                'ยกเลิกการลบแล้ว',
                                '',
                                'error'
                                )
                        }
                    })
                    return false;
    });
  </script>
</body>
</html>