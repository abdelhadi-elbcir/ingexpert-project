<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>La symbolique du logo Ingexpert – Conseil, formation et accompagnement en maintenance</title>

  <meta name="description"
    content="Présentation du logo Ingexpert et de sa symbolique (le labyrinthe). Conseil, formation et accompagnement en maintenance pour tous secteurs d’activité.">
  <meta name="keywords"
    content="logo ingexpert, symbolique du logo, labyrinthe, conseil maintenance, formation maintenance, accompagnement, coaching, expert maintenance">
  <meta name="robots" content="all">
  <meta name="classification" content="maintenance, conseil, formation, accompagnement, identité, logo, symbolique">
  <meta name="author" content="Laloux Guillaume, consultant maintenance">
  <meta name="generator" content="Laloux Ingexpert maintenance">
  <meta name="language" content="fr">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <!-- Ingexpert unique styles -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css">

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
</head>
<style>
  /* =========================
   Logo page
========================= */

  .page-lead {
    margin: -6px 0 18px 0;
    font-weight: 800;
    color: rgba(0, 0, 0, 0.70);
  }

  .block-title {
    margin: 18px 0 10px 0;
    font-size: 1.15rem;
    font-weight: 900;
    color: rgba(0, 0, 0, 0.88);
  }

  .logo-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 16px;
  }

  .logo-card {
    margin: 0;
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(135, 180, 195, 0.22);
    background: rgba(135, 180, 195, 0.06);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .logo-card img {
    max-height: 320px;
    width: auto;
  }

  .hero-figure {
    margin: 18px 0 0 0;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.08);
  }

  .hero-figure img {
    width: 50%;
    height: auto;
    display: block;
  }

  /* Responsive */
  @media (max-width: 860px) {
    .logo-grid {
      grid-template-columns: 1fr;
    }

    .logo-card img {
      max-height: 260px;
    }
  }
</style>

<body class="theme-ingexpert">

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
  ?>

  <main class="section">
    <div class="container">

      <!-- Breadcrumb -->
      <p class="breadcrumb">
        Vous êtes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert</a>
        <span class="sep">›</span>
        <span class="active">Qui sommes-nous ?</span>
        <span class="sep">›</span>
        <span class="active">La symbolique du logo</span>
      </p>

      <h1 class="page-title">La symbolique du logo Ingexpert</h1>
      <p class="page-lead">Le labyrinthe</p>

      <div class="content-box">

        <!-- Logos grid (replaces old table) -->
        <div class="logo-grid">
          <figure class="logo-card">
            <img
              src="/ingexpert/images/logo-maintenance-conseil-expert-industrie-coaching-specialiste-ingenierie-energie-sav.jpg"
              alt="Ingexpert - logo labyrinthe (version 1)">
          </figure>

          <figure class="logo-card">
            <img
              src="/ingexpert/images/logo-maintenance-conseil-expert-industrie-coaching-specialiste-ingenierie-formation-methodes.jpg"
              alt="Ingexpert - logo labyrinthe (version 2)">
          </figure>
        </div>

        <h2 class="block-title">Idées – Lumière</h2>

        <p>
          Ingexpert vous accompagne dans le dédale d’un projet jusqu’à sa réussite :
        </p>

        <ul class="bullets">
          <li>Le labyrinthe symbolise sa complexité.</li>
          <li>Au centre se trouve la lumière, qui symbolise l’atteinte du résultat.</li>
        </ul>

        <figure class="hero-figure">
          <img src="/ingexpert/images/maintenance-ingexpert-conseil-management.jpg"
            alt="Illustration : Ingexpert conseil management maintenance">
        </figure>

      </div>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>