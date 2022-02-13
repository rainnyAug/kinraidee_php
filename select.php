<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    require('connectdb.php');
    $sql = "SELECT `id`, `username`, `password`, `uname`, `email` FROM `register` WHERE 1"; //คำสั่งเก็บตรงนี้
    $query_sql = $connectdb->query($sql); //คำสั่งทำงานตรงนี้
    ?>

    <div class="container mt-4">
        <a href="signup.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูล</button></a>    
        <table border="1" class="table table-striped mt-3">
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อผู้ใช้งาน</td>
            <td>อีเมล</td>
            <td>รหัสผ่าน</td>
            <td>ชื่อ-นามสกุล</td>
            <td>จัดการ</td>
        </tr>
        <?php while($row = mysqli_fetch_array($query_sql)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['uname']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">ลบ</button></a>
                <a href="form_edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-secondary">แก้ไข</button></a>
            </td>
        </tr>
        <?php } ?>
        </table>
</div>
</body>
</html>



