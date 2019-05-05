<?php

$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$id_supp = $_POST['id'];

//On récupère sa catégorie
$code=floor($id_supp/100000);
$categorie='';
if($code==1){$categorie='musique';}
	elseif ($code==2) {$categorie='vetement';}
	elseif ($code==3) {$categorie='sport_loisir';}
	elseif ($code==4) {$categorie='livre';}
	else{echo "Pb de categorie";}

//suppr article dans categorie
$sql="DELETE FROM $categorie WHERE id = $id_supp";
$result = mysqli_query($db_handle,$sql);
if($result){
	header('location: gerer_produit_admin.html');
}else{echo 'Pb : article non supprime';}

//suppr photo
$sql="DELETE FROM photo WHERE id = $id_supp";
$result = mysqli_query($db_handle,$sql);
if($result){
	header('location: gerer_produit_admin.html');
}else{echo 'Pb : photo non supprime';}


//suppr article dans panier
$sql="DELETE FROM panier WHERE id = $id_supp";
$result = mysqli_query($db_handle,$sql);
if($result){
	header('location: gerer_produit_admin.html');
}else{echo 'Pb : panier non supprime';}



?>