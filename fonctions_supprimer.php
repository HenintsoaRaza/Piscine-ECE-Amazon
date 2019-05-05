<?php

function affiche_photo_supprimer($nom_fichier,$db_handle){

	$chaine = substr($nom_fichier, 4);

	$sql = "SELECT id FROM photo WHERE nom_fichier LIKE '$chaine' " ;

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

	echo '<img src="'.$nom_fichier.'" class="image-cate" /></a>';

}



function apercu_image_supprimer($id,$db_handle){

	$sql = "SELECT * FROM photo WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$array = array();

	while($data = mysqli_fetch_assoc($result)){

		array_push($array, $data['nom_fichier']);

	}

	if(sizeof($array)!==0){affiche_photo_supprimer("img/".$array[0],$db_handle);}

	else echo "Aucune photo";
}




function apercu_vetement_id_supprimer($id,$db_handle){

	$sql = "SELECT * FROM vetement WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

	apercu_image_supprimer($id,$db_handle);

	echo '
<div class="ecriture-detail">
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

	<td><b>Vendeur : </b></td>

	<td>'.$data['vendeur'].' </td>

</tr>

<tr>

	<td><b>Type : </b></td>

	<td>'.$data['type'].' </td>

</tr>

<tr>

	<td><b>Sexe : </b></td>

	<td>'.$data['sexe'].' </td>

</tr>

<tr>

	<td><b>Vendus : </b></td>

	<td>'.$data['quantite_vendue'].' </td>

</tr>
</table>
</div>'
;

}


function apercu_article_id_supprimer($id,$categorie,$db_handle){

	$sql = "SELECT * FROM $categorie WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

	apercu_image_supprimer($id,$db_handle);

	echo '
<div class="ecriture-detail">
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

	<td><b>Vendeur : </b></td>

	<td>'.$data['vendeur'].' </td>

</tr>

<tr>

	<td><b>Vendus : </b></td>

	<td>'.$data['quantite_vendue'].' </td>

</tr>
</table>
</div>'

;

}



function page_articles_supprimer($categorie,$db_handle){

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
		$id_supp = $array[$i];
		apercu_article_id_supprimer($id_supp,$categorie,$db_handle);

		echo '
		<div class= "booto">
		<form action="supprimer_article_admin.php" method="POST">
			<input type="hidden" value='.$id_supp.' name=id>
		  <input class="btn btn-danger" type="submit" value="Supprimer">
		  </form>
		 </div>
		';

	}
}


function page_vetements_supprimer($db_handle){

	$sql = "SELECT id FROM vetement";

	$result = mysqli_query($db_handle,$sql);

	$array = array();

	while($data = mysqli_fetch_assoc($result)){

		array_push($array, $data['id']);

	}



	for($i=0; $i<sizeof($array); $i++){
		$id_supp = $array[$i];
		apercu_vetement_id_supprimer($array[$i],$db_handle);

		echo '
		<div class= "booto">
		<form action="supprimer_article_admin.php" method="POST">
			<input type="hidden" value='.$id_supp.' name=id>
		  <input class="btn btn-danger" type="submit" value="Supprimer">
		  </form>
		 </div>
		';

	}

}



?>
