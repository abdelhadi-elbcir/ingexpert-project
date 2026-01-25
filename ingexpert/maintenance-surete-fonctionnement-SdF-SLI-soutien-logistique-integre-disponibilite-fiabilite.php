<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Sûreté de fonctionnement (SdF) & Soutien Logistique Intégré (SLI) | Ingexpert</title>

  <meta name="description"
    content="Ingexpert accompagne vos démarches de sûreté de fonctionnement (SdF / FMD / FMDS) et de soutien logistique intégré (SLI) : fiabilité, maintenabilité, disponibilité, plan SLI, ressources, documentation, formation." />
  <meta name="keywords"
    content="SdF, sureté de fonctionnement, SLI, soutien logistique intégré, ASL, fiabilité, maintenabilité, disponibilité, FMDS, FMD, plan SLI, coût global de possession, LCC, maintenance" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical"
    href="https://dev.ingexpert.com/ingexpert/maintenance-surete-fonctionnement-SdF-SLI-soutien-logistique-integre-disponibilite-fiabilite.php" />
  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    body.theme-ingexpert .hero {
      padding: 18px 18px 10px;
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 18px;
      background: rgba(135, 180, 195, .08);
      margin-bottom: 16px;
    }

    body.theme-ingexpert .hero h1 {
      margin: 0 0 6px;
      font-size: 1.55rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
      line-height: 1.2;
    }

    body.theme-ingexpert .hero p {
      margin: 0;
      line-height: 1.65;
      font-weight: 750;
      opacity: .92;
    }

    body.theme-ingexpert .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 16px 0;
    }

    body.theme-ingexpert .card-soft {
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 16px;
      padding: 16px;
      background: rgba(135, 180, 195, .06);
    }

    body.theme-ingexpert .section-title {
      margin: 18px 0 10px;
      font-size: 1.15rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
    }

    body.theme-ingexpert .note {
      border-left: 5px solid var(--ingexpert-primary);
      padding-left: 12px;
      margin: 10px 0 0;
      opacity: .95;
    }

    body.theme-ingexpert .cta {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 14px;
    }

    body.theme-ingexpert .cta a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 14px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 950;
      border: 1px solid rgba(135, 180, 195, .45);
      background: #fff;
    }

    body.theme-ingexpert .cta a.primary {
      border-color: var(--ingexpert-primary);
      background: rgba(135, 180, 195, .12);
    }

    body.theme-ingexpert .pill {
      display: inline-flex;
      gap: 8px;
      align-items: center;
      padding: 6px 10px;
      border-radius: 999px;
      border: 1px solid rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .10);
      font-weight: 900;
      font-size: .92rem;
      margin: 6px 0 0;
    }

    body.theme-ingexpert .list {
      margin: 0;
      padding-left: 18px;
      line-height: 1.75;
    }

    body.theme-ingexpert .kpi {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      margin-top: 12px;
    }

    body.theme-ingexpert .kpi .k {
      border: 1px solid rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .06);
      border-radius: 14px;
      padding: 12px;
      text-align: center;
      font-weight: 950;
    }

    body.theme-ingexpert .kpi .k small {
      display: block;
      font-weight: 800;
      opacity: .8;
      margin-top: 4px;
    }

    @media (max-width: 920px) {
      body.theme-ingexpert .grid-2 {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .kpi {
        grid-template-columns: repeat(2, 1fr);
      }

      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }
    }
  </style>
</head>

