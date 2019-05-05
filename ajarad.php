<?php

$database = "admin3";

$id = isset($_POST["id"])? $_POST["id"] : "";
$nomlivre = isset($_POST["nomlivre"])? $_POST["nomlivre"] : "";
$name = isset($_POST["nom_vendeur"])? $_POST["nom_vendeur"] : "";
$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$quantite_vendue = isset($_POST["quantite_vendue"])? $_POST["quantite_vendue"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);



if (!empty($_POST)) {


	if (isset($_POST['Add'])) {
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
                    include("formulaireAjoutProduit.php");
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
                       include("formulaireAjoutProduit.php");
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
                    include("formulaireAjoutProduit.php");
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
                        include("formulaireAjoutProduit.php");
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
                    include("formulaireAjoutProduit.php");
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
                        include("formulaireAjoutProduit.php");
                    echo "<script>alert(\"Produit ajouté.\")</script>";
                        
                    }
                }
            }
            
            
        } else {
            echo "Database not found";
        }
        
    }

}

?>