<!doctype html>
<html lang="en">
<?php 
require("php/dbconnect.php");

 ?>


<head>
  <meta charset="utf-8">
  <title>日期選擇器工具（Datepicker Widget）演示</title>
  
  
   <!-- jQuery v1.9.1 -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- Moment.js v2.20.0 -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
  <!-- FullCalendar v3.8.1 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.css" rel="stylesheet"  />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.print.css" rel="stylesheet" media="print"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.js"></script>
  
  
</head>
<body>

 <?php 
 
  "<script>var userData = JSON.parse(localStorage.getItem('userdata'));</script>";
$usern = "<script>document.write(userData['username']);</script>";
$data=mysqli_query($conn,"select * from diary order by username");
echo $usern;
//$rs=mysqli_fetch_row($data);
for($i=1;$i<=mysqli_num_rows($data);$i++){ 
	$rs=mysqli_fetch_row($data);

    //echo $rs[0];
	//echo '&nbsp;';
    //echo $rs[1]; 
	//echo '&nbsp;';
    //echo $rs[2]; 
	//echo '<br>';
	  
 } 
 
 ?>
 
 <div id="calendar"></div>
 <script> 
 
 var Today=new Date();
 var m=Today.getMonth()+1;
 var d=Today.getDate();
 //var l=3;
 
 
 function one(k){
	if(k<10)
		k='0'+k;
	return k;
 }
 
 
 var tt =Today.getFullYear()+'-'+ one(m) +'-'+one(d);
 
 var userData = JSON.parse(localStorage.getItem('userdata'));
 //document.getElementById("username").value=userdata["username"];
 var a=userData["username"];
 
 
$('#calendar').fullCalendar({
	
	
  dayClick: function(date, jsEvent, view) {
	

	if(date.format()!= tt){
		// echo "'Clicked on: ' + date.format()+$rs[0]" 
		alert('Clicked on: ' + date.format()+'\n'+a+'\n'+'<?php echo $rs[2];?>'); 
		
		
		
	}
    //alert('Clicked on: ' + date.format());
	else {
		document.write(
		date.format()+
		'<form id="regdb2" method="post" action="php/selectusername.php">'+
		'<input type="text"class="form-control" id="username2" name="username2" readonly="readonly" required >'+
		'<input type="text" class="form-control" id="text2" name="text2" required >'+
		'<button type="submit"  style="width:60px;height:40px;font-size:20px;background:#ECECFF; border:1px black double;">儲存</button>'+
		'</form>'
		);
	}
	document.getElementById("username2").value=a;

    

  }
});

function store(){
				document.location.href="diary0424.html";
		}



//var userdata = JSON.parse(localStorage.getItem('userdata'));
//document.getElementById("username").value=userdata["username"];

function updata(){
			localStorage.clear();
			$.post("php/userupdata.php",
			  {
				"id":document.getElementById("userid").value,
				"username":document.getElementById("username").value,
				"pwd":document.getElementById("pwd").value,
				"phone":document.getElementById("phone").value,
				"email":document.getElementById("email").value,
				"other":document.getElementById("other").value
			  },
			  function(data,status){
				document.location.href="index.html";
			  });

		}








 </script>
 
 
 
 

 
</body>
</html>