<?php 
require_once('connect.php');

//declare function
//publishBlog();


//functions

/*

//WHEN USING XHR CODE

function publishBlog(){
	global $con;

$img = $_POST['image'];
$author = $_POST['author'];
$header = $_POST['header'];
$content = $_POST['content'];
    $insert = "INSERT INTO post(author,img,header,content)values('$author','$img','$header','$content')";
    $result = mysqli_query($con,$insert);
         if($result){

         move_uploaded_file($img, 'picture/$img');
          echo 'BLOG has been published.';
         }
         else
         {
          echo 'Something went wrong!';
         }
   
 
}

*/


if(isset($_POST['publish'])){
	$file = $_FILES['image'];

	$filename = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];

	//safe from sql injection?
	$author = mysqli_real_escape_string($con,$_POST['author']);
	$header = mysqli_real_escape_string($con,$_POST['header']);
	$content = mysqli_real_escape_string($con,$_POST['content']);
	$date_publish = date('F d, Y');
	//echo $file;

	//explode makes it separated by '.' 
	//explode returns an array
	$fileExtention = explode('.', $filename);
	//convert the ext file to lower case by strtolower()
	//end() gets the end of the arraywhich is the file extention
	$fileActualExtention = strtolower(end($fileExtention));
	//set allowed file ext
	$allowed = array('jpg','jpeg','png','pdf');

	//check if its allowed type of file
	//in_array function makes checks if $fileActualExtention is in $allowed array
	if(in_array($fileActualExtention, $allowed)){
		//checks if getting the file is error
		//0 means ok 1 means error
		if($fileError === 0){
		//checks if file size is less than 1 000 000kb = 1mb
			if($fileSize < 2000000){
			//set unique id or name to a file
			//uniqid sets milisecond.fileActualname as filename
				$newFileName = uniqid('',true).".".$fileActualExtention;
				$fileDestination = 'picture/'.$newFileName;
				//moves the file to file destination
				//first parameter is tmpname(), secoond is the destination
				

				$insert = "INSERT INTO post(author,img,header,content,date_publish)values('$author','$fileDestination','$header','$content','$date_publish')";
    			$result = mysqli_query($con,$insert);
				//success message
				//echo 'Image has been uploaded';
				//or
				if($result){
					echo '
					<script>
						alert("Blog has been publish!");
						location.href = "server.php";
					</script>
				';	
				move_uploaded_file($fileTmpName, $fileDestination);
				}else{
					echo 'Something went wrong...';
				}
			}else{
				echo 'The file is too big.';
			}
		}else{
			echo 'Error uploading the file.';
		}
	}else{
		echo 'Please choose an image...';
	}
}

//test retreive
/*
$fetch = "SELECT img FROM post";
$img = mysqli_query($con,$fetch);

while($show = mysqli_fetch_assoc($img)){

echo "<img src='picture/".$show['img']."'>";
}
*/
?>