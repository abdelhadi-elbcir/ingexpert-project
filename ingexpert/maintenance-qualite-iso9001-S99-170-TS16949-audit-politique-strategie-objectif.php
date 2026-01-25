<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Fiabilisation & amélioration de la fiabilité | Ingexpert</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le diagnostic et le déploiement d’améliorations de fiabilisation de vos équipements : conception, tests, phase de fonctionnement, approche globale." />
  <meta name="keywords"
    content="fiabilisation, fiabilité, MTBF, taux de défaillance, maintenance, diagnostic maintenance, amélioration fiabilité, maintenance industrielle" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <!-- Canonical: adapte au vrai fichier si besoin -->
  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation.php" />

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    body.theme-ingexpert .hero {
      padding: 18px 18px 12px;
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 18px;
      background: rgba(135, 180, 195, .08);
      margin-bottom: 16px;
    }

    body.theme-ingexpert .hero h1 {
      margin: 0 0 6px;
      font-size: 1.55rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
      line-height: 1.2;
    }

    body.theme-ingexpert .hero p {
      margin: 0;
      line-height: 1.65;
      font-weight: 750;
      opacity: .92;
    }

    body.theme-ingexpert .cta {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 14px;
    }

    body.theme-ingexpert .cta a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 14px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 950;
      border: 1px solid rgba(135, 180, 195, .45);
      background: #fff;
    }

    body.theme-ingexpert .cta a.primary {
      border-color: var(--ingexpert-primary);
      background: rgba(135, 180, 195, .12);
    }

    body.theme-ingexpert .media {
      display: grid;
      grid-template-columns: 180px 1fr;
      gap: 16px;
      align-items: start;
      margin: 14px 0 4px;
    }

    body.theme-ingexpert .media img {
      width: 100%;
      height: auto;
      border-radius: 16px;
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
    }

    body.theme-ingexpert .section-title {
      margin: 18px 0 10px;
      font-size: 1.15rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
    }

    body.theme-ingexpert .bullets {
      margin: 10px 0 0;
      padding-left: 0;
      list-style: none;
      display: grid;
      gap: 10px;
    }

    body.theme-ingexpert .bullets li {
      display: flex;
      gap: 10px;
      align-items: flex-start;
      padding: 12px;
      border-radius: 14px;
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
      line-height: 1.6;
      font-weight: 750;
    }

    body.theme-ingexpert .dot {
      width: 10px;
      height: 10px;
      border-radius: 999px;
      background: var(--ingexpert-primary);
      margin-top: 6px;
      flex: 0 0 auto;
    }

    body.theme-ingexpert .note {
      border-left: 5px solid var(--ingexpert-primary);
      padding-left: 12px;
      margin: 10px 0 0;
      opacity: .95;
    }

    @media (max-width: 980px) {
      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }

      body.theme-ingexpert .media {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .media img {
        max-width: 320px;
      }
    }
  </style>
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
        <span class="active">Fiabilisation</span>
      </p>

      <div class="hero">
        <h1>Fiabilisation : améliorez la fiabilité de vos équipements</h1>
        <p>
          Diagnostic et déploiement d’actions de fiabilisation sur tout le cycle de vie :
          conception, tests, fonctionnement et approche globale.
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un échange / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-audit-management.php">Voir l’audit</a>
          <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">Voir les
            formations</a>
        </div>
      </div>

      <div class="card content-box">

        <div class="media">
          <img src="https://dev.ingexpert.com/ingexpert/images/coffret-fiabilisation-maintenance.jpg"
            alt="Coffret fiabilisation maintenance Ingexpert" loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Pourquoi la fiabilité est centrale</h2>
            <p style="margin-top:0; line-height:1.75;">
              La fiabilité est un indicateur essentiel de la maintenance.
              Forts de notre expérience, nous vous accompagnons dans la fiabilisation de vos équipements
              dans le cadre d’une approche globale.
            </p>

            <p class="note">
              L’objectif de disponibilité (MTBF, taux de défaillance) doit aussi être pris en compte dès la conception.
              Ingexpert peut intervenir à chaque étape du cycle de vie.
            </p>
          </div>
        </div>

        <h2 class="section-title">Nos interventions selon le cycle de vie</h2>

        <ul class="bullets" aria-label="Offres de fiabilisation">
          <li>
            <span class="dot" aria-hidden="true"></span>
            <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation-conception.php">
              Fiabilisation à la conception : calcul et exigences de fiabilité
            </a>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation-test.php">
              Fiabilisation en phase de tests : calcul et validation par essais
            </a>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation-fonctionnement.php">
              Fiabilisation en phase de fonctionnement : analyse des défaillances et plans d’action
            </a>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-fiabilisation-globale.php">
              Fiabilisation globale : approche élargie d’utilisation du matériel
            </a>
          </li>
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