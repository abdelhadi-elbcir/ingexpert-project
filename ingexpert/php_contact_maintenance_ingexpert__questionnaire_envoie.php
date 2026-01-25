<? header('Content-Type: text/html; charset=utf-8'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="fr">

<head>

	<TITLE>Envoie du questionnaire contact client </TITLE>
	<META NAME="Description"
		CONTENT="Améliorez le management de votre maintenance industrielle, tertiaire et biomédicale par le conseil et laccompagnement : envoie questionnaire contact ">


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

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<link rel="shortcut icon" type="image/x-icon"
		href="https://dev.ingexpert.com/images/icone/conseil-formation-maintenance-industrielle.ico"
		Title="Icone maintenance" />
	<link rel="stylesheet" type="text/css"
		href="https://dev.ingexpert.com/differents_fichiers/css/style_css_maintenance.css">

</head>

<body>


	<!-- Menu inséré par un include -->
	<? include '../differents_fichiers/menu_maintenance/inc.menu_maintenance.inc'; ?>


	<div id="global">
		<!-- Div global = cadre de la page (dans css on indique le % et que les marges sont = 0 et que tout ce qu'il y a dedans doit être centré -->

		<!-- Logo et "Expert maintenance"" -->
		<div class="entete">

			<div class="bonjour">

				<table>
					<td> <!--   bgcolor="#CCCCCC"     -->
						<a href="https://dev.ingexpert.com"><img
								src="https://dev.ingexpert.com/images/maintenance-industrielle-management.jpg"
								Title="Conseil Maintenance industrielle" Alt="Conseil Maintenance industrielle"
								width="281" height="31"></a>
						<a href="https://dev.ingexpert.com">
							<Font style="font-family: Arial; font-size:26px; font-weight: bold;  color:grey">Expert
								MAINTENANCE</font>
						</a>
						<p style="line-height:40%; margin-top:0; margin-bottom:0;"> &nbsp; </p>
						<h1>
							<center>
								<p
									style="color:orange; font-size: 17.4px; line-height:100%; margin-top:0; margin-bottom:0;">
									Conseil, &nbsp; formation, &nbsp; expertise </span>
									<span style="color:black; font-size: 13px">pour le </span><span
										style="color:black; font-size: 17px">
										management de la maintenance </span>
							</center>
						</h1>
						<hr>
						<h2>
							<p style="color:black; font-size: 14px; line-height:100%; margin-top:0; margin-bottom:0;"
								align="justify ">
								Accompagnement de votre management de la maintenance industrielle, SAV, BTP, tertiaire,
								transport, biomdicale, nergie <span style="color:orange;">par le conseil, le coaching
									et l'ingnierie : audit, formation, contrats, fiabilisation, progrès, etc.
						</h2>
						<hr>
						</p>


						<!-- Menu sous l'entete -->

						<div class="police">

							<span style="font-family: Arial ; font-size:18px; bold; color: #449AF5;">
								Contact
							</span>

							<br><br>
							<br><span style="font-family: Arial ; font-size:15px; bold; color: #449AF5;">Contact: envoie
								d'un message</a><br>

								<hr>

						</div>

					</td>
				</table>
			</div>
		</div>


		<!-- Début du texte -->
		<div class="texte">


			<!-- Fil d'ariane -->
			<span class="filariane">Vous êtes ici : <a href="https://dev.ingexpert.com/index.htm"
					class="lienfil">Accueil Ingexpert.com</a> > <span class="filarianeactive">Contact</a> ></span> <span
					class="filarianeactive">Envoie d\'un message
				</span><br><br><br>








				<? include("../variables.inc.php");



				?>
			</span>



			<TITLE>I N G E X P E R T - Question à INGEXPERT</TITLE>




			<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
						style='font-size:16.0pt;font-family:"Times New Roman","serif";color:#5594D9'>QUESTION A
						INGEXPERT: VALIDATION</span></b></p>

			</b><br>
			<font size="2" face="Arial">

				<?

				$contact = str_replace("f", "e", "secretariat@ingfxpfrt.com");

				$nom = $_POST['nom'];
				$societe = $_POST['societe'];
				$ville = $_POST['ville'];
				$activite = $_POST['activite'];
				$email = $_POST['email'];
				$telephone = $_POST['telephone'];
				$question = $_POST['question'];

				if (isset($_POST['piratage2'])) {
					$piratage = $_POST['piratage2'];
				}
				// $piratage  = $_POST['piratage2'];
				



				if ($email == "votre email ici"): {
						?>
						<meta http-equiv="refresh" content="0;URL=index.php">
						<SCRIPT language="JAVASCRIPT">
							<!--
					alert('Email incorrect!');
					
					//-->
						</SCRIPT>






						<?

					}

				else:



					$coordonnes = "Nom: $nom, Société: $societe, Ville: $ville, Activité: $activite, Mail: $email, Téléphone: $telephone, Question: $question";


					// on vérifie que l'email n'est pas du du type ...@ingexpert.com  et comporte "@" et "."
					$amail = $_POST['email'];
					$point = strpos($amail, ".");
					$aroba = strpos($amail, "@");
					$ingexpert = strpos($amail, "ingexpert");
					$espace = strpos($amail, " ");
					$russe = strpos($amail, ".ru");
					$hotmail = strpos($amail, "hotmail.com");
					$gmail = strpos($amail, "gmail");
					$asterisc = strpos($amail, "*");
					$mailrlytyha = strpos($amail, "lytyha@gmail.com");

					$noms = $_POST['nom'];
					$societes = $_POST['societe'];



					//et que la question n'est pas incorrecte
					$quest = $_POST['question'];
					$href = strpos($quest, "a href=");

					//et que le numéro de téléphone n'est pas incorrect
					$tel = $_POST['telephone'];
					$parentel = strpos($tel, ")");



					?>
					<style>
						.sendButton {
							cursor: pointer;
							-moz-box-shadow: inset 0px 1px 0px 0px #fce2c1;
							-webkit-box-shadow: inset 0px 1px 0px 0px #fce2c1;
							box-shadow: inset 0px 1px 0px 0px #fce2c1;
							background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
							background: -moz-linear-gradient(center top, #ffc477 5%, #fb9e25 100%);
							filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25');
							background-color: #ffc477;
							-webkit-border-radius: 16px;
							-moz-border-radius: 16px;
							border-radius: 16px;
							border: 1px solid #eeb44f;
							color: #ffffff;
							font-family: Arial;
							font-size: 14px;
							width: 25%;
							font-weight: bold;
							text-shadow: 1px 1px 0px #cc9f52;
						}

						.sendButton:hover {
							background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
							background: -moz-linear-gradient(center top, #fb9e25 5%, #ffc477 100%);
							filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477');
							background-color: #fb9e25;
						}
					</style>
					<?


					if ($point == '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Votre email doit comporter un <b>point</b>.</br>";
						echo "L'adresse mail que vous avez saisi est:";
						echo $amail;
						?><br><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($ingexpert != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Votre email est incorrect. </b></br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($russe != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>L'email est incorrect. Adresse en '.ru' plus acceptée.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($hotmail != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>L'email est incorrect. Nous n'acceptons plus les adresses 'hotmail.com'.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($gmail != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>L'email est incorrect. Nous n'acceptons plus les adresses 'gmail'.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif (isset($_POST['piratage2'])) {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Veuillez recommencer en décochant la case anti-piratage s'il vous plait. </br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($telephon == '123456') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Numéro de téléphone incorrect. </br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($href != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Votre question ne doit pas comporter 'a href='.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($mailrlytyha != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Votre adresse mail n'est pas acceptée, merci d'en utiliser une autre. </br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($parentel != '') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Votre numéro de téléphone est incorrect (pas de parenthèse svp), merci de le corriger. </br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($noms == ' ') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Nom incorrect.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					} elseif ($societes == ' ') {
						echo "<br><b> <font color='red'>ATTENTION: Le formulaire n'a pas été validé. </b></font><br><br></b>Société incorrecte.</br>";
						?><br>Vos informations saisies:<br><br>
						<form name="gmao" method="post" action="maintenance-contact-telephone-ingexpert.php">
							Nom: <INPUT type="text" name="nom"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $nom; ?>"><br>
							Societe: <INPUT type="text" name="societe"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $societe; ?>"><br>
							Ville: <INPUT type="text" name="ville"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $ville; ?>"><br>
							Activité: <INPUT type="text" name="activite"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $activite; ?>"><br>
							Mail: <INPUT type="text" name="email"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $email; ?>"><br>
							Téléphone: <INPUT type="text" name="telephone"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $telephone; ?>"><br>
							Question: <INPUT type="text" name="question"
								style="border: 0; background-color:transparent; font-weight: bold;"
								value="<?php echo $question; ?>"><br>
							<input class="sendButton" type="submit" name="Submit" value="Corriger votre saisie">
						</FORM>
						<?
					}



					// elseif($aroba==''){echo "<br></b>Votre email doit comporter un <b>'@'</b>.</br>";               }
					// Avant il y avait un retour par clic:   elseif($aroba==''){echo "<br></b>Votre email doit comporter un <b>'@'</b>.</br>";                    echo ("<br><a href='' onClick='javascript:window.history.go(-1)'>Ressaisir votre formulaire</a><? */"); }
				
					//elseif($espace!=''){echo "<br>Le formulaire n'a pas été validé. <br> L'email ne doit pas comporter d'espace.</b></br>";              }
				
					// elseif (is_numeric($asterisc)){echo "<br> Le formulaire n'a pas été validé.<br></b>Adresse mail incorrecte, elle ne peut comporter de *. </br>";            }
					else {
						//On envoit un mail contenant les données   à Ingexpert
				
						$mailHeaders = "Content-Type: text/html; charset=utf-8 ";
						$mailHeaders .= "MIME-Version: 1.0\r\n";
						$mailHeaders .= "From: $email \nReply-To: $email";

						mail($contact, "Question posée à Ingexpert", $coordonnes, $mailHeaders);

						// On envoie un mail  à l'inscrit
				
						$mail = $email; // Déclaration de l'adresse de destination.
						if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
						{
							$passage_ligne = "\r\n";
						} else {
							$passage_ligne = "\n";
						}
						//=====Déclaration des messages au format texte et au format HTML.
						$message_txt = "Bonjour," . $passage_ligne . $passage_ligne;
						$message_txt .= "Vous allez recevoir une réponse de la part de la société Ingexpert." . $passage_ligne;
						$message_txt .= "La question que vous avez posé est la suivante :" . $passage_ligne;
						$message_txt .= "$question    " . $passage_ligne;
						$message_txt .= "Si vous ne recevez pas de réponse sous 48 heures, n'hésitez pas à transmettre ce mail à l'expéditeur (contact@ingexpert.com).  " . $passage_ligne;
						$message_txt .= "Merci." . $passage_ligne . $passage_ligne;
						$message_txt .= "L'équipe Ingexpert https://dev.ingexpert.com   " . $passage_ligne . $passage_ligne . $passage_ligne;
						$message_txt .= "PS: les autres informations que vous nous avez transmises Nom: $nom, Société: $societe, Ville: $ville, Activité: $activite, Mail: $email, Téléphone: $telephone, Question: $question " . $passage_ligne;

						//$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
						//=====Création de la boundary
						$boundary = "-----=" . md5(rand());
						//==========
						//=====Définition du sujet.
						$sujet = "Votre question posée à Ingexpert";
						//=========
//=====Création du header de l'e-mail.
						$header = "From: \"Ingexpert pour votre Maintenance\"<ingemcom@ns10.monarobase.net>" . $passage_ligne;
						$header .= "Reply-to: \"Ingexpert pour votre Maintenance\" <contact@ingexpert.com>" . $passage_ligne;
						$header .= "MIME-Version: 1.0" . $passage_ligne;
						$header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
						//==========
//=====Création du message.
						$message = $passage_ligne . "--" . $boundary . $passage_ligne;
						//=====Ajout du message au format texte.
						$message .= "Content-Type: text/plain; charset=\"utf-8\"" . $passage_ligne;
						$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
						$message .= $passage_ligne . $message_txt . $passage_ligne;
						//==========
						$message .= $passage_ligne . "--" . $boundary . $passage_ligne;
						//=====Ajout du message au format HTML
						//$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
						//$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						//$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
						$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
						$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
						//==========
//=====Envoi de l'e-mail.
						mail($mail, $sujet, $message, $header);

						//==========
				













						//On affiche ici les informations saisie
				
						echo ('<br> Nous allons traiter votre demande le plus rapidement possible.
<br>Nous vous transmettons dès à présent un accusé de réception. <br>Merci.
<br><br>PS: Si vous ne recevez pas de réponse sous 48 heures, adressez nous directement un mail svp.<br>
<br><br>Les informations transmises sont les suivantes: <br>');
						echo ('Nom: <i><b>');
						echo $nom;
						echo ('<br></i></b>Société: <i><b>');
						echo $societe;
						echo ('<br></i></b>Ville: <i><b>');
						echo $ville;
						echo ('<br></i></b>Activité: <i><b>');
						echo $activite;
						echo ('<br></i></b>Mail: <i><b>');
						echo $email;
						echo ('<br></i></b>Téléphone: <i><b>');
						echo $telephone;
						echo ('<br></i></b>Question: <i><b>');
						echo $question;
						echo ('</i></b>');
						?>


					<? }

				endif;
				?>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
		</div>
	</div>
	<!-- Footer inséré par un include -->
	<? include("../differents_fichiers/footer_maintenance/inc.footer_maintenance.inc"); ?>

	<!-- Javascript pour le menu -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="https://dev.ingexpert.com/differents_fichiers/java/script.js"></script>




</body>

</html>