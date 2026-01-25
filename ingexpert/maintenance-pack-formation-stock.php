<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Formation gestion de stock maintenance | Ingexpert</title>

  <meta name="description"
    content="Formation Ingexpert à la gestion de stock maintenance : calcul du coût de stock, réduction du catalogue, maîtrise du taux de rupture, statistiques de consommation, approvisionnements et paramétrage GMAO." />
  <meta name="keywords"
    content="formation gestion de stock maintenance, pièces de rechange, magasin maintenance, taux de rupture, rotation stock, stock de sécurité, approvisionnement, paramétrage GMAO" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-stock.php" />

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

    body.theme-ingexpert .grid {
      display: grid;
      grid-template-columns: 320px 1fr;
      gap: 16px;
      align-items: start;
    }

    body.theme-ingexpert .grid img {
      width: 100%;
      height: auto;
      border-radius: 16px;
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
    }

    body.theme-ingexpert .kpis {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 10px;
      margin: 14px 0 4px;
    }

    body.theme-ingexpert .kpi {
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
      border-radius: 14px;
      padding: 12px;
    }

    body.theme-ingexpert .kpi strong {
      display: block;
      font-weight: 950;
      color: var(--ingexpert-primary);
      margin-bottom: 4px;
    }

    body.theme-ingexpert .kpi span {
      font-weight: 750;
      opacity: .92;
      line-height: 1.5;
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

    @media (max-width: 980px) {
      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }

      body.theme-ingexpert .grid {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .grid img {
        max-width: 420px;
      }

      body.theme-ingexpert .kpis {
        grid-template-columns: 1fr;
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
        <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">Les
          formations</a>
        <span class="sep">›</span>
        <span class="active">Gestion de stock</span>
      </p>

      <div class="hero">
        <h1>Formation à la gestion de stock (maintenance)</h1>
        <p>
          Réduire le coût de stock tout en maîtrisant le taux de rupture :
          catalogue magasin, consommations, approvisionnements et paramétrage de l’outil (GMAO / suivi).
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander le programme / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-stock-magasin.php">Voir la mission “Gestion de
            stock”</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-management.php">Autres formations</a>
        </div>
      </div>

      <div class="card content-box">
        <div class="grid">
          <img src="./images/formation-management-maintenance.jpg"
            alt="Formation Ingexpert : gestion de stock maintenance" loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Ce que vous allez apprendre</h2>
            <p style="margin-top:0; line-height:1.75;">
              Cette formation vous aide à <strong>calculer le coût de votre stock</strong>, à le comparer à un objectif,
              puis à <strong>réduire ce coût</strong> en diminuant le nombre de pièces référencées au magasin,
              tout en conservant (ou en améliorant) le <strong>taux de rupture</strong>.
              Nous abordons l’analyse des consommations, l’usage possible de lois statistiques, et la mise en place
              d’approvisionnements pertinents. Enfin, nous vous aidons à <strong>mieux paramétrer votre outil</strong>
              (suivi / GMAO), voire à le choisir selon vos besoins.
            </p>

            <div class="kpis" role="list" aria-label="Informations formation">
              <div class="kpi" role="listitem">
                <strong>Public</strong>
                <span>Responsables maintenance, magasin, méthodes, achats</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Objectif</strong>
                <span>Coût ↓, rupture maîtrisée, réappro mieux piloté</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Format</strong>
                <span>Formation + cas pratiques + recommandations</span>
              </div>
            </div>
          </div>
        </div>

        <h2 class="section-title">Contenu (exemples de modules)</h2>
        <ul class="list" aria-label="Contenu formation gestion de stock">
          <li><span class="dot" aria-hidden="true"></span><span>Mesurer le coût de stock et définir un objectif</span>
          </li>
          <li><span class="dot" aria-hidden="true"></span><span>Nettoyer / réduire le catalogue magasin sans dégrader la
              disponibilité</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Analyser les consommations et les causes de
              rupture</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Définir des règles de réappro (point de commande,
              sécurité, mini)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Utiliser (si pertinent) des modèles statistiques pour
              estimer la demande</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Paramétrer l’outil de suivi / GMAO (données, seuils,
              alertes, reporting)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Plan d’action : priorités, quick wins, indicateurs et
              suivi</span></li>
        </ul>

        <h2 class="section-title">Livrables possibles</h2>
        <ul class="list" aria-label="Livrables formation">
          <li><span class="dot" aria-hidden="true"></span><span>Support de formation + checklists opérationnelles</span>
          </li>
          <li><span class="dot" aria-hidden="true"></span><span>Recommandations de paramétrage (seuils, règles,
              KPI)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Modèle d’indicateurs : coût, rotation, rupture, valeur
              dormante</span></li>
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