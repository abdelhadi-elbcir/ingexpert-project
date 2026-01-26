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

  <!-- Activities Grid -->
  <section class="section">
    <div class="container">
      <div class="grid">

        <!-- Column 2: Offerings/Missions -->
        <div class="card-section">
          <h2 class="text-center" style="color: var(--accent-pink); margin-bottom: var(--spacing-md);">
            Notre Accompagnement</h2>

          <!-- <img src="/images/maintenance 4.0.jpg" alt="Maintenance 4.0"
               style="margin: 0 auto; margin-bottom: 20px; max-width: 520px;"> -->
            <div class="offer-accordion">

              <!-- 1 -->
              <details class="offer-item" open>
                <summary class="offer-summary">Diagnostic, Amélioration continue</summary>
                <ul class="offer-list">
                  <li><a href="/ingexpert/maintenance-coffret-audit-management.php">Audit, revue, état des lieux</a></li>
                  <li><a href="/ingexpert/php-missions-methodologie-maintenance-bonne-pratique-amelioration.php">Plans de progrès, d’actions / schémas directeurs</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__Deming-PDCA.php">Démarche PDCA</a></li>
                </ul>
              </details>

              <!-- 2 -->
              <details class="offer-item">
                <summary class="offer-summary">Définition, (Ré)organisation maintenance</summary>
                <ul class="offer-list">
                  <li><a href="/ingexpert/php-missions-methodologie-maintenance-politique-organisation-strategie-objectif.php">Définition politique, stratégie et objectifs</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__processus.php">Définition organisation du service / processus</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__fonction.php">Définition fiches de fonction et savoir faire</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__indicateur.php">Indicateurs / tableaux de bord</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__AMDEC-intro.php">Démarches, méthodes (TPM, AMDEC, 5S, ...)</a></li>
                  <li>Plan et manuel Qualité</li>
                </ul>
              </details>

              <!-- 3 -->
              <details class="offer-item">
                <summary class="offer-summary">Ingénierie maintenance</summary>
                <ul class="offer-list">
                  <li><a href="/ingexpert/maintenance-coffret-fiabilisation.php">Disponibilité (Fiabilisation, maintenabilité, MTTR)</a></li>
                  <li><a href="/ingexpert/maintenance-pack-stock-magasin.php">Optimisation de la gestion de stock / mutualisation</a></li>
                  <li>Maîtrise énergétique</li>
                  <li><a href="/maintexpert/php_theorie_maintenance__equipement_bien.php">Inventaire d’équipements (critiques) / étiquetage</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__definitions.php">Maintenance conditionnelle</a></li>
                  <li><a href="/maintexpert/php_theorie_maintenance__fiabilite.php">Calcul de fiabilité (MTBF, taux de défaillance)</a></li>
                  <li>Organisation d’arrêts / Réceptions d’installations</li>
                  <li>Planification projets / Travaux</li>
                  <li>Rétrofit / reengineering</li>
                  <li><a href="/maintexpert/php_theorie_maintenance__plan_de_maintenance.php">Plans de maintenance, d’entretien</a></li>
                  <li>Documentation technique des équipements</li>
                  <li><a href="/ingexpert/maintenance-coffret-GMAO.php">Solutions logicielles (GMAO, systèmes experts)</a></li>
                  <li>Gammes / modes opératoires</li>
                  <li>Juridique</li>
                </ul>
              </details>

              <!-- 4 -->
              <details class="offer-item">
                <summary class="offer-summary">Analyses liées à la maintenance</summary>
                <ul class="offer-list">
                  <li><a href="/maintexpert/php_theorie_maintenance__analyse_risques.php">Analyses de risques</a></li>
                  <li><a href="/ingexpert/maintenance-surete-fonctionnement-SdF-SLI-soutien-logistique-integre-disponibilite-fiabilite.php">Sûreté de fonctionnement (SdF)</a></li>
                  <li><a href="/ingexpert/maintenance-surete-fonctionnement-SdF-SLI-soutien-logistique-integre-disponibilite-fiabilite.php">ASL, SLI, SN</a></li>
                  <li>Définition de coûts</li>
                  <li>Liste des rechanges (LAR / LAI)</li>
                </ul>
              </details>

              <!-- 5 -->
              <details class="offer-item">
                <summary class="offer-summary">Sous-traitance de la maintenance</summary>
                <ul class="offer-list">
                  <li>Rédaction des cahiers des charges</li>
                  <li>Rédaction de contrats de moyens ou de résultat</li>
                  <li>Accompagnement de consultation</li>
                  <li>Contrats de maintenance et leur suivi</li>
                  <li>Plan qualité adaptés aux contrats</li>
                  <li>Bordereaux points</li>
                </ul>
              </details>

              <!-- 6 -->
              <details class="offer-item">
                <summary class="offer-summary">Formations spécifiques</summary>
                <ul class="offer-list">
                  <li><a href="/ingexpert/maintenance-pack-formation-management.php">Management de la maintenance</a></li>
                  <li><a href="/ingexpert/maintenance-pack-formation-stock.php">Gestion de stock</a></li>
                  <li><a href="/ingexpert/maintenance-pack-formation-fiabilisation.php">Amélioration de la disponibilité, fiabilisation</a></li>
                  <li><a href="/ingexpert/maintenance-pack-formation-contrat.php">Management des contrats de maintenance</a></li>
                  <li>Méthodologies de maintenance</li>
                </ul>
              </details>

            </div>


        </div>
      
        <h2 class="text-center" style="color: var(--accent-pink); margin-bottom: var(--spacing-md);">
            Activité de nos clients</h2>

        <!-- Column 1: Sectors -->
        <div class="grid grid-2 sectors-grid">
          <a href="https://maintenance.industrielle.ingexpert.com" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-industries.jpg">
            <h3>Industrie</h3>
            <p>Conseil management maintenance Industrie</p>
          </a>

          <a href="/ingexpert/maintenance-missions-SAV.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-SAV.jpg">
            <h3>SAV</h3>
            <p>Conseil management maintenance SAV</p>
          </a>

          <a href="https://maintenance.energie.ingexpert.com" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-energie.jpg">
            <h3>Énergie</h3>
            <p>Conseil management maintenance énergie</p>
          </a>

          <a href="/ingexpert/maintenance-mission-reseaux-gaz-electricite-fluide.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-reseaux.jpg">
            <h3>Réseaux</h3>
            <p>Fluides - Gaz - Electricité</p>
          </a>

          <a href="/ingexpert/maintenance-missions-transport-travaux-publics-transport-ouvrages.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-infrastructures.jpg">
            <h3>Infrastructures</h3>
            <p>Conseil management maintenance infrastructure</p>
          </a>

          <a href="/ingexpert/maintenance-missions-biomedicale-hopitaux.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-hopitaux.jpg">
            <h3>Hôpitaux</h3>
            <p>Biomédical - Serv. Technique</p>
          </a>

          <!-- NEW: Tertiaire -->
          <a href="/ingexpert/maintenance-missions-tertiaire.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-tertiaire.jpg">
            <h3>Tertiaire</h3>
            <p>Services, bâtiments, sites tertiaires</p>
          </a>

          <!-- NEW: Transport -->
          <a href="/ingexpert/maintenance-missions-transport.php" class="card sector-card" data-bg="/images/images-index-maintenance/maintenance/maintenance-expert-conseil-transports.jpg">
            <h3>Transport</h3>
            <p>Maintenance transport, logistique, mobilité</p>
          </a>
        </div>

        
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
        <div class="client-logo"><img src="/images/logos/vinci.png" alt="vinci"></div>
        <div class="client-logo"><img src="/images/logos/carrier.png" alt="carrier"></div>
        <div class="client-logo"><img src="/images/logos/lafarge.png" alt="lafarge"></div>
        <div class="client-logo"><img src="/images/logos/eiffage.png" alt="eiffage"></div>
        <div class="client-logo"><img src="/images/logos/areva.png" alt="areva"></div>
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

  <!-- Mission standardisée -->
