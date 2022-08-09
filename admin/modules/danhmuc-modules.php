<?php
function getAll_dm(){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT id, ten_danhmuc, uu_tien,trang_thai,anh_danhmuc FROM danhmuc");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
  }
?>