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
				
				$accueil = 'selected';
				
				include('php/menu.php');
			?>  
		</nav>

		<section>
			<div id="s3slider">
				<ul id="s3sliderContent">
					<li class="s3sliderImage">
						<img src="illustrations/img_slider/gis.png">
						<span>SIG</span>
					</li>
					<li class="s3sliderImage">
						<img src="illustrations/img_slider/sp.jpg">
						<span>Données spatiales</span>
					</li>
					<li class="s3sliderImage">
						<img src="illustrations/img_slider/tec.jpg">
						<span>Technologie </span>
					</li>
					<div class="clear s3sliderImage"></div>
				</ul>
			</div>
			
		</section>	
	</body>
</html>