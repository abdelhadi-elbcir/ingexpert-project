<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Si $description n'est pas défini par la page appelante, on met une valeur par défaut.
 * (ton code d’origine faisait: <? echo $description; ?>)
 */
$description = $description ?? "Contact Ingexpert pour missions d'expertise en maintenance.";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Contact Ingexpert pour missions d'expertise en maintenance</title>

  <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>" />
  <meta name="keywords"
    content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, contrat, maintenance, entretien, audit, diagnostic, ingénieur, conseil, industrie, auditeur, maintenabilité, fiabilité, disponibilité, normes, indicateurs, durabilité, contrôles, thermographie, expertise, amdec, preventif, defaillance, curatif, consulting, previsionnel, plan de maintenance, TRS, TPM" />
  <meta name="robots" content="all" />
  <meta name="author" content="Laloux Guillaume, consultant maintenance" />
  <meta name="generator" content="Laloux Ingexpert maintenance" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" type="image/x-icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" />

  <!-- ✅ Nouveau CSS local -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
</head>
<style>
  /* ==============================
   FORM DESIGN – INGEXPERT
   ============================== */

  .form {
    display: flex;
    flex-direction: column;
    gap: 18px;
  }

  /* Champ */
  .field {
    display: flex;
    flex-direction: column;
  }

  .field label {
    font-size: 14px;
    font-weight: 600;
    color: #1f2a37;
    margin-bottom: 6px;
  }

  .field .req {
    color: #d97706;
    /* orange Ingexpert */
  }

  /* Inputs & textarea */
  .field input,
  .field textarea {
    font-family: inherit;
    font-size: 14px;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #d1d5db;
    background-color: #ffffff;
    transition: all 0.2s ease;
  }

  .field textarea {
    resize: vertical;
    min-height: 120px;
  }

  /* Focus */
  .field input:focus,
  .field textarea:focus {
    outline: none;
    border-color: #5594d9;
    box-shadow: 0 0 0 3px rgba(85, 148, 217, 0.15);
  }

  /* Bouton */
  .btn-primary {
    align-self: flex-start;
    margin-top: 10px;
    padding: 12px 26px;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    background: linear-gradient(135deg, #5594d9, #304c9c);
    border: none;
    border-radius: 999px;
    cursor: pointer;
    transition: all 0.25s ease;
  }

  .btn-primary:hover {
    transform: translateY(-1px);
    box-shadow: 0 8px 20px rgba(48, 76, 156, 0.25);
  }

  /* Texte d’aide */
  .hint {
    font-size: 12px;
    color: #6b7280;
    margin-top: 10px;
  }

  /* Checkbox inline */
  .inline-check {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-left: 6px;
  }

  .inline-check input {
    accent-color: #5594d9;
  }

  /* ==============================
   CARDS & GRID (si pas encore fait)
   ============================== */

  .card {
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
  }

  .pad {
    padding: 26px;
  }

  .block-title {
    font-size: 18px;
    font-weight: 700;
    color: #304c9c;
    margin-bottom: 18px;
  }

  .grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
  }

  /* Responsive */
  @media (max-width: 900px) {
    .grid-2 {
      grid-template-columns: 1fr;
    }

    .btn-primary {
      width: 100%;
      text-align: center;
    }
  }
</style>

<body>

  <!-- ✅ Nouveau header -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php"; ?>

  <main class="section">
    <div class="container">

      <div class="breadcrumb">
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">></span>
        <span class="active">Contact</span>
      </div>

      <h1 class="page-title">CONTACT INGEXPERT</h1>

      <div class="grid-2">
        <!-- Infos contact -->
        <section class="card pad">
          <h2 class="block-title">Coordonnées</h2>

          <ul class="list-clean">
            <li><strong>Adresse postale :</strong> INGEXPERT — 39 Portail Romieu, 84240 La Tour d'Aigues</li>
            <li><strong>Téléphone :</strong> +33 (0)4 65 23 01 07 / +33 (0)6 63 32 23 55</li>
            <li>
              <strong>Mail :</strong>
              <a href="mailto:secretariat@ingexpert.com">secretariat@ingexpert.com</a>
            </li>
          </ul>

        </section>

        <!-- Formulaire -->
        <section class="card pad">
          <h2 class="block-title">Contact par formulaire</h2>

          <!-- ✅ Si tu veux tester en local, remplace action par une page locale (ex: /contact-submit.php) -->
          <form class="form" method="post"
            action="https://dev.ingexpert.com/ingexpert/php_contact_maintenance_ingexpert__questionnaire_envoie_popup.php">
            <div class="field">
              <label for="nom">Votre nom <span class="req">*</span></label>
              <input id="nom" type="text" name="nom" required />
            </div>

            <div class="field">
              <label for="societe">Nom de votre société <span class="req">*</span></label>
              <input id="societe" type="text" name="societe" required />
            </div>

            <div class="field">
              <label for="activite">Votre activité <span class="req">*</span></label>
              <input id="activite" type="text" name="activite" required />
            </div>

            <div class="field">
              <label for="ville">Ville où se situe votre société <span class="req">*</span></label>
              <input id="ville" type="text" name="ville" required />
            </div>

            <div class="field">
              <label for="email">Votre adresse email <span class="req">*</span></label>
              <input id="email" type="email" name="email" required />
            </div>

            <div class="field">
              <label for="telephone">Votre numéro de téléphone <span class="req">*</span></label>
              <input id="telephone" type="text" name="telephone" required />
            </div>

            <div class="field">
              <label for="question">Votre question <span class="req">*</span></label>
              <textarea id="question" name="question" rows="8" required></textarea>
            </div>

            <button class="btn-primary" type="submit">Envoyer</button>

            <p class="hint">
              (Case anti-piratage, ne pas cocher cette case :
              <label class="inline-check">
                <input type="checkbox" name="piratage" value="piratage2">
                Ne pas cocher
              </label>)
            </p>
          </form>
        </section>
      </div>

    </div>
  </main>

  <!-- ✅ Nouveau footer -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php"; ?>

  <!-- ✅ JS local -->
  <script src="/assets/js/site.js"></script>
</body>

</html>