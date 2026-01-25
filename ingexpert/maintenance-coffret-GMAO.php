<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>GMAO – Conseil du management de la maintenance</title>

  <meta name="description"
    content="Présentation de nos missions de conseil liées à la GMAO. Nous vous accompagnons dans l'amélioration du management de votre maintenance par le conseil, la formation et le coaching.">
  <meta name="keywords"
    content="GMAO, maintenance, management maintenance, audit, conseil, formation, coaching, déploiement GMAO, cahier des charges">
  <meta name="robots" content="all">
  <meta name="classification" content="GMAO, maintenance, conseil, audit">
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
        <span class="active">GMAO</span>
      </p>

      <h1 class="page-title">Missions liées à la GMAO</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            Nous vous accompagnons dans vos projets <strong>GMAO</strong> pour améliorer l’efficacité
            du management de votre maintenance : cadrage, sélection, déploiement, formation,
            et diagnostic en cas de dysfonctionnements.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Demander un devis / contact
            </a>

            <a class="btn-secondary" href="https://dev.ingexpert.com/enligne/php_editeur_gmao_maintenance.php">
              Voir les éditeurs de GMAO
            </a>
          </div>
        </div>

        <div class="hero-media">
          <img src="/ingexpert/images/coffret-audit-management-maintenance.jpg" alt="Missions GMAO – Ingexpert"
            loading="lazy">
        </div>
      </section>

      <!-- Contenu -->
      <section class="block">
        <h2 class="block-title">1 — Acquisition d’une nouvelle GMAO</h2>

        <div class="panel">
          <h3>1.1 Définition & validation des besoins (étude / consultation)</h3>
          <p>
            Ingexpert réalise l’état des lieux permettant de définir les objectifs de votre projet
            d’acquisition d’une GMAO. Nous vous aidons à formaliser le <strong>cahier des charges</strong>,
            éventuellement le dossier d’appel d’offres, et nous pouvons vous accompagner dans le
            <strong>processus de sélection</strong> des éditeurs.
          </p>
          <p>
            Ressource utile :
            <a href="https://dev.ingexpert.com/enligne/php_editeur_gmao_maintenance.php">
              éditeurs de GMAO
            </a>.
          </p>
        </div>

        <div class="panel">
          <h3>1.2 Déploiement</h3>
          <p>
            Nous vous accompagnons sur le <strong>paramétrage</strong> de la GMAO, les <strong>tests</strong>,
            et la <strong>formation</strong> des équipes à son utilisation, afin de garantir l’adoption et
            la qualité des données.
          </p>
        </div>
      </section>

      <section class="block">
        <h2 class="block-title">2 — Reparamétrage ou remplacement de votre GMAO</h2>

        <div class="panel">
          <p>
            Votre GMAO ne vous apporte pas satisfaction ? Nous réalisons un <strong>diagnostic</strong>
            (usage, processus, paramétrage, qualité des données, reporting…) puis proposons un plan
            d’amélioration : reparamétrage, formation, reprise de données, ou étude de remplacement.
          </p>
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