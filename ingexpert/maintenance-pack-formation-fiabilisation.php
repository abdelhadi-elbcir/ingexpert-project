<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Formation fiabilisation des biens | Ingexpert</title>

  <meta name="description"
    content="Formation Ingexpert à la fiabilisation des biens : distinguer fiabilité et disponibilité, mesurer la fiabilité, définir des objectifs, améliorer la fiabilité. Focus AMDEC, criticité, profils de pannes et calculs associés." />
  <meta name="keywords"
    content="formation fiabilisation, fiabilité, disponibilité, AMDEC, criticité, profil de panne, MTBF, taux de défaillance, maintenance industrielle" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-fiabilisation.php" />

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

    body.theme-ingexpert .tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 10px;
      border-radius: 999px;
      border: 1px solid rgba(135, 180, 195, .35);
      background: rgba(135, 180, 195, .08);
      font-weight: 950;
      margin: 10px 0 0;
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
        <span class="active">Fiabilisation des biens</span>
      </p>

      <div class="hero">
        <h1>Formation – Fiabilisation des biens</h1>
        <p>
          Comprendre la différence <strong>fiabilité</strong> / <strong>disponibilité</strong>, savoir
          <strong>mesurer</strong> la fiabilité,
          la comparer à des objectifs, et surtout <strong>l’améliorer</strong> (focus : <strong>AMDEC</strong>,
          criticité, profils de pannes).
        </p>

        <div class="tag" aria-label="Focus formation">
          🔧 Focus : AMDEC • Criticité • Profil de panne
        </div>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander le programme / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">Voir toutes
            les formations</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-management.php">Formation management
            maintenance</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-stock.php">Formation gestion de
            stock</a>
        </div>
      </div>

      <div class="card content-box">
        <div class="grid">
          <img src="./images/formation-management-maintenance.jpg" alt="Formation fiabilisation des biens"
            loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Objectifs pédagogiques</h2>
            <p style="margin-top:0; line-height:1.75;">
              La fiabilisation des biens (équipements, infrastructures, réseaux, etc.) est parfois confondue
              avec la disponibilité. La formation apporte un éclairage clair pour les distinguer.
              Le but est de définir <strong>comment mesurer la fiabilité</strong>, la comparer à des objectifs,
              et surtout <strong>comment l’améliorer</strong>. Un outil est abordé en détail :
              <strong>l’AMDEC</strong>.
            </p>

            <div class="kpis" role="list" aria-label="Informations formation">
              <div class="kpi" role="listitem">
                <strong>Public</strong>
                <span>Responsables maintenance, méthodes, fiabilité, production, qualité</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Résultat</strong>
                <span>Méthode + AMDEC appliquée + priorisation des actions</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Approche</strong>
                <span>Profil de panne, criticité, calculs + cas concrets</span>
              </div>
            </div>
          </div>
        </div>

        <h2 class="section-title">Contenu de la formation</h2>
        <ul class="list" aria-label="Contenu formation fiabilisation">
          <li><span class="dot" aria-hidden="true"></span><span>Fiabilité vs disponibilité : définitions, pièges
              classiques, impacts sur le pilotage</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Mesure de la fiabilité : notions, indicateurs (ex. MTBF
              / taux de défaillance selon contexte)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Objectifs : comment définir une cible réaliste et
              comparable (historique, parc, contexte)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Profils équipements : familles, usages, contraintes,
              environnement</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Profils de pannes : typologies, modes de défaillance,
              données et qualité des retours</span></li>
          <li><span class="dot" aria-hidden="true"></span><span><strong>AMDEC</strong> : construction, cotations,
              hiérarchisation, plan d’actions</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Criticité : comment identifier les équipements critiques
              et prioriser les efforts</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Calculs associés : principes et méthodes utiles (selon
              le niveau des stagiaires)</span></li>
        </ul>

        <h2 class="section-title">Livrables possibles</h2>
        <ul class="list" aria-label="Livrables formation fiabilisation">
          <li><span class="dot" aria-hidden="true"></span><span>Trame AMDEC (modèle) + exemple de cotation</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Grille d’identification des équipements critiques</span>
          </li>
          <li><span class="dot" aria-hidden="true"></span><span>Liste d’actions de fiabilisation priorisées (quick wins
              + chantiers)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Recommandations pour améliorer la qualité des données de
              pannes</span></li>
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