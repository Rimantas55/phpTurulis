<?php


?>

<form action="index.php" method="post" name="productForm">
	<h1>Mano Forma</h1>
	<input type="text" placeholder="Enter Product Name" name="productName">
	<input type="number" placeholder="Enter Product Price" name="productPrice">
	<input type="number" placeholder="Enter Product Quantity" name="productQuantity">
	<input type="text" placeholder="Enter Product SKU" name="productSku">
	<h3><label for="">Status</label></h3>
	<select name="status">
		<option value="1">Active</option>
		<option value="0">Disable</option>
	</select>
	<input type="number" placeholder="Enter Product Weight" name="productWeight">
	<input type="text" placeholder="Enter Product Image" name="productImage">
	<textarea cols="30" rows="10"
	name="productDescription"></textarea>
	<input type="Submit" name="submit">
</form>

<?php

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productQuantity = $_POST['productQuantity'];
$productSku = $_POST['productSku'];
$status = $_POST['status'];
$productWeight = $_POST['productWeight'];
$productImage = $_POST['productImage'];
$productDescription = $_POST['productDescription'];

    //print_r($_POST);
function connectToDb()
{

	$host = 'localhost';
	$userName = 'pdo_user';
	$password = '123petras@123P';
	$dbName = 'pdo2';

	try {
            //echo "online";
		$pdo = new PDO("mysql:host=$host; dbname=$dbName; charset=utf8", $userName, $password);
	} catch (PDOException $e) {
		echo "Connection failed " . $e->getMessage() . "\n";

		return false;
	}
	echo "online";
	return $pdo;
}

sendDataToDb($productName, $productPrice, $productQuantity, $productSku, $status, $productWeight, $productImage, $productDescription);

function sendDataToDb($productName, $productPrice, $productQuantity, $productSku, $status, $productWeight, $productImage, $productDescription)
{
	$sql = "INSERT INTO product_table(product_name, product_price, product_quantity, product_squ, product_status, productWeight, product_img, product_description) 
	VALUES (:productName, :productPrice, :productQuantity, :productSku, :status, :productWeight, :productImage, :productDescription) ";
	$stmt = connectToDb()->prepare($sql);
	$stmt->bindValue(':productName', $productName, PDO::PARAM_STR);
	$stmt->bindValue(':productPrice', $productPrice, PDO::PARAM_STR);
	$stmt->bindValue(':productQuantity', $productQuantity, PDO::PARAM_STR);
	$stmt->bindValue(':productSku', $productSku, PDO::PARAM_STR_CHAR);
	$stmt->bindValue(':status', $status, PDO::PARAM_INT);
	$stmt->bindValue(':productWeight', $productWeight, PDO::PARAM_STR);
	$stmt->bindValue(':productImage', $productImage, PDO::PARAM_STR_CHAR);
	$stmt->bindValue(':productDescription', $productDescription, PDO::PARAM_STR_CHAR);
	$stmt->execute();
	print_r($stmt->errorInfo());
        //die($productImage);
	echo "Product succsessfuly Created!";
}