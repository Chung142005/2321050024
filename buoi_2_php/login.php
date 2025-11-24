<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>đăng nhập</h1>
        <div>
            <input type="text" name= "username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" name="đăng nhập" value="Đăng nhập">
        </div>
        
    </form>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])){
    $tenDangNhap = $_POST['username'];
    // echo $tenDangNhap;
    $matKhau = $_POST['password'];
    // echo $matKhau;
    if($tenDangNhap =="admin"&&$matKhau=="123"){
        session_start();
        $_SESSION['username'] = $username;
        header('location: trangchu.php');
    }else{
        echo "<p>sai thông tin đăng nhập</p>";
    }

    }


    


    // nếu tên đăng nhập = admin
    // mật khẩu 123 thì 



    ?>
</body>
</html>