<?php 

error_reporting(E_ALL); 
ini_set("display_errors", 1);

$database = "admin3";

$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$code_postal = isset($_POST["code_postal"])? $_POST["code_postal"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$telephone = isset($_POST["telephone"])? $_POST["telephone"] : "";










$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (!empty($_POST)) {
    if (isset($_POST['Add'])) {
        if ($db_found) {
            $sql = "SELECT * FROM client";
            
            if ($nom != "") {
                $sql .= " WHERE nom LIKE '%$nom%'";
                if ($prenom != "") {
                    $sql .= " AND prenom LIKE '%$prenom%'";

                    if ($email != "") {
                        $sql .= " AND email LIKE '%$email%'";

                        if ($mdp != "") {
                            $sql .= " AND mdp LIKE '%$mdp%'";

                            if ($adresse != "") {
                                $sql .= " AND adresse LIKE '%$adresse%'";

                                if ($ville != "") {
                                    $sql .= " AND ville LIKE '%$ville%'";

                                    if ($code_postal != "") {
                                        $sql .= " AND code_postal LIKE '%$code_postal%'";

                                        if ($pays != "") {
                                            $sql .= " AND pays LIKE '%$pays%'";

                                            if ($telephone != "") {
                                                $sql .= " AND telephone LIKE '$telephone'";

                                            }

                                        }

                                    }


                                }

                            }


                        }

                    }


                }
                
            }


            $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
            if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
                include("inscription.php");
                echo " <script>alert(\"Ce compte existe deja.\")</script>";
                ;

            } else {
                $sql = "INSERT INTO client
                VALUES('$nom', '$prenom, '$email', '$mdp', '$adresse', '$ville', '$code_postal', '$pays', '$telephone')";
                $result = mysqli_query($db_handle, $sql);

 //on affiche le livre ajouté
                $sql = "SELECT * FROM client";
                if ($nom != "") {
                    $sql .= " WHERE nom LIKE '%$nom%'";
                    if ($prenom != "") {
                        $sql .= " AND prenom LIKE '%$prenom%'";

                        if ($email != "") {
                            $sql .= " AND email LIKE '%$email%'";

                            if ($mdp != "") {
                                $sql .= " AND mdp LIKE '%$mdp%'";

                                if ($adresse != "") {
                                    $sql .= " AND adresse LIKE '%$adresse%'";

                                    if ($ville != "") {
                                        $sql .= " AND ville LIKE '%$ville%'";

                                        if ($code_postal != "") {
                                            $sql .= " AND code_postal LIKE '%$code_postal%'";

                                            if ($pays != "") {
                                                $sql .= " AND pays LIKE '%$pays%'";

                                                if ($telephone != "") {
                                                    $sql .= " AND telephone LIKE '$telephone'";

                                                }

                                            }

                                        }


                                    }

                                }


                            }

                        }


                    }

                }
                $result = mysqli_query($db_handle, $sql);
                while ($data = mysqli_fetch_assoc($result)) {
                    //echo "Informations sur le vendeur ajoute:" . "<br>";
                    //echo "Pseudo: " . $data['pseudo'] . "<br>";
                    //echo "Nom: " . $data['nom'] . "<br>";
                    //echo "Email: " . $data['email'] . "<br>";

                    //echo "<br>";
                    include("inscription.php");
                    echo " <script>alert(\"Votre compte a ete ajoute.\")</script>";
                }
            }
        } 
        else {
            echo "Database not found";
        }
    } 
}


?>