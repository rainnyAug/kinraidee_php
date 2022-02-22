<?php
session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อ่าน Botkwam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body{
            background-color:rgb(238, 238, 238);
            font-family: 'Prompt', sans-serif;
            color: black;
        }
        .topic{
            text-align: center;
            padding: 70px;
            color: white;
        }
        .detail{
            font-size: 18px;
        }
        .des{
            font-size: 16px;
        }
        .profile{
            background-color: rgb(255, 255, 255);
            font-size: 19px;
            padding: 12px;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <?php require('navbar.php')?>
    
    <?php
    require('connectdb.php');
    $id = $_GET['id'];
    $sql = "SELECT `id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des` FROM `writing` WHERE `id` ='$id'";
    $query_sql = $connectdb->query($sql);
    ?>

    <?php if($row = mysqli_fetch_array($query_sql)){ ?>
    
    <section style="background: url('pic/small.jpg'); height: 12rem;">
        <h1 class="topic"><?php echo $row['topic']; ?></td></h1>
    </section>

    <div class="container mt-4 mb-4">

        <div class="row align-items-stretch">
            
        <div class="col-lg-8 mb-3">
            <div class="card detail">
        
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 23px;"><b>ชื่อร้านอาหาร:</b> <?php echo $row['r_name']; ?></li>
                    <li class="list-group-item" style="font-size: 20px;"><b>ประเภท:</b> <?php echo $row['category']; ?></li>
                    <li class="list-group-item" style="font-size: 20px;"><b>คะแนน:</b> <?php echo $row['score']; ?> / 10</li>
                </ul>
                </div>
                
      
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card detail">
            <div class="card-body">
            <div class="row">
                    <div class="col-4">
                        <img src="https://i.pinimg.com/originals/d2/28/71/d22871b6c9e94e1d973663bbe1d0b276.jpg" class="img-fluid rounded w-100 d-block" alt="...">
                        </div>
                        <div class="col-8 profile">
                            <b>ผู้เขียนบทความ</b> <br>
                            <?php echo $row ['writer'] ?> <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card detail">
                <div class="card-body">
                    <?php echo $row['des']; ?>
                </div>
            </div>
        </div>
        
        
        
        
    </div>

    <?php } ?>
</body>
</html>