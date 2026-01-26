<?php
/* =========================
   index.php (NEW)
   - Uses separated header/footer include files
   - Loads /assets/css/style_redesign.css
   - Loads /assets/js/site.js
========================= */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Original Meta Tags Preserved -->
  <title>MAINTENANCE: conseil, formation, accompagnement du management</title>
  <meta http-equiv="Content-Language" content="fr">
  <meta name="description"
        content="Améliorez le management de votre maintenance industrielle, SAV, énergie, tertiaire et biomédicale par le conseil et l'expertise : audit, formation, contrats, fiabilisation.">
  <meta name="keywords"
        content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, conseil, maint, industrie, industriel, industrielle, ICPE, exploitation, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise, amdec, preventif, defaillance, curatif, consulting, previsionnel, TRS, TPM, AMO , assistance maitrise ouvrage, CCTP, CCTG, formation, CGA, CCAP, DPGF, Périmètre, clause administratives générales et juridiques, clauses spécifiques, Acte d'engagement, domaine, plan de maintenance, Plan de progrès, plan d'amélioration, analyse de risque, Bordereaux de prix, BPU, processus, Règles de nommage, Procédure, ingénieur, expert, requalification, magasin, article, consommable, GMAO, état des lieux, Dialogue compétitif, X60, X50, ISO 9000">
  <meta name="classification"
        content="externalisation, sav, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, maintenance, entretien, interactif, audit, audit maintenance, diagnostic, ingenieur, conseil, maint, industrie, industriel, industrielle, auditeur, maintenabilité, maintenabilite, fiabilité, fiabilite, disponibilité, disponibilite, normes, contrat, ratios, indicateurs, durabilité, durabilite, controles, contrôles, thermographie, arret, informatique, expertise, amdec, preventif, defaillance, curatif, consulting, previsionnel, TRS, TPM, AMO , assistance maitrise ouvrage, CCTP, CCTG, formation, CGA, CCAP, DPGF, Périmètre, clause administratives générales et juridiques, clauses spécifiques, Acte d'engagement, domaine, plan de maintenance, Plan de progrès, plan d'amélioration, Analyse de risque, Bordereaux de prix, BPU, processus, Règles de nommage, Procédure, ingénieur, expert, requalification, magasin, article, consommable, GMAO, état des lieux, Dialogue compétitif, X60, X50, ISO 9000">
  <meta name="Author" content="Laloux Guillaume, consultant expert en maintenance">
  <meta name="Generator" content="Laloux Ingexpert maintenance">
  <meta name="google-site-verification" content="fekU-zpuxGxdOiStMvs2NtsYvXzEv1hlZmxBGylsv0I">
  <meta name="msvalidate.01" content="458DB97FD28C24DA55E8E334FFDFE841" />
  <meta name="alexaVerifyID" content="ND9dJbDtiUts14SaBVeglOhMAmA">
  <meta name="p:domain_verify" content="79627ec53b92eefce9cb700f5cb6d126" />
  <meta name="yandex-verification" content="79752382aee73b11" />

  <!-- Fonts (optional). If you want NO external resources, remove these 3 lines. -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="/assets/css/style_redesign.css">

  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

<?php include __DIR__ . "/layouts/header.inc.php"; ?>

