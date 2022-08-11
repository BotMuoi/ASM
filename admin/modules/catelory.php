<?php
function getall_danhmuc(){
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, ten_danhmuc, uu_tien,trang_thai FROM danhmuc");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}
function deldm($id){
  $conn = connectdb();
  $sql = "DELETE FROM danhmuc WHERE id=".$id;
  $conn->exec($sql);
}
function getone_dm($id) {
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, ten_danhmuc, uu_tien,trang_thai FROM danhmuc WHERE id=".$id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt ->fetchAll();
  return $kq;
}
function update_dm($id,$ten_danhmuc){
  $conn = connectdb();
  $sql = "UPDATE danhmuc SET ten_danhmuc='".$ten_danhmuc."' WHERE id=".$id;
  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
}





function themdm($ten_danhmuc){
   $conn =  connectdb();
   $sql = "INSERT INTO danhmuc (ten_danhmuc)
    VALUES ('".$ten_danhmuc."')";
   $conn->exec($sql);

}

?>