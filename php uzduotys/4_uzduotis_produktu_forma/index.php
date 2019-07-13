<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*PHP PRODUCTS TABLE OUTPUT*/
/*
$products = [
    1 => [
        'name' => 'Produktas 1',
        'sku' => '000001',
        'price' => '100',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    2 => [
        'name' => 'Produktas 2',
        'sku' => '000002',
        'price' => '200',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    3 => [
        'name' => 'Produktas 3',
        'sku' => '000003',
        'price' => '300',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    4 => [
        'name' => 'Produktas 4',
        'sku' => '000004',
        'price' => '400',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    5 => [
        'name' => 'Produktas 5',
        'sku' => '000005',
        'price' => '500',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
    6 => [
        'name' => 'Produktas 6',
        'sku' => '000006',
        'price' => '600',
        'image' => 'https://images.yourstory.com/cs/wordpress/2016/08/125-fall-in-love.png?fm=png&auto=format',
    ],
];
//echo "<pre>";
//print_r($products);

function renderProduct($product)
{
    $html = '';
    $html .= '<div class="product-wrapper">';//style= "float: left; width: 100px;"
    $html .= '<div class="image"><img src="' . $product['image'] . '" alt="asd"></div>';
    $html .= '<div class="name">' . $product['name'] . '</div>';
    $html .= '<div class="sku">' . $product['sku'] . '</div>';
    $html .= '<div class="price">' . $product['price'] . '</div>';
    $html .= '</div>';

    return $html;

}


function renderGrid($products)//funkcija per kuria eina duomenys is pirminio array
{
    $html = '';
    $html .= '<div class="grid-wrapper">';
    foreach ($products as $product) {
        $html .= renderProduct($product); //funkcija kurioje kurtas html elementai

    }
    $html .= '<div>';
    return $html;
}

//echo renderGrid($products);
*/


/*USER TABLE PHP */
/*
$users = [
    1 => [
        'name' => 'Antanas',
        'surname' => 'Bogdanavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
    2 => [
        'name' => 'Kestas',
        'surname' => 'Kestavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2222 01 01',
    ],
    3 => [
        'name' => 'Zigmas',
        'surname' => 'Zigmuntavicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2017 01 01',
    ],
    4 => [
        'name' => 'Juozas',
        'surname' => 'Juozapevicius',
        'email' => 'email@email.com',
        'phone' => '+3705555555',
        'bday' => '2020 01 01',
    ],
];

function renderListItem($user)
{
    $html = '';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['name'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['surname'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['email'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['phone'] . '</td>';
    $html .= '<td style="font-weight: bold; text-align: center; border:2px solid yellow;">' . $user['bday'] . '</td>';
    $html .= '</tr style="text-align: center; border:2px solid yellow;">';

    return $html;
}


function userOutput($users)
{
    $html = '';
    $html .= '<table style="max-width:100%; border:1px solid yellow; border-collapse: collapse;">';

    $html .= '<tr style="font-weight: bold; text-align: center; border:2px solid yellow;">';//
    $html .= '<td style="text-align: center; border:1px solid yellow;">Name</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Surname</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Email</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Phone</td>';
    $html .= '<td style="text-align: center; border:1px solid yellow;">Bday</td>';

    foreach ($users as $user) {
        $html .= renderListItem($user);
    }
    $html .= '</tr>'; //close header tr row
    $html .= '</table>'; //close table
    return $html;
}

//echo userOutput($users);
*/


/*HTML PRICES*/
/*
$prices = [
    'price' => [
        'car' => 10,
        'doll' => 15,
        'plain' => 8,
        'cards' => 63,
        'mc' => 100,
        'food' => 213,
        //'pvm' => 1.21,
    ],
];

//bandziau kazka bet nesugalvojau kaip funkcija ikelti i visa cikla
function countPvm($item)
{
    return $item * 1.21;
}

function outoutItems($item)
{
    foreach ($item as $key => $value) {

        foreach ($value as $key1 => $value1) {
            print $key1 . " "; //jei padarau return gaunasi kad output tik car vienas elementas
        }
    }
}

//print outoutItems($prices);


function createHtml($item)
{
    $html = '';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['car'] . '</td>';
    $html .= '<td>' . countPvm($item['car']) . " eur" . '</td>';//$item['car'] * $items['pvm']
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['doll'] . '</td>';
    $html .= '<td>' . countPvm($item['doll']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['plain'] . '</td>';
    $html .= '<td>' . countPvm($item['plain']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['cards'] . '</td>';
    $html .= '<td>' . countPvm($item['cards']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['mc'] . '</td>';
    $html .= '<td>' . countPvm($item['mc']) . " eur" . '</td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= '<td>' . " " . '</td>';
    $html .= '<td>' . $item['food'] . '</td>';
    $html .= '<td>' . countPvm($item['food']) . " eur" . '</td>';
    $html .= '</tr>';

    return $html;
}

function multiplyItems($prices)
{
    $html = '';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td>Item</td>';
    $html .= '<td>Price no PVM</td>';
    $html .= '<td>Price with 21% PVM</td>';


    foreach ($prices as $key => $item) {
        $html .= createHtml($item, $key);
    }


    $html .= '</tr>';
    $html .= '</table>';
    return $html;
}

echo multiplyItems($prices);
//menu pilnas atvaizdavimas su css
*/


