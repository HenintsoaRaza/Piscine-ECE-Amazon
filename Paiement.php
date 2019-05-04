<?php

include("fonctions2.php");

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

 	 <li class="nav-item"><a class="nav-link" href="Page_accueil_amazon.html"> <i class="fa fa-home" aria-hidden="true"></i> Retour à L'Accueil</a></li>
 

</nav>


 <header class="page-header header container-fluid">	
 	<div class="overlay"></div>

 	<h3 class="feature-title-votre-compte">Paiement :</h3> <br>

<div class="container features-paiement">

 <div class="row">
 <div class="col-md-12">
 	
 	<h4 class="feature-title-votre-paiement">Type de Paiement :</h4> <br>


<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="Visa" name="Paiement">
  <label class="custom-control-label" for="Visa"><i class="fab fa-cc-visa fa-3x" > </i></label>
</div>


<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="MasterCard" name="Paiement" checked>
  <label class="custom-control-label" for="MasterCard"><i class="fab fa-cc-mastercard fa-3x"></i></label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="AmericanExpress" name="Paiement" checked>
  <label class="custom-control-label" for="AmericanExpress"><i class="fab fa-cc-amex fa-3x"></i></label>
</div>

<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="PayPal" name="Paiement" checked>
  <label class="custom-control-label" for="PayPal"><i class="fab fa-paypal fa-3x"></i></label>
</div>

<br><br><br>
<div class="form-group">
 <h4 class="feature-title-votre-paiement">Numero de Carte :</h4><input type="number" maxlength="16" class="form-control" placeholder="NumeroCarte" name="NumeroCarte">
</div>


<div class="form-group">
 <h4 class="feature-title-votre-paiement">Nom du porteur de la Carte :</h4><input type="text" class="form-control" placeholder="Nom" name="Nom">
</div>

<div class="form-group">
 <h4 class="feature-title-votre-paiement">Date d'expiration :</h4><input type="month" min="2019-05" class="form-control" placeholder="DateExpiration" name="DateExpiration">
</div>

<div class="form-group">
 <h4 class="feature-title-votre-paiement"> Cryptogramme :</h4><input type="number" maxlength="4" class="form-control" placeholder="Cryptogramme" name="Cryptogramme">
</div>

<div class="form-group">
<a class="btn btn-success" href="#"><i class="fas fa-check"></i> Valider</a> 
</div>

<div class="form-group">
<a class="btn btn-danger" href="#"><i class="fas fa-times-circle"></i> Annuler le Paiement</a> 
</div>



</div>
</div>
</div>


</div>
</div>
</div>
</header>
</body>
</html>



