<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Gestion de stock maintenance : pièces de rechange & magasin | Ingexpert</title>

  <meta name="description"
    content="Optimisez votre gestion de stock maintenance (pièces de rechange / magasin) : codification, seuils, approvisionnement, rotation, sur-stockage, indicateurs et méthodes de réapprovisionnement." />
  <meta name="keywords"
    content="gestion de stock maintenance, pièces de rechange, magasin maintenance, rotation stock, surstockage, réapprovisionnement, stock de sécurité, point de commande, codification articles" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <!-- Canonical: adapte au vrai fichier si besoin -->
  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-stock-magasin.php" />

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
      grid-template-columns: 280px 1fr;
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

    body.theme-ingexpert .list {
      margin: 10px 0 0;
      padding-left: 0;
      list-style: none;
      display: grid;
      gap: 10px;
    }

    body.theme-ingexpert .list li {
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

    body.theme-ingexpert .sublist {
      margin-top: 8px;
      display: grid;
      gap: 8px;
    }

    body.theme-ingexpert .subitem {
      display: flex;
      gap: 10px;
      padding: 10px;
      border-radius: 12px;
      border: 1px dashed rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .03);
      font-weight: 700;
    }

    body.theme-ingexpert .dash {
      width: 10px;
      height: 2px;
      background: var(--ingexpert-primary);
      margin-top: 10px;
      flex: 0 0 auto;
      border-radius: 999px;
      opacity: .9;
    }

    @media (max-width: 980px) {
      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }

      body.theme-ingexpert .media {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .media img {
        max-width: 420px;
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
        <span class="active">Gestion de stock</span>
      </p>

      <div class="hero">
        <h1>Missions liées à la gestion de stock</h1>
        <p>
          Optimisez la gestion des pièces de rechange (magasin) : codification, seuils, rotation,
          sur-stockage / sous-stockage, réapprovisionnement et indicateurs.
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
          <img src="./images/maintenance-stock-cout-rotation-rechange-consommable.jpg"
            alt="Gestion de stock maintenance : coûts, rotation, pièces de rechange" loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Objectif</h2>
            <p style="margin-top:0; line-height:1.75;">
              Ingexpert vous accompagne dans l’amélioration du management de votre gestion de stock
              (aussi appelée gestion des pièces de rechange / pièces détachées), depuis la mise en stock
              jusqu’à la sortie, la radiation et l’optimisation des règles.
            </p>
          </div>
        </div>

        <h2 class="section-title">Processus de gestion de stock</h2>

        <ul class="list" aria-label="Processus gestion de stock">
          <li>
            <span class="dot" aria-hidden="true"></span>
            <div>
              <strong>Mise en stock d’un nouvel article</strong>
              <div class="sublist" aria-label="Détails mise en stock">
                <div class="subitem">
                  <span class="dash" aria-hidden="true"></span>
                  <span>Définition de la codification : référence, désignation longue/courte, référence
                    constructeur</span>
                </div>
                <div class="subitem">
                  <span class="dash" aria-hidden="true"></span>
                  <span>Définition des seuils (mini, réapprovisionnement)</span>
                </div>
              </div>
            </div>
          </li>

          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Approvisionnement des articles</span>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Gestion du magasin</span>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Réception</span>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Magasinage et différents types de stocks</span>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Réservation et sortie du stock</span>
          </li>
          <li>
            <span class="dot" aria-hidden="true"></span>
            <span>Radiation d’un article</span>
          </li>
        </ul>

        <h2 class="section-title">Points d’expertise / optimisation</h2>

        <ul class="list" aria-label="Optimisations gestion stock">
          <li><span class="dot" aria-hidden="true"></span><span>Identification du sur-stockage ou sous-stockage</span>
          </li>
          <li><span class="dot" aria-hidden="true"></span><span>Analyse des taux de rotation et indicateurs</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Modes de réapprovisionnement : point de commande, stock
              de sécurité, stock minimum</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Quantités économiques de commande</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Lois statistiques : normale, Poisson, exponentielle,
              Weibull…</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Utilisation / mise au point de logiciels experts</span>
          </li>
          <li><span class="dot" aria-hidden="true"></span><span>Règles de codification : familles / sous-familles
              d’équipements</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Suppression des doublons (codifications
              différentes)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Mutualisation de stocks</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Stocks de consignation</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Création de magasins virtuels</span></li>
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