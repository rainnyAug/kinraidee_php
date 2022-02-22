<?php require('connectdb.php');

if(isset($_POST['program'])){
    $program = $_POST['program'];
    $program= stripslashes($program);
    $uniqid = sha1(uniqid(rand(),true),false);
    if($program == "delete_data"){
        $id = $_POST['id'];
        $sqldelete = "DELETE FROM `writing` WHERE id = '$id'";
        $query_sql = $connectdb->query($sqldelete);
        if($query_sql){
            echo "ok";
        }else{
            echo "notok";
        }}

    if($program == "write"){
        $topic = $_POST['topic'];
        $r_name = $_POST['r_name'];
        $score = $_POST['score'];
        $writer = $_POST['writer'];
        $category = $_POST['category'];
        $writer_id = $_POST['writer_id'];
        $des = $_POST['des'];
        $pic = $_POST['pic'];

        $sql = "INSERT INTO `writing`(`id`, `topic`, `r_name`, `category`, `score`, `writer`, `writer_id`, `des`, `pic`) VALUES ('[value-1]','$topic','$r_name','$category','$score','$writer','$writer_id','$des','$pic')";
        $query_sql = $connectdb->query($sql);
        if($query_sql){
            echo "ok";
        }
        else{
            echo "notok"; //ถ้าใช้ไม่ได้
        }
    }

    if($program == "edit_write"){
        $id = $_POST['id'];
        $topic = $_POST['topic'];
        $r_name = $_POST['r_name'];
        $score = $_POST['score'];
        $category = $_POST['category'];
        $des = $_POST['des'];
        $pic = $_POST['pic'];

        $sql = "UPDATE `writing` SET `topic`='$topic',`r_name`='$r_name',`category`='$category',`score`='$score',`des`='$des',`pic`='$pic' WHERE id = '$id'";
        $query_sql = $connectdb->query($sql);
        if($query_sql){
            echo "ok";
        }
        else{
            echo "notok"; //ถ้าใช้ไม่ได้
        }
    }
    if($program == "signup"){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $sql_u = "SELECT * FROM `register` WHERE `username` = '$username'";
        $sql_e = "SELECT * FROM `register` WHERE `email` = '$email'";
        $res_u = mysqli_query($connectdb, $sql_u);
        $res_e = mysqli_query($connectdb, $sql_e);

        if (mysqli_num_rows($res_u) > 0) {
            echo "user"; 	
        }else if(mysqli_num_rows($res_e) > 0){
            echo "email"; 	
        }else{
            if (strlen($_POST["password"]) <= '8') {
                echo "pw";
            }
            else{
        $sql = "INSERT INTO `register`(`username`, `password`, `uname`, `email`) VALUES ('$username','".md5($password)."','$uname','$email')"; //คำสั่งเก็บตรงนี้
        $query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
        if($query_sql){
            echo "ok";
        }
        else{
            echo "notok"; //ถ้าใช้ไม่ได้
        }
    }
    }
}
}


?>