<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Conseil GMAO & management de maintenance | Ingexpert</title>

  <meta name="description"
    content="Ingexpert vous accompagne sur la GMAO : cadrage, bonnes pratiques, organisation, méthodes, formation et coaching. Exemple d’usage (VR) appliqué à la maintenance." />
  <meta name="keywords"
    content="GMAO, conseil GMAO, management maintenance, déploiement GMAO, audit GMAO, méthodes maintenance, coaching maintenance, formation maintenance" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="language" content="fr" />

  <!-- Canonical: adapte au vrai nom de fichier de cette page -->
  <link rel="canonical" href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-GMAO.php" />

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

    body.theme-ingexpert .card-soft {
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 16px;
      padding: 16px;
      background: rgba(135, 180, 195, .06);
      margin: 16px 0;
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

    /* Responsive iframe wrapper */
    body.theme-ingexpert .iframe-wrap {
      margin-top: 14px;
      border: 1px solid rgba(135, 180, 195, .35);
      border-radius: 18px;
      overflow: hidden;
      background: rgba(135, 180, 195, .04);
    }

    body.theme-ingexpert .iframe-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      padding: 12px 14px;
      border-bottom: 1px solid rgba(135, 180, 195, .25);
      background: rgba(135, 180, 195, .07);
    }

    body.theme-ingexpert .iframe-top strong {
      font-weight: 950;
    }

    body.theme-ingexpert .iframe-top a {
      font-weight: 950;
      text-decoration: none;
      border: 1px solid rgba(135, 180, 195, .45);
      background: #fff;
      padding: 8px 10px;
      border-radius: 12px;
    }

    body.theme-ingexpert .ratio {
      position: relative;
      width: 100%;
      padding-top: 56.25%;
      /* 16:9 */
    }

    body.theme-ingexpert .ratio iframe {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      border: 0;
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

      body.theme-ingexpert .iframe-top {
        flex-direction: column;
        align-items: flex-start;
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
        <span class="active">GMAO</span>
      </p>

      <div class="hero">
        <h1>Conseil GMAO & management de maintenance</h1>
        <p>
          Nous vous accompagnons sur la GMAO et l’organisation de la maintenance : cadrage, méthodes, bonnes pratiques,
          formation et coaching adaptés à votre secteur.
        </p>

        <div class="cta">
          <a class="primary"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un échange / devis
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/maintenance-coffret-audit-management.php">
            Voir l’audit
          </a>
          <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">
            Voir les formations
          </a>
        </div>
      </div>

      <div class="card content-box">

        <h2 class="section-title">Quand la VR (ou une approche immersive) devient pertinente</h2>
        <p class="note">
          La réalité virtuelle peut être un outil très intéressant lorsqu’un service maintenance cumule plusieurs
          contraintes
          (sécurité, dispersion des sites, turnover, besoin de formation, exigences de fiabilité).
        </p>

        <ul class="bullets" aria-label="Critères de pertinence">
          <li><span class="dot" aria-hidden="true"></span> Niveau de sécurité élevé</li>
          <li><span class="dot" aria-hidden="true"></span> Sous-traitance importante / techniciens souvent renouvelés
          </li>
          <li><span class="dot" aria-hidden="true"></span> Sites d’intervention nombreux ou très éloignés</li>
          <li><span class="dot" aria-hidden="true"></span> Niveau de formation requis élevé</li>
          <li><span class="dot" aria-hidden="true"></span> Fiabilité requise élevée</li>
        </ul>

        <div class="card-soft">
          <h2 class="section-title" style="margin-top:0;">Exemple d’utilisation (VR) appliqué à la maintenance</h2>
          <p style="margin-top:0; line-height:1.7;">
            Ingexpert vous présente ci-dessous un exemple d’utilisation. Si l’affichage est bloqué (réseau interne,
            HTTPS, navigateur),
            utilisez le bouton “Ouvrir dans un nouvel onglet”.
          </p>

          <div class="iframe-wrap" role="region" aria-label="Démonstration VR">
            <div class="iframe-top">
              <strong>Démonstration VR</strong>
              <a href="https://163.172.91.113:8080" target="_blank" rel="noopener noreferrer">
                Ouvrir dans un nouvel onglet
              </a>
            </div>

            <div class="ratio">
              <iframe src="https://163.172.91.113:8080" title="Démonstration VR - Ingexpert" loading="lazy"
                referrerpolicy="no-referrer" sandbox="allow-same-origin allow-scripts allow-forms allow-popups"
                allow="fullscreen"></iframe>
            </div>
          </div>

          <p class="note">
            Astuce : si vous souhaitez l’intégration dans une GMAO, on peut cadrer l’accès (SSO), les droits,
            les liens depuis les OT, et les contenus (modes opératoires / sécurité / inspection).
          </p>
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