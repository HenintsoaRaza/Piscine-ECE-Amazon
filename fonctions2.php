<?php


function affiche_photo($nom_fichier){
	echo '<img src="'.$nom_fichier.'" width=200px height=200px border="0" />';
}

 //Affiche toutes les photos d'un article
function affiche_toutes_photos_id($id,$db_handle){
	$sql = "SELECT nom_fichier FROM photo WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$array = array();
	while($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['nom_fichier']);
	}

	for($i = 0; $i < sizeof($array); $i++){
		affiche_photo($array[$i]);
	}
}


//Affiche une image d'un article à l'aide d'un id
function apercu_image($id,$db_handle){
	$sql = "SELECT * FROM photo WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$array = array();
	while($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['nom_fichier']);
	}
	if(sizeof($array)!==0){affiche_photo("img/".$array[0]);}
	else echo "Aucune photo";
	
}

// Affiche l'aperçu d'un vêtement à l'aide d'un id
function apercu_vetement_id($id,$db_handle){
	$sql = "SELECT * FROM vetement WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$data = mysqli_fetch_assoc($result);
	apercu_image($id,$db_handle);
	echo '
<table>
<tr>
	<td><b>Nom : </b></td>
	<td>'.$data['nom'].' </td>
</tr>
<tr>
	<td><b>Description : </b></td>
	<td>'.$data['description'].' </td>
</tr>
<tr>
	<td><b>Prix : </b></td>
	<td>'.$data['prix'].' </td>
</tr>
<tr>
	<td><b>Type : </b></td>
	<td>'.$data['type'].' </td>
</tr>
<tr>
	<td><b>Sexe : </b></td>
	<td>'.$data['sexe'].' </td>
</tr>
</table><br><br><br><br>'
;
}


function page_vetements($db_handle){
	$sql = "SELECT id FROM vetement";
	$result = mysqli_query($db_handle,$sql);
	$array = array();
	while($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['id']);
	}

	for($i=0; $i<sizeof($array); $i++){
		apercu_vetement_id($array[$i],$db_handle);
	}
}

// Affiche l'aperçu d'un livre, musique ou sport & loisirs à l'aide d'un id
function apercu_article_id($id,$categorie,$db_handle){
	$sql = "SELECT * FROM $categorie WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$data = mysqli_fetch_assoc($result);
	apercu_image($id,$db_handle);
	echo '
<table>
<tr>
	<td><b>Nom : </b></td>
	<td>'.$data['nom'].' </td>
</tr>
<tr>
	<td><b>Description : </b></td>
	<td>'.$data['description'].' </td>
</tr>
<tr>
	<td><b>Prix : </b></td>
	<td>'.$data['prix'].' </td>
</tr>
</table><br><br><br><br>'
;
}

function page_articles($categorie,$db_handle){
	if($categorie=='livre'){$sql = "SELECT id FROM livre";}
	elseif ($categorie=='musique') {$sql = "SELECT id FROM musique";}
	elseif ($categorie=='sport_loisir') {$sql = "SELECT id FROM sport_loisir";}
	else {echo "PB in the code";}

	$result = mysqli_query($db_handle,$sql);
	$array = array();
	while($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['id']);
	}

	for($i=0; $i<sizeof($array); $i++){
		apercu_article_id($array[$i],$categorie,$db_handle);
	}
}





?>
