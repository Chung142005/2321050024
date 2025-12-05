<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warning{
            color: red;
        }
    </style>
</head>
<body>
    <h1>thêm thể loại</h1>
    <form action="index.php?page_layout=themtheloai" method="post">
        <h2>Nhập tên thể loại bạn muốn thêm</h2>
        <input type="text" name="theloai" placeholder="Nhập tên thế loại">
        <input type="submit" value="thêm mới">
    </form>
    <?php
        if(!empty($_POST['theloai'])){
            include('connect.php');
            $tentheloai=$_POST["theloai"];
            $sql="INSERT IGNORE INTO the_loai (ten_the_loai) VALUES ('$tentheloai')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: index.php?page_layout=theloai');
        }else{
            echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
        }
    ?>
</body>
</html>