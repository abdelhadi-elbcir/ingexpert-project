<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Organisation, politique, objectifs, stratégie maintenance</title>

  <meta name="description"
    content="Application de la Qualité selon Ingexpert pour améliorer le management de votre maintenance industrielle, tertiaire et biomédicale par le conseil, la formation et l’accompagnement." />
  <meta name="keywords"
    content="politique maintenance, stratégie maintenance, objectifs maintenance, organisation maintenance, ISO 9001, ISO 55000, externalisation maintenance, contrats maintenance, amélioration continue, audit maintenance" />
  <meta name="robots" content="all" />
  <meta name="classification"
    content="maintenance, organisation, stratégie, objectifs, ISO 9001, ISO 55000, externalisation, contrats, amélioration continue" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="generator" content="Laloux Ingexpert maintenance" />
  <meta name="creation_date" content="3/12/2002" />
  <meta name="revisit-after" content="7 days" />
  <meta name="language" content="fr" />

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon" />

  <!-- New global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <!-- Ingexpert unique overrides -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <style>
    /* local cleanup for legacy "redaction" blocks */
    body.theme-ingexpert .block-title {
      margin: 18px 0 10px 0;
      color: var(--ingexpert-primary);
    }

    body.theme-ingexpert .bullets {
      margin: 10px 0 0 18px;
    }

    body.theme-ingexpert .bullets li {
      margin: 8px 0;
    }

    body.theme-ingexpert .mini-note {
      margin-top: 10px;
      opacity: .9;
    }

    body.theme-ingexpert .cta-row {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 12px;
    }
  </style>
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
        <span class="active">Politique : organisation – stratégie – objectif</span>
      </p>

      <h1 class="page-title">Politique de maintenance : objectifs, stratégie, organisation</h1>

      <div class="card content-box" style="text-align:left;">

        <div class="cta-row">
          <a class="button"
            href="https://dev.ingexpert.com/ingexpert/maintenance-contact-telephone-expert-ingexpert-popup.php"
            onclick="window.open(this.href,'Popup','scrollbars=1,resizable=1,height=560,width=770'); return false;">
            Demander un devis
          </a>
        </div>

        <p>
          Nous vous accompagnons dans la définition (ou la mise à jour) de votre politique de maintenance.
          Celle-ci s'applique à votre organisation interne ainsi qu'à votre sous-traitance.
        </p>

        <p>
          La société Ingexpert s'appuie sur des compétences organisationnelles, techniques et juridiques.
        </p>

        <p>
          Les objectifs et la stratégie sont définis conformément aux recommandations Qualité.
          Les objectifs seront utilisés pour définir l'organisation requise et les améliorations attendues.
        </p>

        <h2 class="block-title">(Ré)organisation du service maintenance</h2>
        <ul class="bullets">
          <li>Définition de la politique (stratégie, objectifs).</li>
          <li>Définition de l’organisation du service.</li>
          <li>Définition des processus (et éventuellement mise à jour de la cartographie des processus).</li>
          <li>Définition de procédures.</li>
          <li>Définition des fiches de fonction / fiches de poste.</li>
          <li>Déploiement des référentiels normatifs : ISO 9001, ISO 55000 (55000, 55001, 55010, 55012, 55013).</li>
        </ul>

        <h2 class="block-title">Sous-traitance de la maintenance (prestation de service, externalisation)</h2>
        <ul class="bullets">
          <li>Définition de la politique de sous-traitance.</li>
          <li>Rédaction des cahiers des charges de consultation des prestataires de service.</li>
          <li>Définition des objectifs de fonctionnement des contrats.</li>
          <li>Définition de plans Qualité de prestation de service.</li>
          <li>Rédaction de contrats de prestation de service :</li>
          <li style="list-style: none; margin-left: 18px;">
            <ul class="bullets">
              <li>Types : contrats de moyens ou de résultat.</li>
              <li>Rémunération : forfait, mini-forfaits, bordereaux points, attachement, dépense contrôlée,
                coût cible, dépense plafonnée, cost &amp; fee.</li>
            </ul>
          </li>
          <li>Accompagnement des consultations de choix des prestataires de service.</li>
          <li>
            Suivi des contrats de maintenance (voir le paragraphe
            <a
              href="https://dev.ingexpert.com/ingexpert/php-missions-methodologie-maintenance-bonne-pratique-amelioration.php">
              Améliorations
            </a>).
          </li>
        </ul>

        <h2 class="block-title">Amélioration continue</h2>
        <p>
          Ingexpert vous accompagne dans l'évolution de votre management en utilisant les outils de progrès
          et les référentiels Qualité. Pour mener à bien ces missions, nous avons des interlocuteurs variables,
          par exemple :
        </p>

        <ul class="bullets">
          <li>Ingénieur ou coordinateur Amélioration Continue et Performance Industrielle.</li>
          <li>Chef du Bureau du Progrès Permanent.</li>
          <li>Directeur de Transformation et Conduite du Changement.</li>
        </ul>

        <p class="mini-note">
          Besoin d’un cadrage rapide ? Contactez-nous et nous reviendrons vers vous avec une approche adaptée.
        </p>

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