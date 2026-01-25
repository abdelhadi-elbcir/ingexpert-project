<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fiabilisation – Améliorez la fiabilité de vos équipements</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le diagnostic et le déploiement d’améliorations de fiabilisation de vos équipements par les études de maintenance, sur tout le cycle de vie.">
  <meta name="keywords"
    content="fiabilisation, fiabilité, MTBF, taux de défaillance, maintenance, diagnostic, AMDEC, HAZOP, disponibilité, maintenabilité">
  <meta name="robots" content="all">
  <meta name="classification" content="fiabilisation, fiabilité, maintenance">
  <meta name="author" content="Laloux Guillaume, consultant maintenance">
  <meta name="generator" content="Laloux Ingexpert maintenance">
  <meta name="language" content="fr">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS local (pas de ressources externes) -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css">

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
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
        <span class="active">Fiabilisation</span>
      </p>

      <h1 class="page-title">Missions de fiabilisation</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            La <strong>fiabilité</strong> est un indicateur essentiel de la maintenance.
            Forts d’une expérience solide, nous vous accompagnons dans la <strong>fiabilisation</strong>
            de vos équipements via une approche structurée et progressive.
          </p>

          <p class="lead">
            L’objectif de <strong>disponibilité</strong> (MTBF, taux de défaillance) se prépare
            dès la conception, puis se consolide par les essais et le retour d’expérience en exploitation.
            Ingexpert vous accompagne <strong>tout au long du cycle de vie</strong> de vos équipements.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Demander un devis / contact
            </a>
          </div>
        </div>

        <div class="hero-media">
          <img src="/ingexpert/images/coffret-fiabilisation-maintenance.jpg" alt="Coffret fiabilisation maintenance"
            loading="lazy">
        </div>
      </section>

      <!-- Parcours / cartes -->
      <section class="block">
        <h2 class="block-title">Nos interventions par phase</h2>

        <div class="grid-cards">
          <a class="card-link" href="maintenance-coffret-fiabilisation-conception.php">
            <div class="card">
              <h3>Fiabilisation à la conception</h3>
              <p>Calcul prévisionnel de fiabilité, modèles, arbres de défaillances, AMDEC, etc.</p>
              <span class="chip">Phase conception</span>
            </div>
          </a>

          <a class="card-link" href="maintenance-coffret-fiabilisation-test.php">
            <div class="card">
              <h3>Fiabilisation par des tests</h3>
              <p>MTBF / taux de panne sur base d’essais labo ou conditions réelles encadrées.</p>
              <span class="chip">Phase test</span>
            </div>
          </a>

          <a class="card-link" href="maintenance-coffret-fiabilisation-fonctionnement.php">
            <div class="card">
              <h3>Fiabilisation en fonctionnement</h3>
              <p>Fiabilité opérationnelle, retour d’expérience, lois de probabilité (Weibull, exponentielle…).</p>
              <span class="chip">Phase exploitation</span>
            </div>
          </a>

          <a class="card-link" href="maintenance-coffret-fiabilisation-globale.php">
            <div class="card">
              <h3>Approche globale</h3>
              <p>Objectifs, redondance, architecture série/parallèle, collecte des données, calculs de probabilité.</p>
              <span class="chip">Approche élargie</span>
            </div>
          </a>
        </div>
      </section>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <!-- JS local -->
  <script src="/assets/js/site.js"></script>
</body>

</html>