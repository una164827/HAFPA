<?php
$host = "localhost";
$user = "root";
$pwd = "123";
$db = "mydb";
$conn = new mysqli($host, $user, $pwd, $db);
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

?>
