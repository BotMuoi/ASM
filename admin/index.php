<?php
include './view/header-admin.php';
include "./modules/connect.php";
connectdb();
include './modules/danhmuc-modules.php';

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
             $kq = getAll_dm();
            include "./view/danhmuc.php";
            break;
        
        default:
            # code...
            break;
    }
}

?>