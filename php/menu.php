<?php
	$menu = '';
	$menu .= '<li><a class="' . $accueil . '" href="index.php">Accueil</a></li>';
	$menu .= '<li><a class="' . $promo . '" href="promo.php">La promo</a></li>';
	$menu .= '<li><a class="' . $projets . '" href="projets.php">Les projets</a></li>';
	$menu .= '<li><a class="' . $entreprise . '" href="entreprise.php">Ouverture professionnelle</a></li>';
	$menu .= '<li><a class="' . $contacts . '" href="contact.php">Contacts</a></li>';	
?>
<ul class="premier"><?php echo $menu; ?></ul>
