<!--<!DOCTYPE html>
<html Lang="en">

<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<title>Document</title>-->
<!--</head>
<body>
	
	<script language="JavaScript">
		var Today=new Date();
　		document.write(Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日");
		
	</script>
	<body onload="ShowTime()">
	<div id="showbox"></div>
-->

	<?php 
	require("dbconnect.php");
	
	   
	
	
	$username="";
	if(isset($_POST["username"])){
		$username=$_POST["username"];
	}
	//$diary="";
	//if(isset($_POST["diary"])){
	//	$diary=$_POST["username"];
	//}
	$text="";
	if(isset($_POST["text"])){
		$text=$_POST["text"];
	}
	
	//$sql = "INSERT INTO diary (username,text) VALUES ('$username','$text')";
	$sql2="INSERT INTO member (username,text) VALUES ('$username','$text') ON DUPLICATE KEY UPDATE text='$text'";

	//$sql = "UPDATE diary SET text='$text' WHERE username = '$username'";
	
	//$string ='<text name="text">';
	//$string2=$_REQUEST["text"];
	//echo $string.$string2;
	//$string1='<textarea name="text1" style="font-size:25px;";align="right"cols="35" rows="15" readonly="readonly">';
	//$string2=$_REQUEST["text"];
	//$string3='</textarea>';
	//echo $string1.$string2.$string3;
	?>
	
</body>
</html>