<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warning{
            color:red
        }
    </style>
</head>
<body>
    <?php
        include('connect.php');
        $id = $_GET['id'];
        $sql = "select * from phim where id=$id";
        $result = mysqli_query($conn, $sql);
        $phim = mysqli_fetch_assoc($result);
    ?>
    <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
        <h1> Cập nhật phim </h1>
        <div>
            <p> Tên phim: </p>
            <input type="text" name="tenPhim" placeholder="Tên phim" value="<?php echo $phim['ten_phim']; ?>">
        </div>
        <div>
            <p> Đạo diễn: </p>
            <select name="daoDien">
            <?php
                $sql= "select * from nguoi_dung where vai_tro_id = 3";
                $result = mysqli_query($conn, $sql);
                
                while($daoDien = mysqli_fetch_array($result)){?>
                <option value="<?php echo $daoDien['id']?>"> <?php echo $daoDien['ho_ten'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Diễn viên: </p>
            <input type="text" name="dienVien" placeholder="Diễn viên" value="<?php echo $phim['dien_vien_id']; ?>">
        </div>
        <div>
            <p> Năm phát hành: </p>
            <input type="Number" name="nam" placeholder="Năm phát hành" value="<?php echo $phim['nam_phat_hanh']; ?>">
        </div>
        <div>
            <p> Poster: </p>
            <input type="text" name="poster" placeholder="Poster" value="<?php echo $phim['poster']; ?>">
        </div>
        <div>
            <p> Quốc gia: </p>
            <select name="quocGia">
            <?php
                $sql= "select * from quoc_gia";
                $result = mysqli_query($conn, $sql);
                
                while($quocgia = mysqli_fetch_array($result)){?>
                <option value="<?php echo $quocgia['id']?>"> <?php echo $quocgia['ten_quoc_gia'] ?> </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p> Số tập: </p>
            <input type="Number" name="soTap" value="<?php echo $phim['so_tap']; ?>">
        </div>
        <div>
            <p> Trailer: </p>
            <input type="text" name="trailer" value="<?php echo $phim['trailer']; ?>">
        </div>
        <div>
            <p> Mô tả: </p>
            <textarea name="moTa" ></textarea>
        </div>    
        <div>
            <input type="submit" value="Cập nhật">
        </div>
    </form>


    <?php
    if(!empty($_POST['tenPhim'])&&
    !empty($_POST['daoDien'])&&
    !empty($_POST['dienVien'])&&
    !empty($_POST['nam'])&&
    !empty($_POST['poster'])&&
    !empty($_POST['quocGia'])&&
    !empty($_POST['soTap'])&&
    !empty($_POST['trailer'])&&
    !empty($_POST['moTa'])){
        $tenPhim = $_POST['tenPhim'];
        $daoDien = $_POST['daoDien'];
        $dienVien = $_POST['dienVien'];
        $nam = $_POST['nam'];
        $poster = $_POST['poster'];
        $quocGia = $_POST['quocGia'];
        $soTap = $_POST['soTap'];
        $trailer = $_POST['trailer'];
        $moTa = $_POST['moTa'];

        $sql = "update phim set ten_phim='$tenPhim', dao_dien_id='$daoDien', dien_vien_id='$dienVien', nam_phat_hanh='$nam', poster='$poster', quoc_gia_id='$quocGia', so_tap='$soTap', trailer='$trailer', mo_ta='$moTa' where id=$id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: index.php?page_layout=phim');
    }else{
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
    }

?>
</body>
</html>