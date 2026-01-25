<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Le coaching pour assurer l'amélioration et le progrès de votre management de la maintenance</title>

  <meta name="description"
    content="Ingexpert réalise le coaching individuel ou d'équipe pour assurer les améliorations nécessaires à l'évolution du management de votre maintenance">
  <meta name="keywords"
    content="externalisation, prestataire, coaching maintenance, management maintenance, audit, ingénieur, conseil, amélioration continue, fiabilité, GMAO">
  <meta name="author" content="Laloux Guillaume, consultant maintenance">
  <meta name="robots" content="all">
  <meta name="language" content="fr">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css">

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
</head>

<body class="theme-ingexpert">

  <?php
  // ✅ Shared HEADER only
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
        <span class="active">Missions de Coaching</span>
      </p>

      <h1 class="page-title">MISSIONS DE COACHING</h1>

      <!-- CTA -->
      <div class="page-cta">
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
          onclick="open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;"
          class="cta-card">
          <img src="/ingexpert/images/devis-expert-conseil-maintenance.jpg" alt="Demander un devis">
          <span>Contact / Devis</span>
        </a>
      </div>

      <!-- Image -->
      <div class="media-center">
        <img src="/ingexpert/images/pack-coaching-maintenance.jpg" alt="Pack coaching maintenance" class="hero-image">
      </div>

      <!-- Content -->
      <div class="content-box">
        <p>
          Notre coaching s'adresse particulièrement aux dirigeants et cadres, notamment pour des raisons de coût :
          accompagnement des responsables dans l'accomplissement de leurs fonctions de manager et pour leur permettre
          de mieux se positionner dans leurs environnements.
        </p>

        <p>
          Dans ce cadre, faire appel à un coach Ingexpert est utile pour résoudre l'ensemble des problématiques liées
          au management de la maintenance.
        </p>
      </div>

    </div>
  </main>

  <?php
  // ✅ Shared FOOTER only
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <!-- New global JS (menu scroll + mobile) -->
  <script src="/assets/js/site.js"></script>

</body>

</html>