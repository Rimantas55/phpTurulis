
<form method="post">
	<label>Kofas 1 Laimejimas</label>
	<input type="text" name="kof1" placeholder="laimejimo kofas" autofocus> <input type="text" name="eur1" placeholder="statoma suma">
	<br>
	<label>papildomas kofas</label>
	<input type="text" name="kof3" placeholder="papildomas kofas" > 
	<br>
	<label>Kofas 2 Lygiosios</label>
	<input type="text" name="kof2"  placeholder="lyguju kofas"> <input type="text" name="eur2" placeholder="statoma suma">
	<br>
	<input type="submit" name="submit" value="Skaiciuoti">
</form>

<?php
if(isset($_POST['submit'])) {
	$kof1 =  $_POST['kof1'];
	$kof2 =  $_POST['kof2'];
	$kof3 =  $_POST['kof3'];
	$eur1 =  $_POST['eur1'];
	$eur2 =  $_POST['eur2'];


	//viso statyta suma
	$comment =  ($_POST['eur1'] + $_POST['eur2']);
	echo "<strong>Is viso pastatyta:</strong> " . $comment . " eur<br><br>"; 

	$result1 = $_POST['kof1'] * $_POST['eur1'] * $_POST['kof3'];
	echo 'Pastatyta ' . $eur1 . ' eur, Kofas buvo ' . $kof1 . ' ir ' . $kof3  . "<br>";
	echo "Laimejimas pirmo statymo " . $result1 . "<br><br> " ;

	$result2 = $_POST['kof2'] * $_POST['eur2'];
	echo 'Pastatyta ' . $eur2 . ' eur, Kofas buvo ' . $kof2 . "<br>" ;
	echo "Lygiosis " . $result2 . "<br><br>";

	if( $comment >= $result1 && $comment >= $result2 ) {

		echo "statyti NEAPSIMOKA";
	} else {
		echo '<span style="background-color:lightgreen;">Statyti APSIMOKA</span>';   
	}

}