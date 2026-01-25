<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Contrats de service en maintenance & suivi des prestataires | Ingexpert</title>

  <meta name="description"
    content="Ingexpert vous accompagne dans le management des contrats de service en maintenance : prévention des dérives, suivi des prestataires, audit, best practices, indicateurs et amélioration continue." />
  <meta name="keywords"
    content="contrat maintenance, marché de service maintenance, suivi prestataire maintenance, AMO maintenance, audit contrat, best practices, indicateurs maintenance, sous-traitance maintenance" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-pack-contrat.php" />

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
      line-height: 1.7;
      font-weight: 760;
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

    body.theme-ingexpert .section-title {
      margin: 18px 0 10px;
      font-size: 1.15rem;
      font-weight: 950;
      color: var(--ingexpert-primary);
    }

    body.theme-ingexpert .grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      align-items: start;
    }

    body.theme-ingexpert .grid img {
      width: 100%;
      height: auto;
      border-radius: 16px;
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
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
      font-weight: 760;
    }

    body.theme-ingexpert .dot {
      width: 10px;
      height: 10px;
      border-radius: 999px;
      background: var(--ingexpert-primary);
      margin-top: 6px;
      flex: 0 0 auto;
    }

    /* Clean timeline instead of old table */
    body.theme-ingexpert .timeline {
      margin-top: 10px;
      border-radius: 16px;
      border: 1px solid rgba(135, 180, 195, .30);
      background: rgba(135, 180, 195, .05);
      padding: 14px;
      display: grid;
      gap: 10px;
    }

    body.theme-ingexpert .timeline .item {
      display: grid;
      grid-template-columns: 110px 1fr;
      gap: 12px;
      align-items: start;
      padding: 10px;
      border-radius: 14px;
      border: 1px solid rgba(135, 180, 195, .18);
      background: rgba(255, 255, 255, .65);
    }

    body.theme-ingexpert .timeline .tag {
      font-weight: 950;
      color: var(--ingexpert-primary);
      white-space: nowrap;
    }

    body.theme-ingexpert .timeline .txt {
      font-weight: 760;
      line-height: 1.65;
    }

    @media (max-width: 980px) {
      body.theme-ingexpert .hero h1 {
        font-size: 1.35rem;
      }

      body.theme-ingexpert .grid {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .timeline .item {
        grid-template-columns: 1fr;
      }

      body.theme-ingexpert .timeline .tag {
        white-space: normal;
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
        <span class="active">Contrats de service</span>
      </p>

      <div class="hero">
        <h1>Contrats / marchés de service en maintenance</h1>
        <p>
          Vos contrats de prestation de service en maintenance dérivent, coûtent trop cher,
          ou n’apportent pas l’amélioration attendue ? Ingexpert vous aide à reprendre le contrôle :
          <strong>pilotage, indicateurs, best practices, AMO</strong> et actions correctives.
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un devis / échange
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-fin-contrat.php">Fin de vie de contrat</a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffrets.php">Voir toutes les missions</a>
        </div>
      </div>

      <div class="card content-box">

        <h2 class="section-title">Vos contrats posent des problèmes ?</h2>
        <ul class="list" aria-label="Problèmes fréquents contrats maintenance">
          <li><span class="dot" aria-hidden="true"></span><span>Vous voulez appliquer les <strong>best
                practices</strong> du management de la maintenance.</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Soyez <strong>proactif</strong> : évitez les dérives et
              reprenez le pilotage.</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>Un suivi “antivirus” aide à détecter tôt les écarts et
              déclencher les bonnes décisions.</span></li>
        </ul>

        <h2 class="section-title">Coffret “Antivirus” – économique & complet</h2>
        <div class="grid" aria-label="Illustrations coffrets antivirus">
          <img src="https://dev.ingexpert.com/images/Ingexpert%20Pack%20antivirus%20contrat%20economique.jpg"
            alt="Coffret antivirus contrat maintenance – version économique" loading="lazy" />
          <img src="https://dev.ingexpert.com/images/Ingexpert%20Pack%20antivirus%20contrat%20complet.jpg"
            alt="Coffret antivirus contrat maintenance – version complète" loading="lazy" />
        </div>

        <h2 class="section-title">Pourquoi le terme “antivirus” ?</h2>
        <p style="line-height:1.75; font-weight:760; margin: 0;">
          Ingexpert a constaté une analogie : comme un virus perturbe un logiciel,
          des “écarts” perturbent un contrat (engagements non respectés, règles de l’art non appliquées,
          qualifications insuffisantes, reporting imprécis, etc).
          L’approche “antivirus” consiste à <strong>repérer</strong> les dérives, <strong>alerter</strong>,
          puis <strong>corriger</strong> (avenants, actions, pilotage, clarification des exigences).
        </p>

        <h2 class="section-title">Quel est le principe ?</h2>
        <p style="line-height:1.75; font-weight:760; margin: 0 0 10px;">
          Un contrat de maintenance nécessite un suivi. Or il n’est pas toujours assumé par le maître d’ouvrage
          (manque de moyens, coûts, baisse de disponibilité, absence d’amélioration, etc).
          Ingexpert propose un accompagnement en <strong>lecture “temps réel”</strong> (suivi permanent) :
        </p>

        <ul class="list" aria-label="Principe coffret antivirus">
          <li><span class="dot" aria-hidden="true"></span><span>À tout fonctionnement anormal correspond une
              <strong>alarme</strong> (coffret économique).</span></li>
          <li><span class="dot" aria-hidden="true"></span><span>À toute alarme correspond une
              <strong>intervention</strong> (coffret complet – sur devis selon options).</span></li>
        </ul>

        <h2 class="section-title">Best practices</h2>
        <p style="line-height:1.75; font-weight:760; margin: 0;">
          Les coffrets antivirus s’inscrivent dans les best practices :
          ils déclenchent des actions avant que la situation devienne critique,
          avec des alertes et un pilotage clair.
        </p>

        <h2 class="section-title">Coffret complet : prix bas / rémunération liée aux résultats</h2>
        <p style="line-height:1.75; font-weight:760; margin: 0;">
          Si Ingexpert a collaboré à l’élaboration d’un contrat, un suivi “complet”
          peut être envisagé avec une rémunération partiellement liée aux résultats obtenus
          (cadre à définir selon contexte).
        </p>

        <h2 class="section-title">Application dans le temps (jalons)</h2>
        <div class="timeline" aria-label="Jalons de déploiement coffret antivirus">
          <div class="item">
            <div class="tag">Jalon 1</div>
            <div class="txt">Audit + état des lieux.</div>
          </div>
          <div class="item">
            <div class="tag">Jalon 2</div>
            <div class="txt">Mise à jour du contrat avec définition des objectifs de performance.</div>
          </div>
          <div class="item">
            <div class="tag">Jalon 3</div>
            <div class="txt">Consultation sur la base des objectifs de performance.</div>
          </div>
          <div class="item">
            <div class="tag">Jalon 4</div>
            <div class="txt">Surveillance des écarts et déploiement de solutions adaptées si nécessaire.</div>
          </div>
        </div>

        <h2 class="section-title">Illustration</h2>
        <img src="./images/maintenance-contrat-prestation-service-sous-traitant-fournisseur.jpg"
          alt="Contrat de prestation de service maintenance : sous-traitant, fournisseur, pilotage" loading="lazy"
          style="width:100%; height:auto; border-radius:16px; border:1px solid rgba(135,180,195,.30); background:rgba(135,180,195,.05);" />

        <div class="cta" style="margin-top:14px;">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Discuter de votre contrat
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-fin-contrat.php">Voir “Fin de vie de
            contrat”</a>
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