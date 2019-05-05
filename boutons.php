
<?php



if(isset($_SESSION['email'])){
	echo '
	<li>  <a class="btn btn-warning" href="panier.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier</a> </li>
	';
	echo '
 	<li>  <a class="btn btn-warning" href="decoClient.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Déconnexion </a> </li> 
	';
}

?>