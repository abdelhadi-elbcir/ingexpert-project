<?php
// partenaires.php

// Définir le type de page et encodage
header('Content-Type: text/html; charset=UTF-8');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les partenaires d'Ingexpert</title>

    <!-- New global design -->
    <link rel="stylesheet" href="/assets/css/style_redesign.css">
    
    <!-- Ingexpert unique overrides -->
    <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">

    <style>
    /* ================= CONTENU CENTRÉ MODERNE ================= */
    .content-wrapper {
        max-width: 1100px;       
        margin: 40px auto;       
        padding: 40px 30px;
        background: #ffffff;
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

    <h1>LES PARTENAIRES D'INGEXPERT</h1>

    <p style="text-align:center; font-size:16pt; color:#304C9C;"><b>&nbsp;</b></p>

    <p><b>Mecason</b>: Placez vos machines sur écoute !</p>
    <p>Gagnez en fiabilité et en sécurité tout en réduisant vos coûts de maintenance&nbsp;!</p>
    <p>MECASON® Systèmes de surveillance vibratoire continue de machines tournantes par la mesure de bruit interne.</p>
    <p>Mieux qu'une maintenance conditionnelle, en assurant une surveillance vibratoire continue, MECASON® sécurise vos machines et votre personnel, et permet une maintenance (appelée proactive) collant aux besoins de la machine. Il s'en suit un allongement important de sa durée de vie, une réduction drastique des risques de pannes subites et donc une amélioration de la rentabilité de vos machines.</p>
    <p><a href="https://www.mecason.com">www.mecason.com</a></p>

    <p><b>Maint'Partner</b>: L'Annuaire au service des professionnels de la Maintenance Industrielle</p>

    <table>
        <tr>
            <td style="width:150px;">
                <a href="https://www.annuaire-maintenance.fr/">
                    <img src="divers-maintenance-partenaires-fiabilite_fichiers/image001.jpg" width="128" height="50" alt="Maint'Partner">
                </a>
            </td>
            <td>
                Ce portail s’adresse aux professionnels de la maintenance industrielle et des travaux neufs, qui vont pouvoir y trouver rapidement les fournisseurs, les distributeurs et les prestataires techniques locaux.
            </td>
        </tr>
    </table>

    <p><a href="https://www.annuaire-maintenance.fr">www.annuaire-maintenance.fr</a></p>

    <p>Les annuaires qui nous font confiance :</p>
    <p><i><a href="https://annuaire.yagoort.org" title="Annuaire pour le Référencement Google">Annuaire Webmaster</a></i></p>

</div>

<?php
// ✅ Shared FOOTER only
include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
?>

<!-- New global JS (menu scroll + mobile) -->
<script src="/assets/js/site.js"></script>

</body>
</html>
