<!--ยังไม่login-->
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
                    <a class="nav-link" aria-current="page" href="index.php">หน้าแรก</a>
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

                    <?php
                            if(!isset($_SESSION["email"]) || !isset($_SESSION['username'])){
                            require ('navbarbutton.php');
                            } 
                            else{
                            require ('navbarbutton_login.php');
                    }
                    ?>
                    
                    </ul>
                </div>
            </div>
        </div>
    </nav>