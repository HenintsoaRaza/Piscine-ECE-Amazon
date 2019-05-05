<?php

include("fonctions2.php");

$database = "admin";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

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
<body style="background-image: url('img/page-blanche.jpg');">
  <form action="coinscri.php" method="post">


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
 	<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: red;"> 

 	Categories 
 </a>

 	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="CategorieSport.php">Sport & Loisirs <i class="fa fa-bicycle" aria-hidden="true"></i></a>
    <a class="dropdown-item" href="CategorieVetements.php" style="color: red;">Vetement <i class="fa fa-shopping-bag" aria-hidden="true" style="color: red;"></i></a>
     <a class="dropdown-item" href="CategorieMusique.php">Musique <i class="fa fa-music" aria-hidden="true"></i></a>
      <a class="dropdown-item" href="CategorieLivres.php">Livres <i class="fa fa-book" aria-hidden="true"></i></a>
</div>

 </li>
 <li class="nav-item"><a class="nav-link" href="ventes flash.php"><i class="fa fa-bolt" aria-hidden="true"></i> Ventes Flash </a></li>
 <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="votreCompte.php">Votre Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="admin.php"><i class="fa fa-lock" aria-hidden="true"></i> Admin </a></li>
     <?php

if(isset($_SESSION['email'])!=""){
  echo '
  <li>  <a class="btn btn-warning" href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</a> </li>
  ';
  echo '
<li>  <a class="btn btn-dark" href="decoclient.php"><i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion</a> </li>   ';
}
?>
 
 </ul>
 </div>

</nav>


 <header class="page-header header container-fluid" style="background-image: url('img/page-blanche.jpg');"> 

  <div class="overlay"></div>



<div class="description">
 <h1>S'inscrire</h1>
</div>


  <div class="container features-compte">

 <div class="row">

<div class="col-lg-5 col-md-5 col-sm-12">

  <div class="rectangle-inscription container-fluid">



  <h3 class="feature-title-votre-compte"> S'inscrire :</h3> <br>


<div class="form-group">

<input required type="text" class="form-control" placeholder= "nom" name="nom">

</div>

<div class="form-group">

 <input required type="text" class="form-control" placeholder="prenom" name="prenom">

</div>

<div class="form-group">

<input required type="email" class="form-control" placeholder= "email" name="email">

</div>

<div class="form-group">

<input required type="password" class="form-control" placeholder= "mot de passe" name="mdp">

</div>

<div class="form-group">

<input required type="adress" class="form-control" placeholder= "Adresse" name="adresse">

</div>

<div class="form-group">

<input required type="text" class="form-control" placeholder= "Ville" name="ville">
</div>
<div class="form-group">

<input required type="number" class="form-control" placeholder= "Code Postal" name="code_postal" size="5">
</div>

<div class="form-group">

<input required type="text" class="form-control" placeholder= "Pays" name="pays">
</div>
<div class="form-group">

<input required type="number" class="form-control" placeholder= "Telephone" name="telephone" maxlenght="10">
</div>

<input type="submit" class="btn btn-secondary btn-block" value="S'inscrire" name="Add"> 

</div>

</div>

</div>

</div>

 </header>
</body>
</html>