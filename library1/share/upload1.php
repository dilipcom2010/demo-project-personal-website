<html>
<head>
	<link rel="stylesheet" type="text/css" href="main1.css">
	<link rel="stylesheet" type="text/css" href="main2.css">
	<style>
		.u_content1
		{
			height:600px; border:0px solid blue; width:80%; margin-left:10%;padding-top:100px;padding-bottom:50px;
		}
		.u_searchdiv
		{
			background-color:#282828;padding-top:10px;padding-bottom:10px;
			height:40px;width:100%;border:0px solid blue;
		}
		#u_find
		{
			border-top-left-radius:6px;border-bottom-left-radius:6px;
			height:30px;width:200px;float:left;background-color:white;border:1px solid white;
			font-family:arial; font-size:16px;text-align:right;padding-top:10px;color:grey;
		}
		#u_logo
		{
			height:40px;width:40px;background-color:white;float:left;border:1px solid white;
		}
		#u_serach
		{
			height:42px;width:450px;background-color:white;float:left;border:1px solid white;
			font-family:arial; font-size:16px;text-align:left;padding-top:3px;color:grey;
		}
		#u_go
		{
			height:42px;width:80px;background-color:#282828;float:left;border:1px solid white;
			border-top-right-radius:6px;border-bottom-right-radius:6px;font-weight:bold;color:white;
			font-family:arial; font-size:16px;text-align:center;
		}
		.bookform
		{
			height:500px;width:100%;border:0px solid black; margin-top:10px;
		}
		.formheader
		{
			height:40px; width:100%; border:0px solid yellow;text-align:center;
			font-family:arial; font-size:20px;font-weight:bold;color:grey;
			padding-top:22px;text-transform:uppercase;
		}
		.u_covercontent
		{
			height:400px;width:35%; background-color:lightyellow;float:left;border:1px dotted grey;
			background:url('tree.jpg');
		}
		.cover
		{
			
			height:200px; width:200px; border:1px dotted #282828;float:left;margin-top:30px;margin-left:85px;
		}
		.cover_description
		{
			height:100px; width:97%; border:0px solid blue;padding:1%;float:left;margin-top:30px;
			font-family:arial; font-size:19px;text-align:left;color:white; font-weight:bold;
		}
		.u_description
		{
			margin-left:3%;padding-top:20px;padding-left:1%;
			width:60%; height:380px;background-color:lightyellow;float:left;
			font-family:arial; font-size:16px;text-align:left;padding-top:3px;color:grey;
		}
		
		.u_field1
		{
			height:45px; width:400px; border:0px solid blue; margin-top:5px;
		}
		#u_field
		{
			float:left;height:40px; width:330px; border:1px solid yellow;bacground-color:white;
			font-family:arial; font-size:13px;text-align:left;color:#282828;padding-left:5px;
		}
		.u_circle
		{
			font-family:arial; font-size:16px;text-align:center;padding-top:10px;
			height:30px;width:40px; float:left;background-color:#0072c5;margin-right:20px;border-radius:20px;
			font-weight:bold;color:white;
		}
	</style>
</head>
<body style="padding:0px; margin:0px">
<div class="header1"><div class="logo1"><a href="#">Library</a></div>
	<div class="option1" style="margin-left:390px;"><a href="/library1/index1.php">Home</a></div><div class="option1" style=" background-color:#ca5251;"><a href="#">Collection</a></div><div class="option1"><a href="#">Softwares</a></div><div class="option1"><a href="#">About</a></div><div class="option1"><a href="/library1/resume/resume1.php">Developer</a></div>
	<div class="signin1" style="margin-right:30px"><a href="#">Register</a></div><div class="signin1"><a href="#">Sign-in</a></div>
</div>

<div class="u_content1">
<div class="u_searchdiv">
	<div id="u_find" style="margin-left:150px;">Find the book you need</div>
	<div id="u_logo"><img src=""></div>
	<input type="text" id="u_serach" placeholder="Search for a book"></input>
	<input type="submit" id="u_go" value="Go!"></div>
	<div class="bookform">
		<div class="formheader">Be the one to help your friends....</div>
		<div class="u_covercontent"><div class="cover"></div>
		<div class="cover_description">Upload a picture of the content you are going to upload.
		<form action="uploaded.php" method="post" name="form" enctype="multipart/form-data">
		<input type="file" name="pic" id="pic" required></input></div><div class="">
		</div></div>
		
		<div class="u_description"><div style="width:63%;float:left;">
			
				<div class="u_field1"><div class="u_circle">1</div><input id="u_field" name="id" type="text" placeholder="Enter your membership id" required></input></div>
				<div class="u_field1"><div class="u_circle">2</div><input id="u_field" name="password" type="password" placeholder="Enter your password" required></input></div>
				<div class="u_field1"><div class="u_circle">3</div><input id="u_field" name="title" type="text" placeholder="Please enter the title of content" required></input></div>
				<div class="u_field1"><div class="u_circle">4</div><input id="u_field" name="author" type="text" placeholder="Author of content" required></input></div>
				
				<div class="u_field1"><div class="u_circle">5</div><select id="u_field" name="type" required>
					<option>Book</option><option>Teacher's Note</option>
					<option>Letures</option><option>Question Papers</option>
				</select></div>
				<div class="u_field1"><input id="u_field" name="file" type="file" value="Choose file to upload" style="border:0px;width:auto;height:auto;margin-left:60px;" required></input></div>
				<div class="u_field1"><input id="u_field" name="submit" type="submit" value="SHARE!" style="background-color:#ff6766;margin-left:60px;color:white;font-weight:bold;text-align:center;font-size:16px;border-radius:10px;border:0px;cursor:pointer"></input></div>
			</div>
			<div style="width:35%;height:96%;padding-top:5px;float:left">
				<textarea row="10" column="10" id="u_field" name="description" style="width:98%; height:75%;"; placeholder="Add description" required></textarea></form>
			</div>
	</div>
</div>
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