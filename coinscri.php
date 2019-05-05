<?php 


$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$code_postal = $_POST["code_postal"];
$pays = $_POST["pays"];
$telephone = $_POST["telephone"];




if($db_found){
    //On test si le compte existe déjà
    $sql = 'SELECT * FROM client WHERE email LIKE '.$email.' ';
    $result = mysqli_query($db_handle, $sql);
    //Si le compte existe déjà
    if($result!=FALSE){
        echo 'Ce compte existe deja';
        header('location: inscription.php');
    }else{ //Si le compte n'existe pas encore, on le crée
        //On cherche le nouveau num_client pour ce compte
        $sql="SELECT MAX(num_client) as n FROM client";
        $result = mysqli_query($db_handle, $sql);
        $max=mysqli_fetch_assoc($result);
        $num_client_max=$max['n'];

        $num_client=$num_client_max+1;

        $sql = "INSERT INTO client (num_client,nom,prenom,email,mdp,adresse,ville,code_postal,pays,telephone)
                VALUES ('$num_client','$nom','$prenom','$email','$mdp','$adresse','$ville','$code_postal','$pays','$telephone')";
        mysqli_query($db_handle, $sql);
        echo $num_client.', '.$nom.', '.$prenom.', '.$email.', '.$mdp.', '.$adresse.', '.$ville.', '.$code_postal.', '.$pays.', '.$telephone;
        header('location: votreCompte.php');
    }

}
else{
    echo "Database not found";
}

?>