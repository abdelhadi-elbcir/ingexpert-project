<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="fr">

<head>

  <TITLE>Contact pour le conseil du managament de la maintenance </TITLE>
  <META NAME="Description"
    CONTENT="Formulaire de contact d'Ingexpert pour l'amélioration du management de votre maintenance par le conseil, la formation et l'accompagnement dans votre secteur   ">


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


  <? include("variables.inc.php"); ?>


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
                Title="Conseil Maintenance industrielle" Alt="Conseil Maintenance industrielle" width="281"
                height="31"></a>
            <a href="https://dev.ingexpert.com">
              <Font style="font-family: Arial; font-size:26px; font-weight: bold;  color:grey">Expert MAINTENANCE</font>
            </a>
            <p style="line-height:40%; margin-top:0; margin-bottom:0;"> &nbsp; </p>
            <h1>
              <center>
                <p style="color:orange; font-size: 17.4px; line-height:100%; margin-top:0; margin-bottom:0;">
                  Conseil, &nbsp; formation, &nbsp; expertise </span>
                  <span style="color:black; font-size: 13px">pour le </span><span style="color:black; font-size: 17px">
                    management de la maintenance </span>
              </center>
            </h1>
            <hr>
            <h2>
              <p style="color:black; font-size: 14px; line-height:100%; margin-top:0; margin-bottom:0;"
                align="justify ">
                Accompagnement de votre management de la maintenance industrielle, SAV, BTP, tertiaire, transport,
                biomédicale, énergie <span style="color:orange;">par le conseil, le coaching et l'ingénierie : audit,
                  formation, contrats, fiabilisation, progrès, etc.
            </h2>
            <hr>
            </p>


            <!-- Menu sous l'entete -->

            <div class="police">

              <span style="font-family: Arial ; font-size:18px; bold; color: #449AF5;">
                Divers
              </span>
              <br>
              <span style="font-family: Arial ; font-size:15px; bold; color: #449AF5;">Adhésion à la lettre
                d'Ingexpert</a><br>
                <a href="https://dev.ingexpert.com/ingexpert/maintenance-actualite-contrat-ascenceur.php">Les contrats
                  ascenseurs qui posent problème</a><br>
                <a href="https://dev.ingexpert.com/ingexpert/maintenance-lettre-information.php">Les lettres
                  Ingexpert</a><br>



                <hr>

            </div>

          </td>
        </table>
      </div>
    </div>


    <!-- Début du texte -->
    <div class="texte">


      <!-- Fil d'ariane -->
      <span class="filariane">Vous êtes ici : <a href="https://dev.ingexpert.com" class="lienfil">Accueil
          Ingexpert.com</a> > <span class="filarianeactive">Divers</a> ></span> <span class="filarianeactive">Adhésion à
          la lettre d\'Ingexpert
        </span><br><br><br>








      </span>




      <TITLE>I N G E X P E R T - Lettre ingexpert</TITLE>
      </HEAD>


      <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
            style='font-size:16.0pt;font-family:"Arial","sans-serif";color:#5594D9'>Adhésion à la lettre
            INGEXPERT</span></b></p>

      <font size="2" face="Arial">
        <?






        //test si le code de sécurité est incorrect
        
        if ($secur != "10"): {
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


          // On définit les variables IP et Date pour les mettre plus tard dans la base de données.
          $ip = $_SERVER['REMOTE_ADDR'];
          $date = date_create()->format('Y-m-d H:i:s');


          $connexion = mysqli_connect($host, $user, $secret, $user) or die("Impossible de se connecter au serveur de base de données");
          $TableRep = mysqli_query($connexion, "SELECT * FROM newsletter1 WHERE email='$mail'");
          $NbreEmail = mysqli_Num_Rows($TableRep);
          //2
          if ($NbreEmail >= 1) {





            ?>
            <meta http-equiv="refresh" content="0;URL=index.php">
            <SCRIPT language="JAVASCRIPT"> alert('Cette adresse mail est déjà enregistrée.');</SCRIPT>

            <? exit;
          }









          // on vérifie que l'email n'est pas du du type ...@ingexpert.com  et comporte "@" et "."
          $email = $_POST['mail'];
          $point = strpos($email, ".");
          $aroba = strpos($email, "@");
          $ingexpert = strpos($email, "ingexpert");
          $espace = strpos($email, " ");
          $russe = strpos($email, ".ru");
          $pisd = strpos($email, "@pisd.twilightparadox.com");
          $f = strpos($email, "@f.thailand-mega.com");
          $g = strpos($email, "rubas@gitmail.ovh");


          // Scinde l'adresse mail en nom et serveur PUIS on détermine le nombre de point dans le nom du serveur (s'il y en a 2, c'est que l'adresse mail est bison: voir test à la suite)
          list($nom, $serveur) = preg_split('[@]', $email);
          $Nb_point = substr_count($serveur, '.');


          if ($point == '' || $Nb_point == 2) {
            echo "<br>Votre adresse email <font size=\"2\" color=\"#FF0000\"><b> $email </b></font> a été refusée car elle semble incorrecte. Veuillez la modifier. 
          </br>Si elle est toujours refusée, veuillez nous la soumettre via notre
		  <a href ='https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-ingexpert.php'/> formulaire de contact</a>.
		  </br></br>Merci.";
          } elseif ($aroba == '') {
            echo "<br>Votre email doit comporter un <b>'@'</b>.</br>Veuillez vérifier votre adresse email. Merci.";
          } elseif ($ingexpert != '') {
            echo "<br>Votre adresse email est incorrecte</b>.</br>Veuillez vérifier votre adresse email. Merci.";
          } elseif ($espace != '') {
            echo "<br>Votre email ne doit pas comporter d'espace</b>.</br>Veuillez vérifier votre adresse email. Merci.";
          } elseif ($russe != '') {
            echo "<br> </b>Votre email est incorrect. Adresse en '.ru' plus acceptée.</br>";
          } elseif ($pisd != '') {
            echo "<br> </b>Votre email a été blaklisté. Adresse en '@pisd.twilightparadox.com' plus acceptée.</br>";
          } elseif ($f != '') {
            echo "<br> </b>Votre email a été blaklisté. Adresse en '@f.thailand-mega.com' plus acceptée.</br>";
          } elseif ($g != '') {
            echo "<br> </b> </br>";
          } else {//On envoit un mail contenant les données   à Ingexpert
        




            mail("lettre@ingexpert.com", "Adhérent lettre Ingexpert", "$email", "From: lettre@ingexpert.com\nReply-To: $mail");

            //On met la base a jour newsletter1
        
            $connexion = mysqli_connect($host, $user, $secret, $user) or die("Impossible de se connecter au serveur de base de données");
            mysqli_query($connexion, "INSERT INTO newsletter1 (email,ip,date) VALUES ('$email','$ip','$date') ");




            //On affiche ici les informations saisie
        
            echo " <br>Votre email <font size=\"3\" color=\"#FF0000\"><b> -$email- </b></font>";
            echo " est en cours d'enregistrement, vous allez recevoir un mail de confirmation. Vous recevrez alors les lettres Ingexpert automatiquement (si votre email est correctement saisi).  <br>";

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
            $message_txt .= "Vous êtes inscrit pour recevoir les lettres Ingexpert: ce sont des messages d'informations techniques sur la maintenance sans publicité." . $passage_ligne;
            $message_txt .= "Vous recevrez bientôt votre première lettre.";
            $message_txt .= "Nous espérons que les lettres Ingexpert pourront vous aider, ou aider des personnes de votre entourage dans l'intérêt de votre entreprise. " . $passage_ligne . $passage_ligne;
            $message_txt .= "L'équipe Ingexpert https://dev.ingexpert.com" . $passage_ligne . $passage_ligne;
            $message_txt .= "Conformément à l'article 34 de la loi Informatique et Liberté du 6 janvier 1978 vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données vous concernant.  " . $passage_ligne . $passage_ligne . $passage_ligne;
            $message_txt .= "Si vous n'êtes pas du tout concerné, veuillez nous excuser. Pour vous désabonner, répondez à ce mail en indiquant que vous n'êtes pas intéressé où cliquez sur le lien suivant et envoyez le mail mailto:lettre@ingexpert.com?subject=Je%20ne%20suis%20pas%20interesse%20par%20les%20lettres%20Ingexpert ) " . $passage_ligne;

            //$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
            //=====Création de la boundary
            $boundary = "-----=" . md5(rand());
            //==========
            //=====Définition du sujet.
            $sujet = "Adhésion aux lettres INGEXPERT Maintenance";
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
        


          }
        endif;



        ?>

</body>

</html>