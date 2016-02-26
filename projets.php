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
				
				$projets = 'selected';
				
				include('php/menu.php');
			?>  
		</nav>

		<section>
					<h1>Nos projets</h1>
		<div id="dmsList">
		<ul>
        <li>
            <div style="background-image:url(illustrations/1.png);">
                <a id="prj1_a"href="#">
                    <div>
                        <h3>Projet géomatique</h3>
                        C++,OpenGl
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div style="background-image:url(illustrations/2.gif);">
                <a id="prj1_b" href="#">
                    <div>
                        <h3>Architecture et de structuration</h3>
                        UML
                    </div>
                </a>
            </div>
        </li>
        <li>
            <div style="background-image:url(illustrations/3.png);">
                <a id="prj1_c" href="#">
                    <div>
                        <h3>Publication des données géographiques</h3>
                        Automatisation
                    </div>
                </a>
            </div>
        </li>
       </ul>
		</div>
		
		<div id="prj_geom" style=" height: 0px; visibility: hidden" >
				<br> </br>
				<br> </br>
				<h2> Le projet géomatique </h2>
				<div id="description">
				Il s'agit d'un projet dont l'objectif est de développer des programmes de traitement et de représentation de la donnée en 3 dimensions.
				Un des exemples des progrmmes developpés par les étudiants est un programme qui permet de :
<ul>
<li>Afficher un MNT rectangulaire et régulier au format .xyz </li>
<li>Simuler une inondation (sans écoulement réaliste) à la vitesse de son choix </li>
<li>Calculer l'intersection en l'eau et le MNT</li>
<li>Exporter l'isoligne d'intersection pour l'afficher dans un logiciel de SIG.</li>
</ul>
				</div>
		</div>
		
		<div id="prj_uml" style="visibility: hidden; height: 0px">
				<br> </br>

				<h2> Le projet de structuration et d'architecture </h2>
				<div id="description">
				Le projet « Architecture et structuration »  consiste à modéliser le système d’information d’une entreprise moyennant le langage de modélisation unifié UML.
Compte tenu de  notre background en modélisation,  architecture et gestion de projet, nous avons travaillé en nombreuses équipes en visant les objectifs suivants :

<ul>
<li>Organiser une visite d’immersion en une entreprise gestionnaire de réseau ; </li>
<li>Définir la problématique à traiter ; </li>
<li>Modéliser le système actuel ;</li>
<li>Mettre en exergue les faiblesses du système de fonctionnement existant ;</li>
<li>Proposer des aspects d’amélioration.</li>
</ul>
				</div>
		</div>
		
		<div id="prj_long" style="visibility: hidden; height: 0px">
				<br> </br>
				
				<h2> Le projet IDG </h2>
				<div id="description">
				La problématique de la structuration, le catalogage et la publication des données étant une des préoccupations des industries de nos jours, le programme de la filière TSIG prévoie  un projet de 3 semaines où les élèves sont amenés à proposer une solution d’infrastructure intelligente pour la publication données géographiques.
<br> </br>Cette année, le but est de mettre en place une chaine de valeur pour la livraison et la publication automatique de la donnée géographique.
<br> </br>Ceci dit, à partir d’une base de données géographique, la solution ambitionnée devra générer des exports de la donnée sous différents formats et selon plusieurs critères (système de projection, emprise…)
<br> </br>La solution devra aussi permettre la publication de la donnée sous forme de service web.
<br> </br>Les données générées par la solution doivent être documentées et accompagnée de métadonnées expliquant les éléments de la génération automatique.

				</div>
		</div>
		
		</section>	
	</body>
	<script type="text/javascript">	
			$(document).ready(function(){
$( "#prj1_a" ).click(function( event ) {
  event.preventDefault();
  
  //Hide other descriptions
  $('#prj_long').css("visibility", "hidden");
  $('#prj_long').css("height", "0px");
  $('#prj_uml').css("visibility", "hidden");
  $('#prj_uml').css("height", "0px");
  
  
  $('#prj_geom').css("visibility", "visible");
  $('#prj_geom').animate({
						height : $("#prj_geom").prop('scrollHeight')
					}, 800);
  $('html, body').animate({
						scrollTop:$('#prj_geom').offset().top
					}, 'slow');
  
  });
  
  $( "#prj1_b" ).click(function( event ) {
  event.preventDefault();
  //Hide other descriptions
  $('#prj_geom').css("visibility", "hidden");
  $('#prj_geom').css("height", "0px");
  $('#prj_long').css("visibility", "hidden");
  $('#prj_long').css("height", "0px");
  
  $('#prj_uml').css("visibility", "visible");
  $('#prj_uml').animate({
						height : $("#prj_uml").prop('scrollHeight')
					}, 800);
  $('html, body').animate({
						scrollTop:$('#prj_uml').offset().top
					}, 'slow');
  
  });
  $( "#prj1_c" ).click(function( event ) {
  event.preventDefault();
  //Hide other descriptions
  $('#prj_geom').css("visibility", "hidden");
  $('#prj_geom').css("height", "0px");
  $('#prj_uml').css("visibility", "hidden");
  $('#prj_uml').css("height", "0px");
  
  $('#prj_long').css("visibility", "visible");
  $('#prj_long').animate({
						height : $("#prj_long").prop('scrollHeight')
					}, 800);
  $('html, body').animate({
						scrollTop:$('#prj_long').offset().top
					}, 'slow');
  
  });
});			
		</script>
    
    
</html>