<body class="theme-ingexpert">

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
  ?>

  <main class="section">
    <div class="container">

      <!-- Breadcrumb -->
      <p class="breadcrumb">
        Vous êtes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">›</span>
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php">Notre activité</a>
        <span class="sep">›</span>
        <span class="active">SdF – SLI</span>
      </p>

      <div class="hero">
        <h1>Sûreté de fonctionnement (SdF) & Soutien Logistique Intégré (SLI)</h1>
        <p>Fiabiliser les systèmes, dimensionner le soutien, optimiser la disponibilité opérationnelle et le coût global
          de possession.</p>
        <span class="pill">SdF • FMD / FMDS • SLI • ASL</span>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un échange / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">
            Voir nos formations
          </a>
        </div>
      </div>

      <div class="card content-box">

        <h2 class="section-title">1) Sûreté de fonctionnement (SdF)</h2>
        <p class="note">
          Ingexpert vous accompagne dans vos démarches et études de
          <a href="https://dev.ingexpert.com/maintexpert/php_theorie_maintenance__fiabilite.php">SdF (FMD / FMDS)</a> :
          <strong>maintenabilité, testabilité, fiabilité, disponibilité opérationnelle</strong> ainsi que les études
          liées à la
          <strong>sécurité des biens et des personnes</strong>.
        </p>

        <div class="kpi" aria-label="Axes SdF">
          <div class="k">Fiabilité<small>(R)</small></div>
          <div class="k">Maintenabilité<small>(M)</small></div>
          <div class="k">Disponibilité<small>(D)</small></div>
          <div class="k">Sécurité<small>(S)</small></div>
        </div>

        <p style="margin-top:12px;">
          À l’issue de l’étude SdF, les données obtenues (fiabilité, maintenabilité, disponibilité…)
          servent d’<strong>entrées</strong> aux études SLI pour dimensionner le <strong>système de soutien</strong>.
        </p>

        <h2 class="section-title">2) Ingénierie ASL / SLI / SN</h2>
        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">SLI : un soutien “intégré” à la conception</h3>
            <p style="margin:0; line-height:1.7;">
              Au-delà d’une maintenance existante, Ingexpert vous accompagne aussi en phase de
              <strong>conception de systèmes</strong> au travers de l’ingénierie SLI.
              Le soutien est défini <strong>dès l’identification du besoin utilisateur</strong> et intégré au système
              principal.
            </p>
          </div>
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Objectif</h3>
            <p style="margin:0; line-height:1.7;">
              Définir tout ce qui est adjoint au système principal pour assurer son fonctionnement :
              ressources, outillages, rechanges, documentation, formation, coûts, etc.
            </p>
          </div>
        </div>

        <h2 class="section-title">Livrables typiques SLI</h2>
        <ul class="list">
          <li>Plan SLI</li>
          <li>Profil d’emploi</li>
          <li>Concept de soutien</li>
          <li>Arbolog</li>
          <li>Liste des tâches de maintenance</li>
          <li>Liste des outillages</li>
          <li>Liste des rechanges (LAR / LAI)</li>
          <li>Définition des ressources</li>
          <li>Préconisation EMST</li>
          <li>Documentation et <a
              href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">formation</a>
          </li>
          <li><a href="https://dev.ingexpert.com/maintexpert/php_theorie_maintenance__plan_de_maintenance.php">Plan de
              maintenance</a></li>
          <li>Coût du soutien</li>
        </ul>

        <h2 class="section-title">Ce que “faire du SLI” permet d’obtenir</h2>
        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Disponibilité opérationnelle</h3>
            <p style="margin:0; line-height:1.7;">
              Une meilleure disponibilité grâce à des choix de conception influencés par la maintenance et le soutien.
            </p>
          </div>
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Maîtrise du coût global</h3>
            <p style="margin:0; line-height:1.7;">
              Une meilleure maîtrise du
              <a href="https://dev.ingexpert.com/maintexpert/php_theorie_maintenance__lcc_cout_global.php">coût global
                de possession (LCC)</a>.
              La maintenance est prise en compte comme une performance à part entière.
            </p>
          </div>
        </div>

        <h2 class="section-title">3) Normalisation</h2>
        <p>Normes et recommandations en rapport avec le sujet :</p>
        <ul class="list">
          <li>Norme française <strong>X 50-420</strong> (décembre 1994) – « Management des systèmes – Soutien logistique
            intégré – Concepts généraux »</li>
          <li>Recommandation <strong>RG.Aéro 000 76</strong> (novembre 1997) – « Management de programme,
            recommandations pour la mise en œuvre du SLI »</li>
        </ul>

      </div>
    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>