<?php
session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KinRaiDee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

    <style>
        body{
            background-color:rgb(245, 245, 245) ;
            font-family: 'Prompt', sans-serif;
            color: black;
        }
        .topic{
            text-align: center;
            padding: 210px;
            color: white;
        }
    </style>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php require('navbar.php')?>
    
    <section style="background: url('pic/home.jpg'); height: 30rem;">
        <div class="col align-self-center">
            <h1 class="topic">หน้าแรก</h1>
        </div>
    </section>
    
    <?php
    require('connectdb.php');
    $sql = "SELECT `id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des`, `pic` FROM `writing` WHERE 1";
    $query_sql = $connectdb->query($sql);
    ?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <?php while($row = mysqli_fetch_array($query_sql)){ ?>
                <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-4" style="margin: 12px;">
                                <a href="arnbotkwarm.php?id=<?php echo $row ['id'] ?>"><img src="<?php echo $row['pic']; ?>" class="img-fluid rounded w-100 d-block" alt="..."></a>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <h5 class="card-title"><?php echo $row['topic']; ?></h5>
                                <p class="card-text" style="margin: 0px 0px 4px"><?php echo $row['r_name']; ?></p>
                                <span class="badge bg-danger" style="margin: 0px 0px 10px"><?php echo $row['category']; ?></span> <br>
                                <!---<a href="#" class="btn btn-primary">Go somewhere</a>--->
                            </div>
                        </div>
                        </div>
                        
                        
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    
</body>
</html>