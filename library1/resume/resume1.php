<html>
<head>
<link rel="stylesheet" type="text/css" href="resume_option.css">
	<style>
		.header1
		{
			height:50px; width:100%; background-color:#606060;
			padding-top:10px;
		}
		.header2
		{
			height:140px; width:100%;border:0px solid blue;
		}
		
		.name1
		{
			height:60px;width:250px; border:0px solid red;float:left;
			margin-top:35px;margin-left:20%;
			font-family:georgia;font-size:37px;color:#606060; font-weight:bold;letter-spacing:1px;
		}
		.name2
		{
			border:0px solid yellow;
			font-family:vrinda;font-size:16px; color:#605f5d;letter-spacing:0px;
		}
		
		.option
		{
			width:33%;padding-top:2px;padding-bottom:2px;border:0px solid grey;float:right;
			margin-right:20%;margin-top:70px;
		}
		.option1
		{
			width:32.8%; padding-top:4px; padding-bottom:4px; text-align:center;float:left;
			border:0px solid red;cursor:pointer;
			font-family:georgia; font-size:13px;font-weight:bold; color:#606060;text-transform:uppercase;
		}
		.option1:hover{color:#33ffff;}
		
		.content1
		{
			height:500px; width:100%;background-color:#e9e5e4;position:absolute;
		}
		
		.hh
		{
			height:100%;width:50%;border:0px solid blue;float:left;
		}
		.pic
		{
			height:360px; width:360px; background-color:white;border-radius:180px;
			margin-top:50px;margin-left:32%;overflow:hidden;
		}
		
		.hello
		{
			border:0px solid green;
			font-family:Book Antiqua;font-weight:bold;font-size:80px;color:#505050;
			margin-top:30px;
		}
		.aboutme
		{
			font-size:45px; color:#606060;
		}
		
		.resume
		{
			height:80px; width:140px; border-radius:75px; background-color:#e83555;
			margin-left:-30px; float:left; color:white;
			font-family:vrinda;font-size:14px;font-weight:normal;text-transform:uppercase;text-align:center;
			padding-top:60; cursor:pointer;
		}
		.resume:hover{background-color:#880000;}
		
		.work
		{
			height:80px; width:140px; border-radius:75px; background-color:#62cfd4;
			margin-left:20px; float:left; color:white;
			font-family:vrinda;font-size:14px;font-weight:normal;text-transform:uppercase;text-align:center;
			padding-top:60; cursor:pointer;
		}
		.work:hover{background-color:#009999;}
		
		.skill
		{
			height:80px; width:140px; border-radius:75px; background-color:#d1c825;
			margin-left:20px; float:left; color:white;
			font-family:vrinda;font-size:14px;font-weight:normal;text-transform:uppercase;text-align:center;
			padding-top:60; cursor:pointer;
		}
		.skill:hover{background-color:#999933;}
		
		.description
		{
			border:0px solid yellow; height:160px; width:460px;padding-top:10px;
			text-align:justify;font-family:vrinda; font-size:16px;letter-spacing:-0.5px;word-spacing:-1px;
			line-height:19px; color:#606060;
		}
		.footer
		{
			height:250px; width:100%; background-color:#e83555;
			margin-top:0px;float:left;
		}
		#container
		{
			width:100%;height:500px;
		}
		.footer_content
		{
			height:125px; width:65%;
			margin-left:19%;margin-top:40px;
		}
		.f1
		{
			height:125px;width:23%;float:left;
		}
		.f11
		{
			height:120px;width:30%;float:left;
		}
		.f12
		{
			height:120px;width:65%;float:left;
			color:white;
		}
		.imgx1
		{
			height:46px;width:46px;
		}
		.f12_p1
		{font-size:15px;font-family:arial; font-weight:700;margin-top:10px;padding-bottom:0px;margin-bottom:0px;line-height:15px;letter-spacing:0px;}
		.f12_p2
		{font-size:11px;margin-top:0px;padding-top:-5px;line-height:15px;font-family:Lucida Sans Unicode;}
		a{text-decoration:none;color:#606060;}
		a:hover{color:#33ffff;}
	</style>
<script>
	function getresume1()
	{
		document.getElementById("op2").style.color="#33ffff";
		document.getElementById("op1").style.color="#606060";
		document.getElementById("op3").style.color="#606060";
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("container").innerHTML=xmlhttp.responseText;
			}
		}
		//var sheetid1 = document.getElementById('sheetid').value;
		xmlhttp.open("GET", "skill.php" , true);

		xmlhttp.send();
	}
</script>

<script>
	function getwork1()
	{
		document.getElementById("op3").style.color="#33ffff";
		document.getElementById("op2").style.color="#606060";
		document.getElementById("op1").style.color="#606060";
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("container").innerHTML=xmlhttp.responseText;
			}
		}
		//var sheetid1 = document.getElementById('sheetid').value;
		xmlhttp.open("GET", "work.php" , true);

		xmlhttp.send();
	}
</script>	


<script>
		
		function move1(i)
		{
			var id1="x_img";
			if(i==2){id1="x_img1"}else if(i==3){id1="x_img2";}else{id1="x_img";}
			//document.write(id1);
			var element = document.getElementById('x_img');
			var position = element.getBoundingClientRect();
			var xl = position.left; var xr1=position.right;
			//var y1 = position.top;
			var p=258.296875;
			var w1=(xr1-xl)-143; var speed1=0.009*w1; var s1=p-w1;
			document.getElementById(id1).style.webkitTransition = speed1+"s";
			document.getElementById(id1).style.webkitTransform = "translate("+s1+"px,0px)";
			document.getElementById(id1).style.transition = speed1+"s";
			document.getElementById(id1).style.transform = "translate("+s1+"px,0px)";
		}
		function move2(i)
		{
			var id1="x_img";
			if(i==2){id1="x_img1"}else if(i==3){id1="x_img2";}else{id1="x_img";}
			var element = document.getElementById(id1);
			var position = element.getBoundingClientRect();
			var x = position.left; var xr=position.right;
			var y = position.top;
			var p=258.296875;
			var z=x-p;
			var q=0-z;
			 var speed2=0.009*q;
			//var s=(9/(xr-x));
			document.getElementById(id1).style.webkitTransition =speed2+"s";
			document.getElementById(id1).style.transition =speed2+"s";
			//document.write(x+" &nbsp "+xr+" &nbsp "+s);
			if(z<0)
			{
				document.getElementById(id1).style.webkitTransform = "translate(0px,0px)";
				document.getElementById(id1).style.transform = "translate(0px,0px)";
			}
		}
		function move3()
		{
			//document.getElementById("x_img").style.webkitTransition = "1s";
			//document.getElementById("x_img").style.animationPlayState="paused";
		}
	</script>

</head>
<body style="padding:0px; margin:0px;">

<div class="header1">
	<div class="optionxx" style="margin-left:390px;"><a href="/library1/index1.php">Home</a></div><div class="optionxx"><a href="#">Collection</a></div><div class="optionxx"><a href="#">Softwares</a></div><div class="optionxx"><a href="#">Contact</a></div><div class="optionxx" style="background-color:#585858;"><a href="#">About</a></div>
</div>

<div class="header2">
	<div class="name1">Dilip Kumar<div class="name2">Web Designer / Software Engineer</div></div>
	<div class="option"><div class="option1"><a id="op1" href="resume1.php" style="color:#33ffff">Home</a></div>
	<div id="op2" class="option1" onclick="getresume1()">Resume</div>
	<div id="op3" class="option1" onclick="getwork1()">Work</div></div>
</div>

<div id="container"><div class="content1">
	<div class="hh"><div class="pic"><img src="dilip.jpg" style="height:360px;width:360px;"></div></div>
	<div class="hh"><div class="hello">Hello,<div class="aboutme">a bit about me:</div></div>
		<div class="description"><div class="resume" onclick="getresume1()"> my resume</div>
		<div class="work" onclick="getwork1()">my work</div>
		<div class="skill" onclick="getresume1()">my skill</div>
		</div>
		<div class="description" style="height:130px;">“A 3rd year B.Tech Software Engineering student at NITMAS,kolkata with interest in Web Developement. Looking for an internship with a start up or early stage company for a period of 1-2 months”. Seeking a Web Development engineer position with emphasis on solid modelling.
</div>
	</div>
</div>

</div><div class="footer">
	<div class="footer_content">
		<div class="f1">
			<div class="f11"><img class="imgx1" src="callme.jpg"></div>
			<div class="f12"><p class="f12_p1">Call</p><p class="f12_p2">M1: 8609254757</p></div>
		</div>
		<div class="f1">
			<div class="f11"><img class="imgx1" src="contact.jpg"></div>
			<div class="f12"><p class="f12_p1">Contact</p><p class="f12_p2">d4dilip7@live.com</p></div>
		</div>
		<div class="f1">
			<div class="f11"><img class="imgx1" src="follow.jpg"></div>
			<div class="f12"><p class="f12_p1">Follow me</p><p class="f12_p2"></p></div>
		</div>
		<div class="f1" style="width:30%;">
			<div class="f11" style="width:23%"><img class="imgx1" src="copyright.jpg"></div>
			<div class="f12" style="width:71%;"><p class="f12_p2" style="margin-top:10px;">&copy; 2013 by Dilip Kumar.<br>Proudly created a demo project</p></div>
		</div>
	</div>
</div>
</body>
</html>