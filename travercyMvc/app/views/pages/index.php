<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<?php require APPROOT . '/views/inc/footer.php'; ?>
