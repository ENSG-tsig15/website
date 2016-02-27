<!DOCTYPE html>
<html>
	<head>
        <title>Master 2 TSIG de l'ENSG - Promotion 2015-2016</title>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta name="description" content="Site internet du master 2 TSIG de l'ENSG">
        <meta name="author" content="TSIG2015">

        <!-- Feuilles de style -->
        <link href="css/stylesheet.css" rel="stylesheet">

        <!-- Icône du site -->
        <link rel="icon" type="image/png" href="../illustrations/Logo-TSIG-G.png" />
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script src="js/s3Slider.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#s3slider').s3Slider({
					timeOut: 4000
				});
			})
		</script>
    </head>

	<body>
		<header>
				<!--lien du site TSIG/accueil<a href="lien du site TSIG/accueil"> </a> -->
			<img class="displayed" src="illustrations/headpage_TSIGlight.png" alt="Logo TSIG, logo ENSG, Master 2 Technologies des Systèmes d'Information"/>
		</header>

		<nav>
			<?php
				$accueil = "";
                $promo ="";
				$projets ="";
				$entreprise="";
				$contacts ="";

				$promo = 'selected';

				include('php/menu.php');
			?>
		</nav>

<nav class="feuille">

<!../* Clementine */..>
		<nav class="promo">
					<nav class="promoImage">
				 <img src="clemousse.jpg">
			</nav>

				<nav class="promoText">
					<h3> Clémentine CHASLES </h3>
					<h5> "Géographe de formation, j'ai toujours aimé les cartes. Mon expérience de cinq ans dans le géomarekting m'a fait découvrir les SIG. J'ai souhaité m'orienter alors vers la géomatique, afin d'approfondir mes compétences techniques relatives à ces logiciels que je manipulais.
Depuis le début de l'année à l'ENSG, je découvre un univers très riche que je ne soupçonnais pas ! De simple utilisatrice de SIG à géomaticienne, il y a tout un monde dont je suis ravie de faire partie aujourd'hui !".
					<a href ="https://www.linkedin.com/in/clémentine-chasles-b5471946" title ="Le profil linkedin Clementine">LinkedIn </a></h5>
				</nav>

    </nav>

<!../* Hanane */..>
		<nav class="promo">
			<nav class="promoImage">
		 		<img src="Hanane1.jpg">
			</nav>

			<nav class="promoText">
				<h3> Hanane EL-JABIRI </h3>
				<h5> Elève ingénieur en double diplôme ENSG_ EHTP . Passionnée par entrepreneuriat sociale et le développement durable. </h5>
			<h5> <a href ="https://fr.linkedin.com/in/heljabiri" title ="Le profil linkedin Hanane">LinkedIn </a></h5>
			</nav>

		</nav>

<!../* Imane */..>

		<nav class="promo">
				<nav class="promoImage">
					<img src="imane.png">
				</nav>

				<nav class="promoText">
					<h3> Imane BIH </h3>
					<h5> Informaticienne de base avec une ouverture au vaste monde de la géomatique, Je m'intéresse à tout ce qui gravite autour du web et de la cartographie.
						Je suis titulaire d'un diplome d'ingénieur en Géoinformation et d'une license professionelle des Métiers du Net. </h5>
					<h5><a href ="https://www.linkedin.com/in/imane-bih-381063b1" title ="Le profil linkedin Imane">LinkedIn </a></h5>
				</nav>

		</nav>

<!../* Maxwell */..>
		<nav class="promo">
			<nav class="promoImage">
				<img src="Maxwell1.jpg">
			</nav>

			<nav class="promoText">
			<h3> Maxwell HOUNTONHADJA </h3>
				<h5>Diplômé en Ingénierie Topographique, et titulaire d’un Master 2 en Information Géographique, je poursuis ma formation en Master 2 TSI Options Géomatique dans le but de renforcer mes compétences en développement informatique lié à la Géomatique.  </h5>
				<h5><a href ="https://www.linkedin.com/in/maxwell-francis-hountonhadja-404bb984" title ="Le profil linkedin Maxwell">LinkedIn </a></h5>
			</nav>

		</nav>

<!../* Nisrine */..>
<nav class="promo">
	<nav class="promoImage">
	<img src="Nisrine.jpg">
	</nav>

	<nav class="promoText">
		<h3> Nisrine DRISSI </h3>
			<h5> Attirée par le développement d'application web SIG, les thématiques inhérentes à la qualité
de données et passionnée de géographique. Je suis titulaire d'un Master 1 SIG et d'une licence en géographie et aménagement. </h5>
	<h5><a href ="https://fr.linkedin.com/in/nisrine-drissi-165a709b" title ="Le profil linkedin Nisrine">LinkedIn </a></h5>
	</nav>

</nav>
</nav>
	</body>
</html>
