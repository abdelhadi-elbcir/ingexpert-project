<?php
// index.php ou maintexpert.php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Conseil et accompagnement en maintenance industrielle, tertiaire, BTP, transport et biomédicale</title>
    <meta name="description"
        content="Augmentez la fiabilité, la disponibilité de vos installations et biens ainsi que l'efficience de votre maintenance. Ingexpert accompagne l'évolution du management de votre maintenance et la formation.">
    <meta name="keywords"
        content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, maintenance, entretien, audit, diagnostic, ingénieur, conseil, fiabilité, disponibilité, formation, GMAO, ISO 9000">
    <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle-tertiaire.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style_redesign.css">

    <style>
        .content-wrapper {
            max-width: 1100px;
            margin: 40px auto;
            padding: 40px 30px;
            background: #fff;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .content-wrapper h1 {
            color: #304C9C;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .content-wrapper p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .content-wrapper a {
            color: #1a73e8;
            text-decoration: none;
        }

        .content-wrapper a:hover {
            text-decoration: underline;
        }

        .button-group a {
            display: inline-block;
            margin: 5px 10px;
            padding: 8px 12px;
            background: #1a73e8;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
        }

        .button-group a:hover {
            background: #0b5ed7;
        }
    </style>
</head>

<body class="theme-ingexpert">

    <?php
    // ✅ Shared HEADER
    include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
    ?>

    <div class="content-wrapper">

        <h1>Conseil, assistance et formation pour le management de la maintenance</h1>

        <!-- Boutons sites Ingexpert -->
        <div class="button-group">
            <a href="http://www.ingexpert.fr">INGEXPERT - La société Ingexpert</a>
            <a href="http://dev.ingexpert.com/maintexpert">MAINTEXPERT - Cours sur la maintenance</a>
            <a href="http://enligne.ingexpert.fr">EnLigne - Outils maintenance en ligne</a>
        </div>

        <!-- Contenu Actualités -->
        <h2>Actualité</h2>
        <p>Récapitulatif sur la théorie de la maintenance.</p>
        <p>Téléchargez le cours INGEXPERT complet : <a
                href="http://dev.ingexpert.com/images/Faire-evoluer-votre-maintenance.pdf">Faire évoluer votre
                maintenance</a></p>

        <div style="display:flex; gap:20px; flex-wrap: wrap;">
            <a href="http://dev.ingexpert.com/maintexpert/php_management_maintenance__diagnostic.php">
                <img src="images/management-maintenance-industrielle-tertiaire.jpg" alt="Management de la maintenance"
                    width="133" height="183">
            </a>
            <p>INGEXPERT vous assiste dans tous les secteurs d’activités.</p>
        </div>

        <!-- Image Pub -->
        <p>
            <a href="http://dev.ingexpert.com/ingexpert/maintenance-pack-contrat.php">
                <img src="images/pack-contrat-sous-traitance-maintenance.gif"
                    alt="Pack Antivirus pour contrat de sous-traitance en maintenance">
            </a>
        </p>

        <!-- Bonhommes et Logos -->
        <div style="display:flex; justify-content: space-between; align-items:center; margin-top:20px;">
            <img src="images/expert_maintenance_maintexpert.jpg" alt="Expert maintenance" width="65" height="128">
            <img src="images/conseil-formation-maintenance.jpg" alt="Logo Ingexpert" width="134" height="53">
        </div>

    </div>

    <?php
    // ✅ Shared FOOTER
    include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
    ?>

    <script src="/assets/js/site.js"></script>
</body>

</html>