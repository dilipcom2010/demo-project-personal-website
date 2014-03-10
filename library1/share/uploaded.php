<html>
<head>
</head>
<body>

<?php
$allowedExts2 = array("gif", "jpeg", "jpg", "png");
$extension2 = end(explode(".", $_FILES["pic"]["name"]));
if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/pjpeg")
|| ($_FILES["pic"]["type"] == "image/x-png")
|| ($_FILES["pic"]["type"] == "image/png"))
&& ($_FILES["pic"]["size"] < 2000000)
&& in_array($extension2, $allowedExts2))
  {
  if ($_FILES["pic"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["pic"]["error"] . "<br>";
    }
  else
    {
    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/

    if (file_exists("pic/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["pic"]["name"] . " already exists. Please rename the picture";
      }
    else
      {
      /*move_uploaded_file($_FILES["pic"]["tmp_name"],
      "pic/" . $_FILES["pic"]["name"]);*/
      echo "Stored in: " . "pic/" . $_FILES["file"]["name"];
	  $loc1="pic/".$_FILES["pic"]["name"];
	  $loc2=addslashes($loc1);
	  fun1($loc1,$loc2);
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>








<?php
function fun1($loc1,$loc2)
{
	$id=$_POST['id'];	$pass=$_POST['password'];	$desc=$_POST['description'];
		$title=$_POST['title']; $author=$_POST['author'];$type=$_POST['type'];//$id=$__POST[];	$id=$__POST[];
	echo $id.'<br>'.$pass.'<br>'.$desc;
	include'connect.php';
	if(!$con)
	{
		echo'unable to connect database';
	}
	else
	{
		echo 'hii';
		$result=mysqli_query($con,'select password from members where id="'.$id.'"');
		$row=mysqli_fetch_array($result);
		if($row[0]==$pass)
		{
			echo'<br>You are logged in successfuly<br>';
			$allowedExts = array("gif", "jpeg", "jpg", "png","docx","doc","pdf");
			$extension = end(explode(".", $_FILES["file"]["name"]));
			echo $extension;
			
			
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg") 
			|| ($_FILES["file"]["type"] == "image/jpg")  
			|| ($_FILES["file"]["type"] == "image/pjpeg")  
			|| ($_FILES["file"]["type"] == "image/x-png")  
			|| ($_FILES["file"]["type"] == "image/png")
			|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
			|| ($_FILES["file"]["type"] == "application/pdf"))
			&& ($_FILES["file"]["size"] < 20000000)
			&& in_array($extension, $allowedExts))
			{
				if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
				}
				else
				{
					if (file_exists("shared/" . $_FILES["file"]["name"]))
					{
						echo $_FILES["file"]["name"] . " already exists. please change the name of the file and upload again";
					}
					else
					{
						move_uploaded_file($_FILES["pic"]["tmp_name"],$loc1);
						
						
						
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"shared/" . $_FILES["file"]["name"]);
						echo "Stored in: " . "shared/" . $_FILES["file"]["name"];
						$loc="shared/".$_FILES["file"]["name"];
						$loc=addslashes($loc);
						mysqli_query($con,'insert into shared(title,author,posted_by,description,location,type,pic_loc) values("'.$title.'","'.$author.'","'.$id.'","'.$desc.'","'.$loc.'","'.$type.'","'.$loc2.'")');
						
						$result1=mysqli_query($con,'select location from shared where title="'.$title.'"');
						$row1=mysqli_fetch_array($result1);
						echo '<br>'.$row1[0].'<br>';
						echo '<a href="'.$row1[0].'">see result</a>';
					}

				}

				echo 'nice';
			}
			else
			{
				echo'wrong file';
			}

		}
		else
		{
			//$row=mysqli_fetch_array($result);
			//echo $row[0];
			echo'Id password missmatch';
		}
	}
}
?>
</body>
<html>