/*CREATE NAV MENU*/
/*
$menuItems = [
    1 => [
        'label' => 'Home',
        'url' => 'www.delfi.lt',
    ],
    2 => [
        'label' => 'About',
        'url' => 'www.litas.lt'
    ],
    3 => [
        'label' => 'Contacts',
        'url' => 'www.maxima.lt',
    ],

];

function createNav($item)
{
    $html = '';

    $html .= '<a href="' . $item['url'] . '" style="text-decoration: none; font-size:15pt; color:white;">' . $item['label'] . '</a>';

    return $html;
}

function sendItems($menuItems)
{
    $html = '';
    $html .= '<div class="nav" style="max-width: 800px; margin: auto; display: flex; justify-content: space-evenly; align-items: center; border: 2px solid yellow; background-color: orange; padding: 15px;  ">';

    foreach ($menuItems as $item) {
        $html .= createNav($item);
    }

    $html .= '</div>'; //end of nav wrapper
    return $html;
}

//echo sendItems($menuItems);
*/


/*Find missing number*/
/*
$array = [1,2,3,4,6,7,8,9];
function findMissingNumber($array)
{
    for ($i = 1; $i <= count($array) + 1; $i++) {
        if (!in_array($i, $array)) {
            return $i;
        }
    }
}
*/


/*Find lowest number*/
//$array = [1,2, 3,4,5,6,7,8,10,11];
//function find($array)
//{   $i = 1;
//    $x = 0;
//    foreach($array as $value) {
//        if($value != $i) {
//            echo $value - 1;
//            $i++;
//            $x = 1;
//            echo '<br>';
//        }
//        $i++;
//    }
//    if($x == 0){
//        $value = end($array)+1;
//        echo $value;
//    }
//}
////echo find($array);


/*trying str_replace*/
/*
$someSome = 'Labas, mano vardas Tomas';
echo $someSome . "<br>";
echo str_replace("Tomas", "Rimas", $someSome);
*/


/*ar dalinasi is 2*/
/*
$number1 = rand(1,36);

function is_Power_of_two($number1)
{
    if(($number1 & ($number1 - 1)) == 0)
    {
        return "$number1 is power of 2";
    }
    else
    {
        return "$number1 is not power of 2";
    }
}
//echo is_Power_of_two($number1);
*/

/*
function connect()
{
    $host = '127.0.0.1'; //'localhost' kartais yra tas pats kas 127.0.0.1
    $db = 'pdo2';
    $user = 'pdo_user'; //pradzioje buvo root
    $password = '123petras@123P'; //buvo laisvas stringas ""

    try {
        //echo "online";
        $pdo = new PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
    } catch (PDOException $e) {
        echo "Connection failed " . $e->getMessage() . "\n";
        return false;
    }
    return $pdo;
}

//GRANT_ALL_PRIVILEGES_ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';??

//echo "<pre>";
$stmt = connect()->query('SELECT * FROM table1'); //reikejo is table1

while ($row = $stmt->fetch()) {
    //print_r($row);
    //echo "ar cia ka paselektinau";
    //echo "</pre>";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password2 = $_POST['password2'];



function submitUser($name, $email, $phone, $pass, $pass2)
{
    if (!passwordMatch($pass, $pass2) && !validationEmpty($name, $email, $phone, $pass, $pass2) && emailUnic($email)) {

        createUser($name, $email, $phone, $pass);
    }

}

submitUser($name, validEmail($email), $phone, $password, $password2 );

function passwordMatch($password, $password2)
{
    if ($password !== $password2) {
        return true;
    }
    return false;
}

function validEmail($email)
{
    $lowerCaseEmail = strtolower($email);

    return $lowerCaseEmail;
}

//$emailValidationSmall =  validEmail($email);


function emailUnic($email)
{
    $stmt = connect()->query("SELECT * FROM table1 WHERE email =  '$email' "); //reikejo is table1
    if ($email === $stmt) {
        return true;
    }
    //return false;
}

function stripTagsFromInput($input)
{
    if (strip_tags($input) === true)
        return false;
}


function createUser($name, $email, $phone, $password)
{
    $sql = "INSERT INTO table1(name, email, phone, password) VALUES (:name, :email, :phone, :password)";
    $stmt = connect()->prepare($sql);//connect yra funkcija kuri apjungia $pdo
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
    ]);
}

function validationEmpty($name, $email, $phone, $pass, $pass2)
{
    if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($pass2)) {
        return true;
    }
    return false;
}


print_r($stmt->errorInfo());
*/

//phpinfo();


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>


    <!--FORM TABLE1-->
