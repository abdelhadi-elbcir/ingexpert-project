<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="fr">

<head>

    <TITLE>Fiabilité en maintenance: conseil, accompagnement, formation </TITLE>
    <META NAME="Description"
        CONTENT="Nous apportons conseil, accompagnement et formation pour le management de la maintenance. Retrouvez ici gratuitement le sujet de la fiabilité des équipements ">


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
            max-width: 1100px;
            /* largeur du contenu */
            margin: 40px auto;
            /* centré vertical et horizontal */
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



            <!--------------------------------------- Début texte html --------------------------------------------->



            <h1>FIABILITE - COMPORTEMENT DU MATERIEL, DEFAILLANCE, PROBABILITES</h1>
            <p style='margin-left:36.0pt'>&nbsp;</p>

            <p style='margin-left:36.0pt'>&nbsp;</p>


            <h2>A - MTBF</h2>

            <p class=MsoNormal style='margin-left:36.0pt' align="justify">
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">La <b>MTBF</b> est
                        la</span><span style="font-size:10pt;">&nbsp;<b>moyenne des temps entre deux pannes</b> d'un
                        équipement.</span></font>
            </p>
            <p class=MsoNormal style='margin-left:36.0pt' align="justify">&nbsp;</p>
            <p class=MsoNormal style='margin-left:36.0pt' align="justify">
                <font face="Arial"><span style="font-size:10pt;">Remarque: cette durée intégre donc les temps de
                        réparation, or elle est souvent </span><span
                        style="font-family:Arial,sans-serif; font-size:10pt;">traduite à tort par &quot;Moyenne des
                        Temps de Bon Fonctionnement&quot;, traduction de &quot;Mean Time Between Failure&quot;. Par
                        contre </span><span style="font-size:10pt;">la </span></font>
            </p>

            <font face="Arial"><span style="font-size:10pt;"><b>
                        - MTTF</b> <b>(temps moyen de fonctionnement avant la première panne</b>- mean time to failure)
                    et la </span></font>
            </p>
            <font face="Arial"><span style="font-size:10pt;"><b>
                        - MUT</b> (</span></font><b><span style="font-size:10pt;">Durée moyenne de fonctionnement après
                    réparation</span></b><span style="font-size:10pt;"> - Mean Up Time) </span>


            <p class=MsoNormal style='margin-left:36.0pt' align="justify">
                <font face="Arial"><span style="font-size:10pt;">n'intègrent elles pas les temps de réparation.</span>
                </font>
            </p>
            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-size:11pt;">&nbsp;</span></font>
            </p>
            <p class=MsoNormal style='margin-left:36.0pt'><span
                    style='font-family:"Arial","sans-serif"; mso-no-proof:yes'>
                    <img src="https://dev.ingexpert.com/maintexpert/images/mtbf.jpg"
                        alt="La fiabilité en maintenance"></span></p>

            <p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;&nbsp;</span></p>


            <ul>
                <p class=MsoNormal style="text-indent:-49; margin-left:106;"><span
                        style='font-family:"Arial","sans-serif"'>&nbsp; </span>
                    <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">MTBF = somme des
                            TBF</span></font>
                </p>
                <P class="titre2" abp="151" style="text-indent:2; ><font face=" Arial"><span style="font-size:10pt;">MDT
                        (Mean Down Time): durée moyenne d'indisponibilité (temps de détection de la panne + temps de
                        réparation + temps de remise en service) </span></font>
                </P>
                <p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>
                <p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>
            </ul>
            <h2>B - Taux de défaillance</h2>

            <p class=MsoNormal style='margin-left:36.0pt'>&nbsp;</p>
            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Taux
                        de défaillance&nbsp;: &lambda;(t)</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Unité
                        = pannes / heure</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Le
                        taux de défaillance est fourni par les constructeurs mais vous pouvez le
                        définir par exploitation des historiques de pannes.</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal align=center style='margin-left:36.0pt;text-align:center'>
                <font face="Arial"><span style="font-family:Calibri,sans-serif; font-size:10pt; line-height:115%;"><img
                            width=267 height=39
                            src="doc_theorie_maintenance__fiabilite_fichiers/maintenance-defaillance.png"
                            v:shapes="_x0000_i1025"></span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-size:10pt;">&nbsp;</span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Evolution
                        d’un équipement tout au long de son cycle de vie (LCC) : </span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:53.4pt;text-indent:-18.0pt;line-height:
