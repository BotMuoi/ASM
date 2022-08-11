<?php
include './connect.php';
$conn = connectdb();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "INSERT INTO user  (id, name,pass, email, create_time, type, status)
  VALUES ('', '$name', MD5('$pass'), '$email','','','1 ')";
  // use exec() because no results are returned
  $conn->exec($sql);

  header('Location: http://localhost/ASM/view/login.php');
?>