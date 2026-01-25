<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Références – Conseil, formation et accompagnement en maintenance</title>

  <meta name="description"
    content="Liste de nos clients et références liés à notre activité de conseil, formation et accompagnement en maintenance. Ingexpert intervient auprès de clients de toutes tailles et secteurs (public/privé).">
  <meta name="keywords"
    content="références maintenance, clients maintenance, conseil maintenance, formation maintenance, accompagnement maintenance, audit, gmao, fiabilisation, contrats maintenance">
  <meta name="robots" content="all">
  <meta name="classification" content="maintenance, conseil, formation, accompagnement, références">
  <meta name="author" content="Laloux Guillaume, consultant maintenance">
  <meta name="generator" content="Laloux Ingexpert maintenance">
  <meta name="language" content="fr">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Global design -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css">
  <!-- Ingexpert unique styles -->
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css">

  <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">
</head>
<style>
  /* =========================
   References page
========================= */

  .note {
    margin-top: 10px;
    padding: 12px 14px;
    border-radius: 12px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(0, 0, 0, 0.03);
  }

  .chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 14px 0 6px;
  }

  .chip {
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 0.9rem;
    border: 1px solid rgba(255, 150, 160, 0.25);
    background: rgba(255, 150, 160, 0.08);
  }

  .block {
    margin-top: 18px;
  }

  .block-title {
    margin: 0 0 10px 0;
    font-size: 1.15rem;
    font-weight: 900;
  }

  .ref-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
  }

  @media (max-width: 980px) {
    .ref-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 640px) {
    .ref-grid {
      grid-template-columns: 1fr;
    }
  }

  .ref-card {
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    background: rgba(255, 255, 255, 0.7);
  }

  .ref-card h3 {
    margin: 0 0 6px 0;
    font-size: 1.02rem;
    font-weight: 900;
  }

  .ref-card p {
    margin: 0;
    line-height: 1.5;
  }

  .ref-meta {
    display: inline-block;
    margin-top: 10px;
    font-size: 0.85rem;
    opacity: 0.75;
  }

  .details {
    margin-top: 12px;
  }

  .details>summary {
    cursor: pointer;
    font-weight: 800;
    padding: 10px 0;
  }

  .details-body {
    padding-top: 10px;
  }

  .simple-list {
    margin: 0;
    padding-left: 18px;
  }

  .simple-list li {
    margin: 6px 0;
  }

  .ref-list {
    margin: 0;
    padding-left: 18px;
  }

  .ref-list li {
    margin: 8px 0;
    line-height: 1.55;
  }
</style>

