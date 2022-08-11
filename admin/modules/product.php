<?php
function getall_product(){
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, name_pro, ten_danhmuc,trang_thai FROM tbl_product");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}

?>