<main>
  <!-- Hero Section -->
  <section class="hero section">
    <div class="container">
      <img src="/images/maintenance-industrielle-management.jpg" alt="Expert Maintenance"
           style="margin: 0 auto 20px auto; max-width: 280px;">
      <h1>Conseil, formation, expertise pour le <span class="highlight">management de la maintenance</span></h1>

      <div class="hero-subtitle">
        <p>Accompagnement de votre management de la maintenance : BTP, SAV, industrie, biomédical,
          tertiaire, transport, énergie...</p>
        <p>Audit, diagnostic, fiabilisation, stock, formation, indicateurs, GMAO...</p>
      </div>

      <div style="margin-top: 2rem;">
        <b>23<sup>ème</sup> année</b>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="clients-section section">
    <div class="container">
      <h2 class="text-center" style="margin-bottom: var(--spacing-lg); color: var(--text-dark);">Ils nous font confiance</h2>
      <div class="clients-slider" aria-label="Logos clients">
      <div class="clients-track">
        <!-- Logos (set 1) -->
        <div class="client-logo"><img src="/images/logos/884263.png" alt="884263"></div>
        <div class="client-logo"><img src="/images/logos/Benvic-logo-landscape.png" alt="Benvic-logo-landscape"></div>
        <div class="client-logo"><img src="/images/logos/CNIM.jpg" alt="CNIM"></div>
        <div class="client-logo"><img src="/images/logos/logo-cdm-1.jpg" alt="logo-cdm-1"></div>
        <div class="client-logo"><img src="/images/logos/pwc.png" alt="pwc"></div>

        <!-- Logos (set 2) DUPLICATE the same list for smooth loop -->
        <div class="client-logo"><img src="/images/logos/sanofi-logo.png" alt="sanofi-logo"></div>
        <div class="client-logo"><img src="/images/logos/stryker.png" alt="stryker"></div>
        <div class="client-logo"><img src="/images/logos/Vetoquinol.jpg" alt="Vetoquinol"></div>

      </div>
    </div>

      <div class="text-center" style="margin-top: var(--spacing-md);">
        <a href="/ingexpert/maintenance-activite-references.php" class="btn-text">Voir toutes nos références &rarr;</a>
      </div>
    </div>
  </section>

  <!-- Activities Grid -->
  <section class="section">
    <div class="container">
      <div class="grid">
        <!-- Column 1: Sectors -->
        <div class="card-section">
          <h2 class="text-center" style="color: #5A696B; margin-bottom: var(--spacing-md);">
            Secteurs d'activité</h2>

          <div class="grid grid-2">
            <a href="https://maintenance.industrielle.ingexpert.com" class="card">
              <h3>Industrie</h3>
              <p>Conseil management maintenance Industrie</p>
            </a>
            <a href="/ingexpert/maintenance-missions-SAV.php" class="card">
              <h3>SAV</h3>
              <p>Conseil management maintenance SAV</p>
            </a>
            <a href="https://maintenance.energie.ingexpert.com" class="card">
              <h3>Énergie</h3>
              <p>Conseil management maintenance énergie</p>
            </a>
            <a href="/ingexpert/maintenance-mission-reseaux-gaz-electricite-fluide.php" class="card">
              <h3>Réseaux</h3>
              <p>Fluides - Gaz - Electricité</p>
            </a>
            <a href="/ingexpert/maintenance-missions-transport-travaux-publics-transport-ouvrages.php" class="card">
              <h3>Infrastructures</h3>
              <p>Conseil management maintenance infrastructure</p>
            </a>
            <a href="/ingexpert/maintenance-missions-biomedicale-hopitaux.php" class="card">
              <h3>Hôpitaux</h3>
              <p>Biomédical - Serv. Technique</p>
            </a>
          </div>
        </div>

        <!-- Column 2: Offerings/Missions -->
        <div class="card-section">
          <h2 class="text-center" style="color: var(--accent-green); margin-bottom: var(--spacing-md);">
            Notre Accompagnement</h2>

          <img src="/images/maintenance 4.0.jpg" alt="Maintenance 4.0"
               style="margin: 0 auto; margin-bottom: 20px; max-width: 520px;">

          <ul class="services-list">
            <li class="service-item">
              <h4>Diagnostic, Amélioration continue</h4>
              <div class="service-content">
                <a href="/ingexpert/maintenance-coffret-audit-management.php">Audit, revue, état des lieux</a>
                <a href="/ingexpert/php-missions-methodologie-maintenance-bonne-pratique-amelioration.php">Plans de progrès / schémas directeurs</a>
                <a href="/maintexpert/php_theorie_maintenance__Deming-PDCA.php">Démarche PDCA</a>
              </div>
            </li>

            <li class="service-item">
              <h4>Organisation Maintenance</h4>
              <div class="service-content">
                <a href="/ingexpert/php-missions-methodologie-maintenance-politique-organisation-strategie-objectif.php">Politique, stratégie et objectifs</a>
                <a href="/maintexpert/php_theorie_maintenance__processus.php">Organisation du service</a>
                <a href="/maintexpert/php_theorie_maintenance__indicateur.php">Indicateurs / Tableaux de bord</a>
              </div>
            </li>

            <li class="service-item">
              <h4>Ingénierie Maintenance</h4>
              <div class="service-content">
                <a href="/ingexpert/maintenance-coffret-fiabilisation.php">Fiabilisation (MTTR, Maintenabilité)</a>
                <a href="/ingexpert/maintenance-pack-stock-magasin.php">Optimisation stock / magasin</a>
                <a href="/maintexpert/php_theorie_maintenance__fiabilite.php">Calcul de fiabilité (MTBF)</a>
                <a href="/ingexpert/maintenance-coffret-GMAO.php">GMAO / Systèmes experts</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Trainings Section -->
  <section class="section" style="background-color: var(--bg-light-gray);">
    <div class="container">
      <h2 class="text-center" style="margin-bottom: var(--spacing-lg);">Nos Formations</h2>

      <div class="grid grid-2">
        <div class="card">
          <h3>Management de la maintenance</h3>
          <p class="text-light">3 jours | Du 22 au 24 sept 2025</p>
          <hr class="soft-hr">
          <p>Formation pour encadrants et managers techniques.</p>
          <a href="/ingexpert/maintenance-pack-formation-management.php" class="link-more">En savoir plus &rarr;</a>
        </div>

        <div class="card">
          <h3>Gestion de stock</h3>
          <p class="text-light">2 jours | Les 6 & 7 oct. 2025</p>
          <hr class="soft-hr">
          <p>Optimisez vos stocks de pièces de rechange.</p>
          <a href="/ingexpert/maintenance-pack-formation-stock.php" class="link-more">En savoir plus &rarr;</a>
        </div>

        <div class="card">
          <h3>Fiabilisation & AMDEC</h3>
          <p class="text-light">2 jours | Les 29 & 30 sept 2025</p>
          <hr class="soft-hr">
          <p>Méthodes pour améliorer la fiabilité des équipements.</p>
          <a href="/ingexpert/maintenance-pack-formation-fiabilisation.php" class="link-more">En savoir plus &rarr;</a>
        </div>

        <div class="card">
          <h3>Management des Contrats</h3>
          <p class="text-light">2 jours | Les 13 & 14 oct 2025</p>
          <hr class="soft-hr">
          <p>Pilotez efficacement vos contrats de sous-traitance.</p>
          <a href="/ingexpert/maintenance-pack-formation-contrat.php" class="link-more">En savoir plus &rarr;</a>
        </div>
      </div>

      <div class="text-center" style="margin-top: var(--spacing-lg);">
        <p style="color: var(--text-dark); margin-bottom: 1rem;">• Formations dans un cadre naturel agréable du Sud Lubéron • Repas bio offert</p>
        <a href="/ingexpert/php-missions-methodologie-maintenance-formation.php" class="button">
          Voir toutes les formations
        </a>
      </div>
    </div>
  </section>

  <!-- Resources & Publications -->
  <section class="section">
    <div class="container text-center">
      <h2 style="color: var(--primary-blue); margin-bottom: var(--spacing-lg);">Ressources & Publications</h2>
      <div class="grid grid-2">
        <div>
          <a href="/images/management-maintenance-industrielle-conseil-formation.pdf">
            <img src="/images/images-index-maintenance/Conseil-Formation-management-fonction-maintenance.jpg"
                 alt="Livre Gratuit" class="shadow-image">
          </a>
          <p style="margin-top: 10px;"><strong>Livre blanc gratuit</strong><br>Conseils et Formation</p>
        </div>

        <div>
          <a href="https://livre.fnac.com/a2667009/Guillaume-Laloux-Management-de-la-maintenance-selon-l-ISO-9001-2008">
            <img src="/images/images-index-maintenance/Management-maintenance-audit-ISO-Afnor.jpg"
                 alt="Livre Afnor" class="shadow-image">
          </a>
          <p style="margin-top: 10px;"><strong>Livre Afnor</strong><br>Management de la maintenance selon l'ISO 9001</p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . "/layouts/footer.inc.php"; ?>

<!-- JS -->
<script src="/assets/js/site.js" defer></script>

</body>
</html>
