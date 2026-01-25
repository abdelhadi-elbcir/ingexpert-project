<?php
// maintenance.php
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connaissances en maintenance fournies gratuitement par Ingexpert</title>
    <meta name="description"
        content="Augmentez la fiabilité, la disponibilité de vos installations et biens ainsi que l'efficience de votre maintenance. Ingexpert accompagne l'évolution du management de votre maintenance et la formation.">
    <meta name="keywords"
        content="maintenance, audit, conseil, formation, industrie, BTP, transport, biomédical, fiabilité, disponibilité, GMAO">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="/images/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">

    <!-- Styles globaux -->
    <link rel="stylesheet" href="/assets/css/style_redesign.css">

    <style>
        /* Conteneur principal centré */
        .content-wrapper {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px 20px;
            background: #ffffff;
            color: #333;
            position: relative;
            font-family: Arial, sans-serif;
        }

        /* Titres et textes */
        .content-wrapper h1 {
            font-size: 28px;
            color: #304C9C;
            text-align: center;
            margin-bottom: 30px;
        }

        .content-wrapper h2 {
            font-size: 22px;
            color: #8E8E8E;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .content-wrapper p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Liens */
        .content-wrapper a {
            color: #1a73e8;
            text-decoration: none;
        }

        .content-wrapper a:hover {
            text-decoration: underline;
        }

        /* Boutons et images */
        .btn {
            display: inline-block;
            padding: 6px 12px;
            background: #1a73e8;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            margin: 5px 0;
        }

        .sector-img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Mise en page moderne pour sections horizontales */
        .sectors {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }

        .sector {
            flex: 1 1 200px;
            text-align: center;
        }
    </style>

    <script type="text/javascript">
        // Fonctions anciennes conservées si nécessaires
        function MM_swapImgRestore() {
            var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }
        function MM_preloadImages() {
            var d = document; if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments; for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) { d.MM_p[j] = new Image; d.MM_p[j++].src = a[i]; }
            }
        }
        function MM_findObj(n, d) {
            var p, i, x; if (!d) d = document; if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document; n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n]; for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n); return x;
        }
        function MM_swapImage() {
            var i, j = 0, x, a = MM_swapImage.arguments; document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) { document.MM_sr[j++] = x; if (!x.oSrc) x.oSrc = x.src; x.src = a[i + 2]; }
        }
    </script>
</head>

<body class="theme-ingexpert">

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
    ?>

    <div class="content-wrapper">

        <h1>Conseil, assistance, formation pour le management de la maintenance</h1>

        <!-- Boutons sites Ingexpert -->
        <p>
            <a href="http://www.ingexpert.fr" class="btn">INGEXPERT - La société Ingexpert</a>
            <a href="http://dev.ingexpert.com/maintexpert" class="btn">MAINTEXPERT - Cours sur la maintenance</a>
            <a href="http://enligne.ingexpert.fr" class="btn">EnLigne - Outils maintenance</a>
        </p>

        <!-- Menu -->
        <h2>Menu</h2>
        <ul>
            <li><a href="php_theorie_maintenance__definitions.php">Théorie de la maintenance</a></li>
            <li><a href="php_divers_maintenance__formation.php">Divers</a></li>
        </ul>

        <!-- Secteurs -->
        <h2>Secteurs d'activité</h2>
        <div class="sectors">
            <div class="sector">
                <a href="maintenance-missions-industrielle-process-equipements-biens.php">
                    <img src="images/maintenance-industrie-industrielle.jpg" class="sector-img"
                        alt="Maintenance industrielle">
                    <p>Industrielle / Process / Manufacture</p>
                </a>
            </div>
            <div class="sector">
                <a href="maintenance-missions-tertiaire-batiment-infrastructures-multitechnique.php">
                    <img src="images/batiment-mutitechnique-reseau.jpg" class="sector-img" alt="Maintenance batiment">
                    <p>Bâtiment / Multi-technique / Fluide</p>
                </a>
            </div>
            <div class="sector">
                <a href="maintenance-missions-transport-travaux-publics-transport-ouvrages.php">
                    <img src="images/acces-reseau-transport-infrastructure.jpg" class="sector-img"
                        alt="Maintenance transport">
                    <p>Transport / Infrastructure / Réseau</p>
                </a>
            </div>
            <div class="sector">
                <a href="maintenance-missions-biomedicale-hopitaux.php">
                    <img src="images/hopital-AMO-biomedical-exploitation.jpg" class="sector-img"
                        alt="Maintenance biomédicale">
                    <p>Biomédical / AMO / Hôpital</p>
                </a>
            </div>
        </div>

        <!-- Téléchargement livre -->
        <h2>Ressources gratuites</h2>
        <p>
            <a href="images/Ingexpert-Management-maintenance-conseil-formation.pdf" class="btn" target="_blank">
                Téléchargez le livre gratuit : Management de la maintenance
            </a>
        </p>

    </div>

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
    ?>

    <script src="/assets/js/site.js"></script>
</body>

</html>