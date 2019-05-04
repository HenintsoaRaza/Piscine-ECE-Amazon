<?php


function affiche_photo($nom_fichier,$db_handle){

	$chaine = substr($nom_fichier, 4);

	$sql = "SELECT id FROM photo WHERE nom_fichier LIKE '$chaine' " ;

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

	echo '<a href="detail.php?id='.$data['id'].'"> <img src="'.$nom_fichier.'" class="image-cate" /></a>';

}


function affiche_photo_grand($nom_fichier){

	echo '<img src="'.$nom_fichier.'" width=400px height=400px border="0" />';

}

 //Affiche toutes les photos d'un article

function affiche_toutes_photos_id($id,$db_handle){

	$sql = "SELECT * FROM photo WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$array = array();

	while($data = mysqli_fetch_assoc($result)){

		array_push($array, $data['nom_fichier']);

	}



	for($i = 0; $i < sizeof($array); $i++){

		if(sizeof($array)!==0){affiche_photo_grand("img/".$array[$i]);}

		else echo "Aucune photo";

	}

}

function detail_vetement($id,$db_handle){

	affiche_toutes_photos_id($id,$db_handle);



	$sql = "SELECT * FROM vetement WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

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

<tr>
<td>
<br>
 <a class="btn btn-warning" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter au Panier</a> 
 <br>
 </td>

 </tr>

</table><br><br><br><br>
</div>'
;

}

// Affiche les détails et les photos d'un article de type livre, musique ou sport & loisir

function detail_article($id,$categorie,$db_handle){

	affiche_toutes_photos_id($id,$db_handle);



	$sql = "SELECT * FROM $categorie WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

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

<tr>
<td>
<br>
 <a class="btn btn-warning" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter au Panier</a> 
 <br>
 </td>

 </tr>
</table><br><br><br><br>
</div>'
;

}


//Affiche une image d'un article à l'aide d'un id

function apercu_image($id,$db_handle){

	$sql = "SELECT * FROM photo WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$array = array();

	while($data = mysqli_fetch_assoc($result)){

		array_push($array, $data['nom_fichier']);

	}

	if(sizeof($array)!==0){affiche_photo("img/".$array[0],$db_handle);}

	else echo "Aucune photo";

	

}



// Affiche l'aperçu d'un vêtement à l'aide d'un id

function apercu_vetement_id($id,$db_handle){

	$sql = "SELECT * FROM vetement WHERE id LIKE $id";

	$result = mysqli_query($db_handle,$sql);

	$data = mysqli_fetch_assoc($result);

	apercu_image($id,$db_handle);

	echo '
<div class="ecriture">
<table>

<tr>

	<td><b>Nom : </b></td>

	<td>'.$data['nom'].' </td>

</tr>
<tr>

	<td><b>Prix : </b></td>

	<td>'.$data['prix'].' </td>

</tr>
</table>
</div>'

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
<div class="ecriture">
<table>

<tr>

	<td><b>Nom : </b></td>

	<td>'.$data['nom'].' </td>

</tr>
<tr>

	<td><b>Prix : </b></td>

	<td>'.$data['prix'].' </td>

</tr>

</table><br><br><br><br>
</div>'

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