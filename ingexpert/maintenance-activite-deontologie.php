<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Déontologie – Conseil, formation et accompagnement en maintenance</title>

  <meta name="description"
    content="Déontologie Ingexpert : conseil, formation et accompagnement de clients de toutes tailles et de tous secteurs (industrie, BTP, biomédical, transport, énergie, tertiaire...).">
  <meta name="keywords"
    content="déontologie ingexpert, conseil maintenance, formation maintenance, accompagnement, audit, GMAO, fiabilité, normes, indépendance">
  <meta name="robots" content="all">
  <meta name="classification" content="maintenance, déontologie, conseil, formation, normes, indépendance, qualité">
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
   Deontology list styles
========================= */

  .deonto-list {
    margin: 0;
    padding-left: 18px;
  }

  .deonto-list>li {
    margin: 14px 0;
    line-height: 1.75;
    color: rgba(0, 0, 0, 0.78);
  }

  .deonto-list strong {
    color: rgba(0, 0, 0, 0.92);
  }

  .deonto-list ul {
    margin: 10px 0 0 0;
    padding-left: 18px;
  }

  .deonto-list ul li {
    margin: 8px 0;
    font-weight: 600;
  }

  .deonto-list ul li::marker {
    color: var(--ingexpert-primary, #87B4C3);
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
        <span class="active">Déontologie</span>
      </p>

      <h1 class="page-title">Déontologie</h1>

      <div class="content-box">

        <ol class="deonto-list">
          <li>
            <strong>La qualité des interventions Ingexpert passe avant ses intérêts financiers :</strong>
            <ul>
              <li>L’intérêt du client est primordial.</li>
              <li>Ingexpert a une politique de long terme.</li>
            </ul>
          </li>

          <li>
            <strong>Ingexpert est une société totalement indépendante :</strong>
            aucune alliance n'est établie avec les éditeurs de GMAO, les prestataires de service en maintenance, etc.
          </li>

          <li>
            <strong>La société Ingexpert base ses méthodologies sur les normes</strong>
            et participe à leur évolution.
          </li>

          <li>
            <strong>Le bien-être des personnes</strong> qui appliqueront les préconisations d'Ingexpert est une
            recherche permanente.
          </li>

          <li>
            <strong>Ingexpert veille à réduire son impact :</strong> consommation de papier, CO₂…
            <ul>
              <li>Les moyens de transport et de communication sont adaptés.</li>
            </ul>
          </li>
        </ol>

      </div>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>