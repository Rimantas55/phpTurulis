<?php 	
// store value from form
function inputData(){
	if (isset($_POST['submit'])) {

		$name  = $_POST['name'];
		$email  = $_POST['email'];
		$phone  = $_POST['phone'];
		$jobTitle = $_POST['jobTitle'];
		
		return $name . "<br>" . $email . "<br>" . $phone . "<br>" . $jobTitle . "<br>" ;
	}
} 

// show require msg
function showRequire(){
	if (isset($_POST['submit'])) {
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['jobTitle'])) {
			return 'Require';
		}
	}
} 

//file validation and uploading
function fileValidation(){
	if (isset($_POST['submit'])) {
		$target_dir = "resumes/";
		$target_file = $target_dir . basename($_FILES["resume"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["resume"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
// Check file size
if ($_FILES["resume"]["size"] < 3145728) { //****************** Size ****************
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["resume"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}










	// $folder = "resumes/"; // where we gonna save our file
	// $target = $folder.basename($timestamp . $_FILES['fileToUpload']['name']);

	// $resume = ($_FILES['resume']['name']);
	// $timestamp = time();



 //    $type = ($_FILES['resume']['type']);
 //    $extension = strtolower(substr($resume, strpos($resume, '.') + 1)); 
 //    $size = ($_FILES['resume']['size']);
 //    $max_size = 3145728;

}
}
