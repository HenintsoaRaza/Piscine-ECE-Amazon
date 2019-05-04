<?php

include("fonctions_supprimer.php");

$database = "admin";

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
<body style="background-image: url('img/page-blanche.jpg');">


<nav class="navbar navbar-expand-md">
	
 <a class="navbar-brand">
  <img src="img/newlogo.png" alt="logo">
</a>

 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon" ></span>
 </button>


  <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">

<li class="nav-item"><a class="nav-link" href="formulaireAdmin.html"> Gerer les vendeurs </a></li>
 <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 

 	Gerer les produits 
 </a>

 	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#"> Ajouter <i class="fas fa-plus" style="color: green;"></i></a>
    <a class="dropdown-item" href="gerer_produit_admin.html">Supprimer <i class="fas fa-times" style="color: red;"></i>
</a>
</div>
</li>
  <a class="btn btn-warning" href="admin.html"> Se deconnecter <i class="fa fa-power-off" aria-hidden="true"></i> </a>

 
 </ul>
 </div>
</nav>


 <header class="page-header header container-fluid" style="background-image: url('img/page-blanche.jpg');">	

 	<div class="overlay"></div>

<div class="description">
 <h1>Sports & Loisirs</h1>
</div>

<div class="container features">

 <div class="row">
 <div class="col-md-8">

<?php 
	page_articles_supprimer("sport_loisir",$db_handle);
	
?>

 </div>
</div></div>
</header>
</body>
</html>



