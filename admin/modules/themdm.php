<?php
function themdm(){
    $name = $_GET['name'];
   $conn =  connectdb();
   $sql = "INSERT INTO danhmuc (id, name, uu_tien, trang_thai)
    VALUES ('', '$name', '2','1')";
}
?>