normal;mso-list:l4 level1 lfo3;tab-stops:list 53.4pt'>
                <font face="Arial"><span style="font-size:10pt;">·</span><span
                        style="font-family:'Times New Roman'; font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span style="font-family:Arial,sans-serif; font-size:10pt;">Zone 1 : période de rodage, les
                        pannes nombreuses au début diminuent</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:53.4pt;text-indent:-18.0pt;line-height:
normal;mso-list:l4 level1 lfo3;tab-stops:list 53.4pt'>
                <font face="Arial"><span style="font-size:10pt;">·</span><span
                        style="font-family:'Times New Roman'; font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span style="font-family:Arial,sans-serif; font-size:10pt;">Zone 2&nbsp;: période durant
                        laquelle le nombre de pannes est le plus faible</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:53.4pt;text-indent:-18.0pt;line-height:
normal;mso-list:l4 level1 lfo3;tab-stops:list 53.4pt'>
                <font face="Arial"><span style="font-size:10pt;">·</span><span
                        style="font-family:'Times New Roman'; font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span style="font-family:Arial,sans-serif; font-size:10pt;">Zone 3 : période de
                        vieillissement
                        accéléré, le nombre de pannes augmente sans cesse</span></font>
            </p>

            <p style='margin-left:36.0pt'><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>

            <p class=MsoNormal align=center style='margin-left:36.0pt;text-align:center'><span
                    style='font-family:"Arial","sans-serif";mso-no-proof:yes'><img width=406 height=227
                        id="_x0000_i1027" src="doc_theorie_maintenance__fiabilite_fichiers/image003.jpg"
                        alt="https://ingexpert.com/images/baignoir.jpg"></span></p>

            <p style='margin-left:36.0pt'><i>
                    <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Cette
                            courbe est appelée &quot;Courbe en baignoire&quot;.</span></font>
                </i>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Durant
                        la période où &lambda; est constant il est opportun de faire de la maintenance
                        conditionnelle. On veille à ne pas «&nbsp;en faire trop&nbsp;». </span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:72.0pt'><u>
                    <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Diagramme
                            de Weilbull</span></font>
                </u>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:72.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Permet
                        de savoir dans quelle zone de la courbe du cycle de vie on se trouve: Zone 1, 2
                        ou 3.</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=167 style='width:125.25pt;mso-cellspacing:0cm;margin-left:72.0pt;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 0cm 0cm 0cm' bordercolordark=white bordercolorlight=black>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                    <td width=157 style='width:117.75pt;padding:.75pt .75pt .75pt .75pt'>
                        <p class=MsoNormal>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">R(t)
                                    =&nbsp; e&nbsp; ( – (t – &gamma;)<sup>&beta;</sup> / &eta;)</span></font>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-left:72.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">L’utilisation
                        d’abaques est nécessaire.</span></font>
            </p>
            <p class=MsoNormal style='margin-left:72.0pt'>&nbsp;</p>
            <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style='margin-left:36.0pt;background:#B8CCE4;mso-background-themecolor:accent1;
 mso-background-themetint:102;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                    <td width=614 valign=top style='width:460.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p style='margin-left:36.0pt'><u>
                                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Exemple
                                        d’application&nbsp;:</span></font>
                            </u>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                        <p style='margin-left:36.0pt'>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Les
                                    historiques de maintenance de vingt emboutisseuses pour 1.000 heures de
                                    fonctionnement ont révélés 50 pannes.</span></font>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                        <p class=MsoNormal style='margin-left:36.0pt'>
                            <font face="Arial"><span style="font-size:10pt;">&nbsp;</span></font>
                        </p>
                        <p class=MsoNormal align=center style='margin-left:36.0pt;text-align:center'>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Le taux de
                                    défaillance est&nbsp;: </span><span
                                    style="font-family:Calibri,sans-serif; font-size:10pt; line-height:115%; position:relative; top:8.5pt;"><img
                                        width=232 height=28
                                        src="doc_theorie_maintenance__fiabilite_fichiers/mainteance.png"
                                        v:shapes="_x0000_i1025"></span></font>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                        <p class=MsoNormal align=center style='margin-left:36.0pt;text-align:center'>
                            <font face="Arial"><span style="font-size:10pt;">&nbsp;</span></font>
                        </p>
                        <p align=center style='margin-left:36.0pt;text-align:center'>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">MTBF = 400
                                    heures</span></font>
                        </p>
                        <p align=center style='margin-left:36.0pt;text-align:center'>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p style='margin-left:36.0pt'>&nbsp;</p>

            <p style='margin-left:36.0pt'>&nbsp;</p>

            <h2>C - Fiabilité</h2>

            <p class=MsoNormal style='margin-left:36.0pt;page-break-after:avoid'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Fiabilité&nbsp;: R(t) = e
                    </span></font><sup>
                    <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">–
                            &lambda; . t</span></font>
                </sup>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt;page-break-after:avoid'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">&nbsp;<img width=278
                            height=270 id="_x0000_i1026" src="doc_theorie_maintenance__fiabilite_fichiers/image004.jpg"
                            alt="https://ingexpert.com/images/fiabili.jpg"></span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style='margin-left:72.0pt;background:#C6D9F1;mso-background-themecolor:text2;
 mso-background-themetint:51;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                    <td width=614 valign=top style='width:460.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p class=MsoNormal style='margin-left:21.45pt;page-break-after:avoid'><u>
                                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Exemple
                                        de calcul&nbsp;: </span></font>
                            </u>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                        <p class=MsoNormal style='margin-left:21.45pt;page-break-after:avoid'>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Quelle est la
                                    probabilité de
                                    fonctionnement d’une pompe donnée durant 1 an&nbsp;(8760 heures)?<br>
                                    Pompe, taux de défaillance&nbsp;: &lambda; = 2.10<sup>-5</sup> pannes / h<br>
                                    R (8760) = e <sup>– 2.10-5 x 8760</sup> = 0,84</span></font>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=112 style='width:83.7pt;mso-cellspacing:0cm;margin-left:72.0pt;mso-yfti-tbllook:
   1184;mso-padding-alt:0cm 0cm 0cm 0cm' bordercolordark=white bordercolorlight=black>
                            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                                <td width=112 style='width:83.7pt;padding:.75pt .75pt .75pt .75pt'>
                                    <p class=MsoNormal style='margin-left:21.45pt'>
                                        <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">R
                                                = 84 %</span></font>
                                        <font face="Arial"><span style="font-size:10pt;"></span></font>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <p class=MsoNormal style='page-break-after:avoid'>&nbsp;</p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-left:72.0pt'><span style='font-family:"Arial","sans-serif"'>&nbsp;</span>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>&nbsp;</p>

            <p class=MsoNormal style='margin-left:72.0pt;page-break-after:avoid'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Remarque&nbsp;:</span>
                </font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoListParagraph style='margin-left:88.8pt;text-indent:-18.0pt;
