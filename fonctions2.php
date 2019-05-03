<?php


function affiche_photo($nom_fichier){
	echo '<img src="'.$nom_fichier.'" width=200px height=200px border="0" />';
}


//Affiche une image d'un article à l'aide d'un id
function apercu_image($id,$db_handle){
	$sql = "SELECT nom_fichier FROM photo WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$array = array();
	while($data = mysqli_fetch_assoc($result)){
		array_push($array, $data['nom_fichier']);
	}
	affiche_photo("img/".$array[0]);
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
</table>'
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




//apercu_vetement_id('200001',$db_handle);



?>