<!--
       <form action="index.php" method="post">
            <h1>Mano Forma</h1>
            <input type="text" placeholder="Enter Name" name="name" >
            <input type="text" placeholder="Email " name="email">
           <input type="text" placeholder="Phone" name="phone">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Repeat Password" name="password2">
          <input type="Submit" name="submit">
      </form>


    <hr>
    -->
<!--
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
-->
    <!--PRODUCT FORM PHP-->
    <?php
/*
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


//    function emailUnic()
//    {
//
//
//        $sql = "SELECT * FROM table1 ";
//        $stmt = connectToDb()->prepare($sql);
//        $stmt->execute();
//        $table = $stmt->fetch();
//
//        print_r($stmt->errorInfo());
//        echo "ok";
//
//    }
//
//    emailUnic();

*/
    ?>
    <!--END OF PRODUCT FORM PHP-->
    </body>
    </html>


<?php

/*YOUTUBE TUTORIAL*/
/*

//SELECT * viska arba ID arba role arba desc FROM tableName // \
//apribojimai vyksta su WHERE ID 1 arba WHERE ROLE in ADMIN
//yra SELECT COUNT

//DELETE FROM prod WHERE categ=1

//$host = "localhost";
//$user = 'pdo_user';
//$password = '123petras@123P';
//$dbname = 'pdo2';

// Set DSN
//$dsn = 'mysql:host='. $host . ';dbname=' . $dbname;

//Create a PDO instance

//$pdo = new PDO($dsn, $user, $password);
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
# PRDO QYERY

//$stmt = $pdo->query('SELECT * FROM table1');

//this will help loop through the results and out put on the screen

//while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//    echo $row['id'] . " "; //id yra stulpelis is lenteles duomenu bazeje, gali buti ir name, email, phone ir t.t
//}

//using FETCH_OBJ 2 variantas
//while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//    echo $row->id . " ";//id yra is lenteles pasirinktas pavadinimas stulpelio
//}


#PREPARED STATEMENTS (prepare and execute)

//FETCH MULTIPLE POSTS

//user input
//$name = 'Rokas'; //sukuriam
//$id = 160;



// kintamaji kuris yra lenteles,
// kai naudosim si kintamaji tai pades
// mums pasiimti viska ka tas kintamasis
// turi, pvz jei Rokas turi daug irasu ar telefonu
//juos galima su foreach pasiekti

//POSITIONAL PARAMS

//$sql = 'SELECT * FROM table1 WHERE name = ?';//name yra lenteles stulpelis
//$stmt = $pdo->prepare($sql);//prepeare statment, paruosimas
//$stmt->execute([$name]);//execute statment, important order
//$names = $stmt->fetchAll();

//var_dump($names);

//foreach($names as $name) {
    //echo $name->phone . "<br>";
//}



//antras variantas
// Named Params
//$sql = 'SELECT * FROM table1 WHERE name = :name';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['name' => $name]);
//$names = $stmt->fetchAll();
//
////var_dump($names);
//
//foreach($names as $name) {
//    echo $name->phone . "<br>"; //cia pasirenkam koki paremetra mes norim kad butu output, output bus visi to userio
//}

// FETCH SINGLE POST
//$sql = 'SELECT * FROM table1 WHERE id = :id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id' => $id]);
//$name = $stmt->fetch();//there was fetch all, but if we do 1 record, ewe use just singe 'fetch'
//
//echo $name->password; //ten kur id, tai nutaikom id, bet cia nutaikom ta ka norim mes outputinyi konkreciai


# GET ROW COUNT
//$stmt = $pdo->prepare('SELECT * FROM table1 WHERE name = ?');
//$stmt->execute([$name]);
//$postCount = $stmt->rowCount();
//
//echo $postCount;

// INSERT DATA
//$sql = "INSERT INTO table1(name, email, phone, password) VALUES (:name, :email, :phone, :password)";
//$stmt = connect()->prepare($sql);//connect yra funkcija kuri apjungia $pdo
//$stmt ->execute([
//    'name' => $name,
//    'email' => $email,
//    'phone' => $phone,
//    'password' => $password,
//]);


//UPDATE DATA
//nepavyko su post updated
//$sql = 'UPDATE table1 SET password = :password WHERE id = :id';
//$stmt = connect()->prepare($sql);//connect yra funkcija kuri apjungia $pdo
//$stmt ->execute([
        //'id' => $id,
    //'name' => $name,
    //'email' => $email,
    //'phone' => $phone,
    //'password' => $password,
//]);
//echo "post updated";


*/


/*FIND MIN NUMBEER FROM ARRAY*/
/*
//$someArray = [5, 6, 4, 10,19, 2,15,20, -15, -2];


//echo min($someArray);

//function findMin($someArray){
//    $min = 9999; //5 //$someArray[0]
//    $min2 = $min; //5
//
//    foreach($someArray as $x) { //5 //6 //x = 4
//        if ($x < $min) { //5 < 5 // 6 < 5// 4 < 5
//            $min2 = $min; //5
//            $min = $x;// 4
//        } elseif ($x < $min2){
//                $min2 = $x;
//        }
//    }
//    return $min . $min2;
//}
//
//echo findMin($someArray) . " ";
*/


?>