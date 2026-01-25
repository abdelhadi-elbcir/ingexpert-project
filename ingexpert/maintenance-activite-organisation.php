<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Organisation & Équipe dirigeante – Conseil, formation et accompagnement en maintenance</title>

  <meta name="description"
    content="Présentation de notre organisation et de l'équipe dirigeante Ingexpert, pour assurer conseil, formation et accompagnement en maintenance pour tous secteurs d’activité.">
  <meta name="keywords"
    content="organisation ingexpert, équipe dirigeante, guillaume laloux, expert maintenance, conseil maintenance, formation maintenance, accompagnement">
  <meta name="robots" content="all">
  <meta name="classification" content="maintenance, organisation, équipe, conseil, formation, audit, ingénierie">
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
   Organisation page layout
========================= */

  .page-subtitle {
    margin: 26px 0 14px 0;
    font-size: 1.35rem;
    font-weight: 900;
    color: var(--ingexpert-primary, #87B4C3);
  }

  /* Info cards grid */
  .info-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-top: 14px;
  }

  .info-card {
    background: rgba(135, 180, 195, 0.06);
    border: 1px solid rgba(135, 180, 195, 0.20);
    border-radius: 14px;
    padding: 14px;
  }

  .info-card h2 {
    margin: 0 0 10px 0;
    font-size: 1.05rem;
    font-weight: 900;
    color: rgba(0, 0, 0, 0.88);
  }

  /* Nested list style */
  .bullets.sub {
    margin-top: 8px;
  }

  /* Responsive */
  @media (max-width: 860px) {
    .info-grid {
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
        <a href="https://dev.ingexpert.com">Accueil Ingexpert</a>
        <span class="sep">›</span>
        <span class="active">Qui sommes-nous ?</span>
        <span class="sep">›</span>
        <span class="active">Équipe dirigeante</span>
      </p>

      <h1 class="page-title">Qui sommes-nous ? – Guillaume Laloux</h1>

      <div class="content-box">

        <p>
          Monsieur Laloux est gérant fondateur de la société <strong>Ingexpert</strong>.
          Expert en management de la maintenance industrielle, tertiaire, biomédicale et transport.
        </p>

        <div class="info-grid">
          <section class="info-card">
            <h2>Formations</h2>
            <ul class="bullets">
              <li>Ingénieur des Mines de Douai</li>
              <li>Formé à l’expertise judiciaire</li>
              <li>DUT Génie mécanique</li>
              <li>CAP dessinateur industriel</li>
            </ul>
          </section>

          <section class="info-card">
            <h2>Contributions</h2>
            <ul class="bullets">
              <li>Ancien Président de la commission de normalisation maintenance X60G</li>
              <li>Livre « Management de la maintenance », AFNOR (2009)</li>
              <li>Articles (Le Nouvel Économiste, AFNOR, Production & Maintenance)</li>
              <li>Conférences</li>
            </ul>
          </section>

          <section class="info-card">
            <h2>Parcours professionnel</h2>
            <ul class="bullets">
              <li>Depuis 34 ans : gérant de la société Ingexpert</li>
              <li>25 à 34 ans :
                <ul class="bullets sub">
                  <li>Directeur technique (pharmacie)</li>
                  <li>Responsable ingénierie (plasturgie)</li>
                  <li>Responsable maintenance (chimique / pharmaceutique)</li>
                </ul>
              </li>
            </ul>
          </section>

          <section class="info-card">
            <h2>Divers</h2>
            <ul class="bullets">
              <li>Service militaire civil : enseignant en Nouvelle-Calédonie</li>
              <li>Projet de fin d’études (6 mois) au Brésil</li>
            </ul>
          </section>

          <section class="info-card">
            <h2>Intérêts</h2>
            <ul class="bullets">
              <li>Inventions (dépôt de brevets)</li>
              <li>Triathlon, cyclisme</li>
              <li>Voyages : USA, Bali, Singapore, Australie, Maroc, Nouvelle-Calédonie, Tahiti, Bolivie, Slovénie,
                Pérou, Croatie, Portugal, Espagne, Allemagne, Italie, Suisse, Belgique, Gabon, Norvège, Angleterre</li>
            </ul>
          </section>
        </div>

      </div>

      <h2 class="page-subtitle">Nos autres experts</h2>

      <div class="content-box">
        <p>
          La société Ingexpert collabore avec les prestataires experts en maintenance suivants :
        </p>

        <ul class="bullets">
          <li><strong>Monsieur Christian Bléas</strong> : expert GMAO et outils informatiques de maintenance</li>
          <li><strong>Monsieur Sylvain Martin</strong> : juriste expert en maintenance</li>
        </ul>
      </div>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>