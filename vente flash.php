<?php

$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

include("fonctions_vente_flash.php");

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Amazon ECE</title>
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

 	 <li class="nav-item"><a class="nav-link" href="Page_accueil_amazon.html"> <i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
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
  <li class="nav-item"><a class="nav-link" style="color: red;">Ventes Flash <i class="fa fa-bolt" aria-hidden="true" style="color: red;"></i></a></li>
 <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="votre compte.html">Votre Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="admin.html">Admin <i class="fa fa-lock" aria-hidden="true"></i></a></li>
 <li  <a class="btn btn-warning" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</a> </li>
 </ul>
 </div>

</nav>


 <header class="page-header header container-fluid">	
 	<div class="overlay"></div>

<div class="description">
 <h1>LES VENTES FLASH DU MOMENT!</h1>
</div>

<div class="container features">

 <div class="row">
 <div class="col-md-8">

 	<br><br><br><br><br><br><br>
 	<h1> Categorie Sport & Loisirs </h1>
 	<?php afficher_top_produit('sport_loisir',$db_handle); ?>
 	<h1> Categorie Vetement </h1>
 	<?php afficher_top_produit('vetement',$db_handle); ?>
 	<h1> Categorie Musique </h1>
 	<?php afficher_top_produit('musique',$db_handle); ?>
 	<h1> Categorie Livre </h1>
	<?php afficher_top_produit('livre',$db_handle); ?>
 </div>
</div></div>
</header>
</body>
</html>
