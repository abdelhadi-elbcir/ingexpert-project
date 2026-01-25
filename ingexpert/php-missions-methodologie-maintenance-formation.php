<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Formations au Management de la maintenance : AMDEC, stock, fiabilisation, contrats…</title>

  <meta name="description"
    content="Présentation de nos formations maintenance. Améliorez le management de votre maintenance industrielle, tertiaire et biomédicale par le conseil, la formation et l’accompagnement." />
  <meta name="keywords"
    content="formation maintenance, AMDEC, fiabilisation, gestion de stock, management des contrats, TPM, PDCA, audit maintenance, GMAO, formation continue, Qualiopi" />
  <meta name="robots" content="all" />
  <meta name="classification"
    content="maintenance, formation, AMDEC, fiabilisation, stock, contrats, audit, GMAO, TPM, PDCA" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="generator" content="Laloux Ingexpert maintenance" />
  <meta name="creation_date" content="3/12/2002" />
  <meta name="revisit-after" content="7 days" />
  <meta name="language" content="fr" />

  <link rel="canonical"
    href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php" />
  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    body.theme-ingexpert .muted {
      opacity: .85;
    }

    body.theme-ingexpert .lead {
      font-weight: 700;
    }

    body.theme-ingexpert .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
      margin-top: 14px;
    }

    body.theme-ingexpert .info-card {
      border: 1px solid rgba(135, 180, 195, 0.35);
      border-radius: 14px;
      padding: 16px;
      background: rgba(135, 180, 195, 0.06);
    }

    body.theme-ingexpert .icon-row {
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }

    body.theme-ingexpert .icon-row img {
      width: 34px;
      height: auto;
      flex: 0 0 auto;
      opacity: .9;
    }

    body.theme-ingexpert .bullets {
      margin: 10px 0 0 18px;
    }

    body.theme-ingexpert .bullets li {
      margin: 8px 0;
    }

    body.theme-ingexpert .cta-row {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 14px;
    }

    body.theme-ingexpert .note {
      border-left: 5px solid var(--ingexpert-primary);
      padding-left: 12px;
      margin: 14px 0 0 0;
      opacity: .95;
    }

    @media (max-width: 820px) {
      body.theme-ingexpert .info-grid {
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
        <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-conseil-maintenance.php">Nos conseils</a>
        <span class="sep">›</span>
        <span class="active">Formations</span>
      </p>

      <h1 class="page-title">Formations maintenance</h1>

      <div class="card content-box" style="text-align:left;">

        <p class="lead">
          Ingexpert est un organisme de formation continue, certifié Qualiopi.
        </p>

        <p class="muted">
          Nous vous formons aux connaissances, méthodes et techniques de maintenance.
          Nous vous accueillons dans une salle spacieuse dans la région du Sud Lubéron.
        </p>

        <div class="info-grid">
          <div class="info-card">
            <h2 style="margin:0 0 8px 0;">Formats de formation</h2>
            <ul class="bullets">
              <li><strong>Intra-entreprise</strong> : formation dans vos locaux.</li>
              <li><strong>Inter-entreprise</strong> : groupes multi-entreprises.</li>
            </ul>
          </div>

          <div class="info-card">
            <h2 style="margin:0 0 8px 0;">Approche Ingexpert</h2>

            <div class="icon-row" style="margin-top:10px;">
              <img src="./images/maintenance-formation-conseil-coaching-management-transition.jpg" alt="" />
              <div>
                <p style="margin:0;"><strong>Sur mesure</strong> : demandez n’importe quel sujet,
                  nous construisons un cours spécifiquement pour vous.</p>
              </div>
            </div>

            <div class="icon-row" style="margin-top:12px;">
              <img src="./images/maintenance-formation-continue-conseil-coaching-management-transition.jpg" alt="" />
              <div>
                <p style="margin:0;"><strong>Pragmatiques</strong> : accompagnement sur le terrain
                  pour appliquer le cours. Possibilité d’entreprise d’accueil selon les cas.</p>
              </div>
            </div>
          </div>
        </div>

        <hr class="soft-hr" />

        <h2>Qui dispense les formations ?</h2>
        <ul class="bullets">
          <li>Des ingénieurs conseil</li>
          <li>Des techniciens</li>
          <li>Un juriste</li>
        </ul>

        <p class="note">
          Tous les cours s'appuient sur des cas concrets, dont ceux que portent les stagiaires.
          Ingexpert vous questionnera sur votre situation : cette évaluation permet d’adapter
          la formation au niveau réel des participants.
        </p>

        <p style="margin-top: 12px;">
          <strong>Ingexpert n’est pas une société commerciale de formation</strong>,
          mais une société de conseil en maintenance qui forme spécifiquement les personnels opérationnels
          et encadrants dans leur contexte de travail, avec des formateurs compétents.
        </p>

        <p>
          Si vous n'avez pas défini de cahier des charges, Ingexpert peut évaluer avec vous
          le niveau et le contenu de formation à dispenser.
          <a href="mailto:contact@ingexpert.com?subject=Evaluation%20souhait%C3%A9e%20pour%20une%20formation">
            Contactez Ingexpert
          </a>
          pour réaliser une évaluation.
        </p>

        <hr class="soft-hr" />

        <h2>Exemples de formations</h2>
        <ul class="bullets">
          <li><a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-contrat.php">Management des
              contrats de sous-traitance</a></li>
          <li><a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-fiabilisation.php">Fiabilisation
              des biens</a></li>
          <li><a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-management.php">Management de la
              maintenance</a></li>
          <li><a href="https://dev.ingexpert.com/ingexpert/maintenance-pack-formation-stock.php">Optimisation de la
              gestion de stock</a></li>
          <li>Maintenance et contrôle des dispositifs biomédicaux</li>
          <li>Méthodologies de maintenance</li>
          <li>Choix d’une GMAO – définition des cahiers des charges</li>
          <li>Développement et mise en place de la TPM</li>
          <li>Le droit en maintenance</li>
          <li>Amélioration continue, application du PDCA</li>
          <li>Audit maintenance et auto-diagnostic</li>
          <li>Grands arrêts</li>
          <li><strong>Etc.</strong> N’hésitez pas à nous soumettre toute autre demande.</li>
        </ul>

        <div class="cta-row">
          <a class="button" href="mailto:contact@ingexpert.com?subject=Demande%20de%20formation%20maintenance">
            Demander une formation
          </a>
          <a class="button"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Contacter Ingexpert
          </a>
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