<?php
$host = "localhost";
$user = "root";
$pwd = "123";
$db2 = "mydb2";
$conn = new mysqli($host, $user, $pwd, $db2);
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

?>
