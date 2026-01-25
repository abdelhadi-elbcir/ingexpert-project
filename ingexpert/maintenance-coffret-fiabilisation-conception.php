<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fiabilisation en phase conception – MTBF, sécurité fonctionnelle, SdF</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le diagnostic et le déploiement d’améliorations de fiabilisation de vos équipements en phase conception : MTBF, sécurité fonctionnelle, sûreté de fonctionnement.">
  <meta name="keywords"
    content="fiabilisation, MTBF, taux de panne, arbre de défaillance, AMDEC, HAZOP, sécurité fonctionnelle, SIL, IEC 61508, IEC 61511, IEC 62061, EN 50126, sûreté de fonctionnement, FMDS">
  <meta name="robots" content="all">
  <meta name="classification" content="fiabilisation, fiabilité, sécurité, maintenance, conception">
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
   Fiabilisation (conception)
========================= */

  .pill-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 12px;
  }

  .pill {
    display: inline-flex;
    padding: 7px 10px;
    border-radius: 999px;
    border: 1px solid rgba(0, 0, 0, 0.10);
    background: rgba(255, 255, 255, 0.75);
    font-weight: 800;
    font-size: 0.86rem;
  }

  .grid-standards {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 12px;
    margin-top: 12px;
  }

  .std-card {
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.7);
  }

  .std-card h3 {
    margin: 0 0 6px;
    font-size: 1rem;
    font-weight: 900;
  }

  .std-card p {
    margin: 0;
    opacity: 0.85;
    line-height: 1.5;
  }

  @media (max-width: 900px) {
    .grid-standards {
      grid-template-columns: 1fr;
    }
  }

  .fmds {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 10px;
    margin-top: 10px;
  }

  .fmds-item {
    padding: 12px 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.7);
    font-weight: 900;
  }

  .fmds-letter {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    border-radius: 10px;
    margin-right: 10px;
    border: 1px solid rgba(255, 150, 160, 0.35);
    background: rgba(255, 150, 160, 0.22);
  }

  @media (max-width: 700px) {
    .fmds {
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
        <span class="active">Fiabilisation – phase conception</span>
      </p>

      <h1 class="page-title">Missions de fiabilisation en phase conception</h1>

      <!-- Hero -->
      <section class="hero-card">
        <div class="hero-text">
          <p class="lead">
            En phase conception, la fiabilisation permet d’anticiper les risques, d’estimer la fiabilité
            prévisionnelle et de sécuriser vos choix techniques <strong>avant</strong> les coûts de modification.
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
          <!-- Mettre l'image en local si possible -->
          <img src="/ingexpert/images/coffret-fiabilisation-maintenance.jpg" alt="Coffret fiabilisation maintenance"
            loading="lazy">
        </div>
      </section>

      <!-- A -->
      <section class="block">
        <h2 class="block-title">A — Calcul de MTBF (taux de panne)</h2>

        <div class="content-box">
          <p>
            Ingexpert détermine la <strong>fiabilité prévisionnelle</strong> de vos équipements au stade de la
            conception,
            à partir d’un modèle mathématique construit à partir des données projet et de la fiabilité des composants.
            Les études s’appuient et s’accompagnent d’<strong>arbres de défaillances</strong> et
            d’<strong>AMDEC</strong>.
          </p>

          <p>
            Nous réalisons des calculs de <strong>MTBF</strong> (ou taux de défaillance) même sans historiques ou tests
            de laboratoire, et complétons l’étude par des analyses de risques pour définir les niveaux de sécurité.
          </p>

          <p>
            Les études de fiabilité et de détermination des MTBF peuvent être intégrées dans des démarches
            <strong>AMDEC</strong> ou <strong>HAZOP</strong> et s’accompagnent des arbres de défaillances associés.
          </p>

          <div class="pill-grid">
            <span class="pill">MIL-HDBK</span>
            <span class="pill">Bellcore / Telcordia SR-332</span>
            <span class="pill">FIDES</span>
            <span class="pill">RIAC 217 Plus</span>
            <span class="pill">IEC TR 62380 (RDF 2000)</span>
            <span class="pill">NSWC (mécanique)</span>
            <span class="pill">NPRD / EIREDA</span>
            <span class="pill">FARADA / AVCO</span>
          </div>
        </div>
      </section>

      <!-- B -->
      <section class="block">
        <h2 class="block-title">B — Calcul de sécurité fonctionnelle</h2>

        <div class="content-box">
          <p>
            Nous vous accompagnons dans la définition des <strong>risques d’apparition de phénomènes dangereux</strong>
            liés à vos SIS (Systèmes Instrumentés de Sécurité) basés sur des systèmes
            <strong>électriques/électroniques/électroniques programmables (E/E/PES)</strong>.
          </p>

          <p>
            Nous déployons les analyses et diagnostics appropriés : <strong>analyse de risque</strong>,
            <strong>étude de danger</strong>, <strong>AMDEC</strong>, <strong>HAZOP</strong>, etc.,
            ainsi que l’identification des moyens de maîtrise.
          </p>

          <div class="quote-box">
            <p class="quote-title">Référence centrale</p>
            <p class="quote-text">
              La norme <strong>CEI/IEC 61508</strong> (parties 1 à 7) est la norme générique permettant
              de déterminer le <strong>SIL</strong> (Safety Integrity Level) de vos barrières SIF.
            </p>
          </div>

          <div class="grid-standards">
            <div class="std-card">
              <h3>IEC 61511</h3>
              <p>Norme sectorielle : process industriels</p>
            </div>
            <div class="std-card">
              <h3>IEC 62061</h3>
              <p>Norme sectorielle : machines</p>
            </div>
            <div class="std-card">
              <h3>IEC 61513</h3>
              <p>Norme sectorielle : nucléaire</p>
            </div>
            <div class="std-card">
              <h3>EN 50126 / 50128 / 50129</h3>
              <p>Secteur ferroviaire</p>
            </div>
          </div>

          <p class="hint">
            Les études présentent une vision systématique intégrant les aléas susceptibles de compromettre
            le fonctionnement : défaillances dangereuses, phénomènes dangereux, etc.
          </p>
        </div>
      </section>

      <!-- C -->
      <section class="block">
        <h2 class="block-title">C — Sûreté de fonctionnement (FMDS / SdF)</h2>

        <div class="content-box">
          <p>
            La sûreté de fonctionnement (FMDS / SdF) consiste à définir et maîtriser les dimensions
            suivantes afin de piloter le niveau de risque :
          </p>

          <div class="fmds">
            <div class="fmds-item"><span class="fmds-letter">F</span> Fiabilité</div>
            <div class="fmds-item"><span class="fmds-letter">M</span> Maintenabilité</div>
            <div class="fmds-item"><span class="fmds-letter">D</span> Disponibilité</div>
            <div class="fmds-item"><span class="fmds-letter">S</span> Sécurité</div>
          </div>

          <p>
            Pour être plus exhaustif, Ingexpert peut également couvrir :
          </p>

          <ul class="bullets">
            <li>durabilité ;</li>
            <li>testabilité.</li>
          </ul>
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