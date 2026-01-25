<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Fin de vie des contrats de maintenance | Ingexpert</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans la gestion de fin de vie de vos contrats de maintenance : capitaliser l’expérience, auditer le fonctionnement, identifier points forts/faibles et préparer la suite (renouvellement, évolution, mise en concurrence)." />
  <meta name="keywords"
    content="fin de vie contrat maintenance, audit contrat maintenance, sous-traitance maintenance, prestataire maintenance, renouvellement contrat, mise en concurrence, cahier des charges, reporting, partenariat gagnant-gagnant" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-fin-contrat.php" />

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
      grid-template-columns: 360px 1fr;
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

    body.theme-ingexpert .steps {
      margin: 10px 0 0;
      padding-left: 18px;
      line-height: 1.7;
      font-weight: 800;
    }

    body.theme-ingexpert .steps li {
      margin: 6px 0;
    }

    @media (max-width: 980px) {
      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }

      body.theme-ingexpert .grid {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .grid img {
        max-width: 520px;
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
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffrets.php">Nos missions</a>
        <span class="sep">›</span>
        <span class="active">Fin de vie de contrat</span>
      </p>

      <div class="hero">
        <h1>Mission – Fin de vie des contrats de maintenance</h1>
        <p>
          La fin d’un contrat est un <strong>tournant</strong>. Cette mission vise à <strong>capitaliser</strong> les
          informations avant qu’elles ne se perdent, à <strong>auditer</strong> le fonctionnement réel du contrat,
          puis à préparer la suite (conserver, faire évoluer, remettre en concurrence ou remplacer).
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un devis / échange
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-contrat.php">Voir “Contrats”</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffrets.php">Voir toutes les missions</a>
        </div>
      </div>

      <div class="card content-box">
        <div class="grid">
          <img src="./images/maintenance-contrat-prestataire-sous-traitance-fournisseur-fabricant.jpg"
            alt="Fin de vie de contrat de maintenance – audit, capitalisation et préparation de la suite"
            loading="lazy" />

          <div>
            <h2 class="section-title" style="margin-top:0;">Qu’est-ce que le “Coffret fin de vie” ?</h2>
            <p style="margin-top:0; line-height:1.75; font-weight:750;">
              Ingexpert a mis au point un produit spécifique qui s’applique à l’occasion de la fin de la vie
              des contrats de sous-traitance en maintenance. L’objectif : <strong>récupérer et structurer</strong>
              les informations clés (réel vs contractuel) avant qu’elles ne disparaissent (changement de titulaire,
              départ d’interlocuteurs, pertes d’historique, etc.).
            </p>

            <p style="line-height:1.75; font-weight:750;">
              Le “Coffret fin de vie” dresse un état des <strong>points forts</strong>, <strong>points faibles</strong>,
              des évolutions possibles et des améliorations nécessaires. Il s’agit d’un <strong>audit de
                fonctionnement</strong>
              d’un contrat de sous-traitance, prenant en compte l’environnement, les pratiques, les preuves et les
              acteurs.
            </p>
          </div>
        </div>

        <h2 class="section-title">Pourquoi c’est utile ?</h2>
        <ul class="list" aria-label="Bénéfices fin de vie contrat">
          <li><span class="dot" aria-hidden="true"></span><span>Capitaliser l’expérience du contrat avant la
              transition</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Identifier manques, réussites, dérives et causes
              réelles</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Préparer le prochain contrat : clauses, niveaux de
              service, indicateurs</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Renforcer la performance et la continuité de
              service</span></li>
        </ul>

        <h2 class="section-title">Supports d’audit utilisés</h2>
        <ul class="list" aria-label="Supports audit fin de vie">
          <li><span class="dot" aria-hidden="true"></span><span>Les bonnes pratiques de maintenance</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Le contrat de sous-traitance (référence contractuelle
              signée)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>La Qualité (processus, preuves, traçabilité,
              indicateurs)</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Option : la réglementation (si applicable)</span></li>
        </ul>

        <h2 class="section-title">Analyse & synthèse</h2>
        <p style="line-height:1.75; font-weight:750; margin:0;">
          Au-delà d’un compte-rendu d’audit, la mission fournit des <strong>préconisations</strong> en vue d’une
          mise à jour ou refonte du contrat : clarifications, corrections, mécanismes de pilotage, reporting,
          indicateurs et axes d’amélioration.
        </p>

        <h2 class="section-title">Renforcement du partenariat</h2>
        <p style="line-height:1.75; font-weight:750; margin:0 0 10px;">
          Le “Coffret fin de vie” donne une photographie précise de l’état du partenariat (gagnant/gagnant ou non)
          et met en évidence les déséquilibres éventuels. Vous saurez s’il est judicieux de :
        </p>

        <ol class="steps" aria-label="Décisions possibles fin de contrat">
          <li>Conserver votre sous-traitant de maintenance</li>
          <li>Demander à votre sous-traitant d’évoluer (et dans quel cadre)</li>
          <li>Remettre votre sous-traitant en concurrence</li>
          <li>Remplacer votre sous-traitant</li>
        </ol>

        <div class="cta" style="margin-top:14px;">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Parler de votre fin de contrat
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-contrat.php">Revenir à “Contrats”</a>
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