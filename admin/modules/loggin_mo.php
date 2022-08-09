<?php
session_start();


include './connect_qli.php';


$username = $_POST['username'];
$pass = MD5($_POST['pass']);
if(isset($_POST['login']) && $username !="" && $pass !=""){
    $sql = "SELECT * FROM user WHERE user_name= '$username' and pass = '$pass'";
    $query = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($query);
    if ($num_rows==0) {
        echo "tên đăng nhập hoặc mật khẩu không đúng !";
    }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        echo "Dang nhap thanh cong";
        $_SESSION['username'] = $username;
      
    }
    header('location: http://localhost/free-travel-website-template/view/');


}
?>