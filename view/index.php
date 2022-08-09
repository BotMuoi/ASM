<?php
session_start();
if(isset($_SESSION['username'])){
    include "./header-admin_log.php";
}else{
    include './header.php';
}
include './main.php';
include './footer.php';
?>