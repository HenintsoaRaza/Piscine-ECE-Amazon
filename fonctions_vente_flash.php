<?php

include("fonctions2.php");

// Affiche l'aperçu d'un livre, musique ou sport & loisirs à l'aide d'un id
function apercu_produit_id($id,$categorie,$db_handle){
	$sql = "SELECT * FROM $categorie WHERE id LIKE $id";
	$result = mysqli_query($db_handle,$sql);
	$data = mysqli_fetch_assoc($result);
	apercu_image($id,$db_handle);
	if($categorie=='vetement'){
		echo '
			<div class="ecriture">
			<table>
			<tr>
				<td><b>Nom : </b></td>
				<td>'.$data['nom'].' </td>
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
				<td><b>Prix : </b></td>
				<td>'.$data['prix'].' €</td>
			</tr>
			</table>
			</div><br><br><br><br>'
			;
	}else {
		echo '
			<div class="ecriture">
			<table>
			<tr>
				<td><b>Nom : </b></td>
				<td>'.$data['nom'].' </td>
			</tr>
			<tr>
				<td><b>Prix : </b></td>
				<td>'.$data['prix'].' €</td>
			</tr>
			</table>
			</div><br><br><br><br>'
			;
	}

}


function afficher_top_produit($categorie,$db_handle){
	$sql="SELECT  id,nom, prix
			FROM   $categorie
			WHERE  quantite_vendue=(SELECT MAX(quantite_vendue)
        	FROM $categorie)
          ";
    $result = mysqli_query($db_handle,$sql);
    while($data = mysqli_fetch_assoc($result)){
    	$id=$data['id'];
    	apercu_produit_id($id,$categorie,$db_handle);
    }
    
}


?>