<?php

session_start();

if(isset($_SESSION['email'])){
	header('location: votreCompte_infos.php');
}else{
	header('location: votreCompte_co.php');

}


?>
