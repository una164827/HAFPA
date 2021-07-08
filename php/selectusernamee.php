<?php
require("dbconnect.php");//直接把DB的相關資料require進來

$today = date("Ymd");      

$username="";
if(isset($_POST["username"])){
	$username=$_POST["username"];
}
$pwd="";
if(isset($_POST["pwd"])){
	$pwd=$_POST["pwd"];
}
$pwdtwo="";
if(isset($_POST["pwdtwo"])){
	$pwdtwo=$_POST["pwdtwo"];
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
$text="";
if(isset($_POST["text"])){
	$text=$_POST["text"];
}
//使用sql語法
//$sql = "INSERT INTO member (username, pwd, phone, email, other,text) VALUES ('$username', '$pwd', '$phone', '$email', '$other','$text')";

$username2="";
if(isset($_POST["username2"])){
	$username2=$_POST["username2"];
}
$text2="";
if(isset($_POST["text2"])){
	$text2=$_POST["text2"];
}
$sql="INSERT INTO member (username, pwd, phone, email, other) VALUES ('$username', '$pwd', '$phone', '$email', '$other') ON DUPLICATE KEY UPDATE text='$text';
INSERT INTO diary (username, date, text) VALUES ('$username2','$today','$text2') ON DUPLICATE KEY UPDATE text='$text2';";
$conn->multi_query($sql);

//echo "<script>location.href='../';</script>";
//INSERT INTO diary (username, text) VALUES ('$username','$text') ON DUPLICATE KEY UPDATE text='$text'";


//$sqll="INSERT INTO diary (username,text) VALUES ('$username','$text') ON DUPLICATE KEY UPDATE text='$text'";

//$sqll = "UPDATE INTO member(text) VALUES ($text)";

//$sql = "INSERT INTO diary (username) VALUES ('$username')";
if($pwdtwo==$pwd){
if($conn->query($sql) == FALSE){
	echo '註冊成功';
	if(isset($_POST["username2"])){
	echo "<script>location.href='../diary.html';
	</script>";
	}
	else
		echo "<script>location.href='../';</script>";
	//$sql = "INSERT INTO diary (username) VALUES ('$username')";

}else{
	 echo '註冊失敗';
	echo "<script>location.href='../registered.html';</script>";
}
}else{
	echo '密碼不符合註冊失敗';
	sleep(1);
	echo "<script>location.href='../registered.html';</script>";
}



//$sql = "INSERT INTO diary (username) VALUES ('$username')";




?>
