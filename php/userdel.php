<?php
require("dbconnect.php");
$userid="";
if(isset($_POST["id"])){
	$userid=$_POST["id"];
}

$sql = "DELETE FROM member WHERE id='$userid'";

if($conn->query($sql) === TRUE){
	echo "刪除成功";
	//登入成功後，進行跳頁
	
	//echo '<script>localStorage.setItem("data0",'.$result->num_rows.');document.location.href="../home.html";</script>';

}else{
	echo "刪除失敗";
	
}

?>