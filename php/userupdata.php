<?php
require("dbconnect.php");
$username="";
if(isset($_POST["username"])){
	$username=$_POST["username"];
}
$pwd="";
if(isset($_POST["pwd"])){
	$pwd=$_POST["pwd"];
}
$phone="";
if(isset($_POST["phone"])){
	$phone=$_POST["phone"];
}
$email="";
if(isset($_POST["email"])){
	$email=$_POST["email"];
}
$other="";
if(isset($_POST["other"])){
	$other=$_POST["other"];
}
$sql = "UPDATE member SET pwd = '$pwd', phone = '$phone', email = '$email', other = '$other' WHERE username = '$username'";

if($conn->query($sql) === TRUE){
	echo "刪除成功";
	//登入成功後，進行跳頁

	//echo '<script>localStorage.setItem("data0",'.$result->num_rows.');document.location.href="../home.html";</script>';

}else{
	echo "刪除失敗";

}

?>