<section class="section mission-section">
  <div class="container">
    <div class="mission-header text-center">
      <h2 style="color: var(--primary-blue); margin-bottom: 10px;">Notre mission standardisée</h2>
      <p class="mission-lead">
        Une approche claire, structurée et reproductible pour améliorer votre management de la maintenance.
      </p>
    </div>

    <div class="grid grid-3">
      <div class="card mission-card">
        <div class="mission-step">1</div>
        <h3>Diagnostiquer</h3>
        <p class="text-light">État des lieux, analyse des pratiques, points forts / points à risque.</p>
      </div>

      <div class="card mission-card">
        <div class="mission-step">2</div>
        <h3>Structurer</h3>
        <p class="text-light">Processus, rôles, indicateurs, plan d’actions et priorisation terrain.</p>
      </div>

      <div class="card mission-card">
        <div class="mission-step">3</div>
        <h3>Déployer & mesurer</h3>
        <p class="text-light">Mise en œuvre, accompagnement, formation, suivi des gains et amélioration continue.</p>
      </div>
    </div>

    <div class="mission-cta text-center" style="margin-top: var(--spacing-lg);">
      <a href="/contact.php" class="button">Parler de votre besoin</a>
      <a href="/ingexpert/maintenance-activite-references.php" class="btn-text" style="margin-left: 14px;">
        Voir nos références &rarr;
      </a>
    </div>
  </div>