line-height:normal;mso-list:l5 level1 lfo8;tab-stops:list 88.8pt'>
                <font face="Arial"><span style="font-size:10pt;">·</span><span
                        style="font-family:'Times New Roman'; font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span style="font-family:Arial,sans-serif; font-size:10pt;">MTBF = 1 / &lambda; </span>
                </font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoListParagraph style='margin-left:88.8pt;text-indent:-18.0pt;
line-height:normal;mso-list:l5 level1 lfo8;tab-stops:list 88.8pt'>
                <font face="Arial"><span style="font-size:10pt;">·</span><span
                        style="font-family:'Times New Roman'; font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span><span style="font-family:Arial,sans-serif; font-size:10pt;">MTTR = 1 / &mu; (µ = taux de
                        réparation)</span><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:72.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Ainsi:
                        &nbsp;R (MTBF) = e <sup>– (&lambda; . MTBF)</sup> = e <sup>–1 </sup>= 0,37<br>
                        =&gt;&nbsp;&nbsp;&nbsp; On a 63 % de chance de tomber en panne avant le
                        MTBF&nbsp;!</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">&nbsp;Remarque&nbsp;:
                        il est intéressant de savoir que l’homme est le maillon le moins fiable à
                        l’intérieur du processus maintenance.</span></font>
            </p>

            <p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>

            <h2>D – Disponibilité</h2>



            <table class=MsoNormalTable border=1 cellpadding=0 width="386" style='width:335.25pt;
 mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
                <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                    <td width="378" style='width:327.75pt;padding:.75pt .75pt .75pt .75pt'>
                        <p align=center style='margin-left:36.0pt;text-align:center'>
                            <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">D = MTBF
                                    &nbsp;/ &nbsp;MTBF &nbsp;+
                                    &nbsp;MTTR </span></font>
                            <font face="Arial"><span style="font-size:10pt;"></span></font>
                        </p>
                    </td>
                </tr>
            </table>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-size:10pt;">&nbsp;</span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Remarque&nbsp;:
                        en fixant la disponibilité on fixe le MTTR et le MTBF.</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Les
                        tables de défaillances sont très utiles pour faire des calculs.</span></font>
            </p>

            <p class=MsoNormal style='margin-left:72.0pt'><span style='font-family:"Arial","sans-serif"'>&nbsp;</span>
            </p>

            <h2>E - La maîtrise de
                l'efficience</h2>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Est-ce
                        que mon magasin fonctionne bien, mon équipe est opérationnelle, etc&nbsp;?</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'><u>
                    <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Que
                            surveiller&nbsp;?</span></font>
                </u>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:36.0pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;"><img width=390 height=181
                            id="_x0000_i1025" src="doc_theorie_maintenance__fiabilite_fichiers/image005.jpg"
                            alt="https://ingexpert.com/images/surveill.jpg"></span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>

            <h2>E - Sûreté de fonctionnement </h2>

            <p class=MsoNormal style='margin-left:38.35pt;text-indent:-.95pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">La sûreté de
                        fonctionnement a pour finalité le maintien du bon fonctionnement d'un système,
                        tout au long de son cycle de vie et ce, à moindre coût.</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <p class=MsoNormal style='margin-left:37.4pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">Ces
                        composants sont :</span></font>
                <font face="Arial"><span style="font-size:10pt;"></span></font>
            </p>

            <ul>
                <ul>
                    <li class=MsoNormal style="margin-left:119;">
                        <font face="Arial"><span
                                style="font-family:Arial,sans-serif; font-size:10pt;"><b>F</b>iabilité</span></font>
                        <font face="Arial"><span style="font-size:10pt;"></span></font>
                    </li>
                    <li class=MsoNormal style="margin-left:119;">
                        <font face="Arial"><span
                                style="font-family:Arial,sans-serif; font-size:10pt;"><b>M</b>aintenabilité</span>
                        </font>
                        <font face="Arial"><span style="font-size:10pt;"></span></font>
                    </li>
                    <li class=MsoNormal style="margin-left:119;">
                        <font face="Arial"><span
                                style="font-family:Arial,sans-serif; font-size:10pt;"><b>D</b>isponibilité</span></font>
                        <font face="Arial"><span style="font-size:10pt;"></span></font>
                    </li>
                    <li class=MsoNormal style="margin-left:119;">
                        <font face="Arial"><span
                                style="font-family:Arial,sans-serif; font-size:10pt;"><b>S</b>écurité<br>
                                &nbsp;</span></font>
                        <font face="Arial"><span style="font-size:10pt;"></span></font>
                    </li>
                </ul>
            </ul>
            <p class=MsoNormal style='text-indent:37.4pt'>
                <font face="Arial"><span style="font-family:Arial,sans-serif; font-size:10pt;">La
                        sureté de fonctionnement concourt à la maîtrise des risques. Appelé FMD ou FMDS.</span></font>
            </p>







            <!--------------------------------------- Fin du texte html --------------------------------------------->

        </div>
    </div><!-- Fin Div global -->
    </div>

    <?php
    // ✅ Shared FOOTER only
    include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
    ?>

    <!-- New global JS (menu scroll + mobile) -->
    <script src="/assets/js/site.js"></script>


</body>

</html>