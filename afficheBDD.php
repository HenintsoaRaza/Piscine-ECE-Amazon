<?php

$database = "ece_amazon_bdd";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if($db_found){

	// affiche table Photo
	$sql = "SELECT * FROM photo";
	$result = mysqli_query($db_handle, $sql);
	
	echo "==========Table photo========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>nom_fichier :</b> " . $data['nom_fichier'] . '<br>';
		echo "<b>id :</b> " . $data['id'] . '<br>';
		echo "<br>";
	}

	// affiche table Livre
	$sql = "SELECT * FROM livre";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table livre========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>id :</b> " . $data['id'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>description :</b> " . $data['description'] . '<br>';
		echo "<b>prix : </b>" . $data['prix'] . '<br>';
		echo "<b>quantite_vendue :</b> " . $data['quantite_vendue'] . '<br>';
		echo "<b>vendeur :</b> " . $data['vendeur'] . '<br>';
		echo "<br>";

	}

	// affiche table musique
	$sql = "SELECT * FROM musique";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table musique========== <br>";	

	while ($data = mysqli_fetch_assoc($result)){

		echo "<b>id :</b> " . $data['id'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>description :</b> " . $data['description'] . '<br>';
		echo "<b>prix :</b> " . $data['prix'] . '<br>';
		echo "<b>quantite_vendue :</b> " . $data['quantite_vendue'] . '<br>';
		echo "<b>vendeur : </b>" . $data['vendeur'] . '<br>';
		echo "<br>";

	}

	// affiche table sport_loisir
	$sql = "SELECT * FROM sport_loisir";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table sport_loisir========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>id : </b>" . $data['id'] . '<br>';
		echo "<b>nom :</b> " . $data['nom'] . '<br>';
		echo "<b>description :</b> " . $data['description'] . '<br>';
		echo "<b>prix : </b>" . $data['prix'] . '<br>';
		echo "<b>quantite_vendue : </b>" . $data['quantite_vendue'] . '<br>';
		echo "<b>vendeur : </b>" . $data['vendeur'] . '<br>';
		echo "<br>";

	}


	// affiche table vetement
	$sql = "SELECT * FROM vetement";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table vetement========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>id : </b>" . $data['id'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>description : </b>" . $data['description'] . '<br>';
		echo "<b>prix : </b>" . $data['prix'] . '<br>';
		echo "<b>quantite_vendue : </b>" . $data['quantite_vendue'] . '<br>';
		echo "<b>vendeur : </b>" . $data['vendeur'] . '<br>';
		echo "<b>type : </b>" . $data['type'] . '<br>';
		echo "<b>sexe :</b> " . $data['sexe'] . '<br>';
		echo "<br>";

	}

	// affiche table admin
	$sql = "SELECT * FROM admin";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table admin========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>pseuo : </b>" . $data['pseudo'] . '<br>';
		echo "<b>email : </b>" . $data['email'] . '<br>';
		echo "<b>mdp : </b>" . $data['mdp'] . '<br>';
		echo "<br>";
	}

	// affiche table vendeur
	$sql = "SELECT * FROM vendeur";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table vendeur========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>pseudo : </b>" . $data['pseudo'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>email : </b>" . $data['email'] . '<br>';
		echo "<b>photo : </b>" . $data['photo'] . '<br>';
		echo "<b>image : </b>" . $data['image'] . '<br>';
		echo "<br>";
	}

	// affiche table client
	$sql = "SELECT * FROM client";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table client========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>num_client : </b>" . $data['num_client'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>prenom : </b>" . $data['prenom'] . '<br>';
		echo "<b>email :</b> " . $data['email'] . '<br>';
		echo "<b>mdp : </b>" . $data['mdp'] . '<br>';
		echo "<b>adresse : </b>" . $data['adresse'] . '<br>';
		echo "<b>ville : </b>" . $data['ville'] . '<br>';
		echo "<b>code_postal : </b>" . $data['code_postal'] . '<br>';
		echo "<b>pays : </b>" . $data['pays'] . '<br>';
		echo "<b>telephone : </b>" . $data['telephone'] . '<br>';
		echo "<br>";
	}

	// affiche table panier
	$sql = "SELECT * FROM panier";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table panier========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>id :</b> " . $data['id'] . '<br>';
		echo "<b>num_client : </b>" . $data['num_client'] . '<br>';
		echo "<b>categorie :</b> " . $data['categorie'] . '<br>';
		echo "<b>quantite : </b>" . $data['quantite'] . '<br>';
		echo "<br>";
	}

	// affiche table paiement
	$sql = "SELECT * FROM paiement";
	$result = mysqli_query($db_handle, $sql);

	echo "==========Table paiement========== <br>";

	while ($data = mysqli_fetch_assoc($result)){
		
		echo "<b>num_carte : </b>" . $data['num_carte'] . '<br>';
		echo "<b>num_client : </b>" . $data['num_client'] . '<br>';
		echo "<b>type : </b>" . $data['type'] . '<br>';
		echo "<b>nom : </b>" . $data['nom'] . '<br>';
		echo "<b>cvv : </b>" . $data['cvv'] . '<br>';
		echo "<b>date_exp : </b>" . $data['date_exp'] . '<br>';
		echo "<br>";
	}
} else {
	echo 'BD not found';
}

?>
