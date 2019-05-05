<?php

$database = "ece_amazon_bdd";


$email = isset($_POST["email"])? $_POST["email"] : "";

$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

session_start();

if (!empty($_POST)) {
    //echo '<p>Le bouton enfoncé est le bouton ';
    if (isset($_POST['connexion'])) {
        if ($db_found) {
            $sql = "SELECT * FROM client";
            if ($email != "") {
//on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE email LIKE '%$email%'";
                
                    if ($mdp != "") {
                        $sql .= " AND mdp LIKE '%$mdp%'";
                    }
                
            }
            $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
            if (mysqli_num_rows($result) == 0) {
                header('location: votreCompte.php');
                //echo "pb de connection";
            } else {
            	$sql = "SELECT * FROM client WHERE email LIKE '%$email%'";
            	$result = mysqli_query($db_handle, $sql);
            	while ($data = mysqli_fetch_assoc($result)){
            		$_SESSION['num_client'] = $data['num_client'];
            		$_SESSION['nom'] = $data['nom'];
            		$_SESSION['email']= $data['email'];
            		$_SESSION['mdp']= $data['mdp'];
            		$_SESSION['prenom'] = $data['prenom'];
            		$_SESSION['adresse'] = $data['adresse'];
            		$_SESSION['ville'] = $data['ville'];
            		$_SESSION['code_postal'] = $data['code_postal'];
            		$_SESSION['telephone'] = $data['telephone'];

            		
            		//echo $data['num_client'];
            	}
                header('location: panier.php');
            }
        } else {
            echo "Database not found";
        }
        
    } 
}

?>

