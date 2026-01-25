<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Audit – Amélioration du management de la maintenance</title>

  <meta name="description"
    content="Ingexpert vous accompagne et réalise des audits du management de votre maintenance pour diagnostiquer, améliorer et progresser durablement.">
  <meta name="keywords"
    content="audit maintenance, audit interne maintenance, diagnostic maintenance, management maintenance, ISO 9001, NF EN 13460, amélioration, bonnes pratiques">
  <meta name="robots" content="all">
  <meta name="classification" content="audit maintenance, diagnostic, management, qualité">
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
   Audit page helpers
========================= */

  .hero-card {
    display: flex;
    gap: 16px;
    align-items: stretch;
    padding: 16px;
    border-radius: 16px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.75);
  }

  .hero-text {
    flex: 1;
  }

  .hero-media {
    width: 360px;
    max-width: 40%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-media img {
    width: 100%;
    height: auto;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.06);
  }

  @media (max-width: 900px) {
    .hero-card {
      flex-direction: column;
    }

    .hero-media {
      width: 100%;
      max-width: 100%;
    }
  }

  .lead {
    margin: 0 0 12px;
    line-height: 1.65;
    font-size: 1.03rem;
  }

  .cta-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
  }

  .btn-primary,
  .btn-ghost {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 14px;
    border-radius: 12px;
    font-weight: 800;
    text-decoration: none;
  }

  .btn-primary {
    background: rgba(255, 150, 160, 0.25);
    border: 1px solid rgba(255, 150, 160, 0.35);
  }

  .btn-ghost {
    background: transparent;
    border: 1px solid rgba(0, 0, 0, 0.12);
  }

  .block {
    margin-top: 18px;
  }

  .block-title {
    margin: 0 0 10px 0;
    font-size: 1.15rem;
    font-weight: 900;
  }

  .quote-box {
    border-left: 4px solid rgba(255, 150, 160, 0.8);
    padding: 12px 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(0, 0, 0, 0.03);
  }

  .quote-title {
    margin: 0 0 6px;
    font-weight: 900;
  }

  .quote-text {
    margin: 0;
    opacity: 0.85;
  }

  .bullets {
    margin: 8px 0 0;
    padding-left: 18px;
  }

  .bullets li {
    margin: 6px 0;
    line-height: 1.55;
  }

  .steps {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
  }

  .step {
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.7);
  }

  .step h3 {
    margin: 0 0 8px;
    font-size: 1.02rem;
    font-weight: 900;
  }

  .step ul {
    margin: 0;
    padding-left: 18px;
  }

  .step li {
    margin: 6px 0;
    line-height: 1.5;
  }

  @media (max-width: 900px) {
    .steps {
      grid-template-columns: 1fr;
    }
  }

  .hint {
    margin-top: 12px;
    opacity: 0.85;
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
        <span class="active">Missions d’Audit</span>
      </p>

      <h1 class="page-title">Missions d’audit</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            L’audit est un <strong>outil de diagnostic</strong> et d’<strong>amélioration</strong> du management de la
            maintenance.
            Il permet d’identifier les écarts, de comprendre leurs causes et de définir un plan d’action concret pour
            progresser.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Demander un devis / contact
            </a>
            <a class="btn-ghost" href="https://dev.ingexpert.com/ingexpert/php_management_maintenance__diagnostic.php"
              target="_blank" rel="noopener">
              Voir la démarche (ouvrage)
            </a>
          </div>
        </div>

        <div class="hero-media">
          <img src="/ingexpert/images/coffret-audit-management-maintenance.png"
            alt="Coffret audit management maintenance" loading="lazy">
        </div>
      </section>

      <!-- Definition / Norm -->
      <section class="block">
        <h2 class="block-title">Définition du mot « audit interne »</h2>

        <div class="quote-box">
          <p class="quote-title">Audit interne de maintenance selon NF EN 13460 (2003)</p>
          <p class="quote-text">
            Liste des critères à vérifier indiquant la performance minimale requise et les résultats obtenus.
          </p>
        </div>
      </section>

      <!-- Approach -->
      <section class="block">
        <h2 class="block-title">Notre approche</h2>

        <div class="content-box">
          <p>
            Pour réaliser ses audits du management de la maintenance, <strong>INGEXPERT</strong> s’appuie sur un
            <strong>référentiel Qualité</strong>. Cette démarche est exigeante car :
          </p>

          <ul class="bullets">
            <li>il n’existe pas de définition totalement normée du management de la maintenance ;</li>
            <li>beaucoup d’approches se limitent à une liste de méthodes/outils non exhaustive.</li>
          </ul>

          <p>
            Chaque audit couvre le rapprochement de deux logiques pour atteindre une meilleure performance :
          </p>

          <ul class="bullets">
            <li><strong>le management de la qualité en maintenance</strong> ;</li>
            <li><strong>le management de la maintenance par la qualité</strong>.</li>
          </ul>

          <p>
            Cela permet par exemple d’améliorer : la cohérence des pratiques, le dialogue avec les autres services,
            et la collaboration avec d’autres sites/entreprises.
          </p>
        </div>
      </section>

      <!-- Example extract -->
      <section class="block">
        <h2 class="block-title">Déroulement d’un audit (extrait synthétisé)</h2>

        <div class="steps">
          <article class="step">
            <h3>1) Phase préparatoire</h3>
            <ul>
              <li>choix du référentiel et collecte des documents ;</li>
              <li>préparation du plan d’audit ;</li>
              <li>information des équipes concernées.</li>
            </ul>
          </article>

          <article class="step">
            <h3>2) Réalisation</h3>
            <ul>
              <li>examen de la situation sur le terrain ;</li>
              <li>relevé des écarts et évaluation de leur impact ;</li>
              <li>recherche des causes ;</li>
              <li>partage des constats avec les équipes.</li>
            </ul>
          </article>

          <article class="step">
            <h3>3) Exploitation</h3>
            <ul>
              <li>rapport final et restitution ;</li>
              <li>plan d’action (corrections / améliorations) ;</li>
              <li>audit de suivi si nécessaire.</li>
            </ul>
          </article>
        </div>

        <p class="hint">
          Pour le détail complet de l’analyse du management de la maintenance, voir :
          <a href="https://dev.ingexpert.com/ingexpert/php_management_maintenance__diagnostic.php" target="_blank"
            rel="noopener">
            « Management de la maintenance selon l’ISO 9001 »
          </a>.
        </p>
      </section>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>
</body>

</html>