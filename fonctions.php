<?php



function affiche_photo($nom_fichier){
	echo '<img src="'.$nom_fichier.'" border="0" /> <br>';
}

function affiche_toutes_photos($tableau){

	for($i = 0; $i < sizeof($tableau); $i++){
		affiche_photo($tableau[$i]);
	}
	/*foreach ($tableau as $nom_fichier) {
		affiche_photo($nom_fichier);
	}*/
}



?>