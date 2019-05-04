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

	<form action="acven.php" method="post">
<nav class="navbar navbar-expand-md">
 <a class="navbar-brand">

  <img src="img/newlogo.png" alt="logo">

</a>
 <div class="collapse navbar-collapse" id="main-navigation">



 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon" ></span>
 </button>


 <ul class="navbar-nav">
 <li>  <img src="<?php echo $_SESSION['photo']; ?>" height=80px>
  <input type="submit" class="btn btn-secondary btn-block" value="<?php echo $_SESSION['nom']; ?>"" name="Dec"></li>
   
</ul>
</div>
</nav>


 <header class="page-header header container-fluid" style="background-image: url('<?php echo $_SESSION['image']; ?>');">	
 	<div class="overlay"></div>


 	<div class="container features-compte">
 <div class="row">
<div class="col-lg-5 col-md-5 col-sm-12">
	<div class="rectangle-formulaire container-fluid">

 	<h3 class="feature-title-votre-compte">Ajouter ou supprimer :</h3> <br>

<div class="form-group">
<input  type="text" class="form-control" placeholder= "pseudo" name="pseudo">
</div>
<div class="form-group">
 <input type="text" class="form-control" placeholder="nom" name="nom">
</div>
<div class="form-group">
<input  type="email" class="form-control" placeholder= "email:" name="email">
</div>

<input type="submit" class="btn btn-secondary btn-block" value="Ajouter" name="Add"> 
<input type="submit" class="btn btn-secondary btn-block" value="Supprimer" name="Delete">
<input type="submit" class="btn btn-secondary btn-block" value="Rechercher" name="Search">

</div>
</div>
</div>
</div>


 </header>

</body>

</html>