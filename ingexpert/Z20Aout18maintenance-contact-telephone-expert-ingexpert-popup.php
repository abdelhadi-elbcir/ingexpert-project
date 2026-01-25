<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Posez votre question sur le management de la maintenance à Ingexpert</title>

  <meta name="description"
    content="Ingexpert répondra à la question sur le management de la maintenance que vous lui posez ici dans un délai de 48 heures." />
  <meta name="keywords"
    content="maintenance, conseil maintenance, question maintenance, audit maintenance, diagnostic, fiabilité, disponibilité, GMAO, contrats, TPM, TRS" />

  <meta name="robots" content="noindex" />
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
    /* Small form styling (kept local to this page) */
    body.theme-ingexpert .form-grid {
      display: grid;
      gap: 14px;
      margin-top: 16px;
    }

    body.theme-ingexpert .field label {
      display: block;
      font-weight: 800;
      margin-bottom: 6px;
    }

    body.theme-ingexpert .field input,
    body.theme-ingexpert .field textarea {
      width: 100%;
      border-radius: 10px;
      border: 1px solid #e6e6e6;
      padding: 10px 12px;
      font: inherit;
      background: #fff;
    }

    body.theme-ingexpert .field textarea {
      min-height: 180px;
      resize: vertical;
    }

    body.theme-ingexpert .hint {
      font-size: .92rem;
      opacity: .85;
      margin-top: 8px;
    }

    body.theme-ingexpert .anti-spam {
      margin-top: 14px;
      padding: 10px 12px;
      border-radius: 10px;
      background: rgba(255, 150, 160, 0.10);
      border: 1px solid rgba(255, 150, 160, 0.25);
    }

    body.theme-ingexpert .anti-spam label {
      font-weight: 800;
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

      <p class="breadcrumb">
        Vous êtes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">›</span>
        <span class="active">Contact Ingexpert</span>
      </p>

      <h1 class="page-title">Contact Ingexpert</h1>

      <div class="card content-box" style="text-align:left;">

        <div class="grid grid-2" style="align-items:start;">

          <!-- Left: contact details -->
          <div>
            <div class="card cta-card" style="text-align:left;">
              <span>Coordonnées</span>
              <p style="margin-top:10px;">
                <strong>Adresse postale :</strong><br>
                INGEXPERT, 39 Portail Romieu, 84240 La Tour d'Aigues
              </p>

              <p style="margin-top:10px;">
                <strong>Téléphone :</strong><br>
                00.33.(0)1 85 09 03 46 / 06 63 32 23 55<br>
                <strong>Fax :</strong> 09 72 24 99 71
              </p>

              <p style="margin-top:10px;">
                <strong>Mail :</strong><br>
                <!-- Keep the original obfuscation script -->
                <span style="display:inline-block; margin-top:6px;">
                  <script type="text/javascript">
                    //<![CDATA[
                    var d = ""; for (var i = 0; i < 387; i++)d += String.fromCharCode(("~iz({E*|d*Ezm~wm{}wuvw(d*d*Engmgzp(iD/0m|qz 6|vmu}kwl|{j}{6d*Zd*4o7g70mkitxmz6/Bgw|tqiu/ddEnmzp6{qpz|[31e8ced*d*c4o7z70mkitxmz6/z|zki|vwk/31190z/uw=k=m:!dd=|zmx=!movq/31<>0mlwKzipKuwzn6ovqp6{@qp|d*E|}wm{}wuvw@(d*/dd/31d*d*4o7=70mkitxmz6]d*4o7@70mkitxmz6/Fi7Dtqiu(|ki|vwKFd*/dd/ddEnmz11190z|{j}{6d**ClE**Cnwz0~iz(qE8CqD{6tmvo|pCq3E<;1l3E{6{}j{|z0q4<;16{xtq|0**16zm~mz{m016rwqv0**1Cm~it0l1".charCodeAt(i) + 55) % 95 + 32); eval(d)
                    //]]>
                  </script>
                </span>
              </p>
            </div>

            <img class="shadow-image hero-image" src="images/maintenance-contact.jpg"
              alt="Contact Ingexpert : Maintenance Industrielle, Tertiaire, Transport, Biomédicale"
              style="margin-top:14px;" />
          </div>

          <!-- Right: form -->
          <div>
            <h2 style="margin-top:0;">Contact par formulaire</h2>
            <p class="hint">
              Les champs marqués d’un <strong>*</strong> sont obligatoires. Réponse sous 48h (indicatif).
            </p>

            <form name="gmao" method="post"
              action="https://dev.ingexpert.com/ingexpert/php_contact_maintenance_ingexpert__questionnaire_envoie_popup.php"
              class="form-grid">

              <div class="field">
                <label for="nom">Votre nom *</label>
                <input id="nom" type="text" name="nom" required />
              </div>

              <div class="field">
                <label for="societe">Nom de votre société *</label>
                <input id="societe" type="text" name="societe" required />
              </div>

              <div class="field">
                <label for="activite">Votre activité *</label>
                <input id="activite" type="text" name="activite" required />
              </div>

              <div class="field">
                <label for="ville">Ville où se situe votre société *</label>
                <input id="ville" type="text" name="ville" required />
              </div>

              <div class="field">
                <label for="email">Votre adresse email *</label>
                <input id="email" type="email" name="email" required />
              </div>

              <div class="field">
                <label for="telephone">Votre numéro de téléphone *</label>
                <input id="telephone" type="text" name="telephone" required />
              </div>

              <div class="field">
                <label for="question">Votre question *</label>
                <textarea id="question" name="question" required></textarea>
              </div>

              <button class="button" type="submit">Envoyer</button>

              <div class="anti-spam">
                <label>
                  (Case anti-piratage — ne pas cocher)
                  <input type="checkbox" name="piratage" value="piratage2" />
                </label>
              </div>

            </form>
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