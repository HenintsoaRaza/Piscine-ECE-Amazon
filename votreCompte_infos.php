<?php

include("fonctions2.php");

$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

session_start();

if(isset($_SESSION['email'])=="" || !isset($_SESSION['email'])){
	header("votreCompte.php");
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Votre Compte</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/all.min.css">
 <link rel="stylesheet" type="text/css" href="CssAmazon.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<script type="text/javascript">
 $(document).ready(function(){
 $('.header').height($(window).height());
 });
</script>


</head>
<body>

<nav class="navbar navbar-expand-md">
	
 <a class="navbar-brand">
  <img src="img/newlogo.png" alt="logo">
</a>

 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon" ></span>
 </button>


 <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">

 	 <li class="nav-item"><a class="nav-link" href="Page_accueil_amazon.php"> <i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>

 <li class="nav-item dropdown">
 	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 

 	Categories 
 </a>

	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="CategorieSport.php">Sport & Loisirs <i class="fa fa-bicycle" aria-hidden="true"></i></a>
    <a class="dropdown-item" href="CategorieVetements.php">Vetement <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
     <a class="dropdown-item" href="CategorieMusique.php">Musique <i class="fa fa-music" aria-hidden="true"></i></a>
      <a class="dropdown-item" href="CategorieLivres.php">Livres <i class="fa fa-book" aria-hidden="true"></i></a>
</div>

 </li>
 <li class="nav-item"><a class="nav-link" href="ventes flash.php"><i class="fa fa-bolt" aria-hidden="true"></i> Ventes Flash </a></li>
 <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="#" style="color: red;">Votre Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="admin.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin </a></li>

 <li><?php

if(isset($_SESSION['email'])!=""){
	echo '
	<li>  <a class="btn btn-warning" href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</a> </li>
	';
	echo '
<li>  <a class="btn btn-dark" href="decoclient.php"><i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion</a> </li> 
	';
}
?>
</li>
 


 </ul>
 </div>

</nav>

<header class="page-header header container-fluid">	
 	<div class="overlay"></div>



<div class="container features-compte">




<h1> Informations de votre compte </h1>

<br><br>
<h4> <b>Nom : </b><?php echo $_SESSION['nom'].'<br><br>'; ?></h4>
<h4> <b>Prenom : </b><?php echo $_SESSION['prenom'].'<br><br>'; ?></h4>
<h4> <b>Adresse : </b><?php echo $_SESSION['adresse'].', '.$_SESSION['ville'].' '.$_SESSION['code_postal'].', '.$_SESSION['pays'].'<br><br>'; ?></h4>
<h4> <b>Telephone : </b><?php echo $_SESSION['telephone'].'<br><br>'; ?></h4>

</div>
</header>



<footer class="page-footer">
 <div class="container">
 <div class="row">
 <div class="col-lg-8 col-md-8 col-sm-12">
 <h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>
 <p>
Merci pour votre visite sur le site !
 </p>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h6 class="text-uppercase font-weight-bold">Contact</h6>
 <p>
 37, quai de Grenelle, 75015 Paris, France <br>
 info@webDynamique.ece.fr <br>
 +33 01 02 03 04 05 <br>
 +33 01 03 02 05 04
 </p>
 </div>
 </div>
 <div class="footer-copyright text-center">&copy; 2019 Copyright | Droit d'auteur: webDynamique.ece.fr</div>
</footer>


</body></html>