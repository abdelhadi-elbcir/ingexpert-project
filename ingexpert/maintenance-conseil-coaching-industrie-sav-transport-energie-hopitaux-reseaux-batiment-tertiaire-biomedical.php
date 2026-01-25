<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Conseil du managament de la maintenance pour le biomédical et les hôpitaux</title>

  <meta name="description"
    content="Présentation de nos missions pour améliorer le management de votre maintenance par le conseil, la formation et l’accompagnement dans votre secteur du biomédical et des hôpitaux" />
  <meta name="keywords"
    content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, contrat, maintenance, entretien, audit, diagnostic, ingénieur, conseil, industrie, auditeur, maintenabilité, fiabilité, disponibilité, normes, indicateurs, durabilité, contrôles, thermographie, expertise, AMDEC, préventif, curatif, plan de maintenance, TRS, TPM" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="generator" content="Laloux Ingexpert maintenance" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" type="image/x-icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" />

  <!-- ✅ Nouveau CSS local -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
</head>

<body>

  <!-- ✅ Nouveau header -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php"; ?>

  <main class="section">
    <div class="container">

      <!-- Fil d'ariane -->
      <div class="breadcrumb">
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">></span>
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-activite-conseil-coaching.php">Notre activité</a>
        <span class="sep">></span>
        <a href="https://dev.ingexpert.com/ingexpert/maintenance-mission-activite.php">Secteurs d'intervention</a>
        <span class="sep">></span>
        <span class="active">VOUS : Votre activité</span>
      </div>

      <h1 class="page-title">VOUS : Votre activité</h1>

      <div class="hero-card">
        <div>
          <p class="lead">
            Ingexpert intervient sur tout profil de secteur, public ou privé.
          </p>

          <p class="lead">
            Vous trouverez des exemples de secteurs d'activité dans les quelques pages jointes pour lesquels nous
            intervenons régulièrement.
            Si vous souhaitez connaître l’exhaustivité de nos clients, rendez-vous sur la
            <a
              href="https://dev.ingexpert.com/ingexpert/maintenance-activite-references.php#Nos ccompétences clients maintenance">
              page suivante
            </a>.
          </p>

          <div class="cta-row">
            <a class="btn-primary"
              href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
              target="_blank" rel="noopener">
              Nous contacter
            </a>
            <a class="btn-secondary" href="https://dev.ingexpert.com/ingexpert/maintenance-mission-activite.php">
              Voir tous les secteurs
            </a>
          </div>
        </div>

        <div class="hero-media">
          <!-- Image locale (tu peux remplacer si besoin) -->
          <img src="/images/maintenance-industrielle-management.jpg" alt="Ingexpert – Secteurs d'intervention"
            loading="lazy">
        </div>
      </div>

      <section class="block">
        <h2 class="block-title">Exemples de secteurs d’intervention</h2>

        <div class="grid-cards">
          <article class="card">
            <h3>Industrie et process</h3>
            <p>Sites industriels, process, production, méthodes et organisation.</p>
            <a class="card-link" href="https://maintenance.industrielle.ingexpert.com/">Accéder →</a>
          </article>

          <article class="card">
            <h3>Tertiaire, bâtiments</h3>
            <p>Multitechnique, infrastructures, exploitation, gestion d’actifs.</p>
            <a class="card-link"
              href="https://dev.ingexpert.com/ingexpert/maintenance-missions-tertiaire-batiment-infrastructures-multitechnique.php">Accéder
              →</a>
          </article>

          <article class="card">
            <h3>SAV – Après-vente</h3>
            <p>Maintenance SAV, organisation, performance et qualité de service.</p>
            <a class="card-link" href="https://dev.ingexpert.com/ingexpert/maintenance-missions-SAV.php">Accéder →</a>
          </article>

          <article class="card">
            <h3>Hôpitaux – Biomédical</h3>
            <p>Maintenance biomédicale, équipements, conformité, disponibilité.</p>
            <a class="card-link"
              href="https://dev.ingexpert.com/ingexpert/maintenance-missions-biomedicale-hopitaux.php">Accéder →</a>
          </article>

          <article class="card">
            <h3>Infrastructures</h3>
            <p>Ouvrages, TP, infrastructures critiques, maintenance organisée.</p>
            <a class="card-link"
              href="https://dev.ingexpert.com/ingexpert/maintenance-missions-transport-travaux-publics-transport-ouvrages.php">Accéder
              →</a>
          </article>

          <article class="card">
            <h3>Énergie</h3>
            <p>Production, distribution, amélioration de la disponibilité.</p>
            <a class="card-link" href="https://maintenance.energie.ingexpert.com/">Accéder →</a>
          </article>

          <article class="card">
            <h3>Transports</h3>
            <p>Aérien, maritime, ferroviaire, bus, métro, etc.</p>
            <a class="card-link"
              href="https://dev.ingexpert.com/ingexpert/maintenance-mission-transport-aviation-maritime-aerien-ferroviaire-bus-car-commun-voiture-camion-metro-funiculaire.php">Accéder
              →</a>
          </article>

          <article class="card">
            <h3>Réseaux</h3>
            <p>Gaz, électricité, fluides, réseaux et services.</p>
            <a class="card-link"
              href="https://dev.ingexpert.com/ingexpert/maintenance-mission-reseaux-gaz-electricite-fluide.php">Accéder
              →</a>
          </article>
        </div>
      </section>

    </div>
  </main>

  <!-- ✅ Nouveau footer -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php"; ?>

  <!-- ✅ JS local (sans jQuery) -->
  <script src="/assets/js/site.js"></script>
</body>

</html>