<body class="theme-ingexpert">

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";
  ?>

  <main class="section">
    <div class="container">

      <!-- Breadcrumb -->
      <p class="breadcrumb">
        Vous êtes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert</a>
        <span class="sep">›</span>
        <span class="active">Qui sommes-nous ?</span>
        <span class="sep">›</span>
        <span class="active">Références</span>
      </p>

      <h1 class="page-title">Nos références</h1>

      <div class="content-box">
        <p>
          La société <strong>Ingexpert</strong> propose ses services à tous les organismes et entreprises
          souhaitant faire évoluer leur fonction maintenance. Depuis 2003, nos clients viennent de secteurs variés :
          <strong>marché public</strong> (ministères, communes, conseils régionaux, centres hospitaliers…)
          et <strong>marché privé</strong> (pétrochimie, nucléaire, pharmacie, agroalimentaire, automobile,
          métallurgie, transport, autoroutes…).
        </p>

        <p class="note">
          La société Ingexpert possède des clients fidèles depuis 2003. Par engagement contractuel,
          certains noms ou logos peuvent ne pas être affichés.
        </p>
      </div>

      <!-- Sectors chips -->
      <div class="chips">
        <span class="chip">Marché public</span>
        <span class="chip">Industrie</span>
        <span class="chip">Pharmacie</span>
        <span class="chip">Agroalimentaire</span>
        <span class="chip">Transport</span>
        <span class="chip">Tertiaire</span>
        <span class="chip">Énergie</span>
      </div>

      <!-- Recent references as cards -->
      <section class="block">
        <h2 class="block-title">Références (extraits)</h2>

        <div class="ref-grid">

          <article class="ref-card">
            <h3>SCLE (Engie – Toulouse)</h3>
            <p>Formation responsable maintenance (contrat maintenance RTE).</p>
            <span class="ref-meta">Juin 2020</span>
          </article>

          <article class="ref-card">
            <h3>GMEX</h3>
            <p>Rédaction de cours pour BTS Maintenance 4.0.</p>
            <span class="ref-meta">Mai 2020</span>
          </article>

          <article class="ref-card">
            <h3>STALLERGENES Pharma</h3>
            <p>Management de transition.</p>
            <span class="ref-meta">Février 2020</span>
          </article>

          <article class="ref-card">
            <h3>STRYKER</h3>
            <p>Formation tableau de bord maintenance (équipements médicaux).</p>
            <span class="ref-meta">Février 2020</span>
          </article>

          <article class="ref-card">
            <h3>CNIM (La Seyne-sur-Mer)</h3>
            <p>Déploiement management maintenance (AMDEC, GMAO, ordonnancement, méthodes…).</p>
            <span class="ref-meta">Septembre 2019</span>
          </article>

          <article class="ref-card">
            <h3>CNIM (La Seyne-sur-Mer)</h3>
            <p>Définition d’un document de management d’un service maintenance.</p>
            <span class="ref-meta">Juin 2019</span>
          </article>

          <article class="ref-card">
            <h3>Cuenot Régulation</h3>
            <p>Calcul de durée de vie – banc étalonnage soupapes (nucléaire).</p>
            <span class="ref-meta">Février 2018</span>
          </article>

          <article class="ref-card">
            <h3>INGESPACE</h3>
            <p>Calcul MTTF – antenne satellite.</p>
            <span class="ref-meta">Décembre 2017</span>
          </article>

        </div>
      </section>

      <!-- Big list: CCI audits - collapsible -->
      <section class="block">
        <h2 class="block-title">Marché public – CCI Haute Normandie (2009)</h2>

        <div class="content-box">
          <p>
            Définition du marché régional de la maintenance (7 CCI : Rouen, Elbeuf, Evreux, Le Havre, Dieppe, Eure).
            La liste des entreprises auditées est disponible ci-dessous.
          </p>

          <details class="details">
            <summary>Voir la liste des entreprises auditées</summary>
            <div class="details-body">
              <ul class="simple-list">
                <li>AREVA T&amp;D – Le Petit Quevilly</li>
                <li>CHEVRON ORONITE – Le Havre</li>
                <li>CHU – Rouen</li>
                <li>CONSEIL GENERAL 27 – Evreux</li>
                <li>COOPERATIVE LUNOR – Luneray</li>
                <li>EDF – Paluel</li>
                <li>ERAMET – St Romain de Colbosc</li>
                <li>EXXONMOBIL CHEMICAL – Notre Dame de Gravenchon</li>
                <li>GLAXO WELLCOME PRODUCTION – Evreux</li>
                <li>GPM (Grand Port Maritime) – Le Havre</li>
                <li>GPN – Le Grand Quevilly</li>
                <li>GREIF France – Le Grand Quevilly</li>
                <li>KIMBERLY CLARK – Sotteville-lès-Rouen</li>
                <li>LEGRAND France – Malaunay</li>
                <li>LUBRIZOL France – Rouen</li>
                <li>ORIL INDUSTRIE – Bolbec</li>
                <li>PETROPLUS – Petit-Couronne</li>
                <li>PTL – Ambrumesnil</li>
                <li>RENAULT – Cléon</li>
                <li>RENAULT – Le Havre</li>
                <li>REVIMA APU – Caudebec-en-Caux</li>
                <li>REXAM PHARMA – Offranville</li>
                <li>SANOFI CHIMIE – Saint-Aubin-lès-Elbeuf</li>
                <li>SIDEL BLOWING &amp; SERVICES – Le Havre</li>
                <li>SIKA France – Gournay-en-Bray</li>
                <li>SNCF Technicentre – Rouen Quatre Mares</li>
                <li>SYNGENTA PRODUCTION – St Pierre la Garenne / Gaillon</li>
                <li>TOTAL Raffinage Marketing – Gonfreville l’Orcher</li>
                <li>TOTAL Petrochemicals – Harfleur</li>
                <li>UPM KYMMENE – Grand Couronne</li>
                <li>VALOIS – Le Vaudreuil</li>
                <li>ADF Normandie – Le Havre</li>
                <li>AXIOM RAIL – Alizay</li>
                <li>TEAM RESEAUX – Guichainville</li>
                <li>SPIE IDF Nord-Ouest – Cléon</li>
                <li>SNEF – Le Petit Quevilly</li>
                <li>FORCLUM Haute-Normandie – Harfleur</li>
              </ul>
            </div>
          </details>
        </div>
      </section>

      <!-- Older references - simple list -->
      <section class="block">
        <h2 class="block-title">Autres références (sélection)</h2>

        <ul class="ref-list">
          <li><strong>SERCO</strong> : Étude contrat de prestation de service sur la cryogénie (2008)</li>
          <li><strong>SGA</strong> : Étude financière / définition forfait marché (2008)</li>
          <li><strong>GDE</strong> : Audit et plan de progrès (2007)</li>
          <li><strong>CERN</strong> : Inventaire équipements tertiaires, audit et préconisations (2006)</li>
          <li><strong>SPI</strong> : Audit contrat de prestation de service et plan de progrès (2005)</li>
          <li><strong>ARKEMA (ex ATOFINA)</strong> : Contrats, réorganisation maintenance (2005)</li>
          <li><strong>OCP Maroc</strong> : Audit de la maintenance</li>
          <li><strong>AREVA</strong> : Gestion de stock, revue système expert</li>
          <li><strong>BOSTIK FINDLEY</strong> : Rédaction contrat de maintenance</li>
        </ul>
      </section>

    </div>
  </main>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php";
  ?>

  <script src="/assets/js/site.js"></script>

</body>

</html>