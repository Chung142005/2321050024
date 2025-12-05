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
    <h1>Thêm quốc gia</h1>
    <form action="index.php?page_layout=themquocgia" method="post">
        <h2>Nhập tên quốc gia bạn muốn thêm</h2>
        <input type="text" name="quocgia" placeholder="Nhập tên quốc gia">
        <input type="submit" value="thêm mới">
    </form>
    <?php
        if(!empty($_POST['quocgia'])){
            include('connect.php');
            $tenquocgia=$_POST["quocgia"];
            $sql="INSERT INTO quoc_gia(ten_quoc_gia) VALUES ('$tenquocgia')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: index.php?page_layout=quocgia');
        }else{
            echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
        }
    ?>
</body>
</html>