<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fiabilisation en phase de fonctionnement – Fiabilité opérationnelle</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le diagnostic et le déploiement d’améliorations de fiabilisation de vos équipements en phase de fonctionnement : fiabilité opérationnelle, MTBF, Weibull, analyses de risques, SIL.">
  <meta name="keywords"
    content="fiabilisation, phase fonctionnement, fiabilité opérationnelle, MTBF, taux de panne, retour d'expérience, Weibull, loi exponentielle, poisson, AMDEC, FMECA, HAZOP, analyse de risque, LOPA, IEC 61508, IEC 61511, SIF, SIL, SIS, PFH, PFD, MTTR, SFF, HFT, CCF">
  <meta name="robots" content="all">
  <meta name="classification" content="fiabilisation, fiabilité, sécurité, maintenance, exploitation">
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
  /* =========================
   Fiabilisation - Fonctionnement
========================= */

  .tools-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    margin-top: 12px;
  }

  .tool-card {
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.7);
  }

  .tool-card h3 {
    margin: 0 0 8px;
    font-size: 1rem;
    font-weight: 900;
  }

  .small {
    margin: 0;
    opacity: 0.85;
    line-height: 1.6;
    font-size: 0.95rem;
  }

  .bullets.compact li {
    margin: 6px 0;
  }

  @media (max-width: 900px) {
    .tools-grid {
      grid-template-columns: 1fr;
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
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">›</span>
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php">Notre activité</a>
        <span class="sep">›</span>
        <span class="active">Fiabilisation – phase de fonctionnement</span>
      </p>

      <h1 class="page-title">Missions de fiabilisation en phase de fonctionnement</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            En exploitation, la fiabilisation s’appuie sur le <strong>retour d’expérience</strong> et les
            <strong>historiques de maintenance</strong> pour affiner le MTBF, mettre à jour le plan de maintenance
            et optimiser l’utilisation (voire la conception) de vos équipements.
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

      <!-- Bloc 1 -->
      <section class="block">
        <h2 class="block-title">1 — Fiabilité opérationnelle & MTBF (en exploitation)</h2>

        <div class="content-box">
          <p>
            Sur la base des <strong>historiques de maintenance</strong> et plus largement des analyses du
            <strong>retour d’expérience</strong>, Ingexpert affine la définition du <strong>MTBF</strong> (ou taux de
            panne).
            Ces études permettent d’actualiser votre <strong>plan de maintenance</strong>, et d’identifier des pistes
            d’amélioration (conception, réglages, usage, conditions de fonctionnement).
          </p>

          <p>
            Il s’agit d’études de <strong>fiabilité opérationnelle</strong> : évaluation des équipements en exploitation
            normale, dépendante des conditions réelles d’utilisation.
          </p>
        </div>
      </section>

      <!-- Bloc 2 -->
      <section class="block">
        <h2 class="block-title">2 — Lois de probabilité utilisées</h2>

        <div class="content-box">
          <p>Ingexpert réalise des analyses de fiabilité en s’appuyant notamment sur :</p>

          <ul class="bullets">
            <li><strong>loi de Weibull</strong> (λ variable) ;</li>
            <li><strong>loi exponentielle / loi de Poisson</strong> (λ constant).</li>
          </ul>

          <p class="hint">
            L’objectif est de caractériser la dynamique de défaillance et d’orienter les actions
            (préventif, prédictif, modifications, rechanges, etc.).
          </p>
        </div>
      </section>

      <!-- Bloc 3 -->
      <section class="block">
        <h2 class="block-title">3 — AMDEC / FMECA / HAZOP basées sur le retour d’expérience</h2>

        <div class="content-box">
          <p>
            Les études de fiabilité et de détermination des MTBF peuvent être réalisées dans le cadre
            d’études <strong>AMDEC</strong> (aussi appelé <strong>FMECA</strong> en anglais) ou <strong>HAZOP</strong>.
            Le retour d’expérience sera exploité pour identifier les sources potentielles de danger,
            estimer les <strong>criticités</strong> et les <strong>occurrences</strong>, puis définir les actions
            de maîtrise.
          </p>
        </div>
      </section>

      <!-- Bloc 4 -->
      <section class="block">
        <h2 class="block-title">4 — Études de risques & sécurité fonctionnelle (SIF / SIL)</h2>

        <div class="content-box">
          <p>
            Ingexpert réalise des <strong>analyses de risques</strong> / <strong>études de dangers</strong> s’appuyant
            notamment sur les normes internationales de sécurité fonctionnelle
            <strong>CEI/IEC 61508</strong> et <strong>CEI/IEC 61511</strong>.
            Ces référentiels définissent une démarche d’analyse du niveau d’intégrité d’un système de sécurité,
            permettant d’identifier les <strong>SIF</strong> (fonctions instrumentées de sécurité) et de définir leur
            <strong>SIL</strong> (niveau d’intégrité de sécurité).
          </p>

          <div class="tools-grid">
            <div class="tool-card">
              <h3>Outils utilisés</h3>
              <ul class="bullets compact">
                <li>graphe de risque ;</li>
                <li>grille de criticité ;</li>
                <li>approche quantitative <strong>LOPA</strong> (Layer of Protection Analysis).</li>
              </ul>
            </div>

            <div class="tool-card">
              <h3>Indicateurs / notions</h3>
              <p class="small">
                FMDSE, MTBF, MTTR, DC, PFD, PFH, HFT, SFF, CCF, SIF, SIL, PL, SIS, SRECS, etc.
              </p>
            </div>
          </div>

          <p class="hint">
            Certaines analyses sont requises dans des contextes réglementaires ou industriels (ex. sites Seveso),
            ou dans le cadre de demandes “sécurité fonctionnelle” et “sûreté de fonctionnement”.
          </p>
        </div>
      </section>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>
</body>

</html>