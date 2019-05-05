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
  <a class="btn btn-dark" href="admin.html"> Se deconnecter <i class="fa fa-power-off" aria-hidden="true"></i> </a>

 
 </ul>
 </div>

</nav>

<header class="page-header header container-fluid">	
 	<div class="overlay"></div>

 <div class="container features">
  <div class="row">
 	<div class="rectangle-ajout-produit container-fluid">



 	<h3 class="feature-title-votre-compte">Ajouter un produit :</h3> <br>



<div class="form-group">

<input  type="text" class="form-control" placeholder= "id" name="id">

</div>

<div class="form-group">

 <input type="text" class="form-control" placeholder="nomArticle" name="nomlivre">

</div>

<div class="form-group">

<input  type="text" class="form-control" placeholder= "description:" name="description">

</div>

<div class="form-group">

<input  type="text" class="form-control" placeholder= "prix:" name="prix">

</div>

<div class="form-group">

<input  type="text" class="form-control" placeholder= "quantite_vendue:" name="quantite_vendue">

</div>

<div class="form-group">

<input  type="text" class="form-control" placeholder= "NomVendeur" name="quantite_vendue">

</div>

<select class=form-control name="categorie">

 <option value="musique">Musiques</option>

 <option value="livre">Livres</option>

 <option value="sport_loisir">Sports et Loisirs</option>

 <option value="vetement">Vetements</option>

 

</select>

<br>



<input type="submit" class="btn btn-secondary btn-block" value="Ajouter" name="Add"> 

</div>

</div>

</div>

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

</body>
</html>