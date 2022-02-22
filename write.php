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
    <title>Write</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src='https://cdn.tiny.cloud/1/3rzjpepwvowno61nz5ufkvehdr1dch4anewtn4vfy3kn3da5/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>

    <script>
        tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image preview hr anchor',
      images_upload_url: 'img.php',

      extended_valid_elements : "img[class|src|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|loading=lazy]",


    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'img.php');

        xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    },
      toolbar_mode: 'floating',

    });
    
  </script>

    <style>
        body{
            background-color:rgb(238, 238, 238) ;
            font-family: 'Prompt', sans-serif;
            color: black;
        }
        .topic{
            text-align: center;
            padding: 70px;
            color: white;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <?php require('navbar.php')?>

    <section style="background: url('pic/small.jpg'); height: 12rem;">
        <h1 class="topic">เขียนบทความ</h1>
    </section>
    
    <div class="container mt-4">
        <form method="post">
            
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-9 mt-3">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="input-group">
                                <label class="input-group-text" for="topic">หัวเรื่อง</label>
                                    <input type="text" id="topic" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="input-group">
                                <label class="input-group-text" for="r_name">ชื่อร้าน</label>
                                <input type="text" id="r_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="input-group">
                                <label class="input-group-text" for="category">ประเภท</label>
                                <select class="form-select" id="category">
                                    <option type="text" value="ของคาว" selected>ของคาว</option>
                                    <option type="text" value="ของหวาน">ของหวาน</option>
                                    <option type="text" value="เครื่องดื่ม">เครื่องดื่ม</option>
                                    <option type="text" value="อื่น ๆ">อื่น ๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="input-group">
                                    <label class="input-group-text" for="score">คะแนน</label>
                                    <input type="number" id="score" class="form-control" placeholder="10">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="input-group">
                                    <label class="input-group-text" for="pic">ลิงก์ภาพหน้าปก</label>
                            <input type="text" id="pic" class="form-control" placeholder="">
                        </div>
                        </div>
                        </div>
                    
                        <div class="col-lg-12 mb-3 mt-4">
                            <label class="input-group-text" for="post">เนื้อหา</label>
                            <div class="col-lg-12 col-md-12">
                            <textarea id="post" name="post" style="min-height: 500px"> </textarea>
                            </div>
                            <input type="hidden" id="writer" class="form-control"  value="<?php echo $_SESSION['uname'] ?>">
                            <input type="hidden" id="writer_id" class="form-control"  value="<?php echo $_SESSION['id'] ?>">
                            <div class="col-lg-6 mb-3">
                                <button type="button" class="btn btn-success mt-4 add_write">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                
            </div>

        </form>
    </div>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script>

      $(document).on('click','.add_write',function(){
        var topic = document.getElementById("topic").value;
        var r_name = document.getElementById("r_name").value;
        var ed = tinyMCE.get('post');
        var des = ed.getContent();
        var category = document.getElementById("category").value;
        var score = document.getElementById("score").value;
        var writer_id = document.getElementById("writer_id").value;
        var writer = document.getElementById("writer").value;
        var pic = document.getElementById("pic").value;
        if(topic == ""){
            document.getElementById("topic").focus();
            }
        else if(r_name == ""){
            document.getElementById("r_name").focus();
            }
        else if(category == ""){
            document.getElementById("category").focus();
            }
        else {
            $.ajax({
                url: 'app.php',
                method:"POST",
                data: {program:"write",topic:topic,r_name:r_name,category:category,score:score,writer:writer,writer_id:writer_id,des:des,pic:pic},
                success:function(msg){
                    if(msg == 'ok'){
                        Swal.fire(
                        'เพิ่มบทความสำเร็จ',
                        '',
                        'success'
                        ).then(function() {window.location.href="my_writing.php";})
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
      
        }
      });

  </script>
   
</body>
</html>