<?php
//debuginimui geras code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost'; //$serverName
$dbname = 'loginapp';
$user = 'root'; //$userName
$password = ''; //pass galima pasikeisti per msq Previleges-> Change password

//Set DSN

//$dsn = 'mysql:host='.$host.';dbname='.$dbname; //kitas uzrasymo budas
$dsn = "mysql:host=$host; dbname=$dbname";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //jei sita setAttribute() naudosim, tai kai rasysim while ten galima resyti fetch()) ir nenaudoti fetch(PDO::FETCH_OBJ)) pvz:
//while($row = $stmt->fetch()){ //nenaudojam FETCH_OBJ bus israiska //$row->title
	//echo $row->title . '<br>';
//}

// if ($pdo) {
// 	echo 'Connection working';
// }

#PDO QUERY
$stmt = $pdo->query('SELECT * FROM posts'); //$stmt is like $statement
// #First Method using fetch(PDO::FETCH_ASSOC)
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ //while naudojam kai norim visa info outputinti is lenteles stulpelio
// 	echo $row['author'] . '<br>';
// }

//output
// Post one 1
// Post two 2
// Post three 3
// Post four 4
// Post fifth 5
// Post six 6

#Second Method 
while($row = $stmt->fetch()){ //naudojant FETCH_OBJ prie $pdo->setArrtibute bus israiska echo $row->title
	//echo $row->title . '<br>';
}

//output
// Post one 1
// Post two 2
// Post three 3
// Post four 4
// Post fifth 5
// Post six 6

# FETCH MULTIPLY POSTS
# First Method - PREPAREAD STATEMENTS (prepare & execute)

// $author = 'Brad';

// #Positional parameters //always need pass before parameters ect $author = 'Rimas';
// $sql = 'SELECT * FROM posts WHERE author = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();//$posts yra sukurtas variable kuris nurodo ka istraukinesim

// echo "<pre>";
// var_dump($posts);
// echo "<pre>" . "<br>";

// foreach ($posts as $post) {
// 	echo $post->title . "<br>";
// }



# Second Method - NAMED PARAMETERS

// $author = 'Brad'; //always need pass before parameters ect $author = 'Rimas';
// $is_published = true; //jei norime prideti papildoma parametra

// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
// 	'author' => $author,
// 	'is_published' => $is_published,
// ]);
// $posts = $stmt->fetchAll();

// echo "<pre>";
// var_dump($posts);
// echo "<pre>" . "<br>";

// foreach ($posts as $post) {
// 	echo $post->title . "<br>";
// }



# FETCH SINGLE POST

// $id = 3; //pagal id galim issimti bet kokia tame id esancia info
// $author = 'Brad'; //always need pass before parameters ect $author = 'Rimas';
// $is_published = true; //jei norime prideti papildoma parametra

// $sql = 'SELECT * FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
// 	'id' => $id,
// ]);

// $post = $stmt->fetch();

// echo $post->title;
// echo "<br>";
// echo $post->body;


# GET ROW COUNT
// $author = 'Brad'; //always need pass before parameters ect $author = 'Rimas';
// $is_published = true; //jei norime prideti papildoma parametra
// $id = 1;

// $stmt = "SELECT * FROM posts WHERE author = ?";
// $stmt = $pdo->prepare($stmt); //galima rasyti ir per viena eilute: $stmt = $pdo->prepare("SELECT * FROM posts WHERE author = ?");
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();

// echo $postCount; //output 3



#INSERT DATA
$title = 'Post six 6';
$body = 'This is post five';
$author = 'Kevin';

$sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
$stmt = $pdo->prepare($sql);
$stmt->execute([
	'title' => $title,
	'body' => $body,
	'author' => $author,
]);

echo 'Post added';