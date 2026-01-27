<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="fr">

<head>

	<TITLE>IoT - Maintenance prédictive</TITLE>
	<META NAME="Description"
		CONTENT="Ingexpert vous accompagne dans le choix et l'utilisation des capteurs pour réaliser la maintenance prédictive mais également dans le traitement des données (cloud, big-data). ">


	<META NAME="Keywords" CONTENT="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure,  contractant, contracté,  contrat, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, ingénieur, conseil, maint, industrie, industriel, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise, amdec,
preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	<META NAME="ROBOTS" CONTENT="all">
	<meta name="classification" content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure,  contractant, contracté,  contrat, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, ingénieur, conseil, maint, industrie, industriel, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise, amdec,
preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM">
	<META NAME="Author" CONTENT="Laloux Guillaume, consultant maintenance">
	<META NAME="Generator" CONTENT="Laloux Ingexpert maintenance">
	<META NAME="Creation_Date" CONTENT="3/12/2002">
	<META NAME="revisit-after" CONTENT="7 days">
	<meta name="language" content="fr">

<!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <!-- Ingexpert unique overrides -->

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
  
<style>
/* ================= CONTENU CENTRÉ MODERNE ================= */
.content-wrapper {
    max-width: 1100px;       /* largeur du contenu */
    margin: 40px auto;       /* centré vertical et horizontal */
    padding: 40px 30px;
    background: #ffffff;
    /* coins arrondis */
    
    color: #333;
}



/* Paragraphes et listes */
.content-wrapper p,
.content-wrapper li {
    font-size: 15px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 15px;
}

/* Liens */
.content-wrapper a {
    color: #1a73e8;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.content-wrapper a:hover {
    text-decoration: underline;
    color: #0b5ed7;
}

/* Listes personnalisées */
.content-wrapper ul {
    list-style-type: disc;
    padding-left: 20px;
}

.content-wrapper ol {
    padding-left: 25px;
}

/* Tables modernes */
.content-wrapper table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 14px;
}

.content-wrapper table th,
.content-wrapper table td {
    border: 1px solid #ddd;
    padding: 12px 15px;
    text-align: left;
}

.content-wrapper table th {
    background-color: #f8f8f8;
    color: #333;
}

.content-wrapper table tr:nth-child(even) {
    background-color: #f9f9f9;
}


</style>

</head>

<body class="theme-ingexpert">

<?php
// ✅ Shared HEADER only
include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
?>

