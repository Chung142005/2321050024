<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?page_layout=themphim" method="post">
        <h1> Thêm phim </h1>
        <div>
            <p> Tên phim: </p>
            <input type="text" name="ten_phim" placeholder="Nhập tên phim">
        </div>
        <div>
            <p> Đạo diễn: </p>
            <select name="dao_dien">
            <?php
                include('connect.php');
                $sql= "select * from nguoi_dung where vai_tro_id = 3";
                $result = mysqli_query($conn, $sql);
                
                while($daoDien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $daoDien['id']?>"> <?php echo $daoDien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Diễn viên: </p>
            <select name="dien_vien">
            <?php
                $sql= "select * from nguoi_dung where vai_tro_id = 2";
                $result = mysqli_query($conn, $sql);
                
                while($dienVien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $dienVien['id']?>"> <?php echo $dienVien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Năm phát hành: </p>
            <input type="Number" name="nam_phat_hanh" placeholder="Nhập năm phát hành">
        </div>
        <div>
            <p> Poster: </p>
            <input type="text" name="poster" placeholder="Nhập poster">
        </div>
        <div>
            <p> Quốc gia: </p>
            <select name="quoc_gia">
            <?php
                $sql= "select * from quoc_gia ";
                $result = mysqli_query($conn, $sql);
                
                while($quocGia = mysqli_fetch_array($result)){?>
                <option value="<?php echo $quocGia['id']?>"> <?php echo $quocGia['ten_quoc_gia'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p>Số tập:</p>
            <input type="Number" name="so_tap" placeholder="Nhập số tập">
        </div>
        <div>
            <p>Trailer:</p>
            <input type="Number" name="so_tap" placeholder="Nhập số tập">
        </div>
        <div>
            <p> Vai trò: </p>
            <select name="vai_tro">
                <option value="1"> User </option>
                <option value="2"> Diễn viên </option>
                <option value="3"> Đạo diễn </option>
                <option value="4"> Biên kịch </option>
                <option value="5"> Admin </option>
            </select>
        <div>
            <input type="submit" value="thêm mới">
        </div>
    </form>



    <?php
    if(!empty($_POST['username'])&&
    !empty($_POST['password'])&&
    !empty($_POST['ho_ten'])&&
    !empty($_POST['email'])&&
    !empty($_POST['sdt'])&&
    !empty($_POST['ngay_sinh'])&&
    !empty($_POST['vai_tro'])){
        include('connect.php');
        $tenDangNhap = $_POST['username'];
        $password = $_POST['password'];
        $hoTen = $_POST['ho_ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $ngaySinh = $_POST['ngay_sinh'];
        $vaiTro = $_POST['vai_tro'];

        $sql = "insert into nguoi_dung (ten_dang_nhap, matKhau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
        values ('$tenDangNhap', '$password', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: index.php?page_layout=nguoidung');
    }else{
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
    }

?>
</body>
</html>