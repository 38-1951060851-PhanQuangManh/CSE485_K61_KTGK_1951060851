<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <title>Quản lý thư viện</title>
    </head>
    <body>
        <?php 
            include("header.php")
        ?>
        <?php
            include("config.php")
        ?>
        <div class="main">
        <main class="main">
            <div class="container">
              <div class="row">
                <a href="add_member.php" class="mt-4"><button class="btn btn-primary mt-4">Thêm Đọc Giả</button></a>
                <div class="row">
                    <div></div>
                    <div class="directory-table">
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đọc giả</th>
                                        <th scope="col">Họ và tên </th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Năm sinh </th>
                                        <th scope="col">nghề nghiệp </th>
                                        <th scope="col">Ngày cấp thẻ </th>
                                        <th scope="col">Ngày hết hạn </th>
                                        <th scope="col">Địa chỉ </th>
                                        <th scope="col">Sửa </th>
                                        <th scope="col">Xóa  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                
                                    $sql = "SELECT * FROM docgia ";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $row['hovaten']; ?></td>
                                                <td><?php echo $row['gioitinh']; ?></td>
                                                <td><?php echo $row['namsinh']; ?></td>
                                                <td><?php echo $row['nghenghiep']; ?></td>
                                                <td><?php echo $row['ngaycapthe']; ?></td>
                                                <td><?php echo $row['ngayhethan']; ?></td>
                                                <td><?php echo $row['diachi']; ?></td>
                                                <td><a href="update.php?madg=<?php echo $row['madg']; ?>"></i>Sửa</a></td>
                                                <td><a href="delete.php?madg=<?php echo $row['madg']; ?>"><i class="fas fa-trash-alt"></i>Xóa</a></td>
                                            </tr>
                                    <?php
                                            $i++;
                                        }
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
              </div>
        </main>
        </div>
        <div class="footer">
            <?php 
                include("footer.php")            
            ?>
        </div>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    </body>
    </html>