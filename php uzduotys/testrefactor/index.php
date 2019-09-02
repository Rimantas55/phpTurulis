<?php include_once 'function.php' ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form</title>
</head>
<body>

	<div>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<label for="name">Enter Your Name
			<input type="text" name="name" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['name']; ?>"></label>
			<label for="email">Enter Your Email
			<input type="email" name="email" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['email']; ?>" ></label>
			<label for="phone">Enter Your Phone
			<input type="text" name="phone" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['phone']; ?>"></label>
			<label for="jobTitle">Enter Your Job Title
			<input type="text" name="jobTitle" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['jobTitle']; ?>"></label>
			<input type="file" name="resume" id="file" multiple>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>
<!-- Checking what value take from form -->
<?php echo inputData(); ?> <br>

<?php fileValidation(); ?>





</body>
</html>