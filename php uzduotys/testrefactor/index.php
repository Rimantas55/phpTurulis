<!-- HEADER -->
<?php include 'view/header.php'?>
<?php include 'helper.php'?> 

<!-- Main body -->
<div>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<label for="name">Enter Your Name 
		<input type="text" name="name" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['name']; ?>"></label>
		<label for="email">Enter Your Email
		<input type="email" name="email" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['email']; ?>" ></label>
		<label for="phone">Enter Your Phone
		<input type="number" name="phone" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['phone']; ?>"></label>
		<label for="jobTitle">Enter Your Job Title
		<input type="text" name="jobTitle" placeholder="<?php echo showRequire(); ?>" value="<?php echo $_POST['jobTitle']; ?>"></label>
		<input type="file" name="resume" id="file" multiple><div class="fileNotification"><?php fileValidation(); ?></div>
		<input type="submit" name="submit" value="submit">
	</form>
</div>

<!-- Checking what value collect form -->
<?php echo inputData(); ?> <br>

<!-- FOOTER -->
<?php include 'view/footer.php'?>

