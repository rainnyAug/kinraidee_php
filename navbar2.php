<!--loginแล้ว-->
<?php
    require('connectdb.php');
    $sql = "SELECT `username` FROM `register` WHERE 1"; //คำสั่งเก็บตรงนี้
    $query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-xs-6">
                <a class="navbar-brand" href="Home.php">KinRaiDee</a>
            </div>
            
            <div class="col-xs-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item" style="padding: 8px;">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item" style="padding: 8px; padding-right: 16px;">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    </ul>
                    <div class="btn-group dropstart">
                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="my_writing.php">My writing</a></li>
                        <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
</nav>