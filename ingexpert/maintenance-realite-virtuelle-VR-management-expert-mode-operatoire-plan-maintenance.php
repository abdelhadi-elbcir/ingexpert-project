<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Réalité virtuelle (VR) appliquée à la maintenance | Ingexpert</title>

  <meta name="description"
    content="Ingexpert applique la réalité virtuelle (VR) à la maintenance : modes opératoires, préparation d’intervention, plan de prévention, sécurité, SAV, formation. Accessible sur smartphone, tablette, PC/Mac, intégrée à la GMAO." />
  <meta name="keywords"
    content="réalité virtuelle maintenance, VR maintenance, modes opératoires, plan de prévention, sécurité, GMAO, documentation technique, formation maintenance, réalité augmentée" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical"
    href="https://dev.ingexpert.com/ingexpert/maintenance-realite-virtuelle-VR-management-expert-mode-operatoire-plan-maintenance.php" />
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

    body.theme-ingexpert .pill-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 10px;
    }

    body.theme-ingexpert .pill {
      display: inline-flex;
      gap: 8px;
      align-items: center;
      padding: 6px 10px;
      border-radius: 999px;
      border: 1px solid rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .10);
      font-weight: 900;
      font-size: .92rem;
    }

    body.theme-ingexpert .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 16px 0;
    }

    body.theme-ingexpert .card-soft {
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 16px;
      padding: 16px;
      background: rgba(135, 180, 195, .06);
    }

    body.theme-ingexpert .section-title {
      margin: 18px 0 10px;
      font-size: 1.15rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
    }

    body.theme-ingexpert .list {
      margin: 0;
      padding-left: 18px;
      line-height: 1.75;
    }

    body.theme-ingexpert .timeline {
      margin-top: 8px;
      border-left: 3px solid rgba(135, 180, 195, .45);
      padding-left: 14px;
      display: grid;
      gap: 10px;
    }

    body.theme-ingexpert .t-item {
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
      border-radius: 14px;
      padding: 12px;
    }

    body.theme-ingexpert .t-item strong {
      display: block;
      margin-bottom: 4px;
    }

    body.theme-ingexpert .media {
      display: grid;
      grid-template-columns: 1fr 320px;
      gap: 16px;
      align-items: start;
      margin-top: 16px;
    }

    body.theme-ingexpert .media img {
      width: 100%;
      height: auto;
      border-radius: 16px;
      border: 1px solid rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .04);
    }

    body.theme-ingexpert .note {
      border-left: 5px solid var(--ingexpert-primary);
      padding-left: 12px;
      margin: 10px 0 0;
      opacity: .95;
    }

    @media (max-width: 980px) {
      body.theme-ingexpert .grid-2 {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .media {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
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
        <span class="active">Réalité virtuelle (VR)</span>
      </p>

      <div class="hero">
        <h1>Réalité virtuelle (VR) en maintenance</h1>
        <p>
          Préparez les interventions “comme si vous y étiez” : documentation, photos, vidéo et modes opératoires réunis
          dans une expérience simple et accessible.
        </p>

        <div class="pill-row" aria-label="Compatibilité">
          <span class="pill">Sans application à installer</span>
          <span class="pill">Smartphone</span>
          <span class="pill">Tablette</span>
          <span class="pill">PC / Mac</span>
          <span class="pill">Intégrable à la GMAO</span>
        </div>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un échange / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-methode-amelioration-projet-indicateur.php">
            Voir les méthodes maintenance
          </a>
        </div>
      </div>

      <div class="card content-box">

        <h2 class="section-title">Pourquoi la VR en maintenance ?</h2>
        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Comprendre avant d’intervenir</h3>
            <p style="margin:0; line-height:1.7;">
              La réalité virtuelle permet aux techniciens de se plonger depuis un écran dans l’univers
              où ils doivent évoluer, et de connaître le site avant l’intervention.
            </p>
          </div>
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Tout est réuni au même endroit</h3>
            <p style="margin:0; line-height:1.7;">
              Cette technologie transcende la vidéo, les photos et la documentation technique :
              elle les réunit, et permet d’y accéder simplement.
            </p>
          </div>
        </div>

        <p class="note">
          Notre réalité virtuelle peut s’intégrer à votre réseau et à vos outils informatiques (dont la GMAO),
          et être accessible depuis cette dernière.
        </p>

        <h2 class="section-title">Les gains en maintenance</h2>
        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Des sites “qui viennent” au technicien</h3>
            <p style="margin:0; line-height:1.7;">
              Désormais ce sont les sites qui se déplacent jusqu’aux techniciens.
              La prise de connaissance du travail à réaliser devient plus fluide et plus naturelle.
            </p>
          </div>
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Formation facilitée</h3>
            <p style="margin:0; line-height:1.7;">
              La compréhension est plus directe que via des photos et des textes disséminés dans plusieurs sources.
              La VR est un complément logique à un bon niveau de méthodes maintenance.
            </p>
          </div>
        </div>

        <h2 class="section-title">Une histoire de maintenance</h2>
        <div class="timeline" aria-label="Timeline">
          <div class="t-item">
            <strong>Jusqu’en 1995</strong>
            Notes sur calepins, documentation constructeur en classeurs, début du CD-Rom.
          </div>
          <div class="t-item">
            <strong>À partir de 1995</strong>
            Documentation dans les ordinateurs. La GMAO fait ses débuts.
          </div>
          <div class="t-item">
            <strong>À partir de 2000</strong>
            Déploiement de la gestion documentaire.
          </div>
          <div class="t-item">
            <strong>À partir de 2004</strong>
            Arrivée des appareils photo dans les services maintenance : meilleure compréhension des rapports,
            modes opératoires… puis convergence progressive vers la GMAO.
          </div>
        </div>

        <p class="note">
          Remarque : certaines sociétés étaient en avance sur ces dates.
        </p>

        <h2 class="section-title">Services connexes à la maintenance</h2>
        <p>La réalité virtuelle que nous proposons peut s’appliquer aussi à :</p>
        <ul class="list">
          <li>Inspection</li>
          <li>Sécurité (plan de prévention, accueil sécurité)</li>
          <li>Qualité</li>
        </ul>

        <h2 class="section-title">Réalité augmentée : à ne pas confondre</h2>
        <div class="card-soft">
          <p style="margin:0; line-height:1.7;">
            La réalité virtuelle ne doit pas être confondue avec la réalité augmentée “en direct”.
            Cette technologie a beaucoup d’avenir mais reste encore balbutiante.
            Ingexpert peut également proposer son application, mais les cas d’utilisation sont plus limités.
          </p>
        </div>

        <h2 class="section-title">Ingexpert pionnière</h2>
        <p>
          Ingexpert a probablement été l’une des premières sociétés à proposer l’application de la réalité virtuelle à
          la maintenance.
          Dans un domaine approchant, Ingexpert a aussi été pionnière en proposant un audit/diagnostic en ligne de la
          maintenance
          (dès 2002, mis gratuitement à disposition des internautes).
        </p>

        <div class="media">
          <div>
            <h2 class="section-title" style="margin-top:0;">Illustration</h2>
            <p style="margin-top:0;">
              Exemple d’illustration VR / documentation / modes opératoires appliqués à la maintenance.
            </p>

            <div class="cta">
              <a class="primary"
                href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
                onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
                Nous contacter
              </a>
              <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation.php">
                Nos formations
              </a>
            </div>
          </div>

          <div>
            <img src="./images/maintenance-realite-virtuelle-VR-methodes-mode-operatoire-fiabilite.jpg"
              alt="Réalité virtuelle en maintenance : méthodes, modes opératoires et fiabilité" loading="lazy" />
          </div>
        </div>

      </div>
    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>