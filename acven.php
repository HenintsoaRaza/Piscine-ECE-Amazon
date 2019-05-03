<?php

$database = "admin";

session_start();




$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (!empty($_POST)) {
    //echo '<p>Le bouton enfoncé est le bouton ';
    if (isset($_POST['Dec'])) {

                    session_destroy();

        

                    include("vendre.php");

                    //echo "<br>";
                    //include("formulaireAdmin.html");
                
        
        
    } 
}

?>