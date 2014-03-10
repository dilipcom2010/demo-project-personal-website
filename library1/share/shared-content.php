<html>
<head>
	<link rel="stylesheet" type="text/css" href="main1.css">
	<link rel="stylesheet" type="text/css" href="main2.css">
	
	<style>
		.header3
		{
			background-color:ecf0f1;
			height:16px;
			width:80%;
			padding-top:50px;padding-left:10%;padding-right:10%;padding-bottom:50px;
			font-size:20px;font-family:vrinda,arial;color:grey;word-spacing:-8px;
		}
		.loc
		{
			height:27px;width:auto;float:left;
		}
		.hed31
		{
			height:27px; width:auto; float:right;
		}
		.s_circle1
		{
			height:27px; width:27px;border-radius:13px;background-color:#ff6766;float:right;
			margin-right:10px;text-align:center;color:white;font-weight:bold;margin-left:10px;
		}
		.s_content1
		{
			height:1100px; width:70%; padding-left:15%;padding-right:15%; border:1px solid white;overflow:hidden;
		}
		.s_b1
		{
			height:400px; width:600px;float:left;
			border:1px solid blue; margin-top:50px;
		}
		.s_img1
		{
			height:400px; width:600px;
		}
		.s_b2
		{
			height:400px; width:300px;float:left;
			border:1px solid blue; margin-top:50px;
		}
		.s_b3
		{
		 height:130px; width:146px; border:1px solid white; float:left;
		}
		.s_b4
		{
		 height:130px; width:298px; border:1px solid white; float:left;
		}
		.s_c1
		{
			height:
		}
		.s_ne
		{
			height:200px; width:890px;float:left;margin-top:0px;border-top:2px solid lightgrey;
		}
		.s_p1
		{
			font-family:vrinda; font-weight:bold; font-size:20px; color:grey;
			padding-top:0px; padding-bottom:0px; margin-top:10px; margin-bottom:10px;
		}
		
		.s_p2
		{
			font-family:vrinda; font-weight:normal; font-size:15px; color:#282828;
			padding-top:0px; padding-bottom:0px; margin-top:0px; margin-bottom:0px;
		}
		.s_img2
		{height:150px; width:190px;}
		.s_img3
		{height:130px; width:auto;}
		.hed
		{
			width:200px; height:50px; border:0px solid blue;float:left;
		}
		.imgbox
		{height:190px; width:190px; margin:15px; border:0px solid black;float:left; overflow:hidden;}
		.download
		{
			background-color:#ff6766;padding-top:10px;padding-bottom:10px;padding-left:30px;
			padding-right:30px;width:80px;margin-top:10px;font-family:arial;font-size:14px;
			font-weight:bold; color:white;text-decoration:none; border-radius:5px;float:left;
		}
		.line
		{
			height:30px; border-bottom:1px solid lightgrey;overflow:hidden;
		}
	</style>
	
</head>
<body style="padding:0px; margin:0px">
<div class="header1"><div class="logo1"><a href="#">Library</a></div>
	<div class="option1" style="margin-left:390px;"><a href="/library1/index1.php">Home</a></div><div class="option1" style=" background-color:#ca5251;"><a href="#">Collection</a></div><div class="option1"><a href="#">Softwares</a></div><div class="option1"><a href="#">About</a></div><div class="option1"><a href="/library1/resume/resume1.php">Developer</a></div>
	<div class="signin1" style="margin-right:30px"><a href="#">Register</a></div><div class="signin1"><a href="#">Sign-in</a></div>
</div>
<div class="header3"><div class="loc">Home / Collection / e-books</div>
					 <div class="hed31">ALL BOOKS</div><div class="s_circle1">^</div>
					 <div class="hed31">NEXT</div><div class="s_circle1">></div>
					 <div class="hed31">PREVIOUS</div><div class="s_circle1"><</div></div>

