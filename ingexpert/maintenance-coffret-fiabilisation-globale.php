<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fiabilisation globale – Approche globale, objectifs et moyens</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le diagnostic et le déploiement d’améliorations de fiabilisation par une approche globale : objectifs, maintenabilité, choix matériel, redondance, montage série/parallèle, collecte des données, calculs de probabilité.">
  <meta name="keywords"
    content="fiabilisation globale, fiabilité, maintenabilité, disponibilité, redondance, montage série, montage parallèle, calculs de probabilité, collecte données, code panne, défaillances conditionnelles, MTBF, maintenance, diagnostic, ingénierie">
  <meta name="robots" content="all">
  <meta name="classification" content="fiabilisation, fiabilité, maintenance, ingénierie">
  <meta name="author" content="Laloux Guillaume, consultant maintenance">
  <meta name="generator" content="Laloux Ingexpert maintenance">
  <meta name="language" content="fr">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS local (pas de ressources externes) -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css">

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
</head>
<style>
  /* Fiabilisation - Globale (petits ajouts) */
  .hint {
    margin-top: 12px;
    padding: 12px 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.65);
    line-height: 1.7;
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
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">›</span>
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php">Notre activité</a>
        <span class="sep">›</span>
        <span class="active">Fiabilisation – approche globale</span>
      </p>

      <h1 class="page-title">Missions de fiabilisation — approche globale</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            Ingexpert réalise des études de fiabilité via une <strong>approche globale</strong> :
            on définit d’abord des <strong>objectifs clairs</strong>, puis on met en place les
            <strong>moyens</strong> (données, modèles, calculs, outils) pour les atteindre.
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
        <h2 class="block-title">Définir les objectifs et les moyens</h2>

        <div class="content-box">
          <p>
            De façon large, il est essentiel de clarifier les objectifs et de structurer les actions
            pour les atteindre. Cela passe notamment par les questions suivantes :
          </p>

          <ul class="bullets">
            <li><strong>Quelle fiabilité</strong> viser ?</li>
            <li><strong>Quelle maintenabilité</strong> (temps d’intervention, accès, outillage) ?</li>
            <li><strong>Quel matériel</strong> et quelles contraintes d’exploitation ?</li>
            <li><strong>Quelle redondance</strong> (simple, double, N+1, etc.) ?</li>
            <li><strong>Quel montage</strong> (série ou parallèle) ?</li>
            <li><strong>Quelles informations collecter</strong> (code panne, défaillances conditionnelles, symptômes,
              contexte) ?</li>
            <li><strong>Quelle durée de mission</strong> et quels jalons ?</li>
            <li>…</li>
          </ul>

          <p class="hint">
            Nous réalisons les <strong>calculs de probabilité</strong>, et pouvons développer des
            <strong>outils / logiciels spécifiques</strong> pour modéliser, simuler, ou automatiser
            les analyses selon vos besoins.
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