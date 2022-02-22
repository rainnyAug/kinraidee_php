<?php
session_start();
?>
<?php
                require('connectdb.php');
                $sql = "SELECT `id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des`, `pic` FROM `writing` WHERE 1";
                $query_sql = $connectdb->query($sql);
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

    <?php include ('index_style.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</head>
<body>
    

    <?php require('navbar.php')?>
    
    <div class="container-fluid mt-4 mb-4">
        <div class="row">
            <?php include('slide.php') ?>
            
            <div class="col-lg-6 overflow-auto" style="max-height: 980px">
                <div class="row">
                <?php while($row = mysqli_fetch_array($query_sql)){ ?>

                <div class="col-lg-6 d-flex align-items-stretch mb-3">

                    <div class="card" style="border-radius: 15px;">
                    
                        <div class="card-body">
                            <a href="arnbotkwarm.php?id=<?php echo $row ['id'] ?>"><img src="<?php echo $row['pic']; ?>" class="img-fluid w-100 d-block" style="border-radius: 15px;" alt="..."></a>
                            
                            <h5 class="card-title mt-3"><b><?php echo $row['topic']; ?></b></h5>
                            <p class="card-text"> <?php echo $row['r_name']; ?></p>

                            <div class="btn-group col-12 mt-3" role="group" aria-label="Basic outlined example">
                                <a href="arnbotkwarm.php?id=<?php echo $row ['id'] ?>" class="btn btn-light btn-sm" style="color: #69809a;border-color: transparent;background: #e7ebef;border-top-left-radius:8px;border-bottom-left-radius: 8px;border-top-right-radius: 0px!importnat;border-bottom-right-radius: 0px!important;"><?php echo $row ['category'] ?></a>
                                <a href="arnbotkwarm.php?id=<?php echo $row ['id'] ?>" class="btn btn-light btn-sm" style="color: #69809a;border-color: #e7ebef;border-top-right-radius:8px;border-bottom-right-radius: 8px;border-top-left-radius: 0px!importnat;border-bottom-left-radius: 0px!important;"><?php echo $row ['score'] ?> / 10</a>
                            </div>
                        </div>
                        
                                          
            
                    </div>
                </div>
            <?php } ?>
                </div>
            
            </div>
    
        
            
        </div>
    </div>
    </div>
    
</body>
</html>