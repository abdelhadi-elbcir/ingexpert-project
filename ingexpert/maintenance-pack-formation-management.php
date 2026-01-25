<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Formation management de la maintenance | Ingexpert</title>

  <meta name="description"
    content="Formation Ingexpert au management de la maintenance : politique et stratégie, processus, ISO 9001, indicateurs et tableaux de bord, amélioration continue, organisation et fonctions du service maintenance." />
  <meta name="keywords"
    content="formation management maintenance, ISO 9001, stratégie maintenance, processus maintenance, indicateurs maintenance, tableau de bord maintenance, amélioration continue, EN9100, IATF 16949, TL9000" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-management.php" />

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
        <span class="active">Management de la maintenance</span>
      </p>

      <div class="hero">
        <h1>Formation au management de la maintenance</h1>
        <p>
          Un enseignement global des bonnes pratiques (référentiels qualité + situations concrètes) :
          politique & stratégie, processus, organisation, indicateurs, amélioration continue et plan d’actions.
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander le programme / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">Voir toutes
            les formations</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-stock.php">Formation gestion de
            stock</a>
        </div>
      </div>

      <div class="card content-box">
        <div class="grid">
          <img src="./images/formation-management-maintenance.jpg" alt="Formation au management de la maintenance"
            loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Objectifs de la formation</h2>
            <p style="margin-top:0; line-height:1.75;">
              Le management de la maintenance est enseigné en abordant la <strong>totalité des bonnes pratiques</strong>
              de façon cohérente et opérationnelle (plutôt qu’une simple liste d’outils).
              La formation s’appuie sur des référentiels de management (ex. <strong>ISO 9001</strong>, EN9100,
              IATF 16949 / ISO TS 16949, TL9000) et traite la politique maintenance, la stratégie, les processus,
              l’organisation, la définition des rôles, ainsi que l’<strong>amélioration continue</strong>.
            </p>

            <div class="kpis" role="list" aria-label="Informations formation">
              <div class="kpi" role="listitem">
                <strong>Public</strong>
                <span>Managers, responsables maintenance, méthodes, responsables techniques</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Résultat</strong>
                <span>Un cadre clair + tableau de bord + plan d’actions priorisé</span>
              </div>
              <div class="kpi" role="listitem">
                <strong>Approche</strong>
                <span>Cas concrets, outils au bon moment, cohérence globale</span>
              </div>
            </div>
          </div>
        </div>

        <h2 class="section-title">Contenu (exemples de modules)</h2>
        <ul class="list" aria-label="Contenu formation management maintenance">
          <li><span class="dot" aria-hidden="true"></span><span>Référentiels (ISO 9001, EN9100, IATF 16949, TL9000) et
              mise en pratique en maintenance</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Politique maintenance : objectifs, périmètre, priorités,
              alignement avec le business</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Stratégie maintenance : préventif / correctif /
              conditionnel, criticité, arbitrages</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Processus & organisation : rôles, fiches de poste,
              interfaces (production, achats, QSE)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Amélioration continue : déploiement des bonnes pratiques
              et pilotage du progrès</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Indicateurs essentiels : définition, règles de calcul,
              tableaux de bord, rituels de suivi</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Fonctions clés du service maintenance : stock,
              formation, achats, contrats, sous-traitance</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Conclusion opérationnelle : plan d’actions (si
              stagiaires en poste) + priorisation</span></li>
        </ul>

        <h2 class="section-title">Livrables possibles</h2>
        <ul class="list" aria-label="Livrables formation">
          <li><span class="dot" aria-hidden="true"></span><span>Support de formation + checklists “bonnes
              pratiques”</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Trame de politique & stratégie maintenance (adaptable au
              site)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Modèle d’indicateurs + exemple de tableau de bord (KPI &
              rituels)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Plan d’actions priorisé (quick wins + chantiers
              structurants)</span></li>
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