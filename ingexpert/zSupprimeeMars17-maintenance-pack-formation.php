<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Formation au management de votre maintenance : présentation</title>

  <meta name="description"
    content="Présentation de nos formations (stock, fiabilisation, contrats, processus, audit, GMAO, ...). Améliorez le management de votre maintenance par le conseil, la formation et l’accompagnement." />
  <meta name="keywords"
    content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, contrat, maintenance, entretien, audit, diagnostic, ingénieur, conseil, fiabilité, disponibilité, normes, ratios, indicateurs, thermographie, amdec, preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM" />
  <meta name="robots" content="all" />
  <meta name="classification"
    content="externalisation, prestataire, inventaire, contrat, maintenance, audit, diagnostic, ingenieur, conseil, fiabilité, disponibilité, normes, indicateurs, durabilité, thermographie, AMDEC, TPM, TRS" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="generator" content="Laloux Ingexpert maintenance" />
  <meta name="creation_date" content="3/12/2002" />
  <meta name="revisit-after" content="7 days" />
  <meta name="language" content="fr" />

  <link rel="icon" href="/imagesmenu/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />
</head>

<body class="theme-ingexpert">

  <?php
  // ✅ Shared HEADER only
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
        <span class="active">Missions de formation</span>
      </p>

      <h1 class="page-title">Missions de formations</h1>

      <div class="card content-box" style="text-align:left;">

        <div class="grid grid-2" style="align-items:start;">

          <!-- Left: image + CTA -->
          <div>
            <div class="card cta-card" style="text-align:right; margin-bottom: 14px;">
              <span>Besoin d’un devis / contact rapide</span><br />
              <a class="button"
                href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
                onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
                Ouvrir le contact
              </a>
            </div>

            <img class="shadow-image hero-image" src="ingexpert/z/doc_methodologie_maintenance_fichiers/image001.jpg"
              alt="Formation maintenance" />
          </div>

          <!-- Right: content -->
          <div>
            <p style="font-weight: 900; margin-bottom: 10px;">
              Choisissez votre formation :
            </p>

            <!-- Keep your original bullet list, but modern -->
            <ul class="services-list">
              <li class="service-item"><strong>•</strong> FIABILISATION, AMDEC</li>
              <li class="service-item"><strong>•</strong> MANAGEMENT DES CONTRATS DE SOUS-TRAITANCE</li>
              <li class="service-item"><strong>•</strong> MÉTHODOLOGIES DE MAINTENANCE</li>
              <li class="service-item"><strong>•</strong> CHOIX D’UNE GMAO – DÉFINITION D’UN CAHIER DES CHARGES</li>
              <li class="service-item"><strong>•</strong> MISE EN PLACE ET DÉVELOPPEMENT DE LA TPM</li>
              <li class="service-item"><strong>•</strong> LE DROIT EN MAINTENANCE</li>
              <li class="service-item"><strong>•</strong> MANAGEMENT DE LA MAINTENANCE</li>
              <li class="service-item"><strong>•</strong> AMÉLIORATION CONTINUE, APPLICATION DU PDCA</li>
              <li class="service-item"><strong>•</strong> AUDIT MAINTENANCE ET AUTO-DIAGNOSTIC</li>
              <li class="service-item"><strong>•</strong> OPTIMISATION DE LA GESTION DE STOCK</li>
              <li class="service-item"><strong>•</strong> GRANDS ARRÊTS</li>
              <li class="service-item"><strong>•</strong> ETC : n'hésitez pas à nous soumettre toute autre demande.</li>
            </ul>

            <hr class="soft-hr" />

            <h2 style="margin: 0 0 10px 0;">Évaluation obligatoire</h2>

            <p>
              Mais avant, Ingexpert vous questionnera sur votre situation. Cette évaluation est nécessaire
              pour que les stagiaires profitent d'une formation adaptée. Nous vous rappelons qu'Ingexpert
              <a href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-formation.php">
                n'est pas une société commerciale de formation
              </a>.
            </p>

            <a class="link-more"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
              Nous contacter →
            </a>
          </div>

        </div>
      </div>

    </div>
  </main>

  <?php
  // ✅ Shared FOOTER only
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <!-- New global JS -->
  <script src="/assets/js/site.js"></script>

</body>

</html>