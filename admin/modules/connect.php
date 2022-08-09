
<?php
function connectdb(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=chienps24976", $username, $password);
  // set the PDO error mode to exception
  return $conn ;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}

?>