</section>


  <!-- Quality / Standards -->
  <section class="section quality-section">
    <div class="container">
      <div class="quality-header">
        <h2>Management par la Qualité</h2>
        <p class="quality-lead">
          Ingexpert est orienté référentiels depuis plus de 25 ans (commission de normalisation X60G).
        </p>
      </div>

      <div class="grid grid-2">
        <div class="card quality-card">
          <h3>Accompagnement certifications</h3>
          <p class="text-light">
            Ingexpert vous aide à définir, acquérir une certification ou certifier votre management de la maintenance,
            et à maintenir votre système de management.
          </p>

          <div class="quality-actions">
            <a class="button" href="/contact.php">Demander un échange</a>
            <a class="btn-text" href="/ingexpert/maintenance-activite-references.php">Nos références &rarr;</a>
          </div>
        </div>

        <div class="card quality-card">
          <h3>Référentiels & normes couvertes</h3>

          <div class="badge-grid" aria-label="Normes et référentiels">
            <span class="badge">Série X60G</span>
            <span class="badge">EN 13269</span>
            <span class="badge">ISO 55000</span>
            <span class="badge">ISO 55001</span>
            <span class="badge">ISO 55010</span>
            <span class="badge">ISO 55012</span>
            <span class="badge">ISO 55013</span>
            <span class="badge">ISO/TS 16949 (Auto)</span>
            <span class="badge">EN9100 / AS9100 (Aéro)</span>
            <span class="badge">TL9000 (Télécom)</span>
            <span class="badge">ISO 19443 (Nucléaire)</span>
          </div>

          <p class="quality-note">
            Focus gestion d’actifs (ISO 55000) : actifs, implication/compétences, données.
          </p>
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

  <!-- Dialogue: Forum & Blog -->
<section class="section dialogue-section">
  <div class="container">
    <div class="text-center" style="margin-bottom: var(--spacing-lg);">
      <h2 style="color: var(--primary-blue);">Dialogue</h2>
      <p class="dialogue-lead">Échanger, apprendre, partager des retours terrain.</p>
    </div>

    <div class="grid grid-2">
      <a href="/forum/" class="card dialogue-card">
        <div class="dialogue-icon" aria-hidden="true">💬</div>
        <h3>Forum</h3>
        <p class="text-light">Posez vos questions, partagez vos cas concrets, discutez méthodes & outils.</p>
        <span class="link-more">Accéder au forum &rarr;</span>
      </a>

      <a href="/blog/" class="card dialogue-card">
        <div class="dialogue-icon" aria-hidden="true">📝</div>
        <h3>Blog</h3>
        <p class="text-light">Articles, bonnes pratiques, modèles, indicateurs, retours d’expérience.</p>
        <span class="link-more">Lire le blog &rarr;</span>
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