<div class="content-wrapper">


	<div id="global">
		<!-- Div global = cadre de la page (dans css on indique le % et que les marges sont = 0 et que tout ce qu'il y a dedans doit être centré -->

		<!-- Début du texte -->
		<div class="texte">


			<!-- Fil d'ariane -->
			<span class="filariane">Vous êtes ici : <a href="https://dev.ingexpert.com" class="lienfil">Accueil
					Ingexpert.com</a> > <a
					href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php"
					class="lienfil"> Notre activité</a> ></span> <span class="filarianeactive">IoT - Maintenance
				prédictive</span>
			</span><!--------------------------------------- Début texte html --------------------------------------------->



			<h4>IoT - Maintenance prédictive</H4>


			<p align="right"><a
					href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
					onclick="open('https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;"><img
						src="images/devis-expert-conseil-maintenance.jpg" width="94" height="94"></a>

				<!-- Paragraphe -->

			<h5>1 - L’IoT (Internet of Things - Internet des objets)</h5>
			Autre définition utilisée: IIoT « Industrial Internet of Things »
			<p class="redaction">


				Les capteurs analogiques ou digitaux qui communiquaient via des protocoles divers et variés, le sont
				aujourd’hui pour être connectés à internet :


			<p class="renfoncement1">
				<br><span style="color: orange; "><strong>• </span></strong> Capteurs lasers (mesure de déplacement, de
				distance) ;
				<br><span style="color: orange; "><strong>• </span></strong> Accéléromètres capacitifs (mono, bi,
				triaxiaux), piézoresistifs, piézoélectriques ;
				<br><span style="color: orange; "><strong>• </span></strong> Capteurs de son, vitesse, température,
				humidité, vibration, accélération, pression, force, couple, humidité, déplacement.
			</p>

			<p class="redaction">
				C’est l’avènement de l’IoT défini en « l'interconnexion via Internet de dispositifs informatiques
				embarqués dans des objets du quotidien, leur permettant d'envoyer et de recevoir des données. »

				<br><br>Par exemple pour le métier qui nous intéresse, c’est à dire la maintenance, les « anciens »
				systèmes d’analyse vibratoire fournissaient les historiques de valeurs mesurées via le réseau
				d’automates(LAN le plus souvent) ou via un logiciel propriétaire (par l’intermédiaire d’une interface
				d’E/S de type RS232) ou encore plus anciennement affichaient une valeur instantanée et n’émettaient
				qu’une alarme sans enregistrement de valeurs.

				<br><br>Aujourd’hui un accéléromètre est aisément rendu autonome et communicant. Il possède sa propre
				adresse IP pour transmettre à un cloud les données qu’il relève. Son installation est extrêmement simple
				puisque l’on n’a plus besoin de logiciel propriétaire ou de câblage. Mais attention, ce n'est pas parce
				qu'un capteur communique sans fil qu'il se connecte à internet. Certains d'entre eux utilisent le
				protocole WirelessHART.
				Vous le comprenez sûrement, l'IoT n'est pas une révolution comme certains veulent le faire croire, mais
				une évolution de la technologie. Mais il est vrai que de faire converger toutes les données vers le
				cloud en vue de leur traitement (automatisé) est vraiment nouveau. Il correspond à l'aire du big-data, à
				la nouvelle définition de la maintenance prédictive. Dans cette maintenance 4.0, les capteurs manuels
				(endoscopes, stéthoscopes, ...), portatifs (consoles, etc), bluetooth n'auraient plus de raison d'être:
				la surveillance est automatique et systématique.


				<br><br>Revenons à l'analyse vibratoire et présentons quelques exemples de capteurs qui permettent de la
				réaliser.
				<!-- Paragraphe 2-->



			<h6>1.1 - Les capteurs "manuels" ou portatifs</h6>

			<br>1/ Capteur vendu par equibibrage-industriel:
			<img class="floatleft" src="https://dev.ingexpert.com/images/analyse-vibratoire/equilibrage-industriel.jpg"
				alt="floatleft" / width="241" height="168">
			&nbsp;&nbsp;&nbsp; 2/ Capteur vendu par hellopro:
			<img class="floatright" src="https://dev.ingexpert.com/images/analyse-vibratoire/hellopro.jpg"
				alt="floatright" / width="283" height="170">
			&nbsp;&nbsp;&nbsp; 3/ Capteur IHB:
			<img class="floatright" src="https://dev.ingexpert.com/images/analyse-vibratoire/ihb.jpg" alt="floatright" /
				width="283" height="170">
			&nbsp;&nbsp;&nbsp; 4/ Capteur manuel SKF:
			<img class="floatright" src="https://dev.ingexpert.com/images/analyse-vibratoire/skf4.jpg" alt="floatright"
				/ width="283" height="170">


			<h6>1.2 - Les capteurs communiquant sans fil</h6>



			<br>1/ Capteur SKF réseau WirelessHART:
			<img class="floatleft" src="https://dev.ingexpert.com/images/analyse-vibratoire/skf2.jpg" alt="floatleft" /
				width="241" height="168">

			&nbsp;&nbsp;&nbsp; 2/ Capteur SKF bluetooth:
			<img class="floatright" src="https://dev.ingexpert.com/images/analyse-vibratoire/skf3.jpg" alt="floatright"
				/ width="283" height="170">




			&nbsp;&nbsp;&nbsp; 3/ Capteur Monixo se revendiquant capteur IoT:
			<img class="floatright" src="https://dev.ingexpert.com/images/analyse-vibratoire/monixo.jpg"
				alt="floatright" / width="283" height="170">


			<h5>2 - La plus value INGEXPERT</h5>

			<p class="redaction">
				Vous le constatez, un choix de la technologie s'impose. Car un capteur peut se connecter directement au
				cloud mais aussi indirectement (via le bluetooth et une connexion internet de l'appareil avec lequel il
				s'appaire): il est nécessaire de prendre une décision sur la technologie à adopter (type de programme de
				collecte de données). Qui va être capable d’indiquer comment positionner le capteur et exploiter les
				données fournies par le capteur. Pourquoi collecter les données? Comment le programme s'associe au plan
				de maintenance ou d'entretien? INGEXPERT peut vous éclairer et vous apporter une réelle plus-value.
				Ingexpert vous permettra d'appréhender coorectement la définition de la <a
					href="https://dev.ingexpert.com/maintexpert/php_theorie_maintenance__definitions.php">maintenance
					conditionelle</a> (et non prédictive), de rattacher le sujet au <a
					href="https://dev.ingexpert.com/maintexpert/php_theorie_maintenance__plan_de_maintenance.php">plan
					de maintenance</a>, HUMS ...
				<br>
				Vous êtes ou aller entrer dans un Système de Contrôle et d’Acquisition de Données (SCADA*), qui va aider
				vos techniciens à gérer en temps réel et à distance vos biens grâce aux "télémesures".
				Mais cette gestion n'est pas sans danger puisque comme tout réseau, le piratage guette et cela aussi
				doit être pris en compte.

				<br> * en anglais: Supervisory Control And Data Acquisition


		</div>
	</div><!-- Fin Div global -->

</div>

<?php
// ✅ Shared FOOTER only
include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
?>

<!-- New global JS (menu scroll + mobile) -->
<script src="/assets/js/site.js"></script>

<!-- Javascript pour le menu --> 

</body>

</html>