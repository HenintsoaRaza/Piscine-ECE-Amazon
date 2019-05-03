<?php

include("fonctions2.php");

$database = "ece_amazon_bdd";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

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
  <img src="newlogo.png" alt="logo">
</a>

 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon" ></span>
 </button>


 <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">

 	 <li class="nav-item"><a class="nav-link" href="Page_accueil_amazon.html"> <i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
 <li class="nav-item dropdown">
 	<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: red;"> 

 	Categories 
 </a>

 	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="CategorieSport.html">Sport & Loisirs <i class="fa fa-bicycle" aria-hidden="true"></i></a>
    <a class="dropdown-item" style="color: red;">Vetement <i class="fa fa-shopping-bag" aria-hidden="true" style="color: red;"></i></a>
     <a class="dropdown-item" href="CategorieMusique.html">Musique <i class="fa fa-music" aria-hidden="true"></i></a>
      <a class="dropdown-item" href="CategorieLivres.html">Livres <i class="fa fa-book" aria-hidden="true"></i></a>
</div>

 </li>
  <li class="nav-item"><a class="nav-link" href="ventes flash.html">Ventes Flash <i class="fa fa-bolt" aria-hidden="true"></i></a></li>
 <li class="nav-item"><a class="nav-link" href="vendre.html">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="votre compte.html">Votre Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="admin.html">Admin <i class="fa fa-lock" aria-hidden="true"></i></a></li>
 <li  <a class="btn btn-warning" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</a> </li>
 </ul>
 </div>

</nav>


 <header class="page-header header container-fluid">	
 	<div class="overlay"></div>

<div class="description">
 <h1>Vetements</h1>
</div>

<div class="container features">

 <div class="row">
 <div class="col-lg-4 col-md-4 col-sm-12">

<?php
	if($db_found){
		page_vetements($db_handle);
	} else {
		echo 'BD not found';
	}
?>



 </div>
</div></div>
</header>
</body>
</html>



