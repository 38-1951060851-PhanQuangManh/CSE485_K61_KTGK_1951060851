<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Quản lý thư viện </title>
    </head>
    <body>
    <?php 
    include("config.php");


    if(isset($_POST['submit'])) {
        $hovaten = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep'];
        $ngaycapthe = $_POST['ngaycapthe'];
        $ngayhethan = $_POST['ngayhethan']; 
        $diachi = $_POST['diachi']; 
        $sql_update = "UPDATE docgia set hovaten = '$hovaten',gioitinh = '$gioitinh', namsinh= '$namsinh',nghenghiep = '$nghenghiep', ngaycapthe='$ngaycapthe' , ngayhethan='$ngayhethan',diachi='$diachi' where madg = '$id'";
        mysqli_query($conn,$sql_update);
        header('location: index.php');
    }
?>


    <?php
        include('header.php');
    ?>
    <?php 
        include ("config.php");
        if(isset($_GET['madg'])) {
            $id = $_GET['madg'];

            $sql = "SELECT * FROM docgia WHERE madg = '$id'";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <div class="container">
        <h1>Sửa danh sách đọc giả </h1>
   <?php while($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và Tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" value="<?php echo $row['hovaten']; ?>">
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới Tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" value="<?php echo $row['gioitinh']; ?>">
            </div>
            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm sinh</label>
                <input type="text" name="namsinh" class="form-control" id="namsinh" value="<?php echo $row['namsinh']; ?>">
            </div>
            <div class="mb-3">
                <label for="nghenghiep" class="form-label">Nghề nghiệp</label>
                <input type="text" name="nghenghiep" class="form-control" id="nghenghiep" value="<?php echo $row['nghenghiep']; ?>">
            </div>
            <div class="mb-3">
                <label for="ngaycapthe" class="form-label">Ngày cấp thẻ </label>
                <input type="text" name="ngaycapthe" class="form-control" id="ngaycapthe" value="<?php echo $row['ngaycapthe']; ?>">
            </div>

            <div class="mb-3">
                <label for="ngayhethan" class="form-label">Ngày hết hạn </label>
                <input type="text" name="ngayhethan" class="form-control" id="ngayhethan" value="<?php echo $row['ngayhethan']; ?>">
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ </label>
                <input type="text" name="diachi" class="form-control" id="diachi" value="<?php echo $row['diachi']; ?>">
            </div>

            <input type="hidden" name="madg" class="form-control" id="madg" value="<?php echo $row['madg']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    </body>
    </html>