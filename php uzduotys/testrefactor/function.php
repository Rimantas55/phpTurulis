<?php 	
				// store value from form
function inputData(){

		$name  = $_POST['name'];
		$email  = $_POST['email'];
		$phone  = $_POST['phone'];
		$jobTitle = $_POST['jobTitle'];

	if (empty(isset($_POST['submit']))) {
		
		return false;
	} else {
		print_r($_POST);
		return true;
	}
} 

				//file validation and uploading
function fileValidation(){
	if (!empty(isset($_POST['submit'])))  {
		$timestamp = time();
		$target_dir = "resumes/";
		$target_file = $target_dir . basename($timestamp . '_' . $_FILES["resume"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists. ";
			$uploadOk = 0;
		}

				// Check file size
		if ($_FILES["resume"]["size"] > 3145728) { //****************** Size ****************
			echo "Sorry, your file is too large. ";
			$uploadOk = 0;
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "txt" ) {
			echo "Sorry, only JPG, JPEG, PNG, TEXT & GIF files are allowed. ";
		$uploadOk = 0;
		}

				// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded. ";

				// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
				echo '<div class="success">The file ' . basename( $_FILES["resume"]["name"]) . ' has been uploaded.</div>' ;
			} else {
				echo "Sorry, there was an error uploading your file. ";
			}
		}
		return false;
	}
}
