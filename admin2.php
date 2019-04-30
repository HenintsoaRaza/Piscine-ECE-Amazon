<?php

$database = "admin";

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";


$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


if (!empty($_POST)) {
    //echo '<p>Le bouton enfoncé est le bouton ';
    if (isset($_POST['Search'])) {
        if ($db_found) {
            $sql = "SELECT * FROM vendeurs";
            if ($pseudo != "") {
//on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE Pseudo LIKE '%$pseudo%'";
                if ($nom != "") {
                    $sql .= " AND Nom LIKE '%$nom%'";

                    if ($email != "") {
                        $sql .= " AND Email LIKE '%$email%'";
                    }
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
                    echo "Pseudo: " . $data['pseudo'] . "<br>";
                    echo "Nom: " . $data['nom'] . "<br>";
                    echo "Email: " . $data['email'] . "<br>";

                    echo "<br>";
                }
            }
        } else {
            echo "Database not found";
        }
        
    } 
    


    elseif (isset($_POST['Add'])) {
        if ($db_found) {
            $sql = "SELECT * FROM vendeurs";
            if ($pseudo != "") {
//on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE pseudo LIKE '%$pseudo%'";
                if ($nom != "") {
                    $sql .= " AND nom LIKE '%$nom%'";
                    if ($email != "") {
                        $sql .= " AND email LIKE '%$email%'";
                    }
                }
            }
            $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
            if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
                echo "Vendeur already exists.
                Duplicate of vendeurs are not allowed.";

            } else {
                $sql = "INSERT INTO vendeurs(pseudo, nom, email)
                VALUES('$pseudo', '$nom', '$email')";
                $result = mysqli_query($db_handle, $sql);
                echo "Add successful." . "<br>";
 //on affiche le livre ajouté
                $sql = "SELECT * FROM vendeurs";
                if ($pseudo != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE pseudo LIKE '%$pseudo%'";
                    if ($nom != "") {
                        $sql .= " AND nom LIKE '%$nom%'";

                        if ($email != "") {
                            $sql .= " AND email LIKE '%$email%'";
                        }
                    }
                }
                $result = mysqli_query($db_handle, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "Informations sur le vendeur ajouté:" . "<br>";
                    echo "Pseudo: " . $data['pseudo'] . "<br>";
                    echo "Nom: " . $data['nom'] . "<br>";
                    echo "Email: " . $data['email'] . "<br>";

                    echo "<br>";
                }
            }
        } else {
            echo "Database not found";
        }
    } 
    


    elseif (isset($_POST['Delete'])) {

        if ($db_found) {
            $sql = "SELECT * FROM vendeurs";
            if ($pseudo != "") {
//on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE Pseudo LIKE '%$pseudo%'";
                if ($nom != "") {
                    $sql .= " AND Nom LIKE '%$nom%'";

                    if ($email != "") {
                        $sql .= " AND Email LIKE '%$email%'";
                    }
                }
            }
            $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
            if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
                echo "Le vendeur n'existe pas.";
            } else {
//on trouve le livre recherché
                $sql = "DELETE FROM vendeurs WHERE pseudo = '$pseudo' ";
            
            $result = mysqli_query($db_handle, $sql);
            echo "Vendeur supprimé." . "<br>";
                    echo "<br>";
                }
            }
        } else {
            echo "Database not found";
        }
        
    } 

    else {
        // par défaut, c'est le bouton 1, même si on ne clique pas/
        echo '1';
    }
    echo '</p>';
    


?>