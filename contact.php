<?php
// contact.php
// Page Contact modernisée avec header/footer centralisés.
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Language" content="fr" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Contact | Ingexpert</title>
  <meta name="description"
    content="Contactez Ingexpert : conseil, formation et accompagnement en management de la maintenance. Réponse rapide par formulaire." />
  <meta name="robots" content="index, follow" />

  <!-- Canonical -->
  <link rel="canonical" href="https://dev.ingexpert.com/contact.php" />

  <!-- CSS global + CSS spécifique Ingexpert -->
  <link rel="stylesheet" href="/assets/css/style_redesign.css" />
  <link rel="stylesheet" href="/ingexpert/assets/css/unique_style.css" />

  <!-- (Optionnel) Open Graph minimal -->
  <meta property="og:title" content="Contact | Ingexpert" />
  <meta property="og:description"
    content="Demandez un devis ou une info : audit, formation, accompagnement maintenance." />
  <meta property="og:type" content="website" />

  <!-- Styles locaux ultra-légers pour la mise en page de cette page uniquement
       (tu peux les déplacer dans unique_style.css si tu préfères) -->
  <style>
    :root {
      --container: 1100px;
      --radius: 16px;
      --shadow: 0 12px 30px rgba(0, 0, 0, .08);
      --border: rgba(0, 0, 0, .10);
      --muted: rgba(0, 0, 0, .65);
    }

    .container {
      max-width: var(--container);
      margin: 0 auto;
    }

    .page-hero {
      padding: 40px 0 18px;
    }

    .hero-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: calc(var(--radius) + 6px);
      box-shadow: var(--shadow);
      padding: 22px;
      display: grid;
      gap: 10px;
    }

    .hero-card h1 {
      margin: 0;
      font-size: clamp(1.5rem, 2.5vw, 2.1rem);
      line-height: 1.2;
    }

    .hero-card p {
      margin: 0;
      color: var(--muted);
      max-width: 75ch;
    }

    .grid {
      display: grid;
      gap: 18px;
    }

    @media (min-width: 920px) {
      .grid-2 {
        grid-template-columns: 1.1fr .9fr;
        align-items: start;
      }

      .grid-3 {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 18px;
    }

    .card h2,
    .card h3 {
      margin: 0 0 10px 0;
      line-height: 1.2;
    }

    .card p,
    .card li {
      color: var(--muted);
    }

    /* Form */
    .form-grid {
      display: grid;
      gap: 12px;
    }

    @media (min-width: 720px) {
      .form-2 {
        grid-template-columns: 1fr 1fr;
      }
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .field {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    input,
    textarea {
      width: 100%;
      padding: 12px 12px;
      border-radius: 12px;
      border: 1px solid #000000;
      outline: none;
      font: inherit;
      background: #fff;
    }

    input:focus,
    textarea:focus {
      border-color: rgba(213, 44, 31, .45);
      box-shadow: 0 0 0 4px rgba(213, 44, 31, .10);
    }

    .actions {
      display: flex;
      gap: 10px;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 4px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 999px;
      padding: 12px 18px;
      font-weight: 700;
      border: 1px solid transparent;
      cursor: pointer;
      text-decoration: none;
      line-height: 1;
      transition: transform .05s ease, opacity .15s ease;
    }

    .btn:active {
      transform: translateY(1px);
    }

    .btn-primary {
      background: #87B4C3;
      color: #fff;
    }

    .btn-ghost {
      background: transparent;
      border-color: var(--border);
      color: #111;
    }

    .help {
      font-size: .92rem;
      color: var(--muted);
    }

    /* Galerie 2 images */
    .gallery {
      display: grid;
      gap: 12px;
    }

    @media (min-width: 720px) {
      .gallery {
        grid-template-columns: 1fr 1fr;
      }
    }

    .gallery img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: var(--radius);
      border: 1px solid var(--border);
    }

    /* Best practices list */
    .bp {
      margin: 0;
      padding-left: 18px;
      display: grid;
      gap: 8px;
    }

    /* Timeline “Jalons” (table rendu propre) */
    .timeline {
      display: grid;
      gap: 12px;
      margin-top: 6px;
    }

    .milestone {
      display: grid;
      grid-template-columns: 110px 1fr;
      gap: 12px;
      align-items: start;
      padding: 12px;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      background: #fff;
    }

    .milestone .date {
      font-weight: 800;
      color: #111;
      white-space: nowrap;
    }

    .milestone .content {
      display: grid;
      gap: 4px;
    }

    .milestone .title {
      font-weight: 800;
      margin: 0;
    }

    .milestone .desc {
      margin: 0;
      color: var(--muted);
    }

    /* Section spacing */
    .section {
      padding: 18px 0;
    }
  </style>
</head>

<body>

  <?php include __DIR__ . "/layouts/header.inc.php"; ?>

  <main>

    <!-- HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="hero-card">
          <h1>Contact</h1>
          <p>
            Une question, un besoin d’audit, de formation ou d’accompagnement ?
            Laisse-nous un message via le formulaire : réponse rapide et claire.
          </p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container grid grid-2">

        <!-- FORM CARD -->
        <article class="card">
          <h2>3 - Contact par formulaire</h2>
          <p class="help">
            Les champs marqués d’un * sont obligatoires. (Anti-bot inclus)
          </p>

          <form method="post" action="contact_submit.php" class="form-grid">
            <div class="form-grid form-2">
              <div class="field">
                <label for="company_name">Nom de votre société *</label>
                <input id="company_name" type="text" name="company_name" required autocomplete="organization" />
              </div>

              <div class="field">
                <label for="activity">Votre activité</label>
                <input id="activity" type="text" name="activity" autocomplete="off" />
              </div>
            </div>

            <div class="form-grid form-2">
              <div class="field">
                <label for="city_postal">Ville ou code postal</label>
                <input id="city_postal" type="text" name="city_postal" autocomplete="postal-code" />
              </div>

              <div class="field">
                <label for="full_name">Votre nom et prénom *</label>
                <input id="full_name" type="text" name="full_name" required autocomplete="name" />
              </div>
            </div>

            <div class="form-grid form-2">
              <div class="field">
                <label for="phone">Votre numéro de téléphone *</label>
                <input id="phone" type="tel" name="phone" required autocomplete="tel" inputmode="tel" />
              </div>

              <div class="field">
                <label for="email">Votre adresse email *</label>
                <input id="email" type="email" name="email" required autocomplete="email" />
              </div>
            </div>

            <div class="field">
              <label for="question">Votre question *</label>
              <textarea id="question" name="question" rows="6" required></textarea>
            </div>

            <!-- Anti-bot simple (honeypot) -->
            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" />

            <div class="actions">
              <button type="submit" class="btn btn-primary">Envoyer</button>
              <a href="/" class="btn btn-ghost">Retour accueil</a>
              <span class="help">En envoyant, vous acceptez d’être recontacté concernant votre demande.</span>
            </div>
          </form>
        </article>

        <!-- SIDE CONTENT -->
        <aside class="grid" style="gap:18px">

          <!-- Cards -->
          <div class="card">
            <h3>Ce que vous pouvez attendre</h3>
            <ul class="bp">
              <li>Analyse rapide de votre demande</li>
              <li>Réponse structurée (options + priorités)</li>
              <li>Proposition d’une approche pragmatique</li>
              <li>Recommandations “best practices” actionnables</li>
            </ul>
          </div>

          <!-- Gallery 2 images -->
          <div class="card">
            <h3>Exemples d’interventions</h3>
            <p class="help">Deux visuels (placeholders) – remplace par tes images.</p>
            <div class="gallery">
              <img src="/assets/img/contact-1.jpg" alt="Conseil et diagnostic maintenance" loading="lazy">
              <img src="/assets/img/contact-2.jpg" alt="Formation et accompagnement opérationnel" loading="lazy">
            </div>
          </div>

        </aside>

      </div>
    </section>


  </main>

  <?php include __DIR__ . "/layouts/footer.inc.php"; ?>

  <!-- JS sans jQuery -->
  <script src="/assets/js/site.js" defer></script>

</body>

</html>