<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Mentions légales – Conseil, formation et accompagnement en maintenance</title>

  <meta name="description"
    content="Mentions légales Ingexpert. Conseil, formation et accompagnement en maintenance pour tous secteurs d’activité : industrie, BTP, biomédical, transport, énergie, tertiaire.">
  <meta name="keywords"
    content="mentions légales, ingexpert, conseil maintenance, formation maintenance, accompagnement maintenance, audit, ingénieur, industrie, BTP, biomédical">
  <meta name="robots" content="all">
  <meta name="classification"
    content="maintenance, conseil, formation, audit, ingénierie, industrie, tertiaire, biomédical">
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
   Legal page
========================= */

  .legal-box p {
    margin-bottom: 14px;
    font-size: 0.98rem;
  }

  .legal-list {
    margin: 14px 0 18px 0;
    padding-left: 18px;
  }

  .legal-list li {
    margin: 8px 0;
    font-weight: 600;
    color: rgba(0, 0, 0, 0.78);
  }

  .legal-list li strong {
    color: rgba(0, 0, 0, 0.9);
  }
</style>

<body class="theme-ingexpert">

  <?php
  // ✅ Header partagé uniquement
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
  ?>

  <main class="section">
    <div class="container">

      <!-- Breadcrumb -->
      <p class="breadcrumb">
        Vous êtes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert</a>
        <span class="sep">›</span>
        <span class="active">Mentions légales</span>
      </p>

      <h1 class="page-title">Informations légales</h1>

      <div class="content-box legal-box">

        <p>
          Le site
          <a href="https://dev.ingexpert.com" target="_blank" rel="noopener">
            dev.ingexpert.com
          </a>
          est la propriété de <strong>Ingexpert International</strong>,
          Guillaume Laloux étant gérant et directeur de publication.
        </p>

        <ul class="legal-list">
          <li><strong>SIREN :</strong> 450 502 455</li>
          <li><strong>APE (NAF) :</strong> 7490B</li>
          <li><strong>SIRET :</strong> 450 502 455 00014</li>
          <li><strong>RCS :</strong> 450 502 455 (Marseille)</li>
          <li><strong>Forme juridique :</strong> SARL – Capital 7 622 €</li>
          <li><strong>Réf. INSEE :</strong> C13103112559</li>
          <li><strong>TVA intracommunautaire :</strong> FR72 450502455 0014</li>
          <li><strong>DUNS :</strong> 270414308</li>
        </ul>

        <p>
          <strong>Siège social :</strong><br>
          39 portail Romieu<br>
          84240 La Tour d’Aigues – France
        </p>

        <p>
          Le dispositif Internet de la société <strong>Ingexpert</strong> a été conçu
          par Monsieur Guillaume Laloux.
        </p>

        <p>
          Le site est hébergé chez <strong>OVH</strong>,<br>
          2 rue Kellermann, 59100 Roubaix – France.
        </p>

      </div>

    </div>
  </main>

  <?php
  // ✅ Footer partagé uniquement
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <!-- JS global (menu scroll + mobile) -->
  <script src="/assets/js/site.js"></script>

</body>

</html>