<?php
// /admin/messages.php
declare(strict_types=1);

require __DIR__ . "/auth.php";
require __DIR__ . "/../config.php";

$stmt = $pdo->query("
  SELECT id, company_name, activity, city_postal, full_name, phone, email, question, created_at
  FROM contact_form
  ORDER BY id DESC
");
$messages = $stmt->fetchAll();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Messages</title>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
  <div class="admin-shell">
    <aside class="admin-sidebar">
      <div class="admin-brand">
        <div class="admin-logo" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
  <path fill="#87B4C3" d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 5a3 3 0 1 1-3 3 3.003 3.003 0 0 1 3-3Zm0 13.2a8.188 8.188 0 0 1-5.4-2.05 5.55 5.55 0 0 1 10.8 0A8.188 8.188 0 0 1 12 20.2Z"/>
</svg></div>
        <div>
          <h1>Ingexpert</h1>
          <small>Dashboard Admin</small>
        </div>
      </div>

      <nav class="admin-nav" aria-label="Navigation admin">
        <a class="is-active" href="messages.php"><span class="nav-dot" aria-hidden="true"></span>Messages</a>
        <a href="logout.php"><span class="nav-dot" aria-hidden="true" style="background: var(--accent-pink); box-shadow: 0 0 0 4px rgba(255,150,160,.18)"></span>Déconnexion</a>
      </nav>

      <div class="admin-meta">
        <div><strong>Zone privée</strong></div>
        <div>Dernière mise à jour : <span><?= date("Y-m-d") ?></span></div>
      </div>
    </aside>

    <main class="admin-main">
      <header class="admin-topbar">
        <div class="admin-topbar-inner">
          <div class="admin-title">
            <h2>Messages de contact</h2>
            <div class="subtitle">Consultation des messages envoyés via le formulaire</div>
          </div>

          <div class="admin-actions">
            <span class="badge"><span class="badge-dot" aria-hidden="true"></span><?= count($messages) ?> message(s)</span>
            <a class="btn btn-ghost" href="logout.php">Se déconnecter</a>
          </div>
        </div>
      </header>

      <div class="admin-content">
        <?php if (empty($messages)): ?>
          <div class="empty">Aucun message pour le moment.</div>
        <?php else: ?>
          <section class="card" aria-label="Table des messages">
            <div class="card-header">
              <h3>Liste des messages</h3>
              <div class="muted">Triés du plus récent au plus ancien</div>
            </div>

            <div class="card-body">
              <div class="table-wrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:70px">ID</th>
                      <th style="width:160px">Date</th>
                      <th style="width:250px">Contact</th>
                      <th style="width:280px">Société / Activité / Ville</th>
                      <th>Question</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($messages as $m): ?>
                      <tr>
                        <td><strong><?= (int)$m["id"] ?></strong></td>
                        <td class="kv">
                          <span class="muted"><?= htmlspecialchars((string)$m["created_at"]) ?></span>
                        </td>
                        <td class="kv">
                          <strong><?= htmlspecialchars((string)$m["full_name"]) ?></strong>
                          <span class="muted"><?= htmlspecialchars((string)$m["email"]) ?></span>
                          <span class="muted"><?= htmlspecialchars((string)$m["phone"]) ?></span>
                        </td>
                        <td class="kv">
                          <strong><?= htmlspecialchars((string)$m["company_name"]) ?></strong>
                          <span class="muted"><?= htmlspecialchars((string)($m["activity"] ?? "")) ?></span>
                          <span class="muted"><?= htmlspecialchars((string)($m["city_postal"] ?? "")) ?></span>
                        </td>
                        <td class="msg"><?= htmlspecialchars((string)$m["question"]) ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        <?php endif; ?>
      </div>
    </main>
  </div>
</body>
</html>
