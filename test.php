<?php

include("fonctions.php");

$database = "ece_amazon_bdd";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if($db_found){

	// affiche table Photo
	$sql = "SELECT nom_fichier FROM photo WHERE id LIKE '300001'";
	$result = mysqli_query($db_handle, $sql);
	$array = array();
	while ($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['nom_fichier']);
	}

	affiche_toutes_photos($array);

} else {
	echo 'BD not found';
}




?>