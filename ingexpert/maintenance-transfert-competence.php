<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Transfert de compétences en maintenance (Knowledge Management) | Ingexpert</title>

  <meta name="description"
    content="Ingexpert accompagne le transfert de compétences et de savoir-faire en maintenance (Knowledge Management) : capitalisation des bonnes pratiques, transmission et absorption, cartographie et plan d’action." />
  <meta name="keywords"
    content="transfert de compétences, transfert de savoir faire, knowledge management, KM, maintenance, capitalisation, cartographie, plan d'action, formation maintenance" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-transfert-competence.php" />
  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    body.theme-ingexpert .hero {
      padding: 18px 18px 10px;
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

    body.theme-ingexpert .note {
      border-left: 5px solid var(--ingexpert-primary);
      padding-left: 12px;
      margin: 10px 0 0;
      opacity: .95;
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
      grid-template-columns: 220px 1fr;
      gap: 14px;
      align-items: center;
      margin-top: 14px;
    }

    body.theme-ingexpert .media img {
      width: 100%;
      height: auto;
      border-radius: 14px;
      border: 1px solid rgba(0, 0, 0, .08);
      background: #fff;
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
      margin: 6px 0 0;
    }

    body.theme-ingexpert .equation {
      text-align: center;
      font-weight: 950;
      padding: 12px;
      border-radius: 14px;
      border: 1px dashed rgba(135, 180, 195, .55);
      background: rgba(135, 180, 195, .08);
      margin: 14px 0;
    }

    body.theme-ingexpert .list {
      margin: 0;
      padding-left: 18px;
      line-height: 1.75;
    }

    @media (max-width: 820px) {
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
        <span class="active">Transfert de savoir-faire</span>
      </p>

      <div class="hero">
        <h1>Transfert de savoir-faire / Knowledge Management</h1>
        <p>Capitaliser les bonnes pratiques, sécuriser les départs, transmettre l’expertise et rendre l’organisation
          plus robuste.</p>
        <span class="pill">KM • TSF • Transfert de compétences</span>
      </div>

      <div class="card content-box">

        <div class="media">
          <img src="https://dev.ingexpert.com/ingexpert/images/pack-transfert-savoir-faire-maintenance.jpg"
            alt="Pack transfert de savoir-faire maintenance - Ingexpert" />
          <div>
            <h2 class="section-title" style="margin-top:0;">Missions de transfert de compétences</h2>
            <p class="note">
              Ingexpert vous accompagne dans le <strong>transfert de compétence</strong> de vos collaborateurs, en
              structurant
              la capitalisation, la transmission et l’appropriation des savoirs.
            </p>

            <div class="cta">
              <a class="primary"
                href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
                onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
                Demander un échange / devis
              </a>
              <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">
                Voir nos formations
              </a>
            </div>
          </div>
        </div>

        <h2 class="section-title">Pourquoi c’est important ?</h2>
        <p>
          Avec le temps, les collaborateurs expérimentés acquièrent des <strong>savoir-faire clés</strong> (“tours de
          main”, “ficelles”),
          souvent <strong>non formalisés</strong>. Pour l’entreprise, l’enjeu est de <strong>capitaliser</strong> et de
          <strong>transmettre</strong> ces connaissances afin qu’elles ne disparaissent pas (ex. départs à la retraite).
        </p>

        <div class="grid-2">
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Transmission</h3>
            <p style="margin:0; line-height:1.7;">
              Envoyer la connaissance vers un ou plusieurs récepteurs potentiels :
              documentation, rituels, mentorat, retours d’expérience, etc.
            </p>
          </div>
          <div class="card-soft">
            <h3 style="margin:0 0 8px; font-weight:950;">Absorption & utilisation</h3>
            <p style="margin:0; line-height:1.7;">
              La connaissance doit être comprise, appropriée puis utilisée par le récepteur (personne / groupe),
              sinon elle reste théorique.
            </p>
          </div>
        </div>

        <div class="equation">
          Transfert = <span style="color:var(--ingexpert-primary);">Transmission</span> + <span
            style="color:var(--ingexpert-primary);">Absorption</span> (et utilisation)
        </div>

        <h2 class="section-title">Outils principaux utilisés</h2>
        <ul class="list">
          <li><strong>Cartographie</strong> (connaissances, activités, zones de criticité, acteurs, risques).</li>
          <li><strong>Plan d’action</strong> (priorités, livrables, jalons, responsables, preuves de transfert).</li>
        </ul>

        <h2 class="section-title">Ce que vous obtenez concrètement</h2>
        <ul class="list">
          <li>Une vision claire des savoirs critiques et de leur localisation.</li>
          <li>Des supports simples (fiches, référentiels, procédures) adaptés au terrain.</li>
          <li>Un dispositif de transfert (tutorat, binômage, rituels) avec validation de l’appropriation.</li>
          <li>Une réduction du risque lors des mobilités, départs, réorganisations, externalisations.</li>
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