<?php
	include'connect.php';
	if(!$con)
	{
		echo'unable to connect database';
	}
	else
	{
		$title1=$_GET['title'];
		$result=mysqli_query($con,'select *from shared where title="'.$title1.'"');
		$row=mysqli_fetch_array($result);
	
?>
					 
					 
					 
					 
<div class="s_content1">
	<?php
		echo'<div class="s_b1"><img class="s_img1" src="'.$row[6].'"></div>';
		
		$result1=mysqli_query($con,'select *from shared');
		 //$count=0;
		while($row1=mysqli_fetch_array($result1))
		{
			$pic[]=$row1[6];
			$t[]=$row1[0];
			//echo $row1[6].'<br>';
			 //$count=$count+1;
		}
	}	
	echo '<div class="s_b2"><div class="s_b4"><img class="s_img3" src="'.$pic[0].'"></div>
	
	<div class="s_b4"><img class="s_img3" src="'.$pic[1].'"></div>
	<div class="s_b4"><img class="s_img3" src="'.$pic[2].'"></div></div>';
		
	?>
	
	<div class="s_b1" style="height:250px; border-right:1px solid lightgrey;padding-right:20px;width:580">
		<p class="s_p1">OVERVIEW</p>
		<p class="s_p2"><?php echo $row[3]; ?></p>
	</div>
	<div class="s_b2" style="height:250px; border-left:1px solid lightgrey;padding-left:30px;width:270">
		<p class="s_p1">DETAILS</p>
		<div class="line"><p class="s_p2"><strong>Title: </strong><i><?php echo $row[0]; ?></i></p></div>
		<div class="line"><p class="s_p2"><strong>Author: </strong><i><?php echo $row[1]; ?></i></p></div>
		<div class="line"><p class="s_p2"><strong>Posted By: </strong><i><?php echo $row[2]; ?></i></p></div>
		<div class="line"><p class="s_p2"><strong>Type: </strong><i><?php echo $row[5]; ?></i></p></div>
		<?php echo '<a class="download" href="'.$row[4].'">DOWNLOAD</a>';?>
	</div>
	
	<div class="hed"><p class="s_p1" style="margin-top:10px;">OTHER BOOKS</p></div>
	<?php echo '<div class="s_ne" style="height:200px;">
		<div class="imgbox"><img class="s_img2" src="'.$pic[0].'"><p class="s_p2">'.$t[0].'</p></div>
		<div class="imgbox"><img class="s_img2" src="'.$pic[1].'"><p class="s_p2">'.$t[1].'</p></div>
		<div class="imgbox"><img class="s_img2" src="'.$pic[2].'"><p class="s_p2">'.$t[2].'</p></div>
		<div class="imgbox"><img class="s_img2" src="'.$pic[3].'"><p class="s_p2">'.$t[3].'</p></div>
		
	</div>';?>
</div>






<div class="footer1">
<div class="content1">
	<p class="p1">Library</p>
	<p class="p2">The purpose of this website is to update you about your library without visiting library.It is made to decrease the rush in library.</p>
	<p class="p2">But you have to keep visiting library to issue,return and reading books.But you can check all other status by this site.</p>
	<p class="p2">You can share e-books,techer's notes and video lectures and so many others useful things.and also download useful softwares.</p>
</div>
<div class="content1" style="height:280px;border-bottom:1px solid #686868">
	<p class="p21">Contact</p>
	<div class="circle"><div class="circle1"><div class="circle2"></div></div></div><ul class="p22"><li>Address<li>daimond harbour,24pg(s)</li></li></ul>
	<div class="circle"><div class="circle1"><div class="circle2"></div></div></div><ul class="p22"><li>Phone<li>+918609254757</li></li></ul>
	<div class="circle"><div class="circle1"><div class="circle2"></div></div></div><ul class="p22"><li>Email<li>dilipcom2010@gmail.com</li></li></ul>
</div>

<div class="content1" style="width:35%;margin-right:0%;">
	<p class="p21">Image Feeds</p>
	<img src="lp/1.jpg" class="footer_img"><img src="lp/2.jpg" class="footer_img"><img src="lp/3.jpg" class="footer_img"><img src="lp/4.jpg" class="footer_img">
	
	<p class="subs">Subscribe for our news feeds</p>
	<form action="#" method="post">
	<input type="text" name="s_userid" value="your email address" title="in_subs"></input>
	<input type="submit" title="in_subm" value="Subscribe"></input></form>
</div>

<div class="footer_hl">
<a href="#">@2013 Dilip kumar</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="#">Tearms</a>&nbsp &nbsp &nbsp &nbsp &nbsp<a href="#">Privacy & Policy</a>

<a href="#" class="last">About</a><a href="#" class="last">Browse</a><a href="#" class="last">Collections</a><a href="#" class="last">Home</a>
</div>
</div>
</body>
</html>