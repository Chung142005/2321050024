<?php
// session
// thông tin đăng nhập, giỏ hàng, ...
session_start();
$_SESSION['name']="vanChung";
echo $_SESSION['name'];



// cookie
// lưu ở phía người dùng
// dùng cho những thông tin ít quan trọng
$cookieName = "user";
$cookieValue = "VanChung";

setcookie($cookieName,$cookieValue,time()+(86400), "/");
if(isset($_COOKIE[$cookieName])){
    echo "cookie đã tồn tại";

}else{
    echo "cookie chưa tồn tại";
}

?>