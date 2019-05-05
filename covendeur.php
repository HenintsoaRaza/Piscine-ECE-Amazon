<?php

session_start();


$database = "admin3";



$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$id = isset($_POST["id"])? $_POST["id"] : "";
$nomlivre = isset($_POST["nomlivre"])? $_POST["nomlivre"] : "";
$name = $_SESSION['pseudo'];
$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$quantite_vendue = isset($_POST["quantite_vendue"])? $_POST["quantite_vendue"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$type = isset($_POST["type"])? $_POST["type"] : "";
$sexe = isset($_POST["sexe"])? $_POST["sexe"] : "";




$db_handle = mysqli_connect('localhost', 'root', '');


$db_found = mysqli_select_db($db_handle, $database);





if (!empty($_POST)) {

    //echo '<p>Le bouton enfoncé est le bouton ';

    if (isset($_POST['Connec'])) {

        if ($db_found) {

            $sql = "SELECT * FROM vendeur";

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
                    $_SESSION['image'] = $data['image'];
                    $_SESSION['photo'] = $data['photo'];
                    $_SESSION['pseudo'] = $data['pseudo'];
                    include("accueilvendeur.php");



                    //echo "<br>";

                    //include("formulaireAdmin.html");

                }

            }

        } else {

            echo "Database not found";

        }

        

    } 


    elseif (isset($_POST['Add'])) {



        if ($db_found) {

            if ($categorie == "musique"){

                $sql = "SELECT * FROM musique";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";
                        if ($description != "") {
                            $sql .= " AND description LIKE '%$description%'";
                            if ($prix != "") {
                                $sql .= " AND prix LIKE '%$prix%'";
                                if ($quantite_vendue != "") {
                                    $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                }
                            }
                        }
                    }


                    
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit existe deja.\")</script>";

                } else {
                    $sql = "INSERT INTO musique(id, nom, vendeur, description, prix, quantite_vendue)
                    VALUES('$id', '$nomlivre', '$name', '$description', '$prix', '$quantite_vendue')";
                    $result = mysqli_query($db_handle, $sql);
                    //echo "Add successful." . "<br>";
 //on affiche le livre ajouté
                    $sql = "SELECT * FROM musique";
                    if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                        $sql .= " WHERE id LIKE '%$id%'";
                        if ($nomlivre != "") {
                            $sql .= " AND nom LIKE '%$nomlivre%'";
                            if ($description != "") {
                                $sql .= " AND description LIKE '%$description%'";
                                if ($prix != "") {
                                    $sql .= " AND prix LIKE '%$prix%'";
                                    if ($quantite_vendue != "") {
                                        $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                    }
                                }
                            }
                        }



                    }
                    $result = mysqli_query($db_handle, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                       echo "<script>alert(\"Musique ajoutée.\")</script>";
                       include("accueilvendeur.php");
                    }
                }

            }

            elseif ($categorie == "livre"){

                $sql = "SELECT * FROM livre";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";
                        if ($description != "") {
                            $sql .= " AND description LIKE '%$description%'";
                            if ($prix != "") {
                                $sql .= " AND prix LIKE '%$prix%'";
                                if ($quantite_vendue != "") {
                                    $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                }
                            }
                        }
                    }


                    
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit existe deja.\")</script>";

                } else {
                    $sql = "INSERT INTO livre(id, nom, vendeur, description, prix, quantite_vendue)
                    VALUES('$id', '$nomlivre', '$name', '$description', '$prix', '$quantite_vendue')";
                    $result = mysqli_query($db_handle, $sql);
                    echo "Add successful." . "<br>";
 //on affiche le livre ajouté
                    $sql = "SELECT * FROM livre";
                    if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                        $sql .= " WHERE id LIKE '%$id%'";
                        if ($nomlivre != "") {
                            $sql .= " AND nom LIKE '%$nomlivre%'";
                            if ($description != "") {
                                $sql .= " AND description LIKE '%$description%'";
                                if ($prix != "") {
                                    $sql .= " AND prix LIKE '%$prix%'";
                                    if ($quantite_vendue != "") {
                                        $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                    }
                                }
                            }
                        }



                    }
                    $result = mysqli_query($db_handle, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                        include("accueilvendeur.php");
                    echo "<script>alert(\"Produit ajouté.\")</script>";
                    }
                }

            }

            elseif ($categorie == "sport_loisir"){

                $sql = "SELECT * FROM sport_loisir";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";
                        if ($description != "") {
                            $sql .= " AND description LIKE '%$description%'";
                            if ($prix != "") {
                                $sql .= " AND prix LIKE '%$prix%'";
                                if ($quantite_vendue != "") {
                                    $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                }
                            }
                        }
                    }


                    
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) != 0) {
//le livre est déjà dans la BDD
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit existe deja.\")</script>";

                } else {
                    $sql = "INSERT INTO sport_loisir(id, nom, vendeur, description, prix, quantite_vendue)
                    VALUES('$id', '$nomlivre', '$name', '$description', '$prix', '$quantite_vendue')";
                    $result = mysqli_query($db_handle, $sql);
                    //echo "Add successful." . "<br>";
 //on affiche le livre ajouté
                    $sql = "SELECT * FROM sport_loisir";
                    if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                        $sql .= " WHERE id LIKE '%$id%'";
                        if ($nomlivre != "") {
                            $sql .= " AND nom LIKE '%$nomlivre%'";
                            if ($description != "") {
                                $sql .= " AND description LIKE '%$description%'";
                                if ($prix != "") {
                                    $sql .= " AND prix LIKE '%$prix%'";
                                    if ($quantite_vendue != "") {
                                        $sql .= " AND quantite_vendue LIKE '%$quantite_vendue%'";
                                    }
                                }
                            }
                        }



                    }
                    $result = mysqli_query($db_handle, $sql);
                    while ($data = mysqli_fetch_assoc($result)) {
                        include("accueilvendeur.php");
                    echo "<script>alert(\"Produit ajouté.\")</script>";

                        
                    }
                }

            }


            



            
        } else {
            echo "Database not found";
        }

        
    }

    elseif (isset($_POST['Dec'])) {

        session_destroy();



        include("vendre.php");

                    //echo "<br>";
                    //include("formulaireAdmin.html");



    } 


    elseif (isset($_POST['Delete'])) {

        if ($db_found) {

            if ($categorie == "musique"){


                $sql = "SELECT * FROM musique";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";

                        if ($prix != "") {
                            $sql .= " AND prix LIKE '%$prix%'";
                        }
                    }
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit n'existe pas.\")</script>";
                } else {
//on trouve le livre recherché
                    $sql = "DELETE FROM musique WHERE id = '$id' ";

                    $result = mysqli_query($db_handle, $sql);
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Musique supprimée.\")</script>";
                    
                   // echo "Vendeur supprimé." . "<br>";
                    //echo "<br>";
                }
            }

            elseif ($categorie == "sport_loisir"){


                $sql = "SELECT * FROM sport_loisir";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";

                        if ($prix != "") {
                            $sql .= " AND prix LIKE '%$prix%'";
                        }
                    }
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit n'existe pas.\")</script>";
                } else {
//on trouve le livre recherché
                    $sql = "DELETE FROM sport_loisir WHERE id = '$id' ";

                    $result = mysqli_query($db_handle, $sql);
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Produit supprimée.\")</script>";
                    
                }
            }

            elseif ($categorie == "livre"){


                $sql = "SELECT * FROM livre";
                if ($id != "") {
//on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE id LIKE '%$id%'";
                    if ($nomlivre != "") {
                        $sql .= " AND nom LIKE '%$nomlivre%'";

                        if ($prix != "") {
                            $sql .= " AND prix LIKE '%$prix%'";
                        }
                    }
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
                if (mysqli_num_rows($result) == 0) {
//le livre recherché n'existe pas
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Ce produit n'existe pas.\")</script>";
                } else {
//on trouve le livre recherché
                    $sql = "DELETE FROM livre WHERE id = '$id' ";

                    $result = mysqli_query($db_handle, $sql);
                    include("accueilvendeur.php");
                    echo "<script>alert(\"Produit supprimée.\")</script>";
                }
            }

        }

    } else {
        echo "Database not found";
    }

} 














?>