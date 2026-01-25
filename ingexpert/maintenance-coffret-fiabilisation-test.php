<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fiabilisation – phase de tests (MTBF, essais laboratoire et conditions réelles)</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le calcul des MTBF / taux de panne sur la base de tests en laboratoire ou en conditions réelles encadrées : protocole d’essais, fiabilité accélérée, essais par mort soudaine, outils informatiques adaptés.">
  <meta name="keywords"
    content="fiabilisation test, essais fiabilité, MTBF, taux de panne, essais accélérés, essais laboratoire, protocole test, fiabilité estimée, maintenance, diagnostic, ingénierie">
  <meta name="robots" content="all">
  <meta name="classification" content="fiabilisation, fiabilité, maintenance, essais">
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
        <span class="active">Fiabilisation – phase de tests</span>
      </p>

      <h1 class="page-title">Missions de fiabilisation — phase de tests</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            Ingexpert calcule les <strong>MTBF</strong> (ou taux de panne) sur la base de
            <strong>tests en laboratoire</strong> ou en <strong>conditions réelles encadrées</strong>.
            L’objectif : estimer la fiabilité d’un dispositif ou composant à partir d’essais définis
            par un protocole clair et mesurable.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Demander un devis / contact
            </a>

            <a class="btn-ghost" href="maintenance-coffret-fiabilisation.php">
              Retour fiabilisation (vue globale)
            </a>
          </div>
        </div>

        <div class="hero-media">
          <img src="/ingexpert/images/coffret-fiabilisation-maintenance.jpg" alt="Coffret fiabilisation maintenance"
            loading="lazy">
        </div>
      </section>

      <!-- Contenu -->
      <section class="block">
        <h2 class="block-title">Calcul MTBF sur base d’essais</h2>

        <div class="content-box">
          <p>
            Les campagnes de tests de maintenance peuvent prendre plusieurs formes selon le besoin,
            le niveau de maturité du produit et le contexte industriel.
          </p>

          <ul class="bullets">
            <li><strong>Essais de fiabilité accélérés</strong> (accélération du vieillissement / contraintes maîtrisées)
            </li>
            <li><strong>Essais par mort soudaine</strong> (défaillance brutale / seuils, stress, etc.)</li>
            <li>Autres protocoles adaptés (selon l’objectif, l’environnement, le risque et les normes du domaine)</li>
          </ul>

          <p class="hint">
            Les <strong>outils informatiques appropriés</strong> sont utilisés pour exploiter les résultats,
            consolider les mesures, et produire une estimation robuste de la fiabilité.
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