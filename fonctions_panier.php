<?php


function affiche_photo($nom_fichier,$db_handle){
	$chaine = substr($nom_fichier, 4);
	$sql = "SELECT id FROM photo WHERE nom_fichier LIKE '$chaine' " ;
	$result = mysqli_query($db_handle,$sql);
	$data = mysqli_fetch_assoc($result);
	
	echo '<a href="detail.php?id='.$data['id'].'"> <img src="'.$nom_fichier.'" width=200px height=200px border="0" /></a>';
}

function affiche_photo_grand($nom_fichier){
	echo '<img src="'.$nom_fichier.'" width=400px height=400px border="0" />';
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

// Affiche l'aperçu d'un article quelconque à l'aide d'un id
function apercu_article_id($id,$num_client,$db_handle){
	$code = floor($id/100000);
	$categorie = '';
	if($code==1){$categorie ='musique';}
		elseif ($code==2) {$categorie ='vetement';}
		elseif ($code==3) {$categorie ='sport_loisir';}
		elseif ($code==4) {$categorie ='livre';}
	$sql = "SELECT panier.id, $categorie.nom, $categorie.prix, panier.quantite FROM $categorie,panier WHERE $categorie.id=panier.id AND $categorie.id=$id";
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
	<td><b>Prix : </b></td>
	<td>'.$data['prix'].' € </td>
</tr>
<tr>
	<td><b>Quantite : </b></td>
	<td>'.$data['quantite'].' </td>
</tr>
</table>'
;
}


function afficher_element_panier($data,$db_handle){
	$id = $data['id'];
	$num_client = $data['num_client'];
	apercu_article_id($id,$num_client,$db_handle);

	//plus
	echo '<a href="panier.php?id='.$id.'&num_client='.$num_client.'&action=plus">
	<img src="img/plus.jpg" width=25px height=25px /></a>'; 
	//moins
	echo '<a href="panier.php?id='.$id.'&num_client='.$num_client.'&action=moins">
	<img src="img/moins.jpg" width=25px height=25px /></a><br>';
	//supprimer
	echo '<a href="panier.php?id='.$id.'&num_client='.$num_client.'&action=supprimer">
	<button> Supprimer </button></a><br><br><br> ';
}

function afficher_addition($num_client, $db_handle){
	$addition=0.0;
	$sql = "SELECT * FROM panier";
	$result=mysqli_query($db_handle,$sql);
	while ($data = mysqli_fetch_assoc($result)) {
		$addition += $data['prix']*$data['quantite'];
	}
	echo '<h1> TOTAL : '.$addition.' €</h1>';
}

function afficher_panier($num_client, $db_handle){
	$sql = "SELECT * FROM panier WHERE num_client = $num_client";
	$result = mysqli_query($db_handle,$sql);
	while ($data = mysqli_fetch_assoc($result)) {
		afficher_element_panier($data,$db_handle);
	}
	afficher_addition($num_client, $db_handle);
}

function maj_panier($id,$num_client,$action, $db_handle){
	if($action=='plus'){
		$sql = "UPDATE panier 
					SET quantite=quantite+1
					WHERE num_client = $num_client AND id = $id";
		$result = mysqli_query($db_handle,$sql);

	} elseif($action=='moins'){
		$sql = "UPDATE panier SET quantite=quantite-1 WHERE num_client = $num_client AND id = $id";
		$result = mysqli_query($db_handle,$sql);

	}elseif($action=='supprimer'){
		$sql = "DELETE FROM panier WHERE num_client = $num_client AND id = $id";
		$result = mysqli_query($db_handle,$sql);

	}else {echo "Pb de parametres";}

	$sql = "DELETE FROM panier WHERE quantite=0";
	$result = mysqli_query($db_handle,$sql);

}



?>