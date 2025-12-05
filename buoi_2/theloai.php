<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: 10px;
        }
        .them{
            margin: 0px 10px;
        }
        .xoa{
            padding: 0 10px;
            background-color: red;
            color: white;
        }
        .xoa a{
            color: white;
            
        }
    </style>
</head>
<body>
    <h1>thể loại</h1>
    <table border= 1>
        <tr>
            <th>id</th>
            <th>Tên thể loại</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include("connect.php");
            $sql="SELECT * FROM the_loai ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["ten_the_loai"] ?></td>
                <td>
                    <button class="xoa"><a href="xoatheloai.php?id=<?php echo $row["id"] ?>">Xoá</a></button>
                </td>
            </tr>

        <?php } ?>
    </table>
    <button class="them"><a href="index.php?page_layout=themtheloai">Thêm thể loại</a></button>
</body>
</html>