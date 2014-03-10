<html>
<head>
	<style>
		.w_main
		{
			height:1450px; width:73%;border:0px solid green;float:left;margin-left:17%;background-color:#e9e5e4
		}
		.w_panelx
		{
			height:1450px;width:17%;float:left;border:0px solid blue;
			z-index:4;position:absolute;background-color:#e9e5e4
		}
		.w_title
		{
			font-family:Book Antiqua;font-weight:bold;font-size:80px;color:#ffffff;text-align:left;
			height:105px; width:100%;margin-top:40px;padding-bottom:5px;border:0px solid blue;
			border-bottom:1px solid #B0B0B0;
		}
		.w_content1
		{
			width:100%;height:400px;border:0px solid pink;border-bottom:1px solid #B0B0B0;
		}
		.w_button1
		{
			padding-left:5px;padding-top:2px;
			height:48px;width:45px;border-radius:25px;margin-top:150px;float:left;cursor:pointer;
			margin-bottom:75px;background-color:lightgreen;position:absolute;z-index:4;opacity:0.8;
			color:white;font-size:50px;font-weight:bold;font-family:arial;line-height:50px;
		}
		.w_button1:hover{background-color:lightgreen;opacity:0.9;}
		
		.w_panel2
		{
			height:275px;width:430px;float:left;border:0px solid blue;
			margin-top:50px;margin-bottom:75px;padding-left:80px;background-color:#e9e5e4;
			position:absolute;z-index:3;margin-left:381px;
		}
		.w_img1
		{
			height:275px;width:250px;position:absolute;
		}
		#x_img, #x_img1, #x_img2
		{
			position:absolute;height:225px;width:1060px;z-index:3;margin-top:50px;
			transition:all 10s;background-color:#e9e5e4;
			animation:myfirst 9s;
			-webkit-animation:myfirst 9s;
			animation:myfirst 9s;
		}
		@keyframes myfirst
		{
			-webkit-transform:translate(0px,0px);
		}
		.k_circle
		{
			height:58px; width:90px; border-radius:50px; background-color:#62cfd4;
			color:white;
			font-family:vrinda;font-size:18px;font-weight:normal;text-align:center;
			padding-top:32px; cursor:pointer;margin-top:0px;padding-left:0px;word-spacing:-9px;line-height:20px;
		}
		.title
		{
			height:40%; width:100%;border:0px solid green;border-bottom:1px solid #B0B0B0;
		}
		.description
		{
			height:59%; width:96%;border:0px solid green;padding-right:2%;
		}
		.k_p
		{
			color:#404040;font-family:georgia;font-size:20px;margin-top:10px;
		}
		.k1_p
		{
			color:#404040;font-family:georgia;font-size:15px;margin-top:9px;margin-bottom:0px;
		}
		.opacity1
		{
			height:275px;width:250px;opacity:0;background-color:#282828;position:absolute;
			-webkit-transition:opacity 0.5s;
			transition:opacity 0.5s;
		}
		.opacity1:hover{opacity:0.7;}
		.imgop
		{
			height:275px;width:250px;float:left;margin-right:15px;
		}
	</style>
	
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
			//document.write(x+" &nbsp "+xr+" &nbsp "+s);
			if(z<0)
			{
				document.getElementById(id1).style.webkitTransform = "translate(0px,0px)";
			}
		}
		function move3()
		{
			//document.getElementById("x_img").style.webkitTransition = "1s";
			//document.getElementById("x_img").style.animationPlayState="paused";
		}
	</script>
</head>
<body style="padding:0px;margin:0px;background-color:#e9e5e4">
<div class="w_panelx"></div>
<div class="w_main"><div class="w_title">LATEST PROJECTS</div>
	<div class="w_content1">
		
		<div class="w_button1" onmouseover="move2(1)" ><</div>
		<div id="x_img">
		<div class="imgop"><img class="w_img1" src="lib1.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="lib2.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="lib3.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="lib4.jpg"><div class="opacity1"></div></div>
		</div>
		
		<div class="w_button1" onmouseover="move1(1)" style="margin-left:332px;padding-left:16px;width:34px;">></div>
		<div class="w_panel2">
				<div class="title"><div class="k_circle">Project | 01</div></div>
				<div class="description"><p class="k_p">Website for library</p><p class="k1_p">This is a website of library which concentrates to make work of library online. It also provides sharing of e-books,teachers note and other readable item. Anyone can also post post information about latest technologies. It is fully for students.</p></div>
		</div>
	</div>
	
	
	
	<div class="w_content1">
		<div class="w_button1" onmouseover="move2(2)" ><</div>
		<div id="x_img1">
		<div class="imgop"><img class="w_img1" src="cake-x1.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="cake-x7.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="cake-2.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="x9.jpg"><div class="opacity1"></div></div></div>
		<div class="w_panel1"></div>
		<div class="w_button1" onmouseover="move1(2)" style="margin-left:332px;padding-left:16px;width:34px;">></div>
		<div class="w_panel2">
				<div class="title"><div class="k_circle">Project | 02</div></div>
				<div class="description"><p class="k_p">Celebration Cake</p><p class="k1_p">This is a website under construction. The website is of a cake shop. It provides customers to order cake online. It also provides admin to add or delete information.</p></div>
		</div>
	</div>
	
	
	
	<div class="w_content1">
		<div class="w_button1" onmouseover="move2(3)"><</div>
		<div id="x_img2">
		<div class="imgop"><img class="w_img1" src="1.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="2.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="3.jpg"><div class="opacity1"></div></div>
		<div class="imgop"><img class="w_img1" src="4.jpg"><div class="opacity1"></div></div>
		
		</div>
		<div class="w_panel1"></div>
		<div class="w_button1" onmouseover="move1(3)" style="margin-left:332px;padding-left:16px;width:34px;">></div>
		<div class="w_panel2">
				<div class="title"><div class="k_circle">Project | 03</div></div>
				<div class="description"><p class="k_p">ATM Management System</p><p class="k1_p">This is mainly a php project. But is also uses a bit of css , javascript and html.  The project aimed at making a working model of ATM system so as costumers can perform various tasks related to it.</p></div>
		</div>
	</div>
</div>
<div class="w_panelx" style="margin-left:83%;"></div>
</body>
</html>