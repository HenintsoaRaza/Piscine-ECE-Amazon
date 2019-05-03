<?php

$database = "admin";

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";

$email = isset($_POST["email"])? $_POST["email"] : "";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


if (!empty($_POST)) {
    //echo '<p>Le bouton enfoncé est le bouton ';
    if (isset($_POST['Connec'])) {
        if ($db_found) {
            $sql = "SELECT * FROM vendeurs";
            if ($pseudo != "") {
//on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE Pseudo LIKE '%$pseudo%'";
                
                    if ($email != "") {
                        $sql .= " AND Email LIKE '%$email%'";
                    }
                
            }
            $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
            if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
                echo "Book not found";
            } else {
//on trouve le livre recherché
                while ($data = mysqli_fetch_assoc($result)) {
                    //echo "Pseudo: " . $data['pseudo'] . "<br>";
                    //echo "Nom: " . $data['nom'] . "<br>";
                    //echo "Email: " . $data['email'] . "<br>";

                    $_SESSION['email'] = $data['email'];
                    $_SESSION['pseudo'] = $data['pseudo'];
                    $_SESSION['Nomphoto'] = $data['Nomphoto'];

                    include("accueilvendeur.php");

                    //echo "<br>";
                    //include("formulaireAdmin.html");
                }
            }
        } else {
            echo "Database not found";
        }
        
    } 
}

?>