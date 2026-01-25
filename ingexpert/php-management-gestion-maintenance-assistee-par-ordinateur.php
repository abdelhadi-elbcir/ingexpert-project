<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>MMAO : Management de la Maintenance Assistée par Ordinateur | Ingexpert</title>

  <meta name="description"
    content="Ingexpert présente le concept MMAO (Management de la Maintenance Assistée par Ordinateur) : une approche basée sur un référentiel, complémentaire à la GMAO, pour piloter le management et le progrès." />
  <meta name="keywords"
    content="MMAO, GMAO, management maintenance, logiciel maintenance, référentiel, ISO 9001, audit maintenance, diagnostic maintenance" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical"
    href="https://dev.ingexpert.com/ingexpert/php-management-gestion-maintenance-assistee-par-ordinateur.php" />
  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    body.theme-ingexpert .hero {
      padding: 18px 18px 6px;
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 18px;
      background: rgba(135, 180, 195, .08);
      margin-bottom: 16px;
    }

    body.theme-ingexpert .hero h1 {
      margin: 0 0 6px;
      font-size: 1.65rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
      line-height: 1.2;
    }

    body.theme-ingexpert .hero p {
      margin: 0;
      font-weight: 750;
      opacity: .92;
      line-height: 1.6;
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
      font-size: 1.2rem;
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

    body.theme-ingexpert .media {
      display: grid;
      grid-template-columns: 170px 1fr;
      gap: 14px;
      align-items: center;
      margin-top: 10px;
    }

    body.theme-ingexpert .media img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      border: 1px solid rgba(0, 0, 0, .08);
      background: #fff;
    }

    body.theme-ingexpert .small {
      font-size: .92rem;
      opacity: .85;
    }

    @media (max-width: 820px) {
      body.theme-ingexpert .grid-2 {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .media {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .hero h1 {
        font-size: 1.4rem;
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
        <span class="active">Méthodologies Ingexpert</span>
        <span class="sep">›</span>
        <span class="active">MMAO</span>
      </p>

      <div class="hero">
        <h1>MMAO</h1>
        <p>Management de la Maintenance Assistée par Ordinateur</p>
        <p class="small">Une approche orientée <strong>référentiel</strong>, <strong>management</strong> et
          <strong>progrès</strong>.</p>
      </div>

      <div class="card content-box">

        <h2 class="section-title">Définition</h2>
        <p class="note">
          Ingexpert a créé la terminologie <strong>MMAO</strong>® : <strong>Management</strong> de la
          <strong>Maintenance</strong> <strong>Assistée</strong> par <strong>Ordinateur</strong>.
        </p>

        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">GMAO : “gérer” la maintenance</h3>
            <p style="margin:0; line-height:1.7;">
              La <strong>GMAO</strong>® (marque déposée) désigne une famille d’outils informatiques permettant de
              <strong>gérer</strong> la maintenance : saisie et suivi des interventions, données, historiques, etc.
            </p>
            <p class="small" style="margin-top:10px;">
              Le terme “gérer” n’étant pas défini de façon universelle par les référentiels, chaque éditeur
              positionne ses fonctionnalités selon sa vision et les demandes clients.
            </p>
          </div>

          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">MMAO : “manager” la maintenance</h3>
            <p style="margin:0; line-height:1.7;">
              Après avoir défini un <strong>management</strong> basé sur un <strong>référentiel</strong>,
              il devient possible de définir un outil de <strong>MMAO</strong> : support complet du management,
              des exigences et du <strong>plan de progrès</strong>.
            </p>
            <p class="small" style="margin-top:10px;">
              Objectif : un langage commun, utilisable par toute entreprise, dans une logique universelle.
            </p>
          </div>
        </div>

        <h2 class="section-title">Pourquoi un outil basé sur un référentiel ?</h2>
        <p class="note">
          Un outil MMAO doit servir de support au management de la maintenance, pas seulement à l’enregistrement
          des interventions, mais à la structuration, au pilotage et à l’amélioration.
        </p>

        <h2 class="section-title">Aller plus loin</h2>

        <div class="media">
          <a href="https://dev.ingexpert.com/ingexpert/php_management_maintenance__diagnostic.php"
            style="display:block;">
            <img src="./images/management-maintenance-assistee-ordinateur-GMAO.jpg"
              alt="Management de la maintenance basé sur ISO 9001 - Ingexpert" />
          </a>
          <div>
            <h3 style="margin:0 0 8px; font-weight:950;">Management de la maintenance (référentiel ISO 9001)</h3>
            <p style="margin:0; line-height:1.7;">
              Approfondissez vos connaissances sur le management de la maintenance basé sur l’ISO 9001 :
              cliquez sur l’image pour accéder à la présentation.
            </p>
            <div class="cta">
              <a class="primary" href="https://dev.ingexpert.com/ingexpert/php_management_maintenance__diagnostic.php">
                Voir la présentation
              </a>
            </div>
          </div>
        </div>

        <div class="media">
          <a href="https://dev.ingexpert.com/enligne/php_management_maintenance__outil-diagnostic.php"
            style="display:block;">
            <img src="./images/maintenance-audi-management-maintenance.jpg"
              alt="Audit en ligne du management de la maintenance - Ingexpert" />
          </a>
          <div>
            <h3 style="margin:0 0 8px; font-weight:950;">Audit / diagnostic en ligne</h3>
            <p style="margin:0; line-height:1.7;">
              Vous pouvez réaliser un audit en ligne de votre management de la maintenance (et donc de votre GMAO).
              Cliquez sur l’image pour y accéder.
            </p>
            <div class="cta">
              <a class="primary"
                href="https://dev.ingexpert.com/enligne/php_management_maintenance__outil-diagnostic.php">
                Accéder à l’outil en ligne
              </a>
            </div>
          </div>
        </div>

        <h2 class="section-title">Ressource : éditeurs de GMAO</h2>
        <p class="small" style="margin:0; line-height:1.7;">
          (1) Ingexpert met à disposition la liste des éditeurs de GMAO :
          <a href="https://dev.ingexpert.com/enligne/php_editeur_gmao_maintenance.php">cliquez ici pour y accéder</a>.
        </p>

      </div>
    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>