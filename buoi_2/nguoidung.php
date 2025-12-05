<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        .xoa{
            padding: 0 10px;
            background-color: red;
            color: white;
        }
        .xoa a{
            color: white;
            
        }
        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1> Thông tin người dùng</h1>
        <a href="index.php?page_layout=themnguoidung"> Thêm người dùng </a>
    </div>
    <table border =1>
        <tr>
            <th>Tên đăng nhập</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql= "select nd.*, vt.ten_vai_tro from nguoi_dung nd join vai_tro vt on nd.vai_tro_id=vt.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["ten_dang_nhap"]?></td>
            <td><?php echo $row["ho_ten"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["sdt"]?></td>
            <td><?php echo $row["ten_vai_tro"]?></td>
            <td><?php echo $row["ngay_sinh"]?></td>
            <td>
                <button><a  href="capnhatnguoidung.php?id=<?php echo $row["id"] ?>">Sửa</a></button>
                <button class="xoa"><a  href="xoanguoidung.php?id=<?php echo $row["id"] ?>">Xoá</a></button>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>