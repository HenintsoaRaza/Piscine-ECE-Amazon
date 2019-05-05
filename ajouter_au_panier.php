<?php
$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

session_start();

$id=$_POST['id'];	

if ($db_found) {


	$code=floor($id/100000);
	$categorie='';
	if($code==1){$categorie='musique';}
		elseif ($code==2) {$categorie='vetement';}
		elseif ($code==3) {$categorie='sport_loisir';}
		elseif ($code==4) {$categorie='livre';}

	//Si une session est ouverte
	if(isset($_SESSION['email'])){
		$num_client=$_SESSION['num_client'];
		//On cherche toutes les infos de l'article possédant l'id
		$sql = "SELECT * FROM $categorie WHERE id = $id";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)){
			echo $data['nom'].'<br>';
			//On regarde si l'article est déjà dans le panier
			$sql2="SELECT * FROM panier WHERE id LIKE $id";
			$result=mysqli_query($db_handle, $sql2);
			//Si oui, on incrémente la quantité 
			if(mysqli_fetch_assoc($result)){
				$sql3 = "UPDATE panier SET quantite=quantite+1 WHERE id = $id AND num_client = $num_client";
				$result = mysqli_query($db_handle, $sql3);
				echo("Et un article de plus"); 
				header('location: detail.php?id='.$id.'');
				//Sinon on insère un nouvel article 
			}else {
				$prix = $data['prix'];
				$sql = "INSERT INTO panier (id,num_client,categorie,quantite,prix) 
						VALUES ('$id','$num_client','$categorie',1,'$prix')";
				mysqli_query($db_handle, $sql);
				echo("Le nouvel article a ete rajoute");
				header('location: detail.php?id='.$id.'');
			}
			
		}

	}else echo "Vous n'etes pas connectes";

} else {
    echo "Database not found";
}




?>