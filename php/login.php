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
$sql = "SELECT * FROM member where username='$username' AND pwd='$pwd';";

$result = $conn->query($sql);
print_r($result);
if($result->num_rows > 0){
	
	echo "登入成功";
	//登入成功後，進行跳頁
	
	while($row = $result->fetch_assoc()){
		 //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["pwd"]." " . $row["phone"]." " . $row["address"]." " . $row["other"]. "<br>";
		echo '<script>localStorage.setItem("userdata",JSON.stringify('.json_encode($row).'));
		document.location.href="../home.html";</script>';
	}
	//echo '<script>localStorage.setItem("data0",'.$result->num_rows.');document.location.href="../home.html";</script>';

}else{
	echo "登入失敗";
	echo '<script>document.location.href="../";</script>';
	
}

?>