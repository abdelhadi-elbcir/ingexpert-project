<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="fr">

<head>



  <TITLE>Contact Ingexpert pour missions d'expertise en maintenance' </TITLE>

  <META NAME="Description" CONTENT="<? echo $description; ?>  ">







  <META NAME="Keywords" CONTENT="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure,  contractant, contracté,  contrat, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, ingénieur, conseil, maint, industrie, industriel, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise, amdec,

preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM">

  <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

  <META NAME="ROBOTS" CONTENT="all">

  <meta name="classification" content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure,  contractant, contracté,  contrat, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, ingénieur, conseil, maint, industrie, industriel, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise,

amdec,

preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM">

  <META NAME="Author" CONTENT="Laloux Guillaume, consultant maintenance">

  <META NAME="Generator" CONTENT="Laloux Ingexpert maintenance">

  <META NAME="Creation_Date" CONTENT="3/12/2002">

  <META NAME="revisit-after" CONTENT="7 days">

  <meta name="language" content="fr">







  <link href="https://dev.ingexpert.com/ingexpert/style_page.css" rel="stylesheet" type="text/css">

  <script type="text/javascript"></script>

  <link rel="shortcut icon" type="image/x-icon"
    href="https://dev.ingexpert.com/images/icone/conseil-formation-maintenance-industrielle.ico"
    Title="Icone maintenance" />



</head>

<body>





  <p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
        style='font-size:16.0pt;font-family:"Times New Roman","serif";color:#5594D9'>QUESTION A INGEXPERT:
        VALIDATION</span></b></p>



  </b><br>
  <font size="2" face="Arial"></br>



    <?



    $contact = str_replace("f", "e", "secretariat@ingfxpfrt.com");



    $nom = $_POST['nom'];

    $societe = $_POST['societe'];

    $ville = $_POST['ville'];

    $activite = $_POST['activite'];

    $email = $_POST['email'];

    $telephone = $_POST['telephone'];

    $question = $_POST['question'];

    $piratage = $_POST['piratage'];













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

      $asterisc = strpos($amail, "*");



      //et que la case piratage n'est pas cochée
    
      $_POST['piratage'];



      // et que le numéro de téléphone n'est pas incorrect
    
      $telephon = $_POST['telephone'];





      //et que la question n'est pas incorrecte
    
      $quest = $_POST['question'];

      $href = strpos($quest, "a href=");





      if ($point == '') {

        echo "<br></b>Votre email doit comporter un <b>point</b>.</br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($aroba == '') {

        echo "<br></b>Votre email doit comporter un <b>'@'</b>.</br>";

        /* ?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><?  */

      } elseif ($ingexpert != '') {

        echo "<br>Votre email est incorrect. </b></br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($espace != '') {

        echo "<br>Votre email ne doit pas comporter d'espace.</b></br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($russe != '') {

        echo "<br> </b>Votre email est incorrect. Adresse en '.ru' plus acceptée.</br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($hotmail != '') {

        echo "<br> </b>Votre email est incorrect. Nous n'acceptons plus les adresses 'hotmail.com'.</br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($piratage != '') {

        echo "<br> </b>Veuillez recommencer en décochant la case anti-piratage s'il vous plait. </br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($telephon == '123456') {

        echo "<br> </b>Numéro de téléphone incorrect. </br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif (is_numeric($asterisc)) {

        echo "<br> </b>Adresse mail incorrecte, elle ne peut comporter de *. </br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } elseif ($href != '') {

        echo "<br> </b>Votre question ne doit pas comporter 'a href='.</br>";

        /*?><br><a href="" onClick="javascript:window.history.go(-1)">Retour</a><? */

      } else {

        //On envoit un mail contenant les données   à Ingexpert
    
        mail("$contact", "Question", "$coordonnes", "From: $contact \nReply-To: $email");









        // On envoie un mail      à l'inscrit
    




        $sujet = "Votre question à Ingexpert";

        $to = $email;







        // ajout de l'entête FROM
    
        $mailHeaders = "From: $contact\n";

        $contenu = "Bonjour,\n\nVous allez recevoir une réponse de la part de la société Ingexpert.\nLa question que vous avez posé est la suivante :\n$question

    \nSi vous ne recevez pas de réponse sous 48 heures, n'hésitez par à transmettre ce mail à l'expéditeur (contact@ingexpert.com).

    \nMerci.\n\n L'équipe Ingexpert https://dev.ingexpert.com

    \n PS: les autres informations que vous nous avez transmises Nom: $nom, Société: $societe, Ville: $ville, Activité: $activite, Mail: $email, Téléphone: $telephone, Question: $question  ";

        mail($to, $sujet, $contenu, $mailHeaders);



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





    <input type='button' value='Retour au formulaire' name='bnom' onClick='javascript:history.back();'>

    </br>

</body>

</html>