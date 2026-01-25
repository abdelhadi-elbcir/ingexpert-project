<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Nos missions – Conseil du management de la maintenance</title>

  <meta name="description"
    content="Présentation de l'activité d'Ingexpert : conseil, formation et accompagnement en management de la maintenance.">
  <meta name="keywords"
    content="maintenance, conseil, formation, audit, GMAO, fiabilisation, contrats, stock, coaching">
  <meta name="robots" content="all">
  <meta name="classification" content="maintenance, conseil, audit, formation">
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
        <span class="active">Nos missions</span>
      </p>

      <h1 class="page-title">Nos missions</h1>

      <!-- Intro -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            Parmi l’ensemble des missions que peut réaliser Ingexpert, voici quelques
            interventions <strong>standardisées</strong> : conseil, audit, formation, accompagnement,
            optimisation des contrats, fiabilisation, etc.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Demander un devis / contact
            </a>

            <a class="btn-secondary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php">
              Voir l’activité Ingexpert
            </a>
          </div>
        </div>

        <div class="hero-media">
          <img src="/images/maintenance-industrielle-management.jpg" alt="Ingexpert – Expert maintenance"
            loading="lazy">
        </div>
      </section>

      <!-- Liste missions -->
      <section class="block">
        <h2 class="block-title">Missions types</h2>

        <div class="grid-cards">

          <article class="card">
            <h3>Gestion de stock</h3>
            <p>Optimisation, méthodes, organisation et pilotage des stocks maintenance.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-stock-magasin.php">
              Voir la mission →
            </a>
          </article>

          <article class="card">
            <h3>Formations</h3>
            <p>Formations opérationnelles et adaptées à votre contexte (terrain, outils, méthodes).</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation.php">
              Voir les formations →
            </a>
          </article>

          <article class="card">
            <h3>Contrats de maintenance</h3>
            <p>Définition, suivi, optimisation et sécurisation des contrats et prestations.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-contrat.php">
              Voir la mission →
            </a>
          </article>

          <article class="card">
            <h3>Fin de vie de contrat</h3>
            <p>Accompagnement lors de la sortie : reprise, transfert, clauses, risques et continuité.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-fin-contrat.php">
              Voir la mission →
            </a>
          </article>

          <article class="card">
            <h3>Audit</h3>
            <p>Évaluation du management maintenance, constats, écarts, plan d’action et suivi.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-audit-management.php">
              Voir l’audit →
            </a>
          </article>

          <article class="card">
            <h3>GMAO</h3>
            <p>Cadrage, sélection, déploiement, reparamétrage ou remplacement de votre GMAO.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-GMAO.php">
              Voir la mission →
            </a>
          </article>

          <article class="card">
            <h3>Fiabilisation</h3>
            <p>Accompagnement sur le cycle de vie : conception, tests, fonctionnement, approche globale.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation.php">
              Voir la mission →
            </a>
          </article>

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