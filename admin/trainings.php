<?php
// /admin/trainings.php
declare(strict_types=1);

require __DIR__ . "/auth.php";
require __DIR__ . "/../config.php";

function e(string $v): string
{
  return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}

function post(string $key, string $default = ""): string
{
  return isset($_POST[$key]) ? trim((string) $_POST[$key]) : $default;
}

$action = $_POST["action"] ?? $_GET["action"] ?? "";
$editId = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

// CREATE / UPDATE
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($action === "create" || $action === "update")) {
  $title = post("title");
  $duration = post("duration");
  $description = post("description");
  $link_url = post("link_url");
  $start_date = post("start_date"); // YYYY-MM-DD or empty
  $end_date = post("end_date");
  $sort_order = (int) (post("sort_order", "0"));
  $is_active = isset($_POST["is_active"]) ? 1 : 0;

  // basic validation
  $errors = [];
  if ($title === "")
    $errors[] = "Le titre est obligatoire.";
  if ($duration === "")
    $errors[] = "La durée/date affichée est obligatoire.";
  if ($description === "")
    $errors[] = "La description est obligatoire.";
  if ($link_url === "")
    $errors[] = "Le lien est obligatoire.";

  // normalize empty date to null
  $start_date_db = ($start_date !== "") ? $start_date : null;
  $end_date_db = ($end_date !== "") ? $end_date : null;

  if (empty($errors)) {
    if ($action === "create") {
      $stmt = $pdo->prepare("
        INSERT INTO trainings (title, duration, description, link_url, start_date, end_date, sort_order, is_active)
        VALUES (:title, :duration, :description, :link_url, :start_date, :end_date, :sort_order, :is_active)
      ");
      $stmt->execute([
        ":title" => $title,
        ":duration" => $duration,
        ":description" => $description,
        ":link_url" => $link_url,
        ":start_date" => $start_date_db,
        ":end_date" => $end_date_db,
        ":sort_order" => $sort_order,
        ":is_active" => $is_active,
      ]);
      header("Location: trainings.php?ok=created");
      exit;
    } else {
      $id = (int) ($_POST["id"] ?? 0);
      $stmt = $pdo->prepare("
        UPDATE trainings
        SET title=:title, duration=:duration, description=:description, link_url=:link_url,
            start_date=:start_date, end_date=:end_date, sort_order=:sort_order, is_active=:is_active
        WHERE id=:id
      ");
      $stmt->execute([
        ":id" => $id,
        ":title" => $title,
        ":duration" => $duration,
        ":description" => $description,
        ":link_url" => $link_url,
        ":start_date" => $start_date_db,
        ":end_date" => $end_date_db,
        ":sort_order" => $sort_order,
        ":is_active" => $is_active,
      ]);
      header("Location: trainings.php?ok=updated");
      exit;
    }
  }
}

// DELETE
if ($_SERVER["REQUEST_METHOD"] === "POST" && $action === "delete") {
  $id = (int) ($_POST["id"] ?? 0);
  if ($id > 0) {
    $stmt = $pdo->prepare("DELETE FROM trainings WHERE id = :id");
    $stmt->execute([":id" => $id]);
  }
  header("Location: trainings.php?ok=deleted");
  exit;
}

// Fetch list
$stmt = $pdo->query("
  SELECT *
  FROM trainings
  ORDER BY is_active DESC, sort_order ASC, start_date ASC, id DESC
");
$trainings = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch edit item (if any)
$editItem = null;
if (isset($_GET["action"], $_GET["id"]) && $_GET["action"] === "edit" && $editId > 0) {
  $stmt = $pdo->prepare("SELECT * FROM trainings WHERE id = :id");
  $stmt->execute([":id" => $editId]);
  $editItem = $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}

?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Formations</title>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>
  <div class="admin-shell">

    <aside class="admin-sidebar">
      <div class="admin-brand">
        <div class="admin-logo" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path fill="#87B4C3" d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 5a3 3 0 1 1-3 3 3.003 3.003 0 0 1 3-3Zm0 13.2a8.188 8.188 0 0 1-5.4-2.05 5.55 5.55 0 0 1 10.8 0A8.188 8.188 0 0 1 12 20.2Z"/>
          </svg>
        </div>
        <div>
          <h1>Ingexpert</h1>
          <small>Dashboard Admin</small>
        </div>
      </div>

      <nav class="admin-nav" aria-label="Navigation admin">
        <a href="messages.php">
          <span class="nav-dot" aria-hidden="true"></span>Messages
        </a>
        <a class="is-active" href="trainings.php"><span class="nav-dot" aria-hidden="true" style="background:var(--accent-green); box-shadow:0 0 0 4px rgba(147,194,65,.18)"></span>Formations</a>
        <a href="logout.php">
          <span class="nav-dot" aria-hidden="true" style="background: var(--accent-pink); box-shadow: 0 0 0 4px rgba(255,150,160,.18)"></span>
          Déconnexion
        </a>
      </nav>

      <div class="admin-meta">
        <div><strong>Zone privée</strong></div>
        <div>Dernière mise à jour : <span><?= e(date("Y-m-d")) ?></span></div>
      </div>
    </aside>

    <main class="admin-main">
      <header class="admin-topbar">
        <div class="admin-topbar-inner">
          <div class="admin-title">
            <h2>Formations</h2>
            <div class="subtitle">Créer / modifier les cartes “Nos formations inter”</div>
          </div>
          <div class="admin-actions">
            <span class="badge"><span class="badge-dot" aria-hidden="true"></span><?= count($trainings) ?>
              entrée(s)</span>
            <a class="btn btn-ghost" href="logout.php">Se déconnecter</a>
          </div>
        </div>
      </header>

      <div class="admin-content">

        <?php if (!empty($errors ?? [])): ?>
          <div class="alert">
            <?= e(implode(" ", $errors)) ?>
          </div>
        <?php endif; ?>

        <!-- FORM (create / edit) -->
        <section class="card" style="margin-bottom:16px;">
          <div class="card-header">
            <h3><?= $editItem ? "Modifier une formation" : "Ajouter une formation" ?></h3>
            <div class="muted">Les champs sont affichés sur la page d’accueil</div>
          </div>

          <div class="card-body" style="padding:16px 18px;">
            <form method="post" action="trainings.php<?= $editItem ? "?action=edit&id=" . (int) $editItem["id"] : "" ?>">
              <input type="hidden" name="action" value="<?= $editItem ? "update" : "create" ?>">
              <?php if ($editItem): ?>
                <input type="hidden" name="id" value="<?= (int) $editItem["id"] ?>">
              <?php endif; ?>

              <div class="grid" style="display:grid; grid-template-columns: 1fr 1fr; gap:12px;">
                <div class="field">
                  <label>Titre</label>
                  <input type="text" name="title" value="<?= e((string) ($editItem["title"] ?? "")) ?>" required>
                </div>

                <div class="field">
                  <label>Durée / Date (texte affiché)</label>
                  <input type="text" name="duration" value="<?= e((string) ($editItem["duration"] ?? "")) ?>"
                    placeholder='Ex: "3 jours | Du 22 au 24 sept 2025"' required>
                </div>

                <div class="field" style="grid-column:1 / -1;">
                  <label>Description (courte)</label>
                  <input type="text" name="description" value="<?= e((string) ($editItem["description"] ?? "")) ?>"
                    required>
                </div>

                <div class="field" style="grid-column:1 / -1;">
                  <label>Lien (URL)</label>
                  <input type="text" name="link_url" value="<?= e((string) ($editItem["link_url"] ?? "")) ?>"
                    placeholder="/ingexpert/..." required>
                </div>

                <div class="field">
                  <label>Date début (optionnel)</label>
                  <input type="text" name="start_date" value="<?= e((string) ($editItem["start_date"] ?? "")) ?>"
                    placeholder="YYYY-MM-DD">
                </div>

                <div class="field">
                  <label>Date fin (optionnel)</label>
                  <input type="text" name="end_date" value="<?= e((string) ($editItem["end_date"] ?? "")) ?>"
                    placeholder="YYYY-MM-DD">
                </div>

                <div class="field">
                  <label>Ordre (tri)</label>
                  <input type="text" name="sort_order" value="<?= e((string) ($editItem["sort_order"] ?? "0")) ?>">
                </div>

                <div class="field" style="display:flex; align-items:center; gap:10px; margin-top:30px;">
                  <input type="checkbox" id="is_active" name="is_active" value="1" <?= ((int) ($editItem["is_active"] ?? 1) === 1) ? "checked" : "" ?>>
                  <label for="is_active" style="margin:0;">Actif</label>
                </div>
              </div>

              <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
                <button class="btn btn-primary" type="submit"><?= $editItem ? "Enregistrer" : "Ajouter" ?></button>
                <?php if ($editItem): ?>
                  <a class="btn btn-ghost" href="trainings.php">Annuler</a>
                <?php endif; ?>
              </div>
            </form>
          </div>
        </section>

        <!-- LIST -->
        <section class="card">
          <div class="card-header">
            <h3>Liste des formations</h3>
            <div class="muted">Actives en premier, puis tri par ordre / date</div>
          </div>

          <div class="card-body">
            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Actif</th>
                    <th>Ordre</th>
                    <th>Titre</th>
                    <th>Durée</th>
                    <th>Description</th>
                    <th>Lien</th>
                    <th>Dates</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($trainings as $t): ?>
                    <tr>
                      <td><strong><?= (int) $t["id"] ?></strong></td>
                      <td><?= ((int) $t["is_active"] === 1) ? "Oui" : "Non" ?></td>
                      <td><?= (int) $t["sort_order"] ?></td>
                      <td class="kv"><strong><?= e((string) $t["title"]) ?></strong></td>
                      <td class="kv"><span class="muted"><?= e((string) $t["duration"]) ?></span></td>
                      <td class="kv"><span><?= e((string) $t["description"]) ?></span></td>
                      <td class="kv"><span class="muted"><?= e((string) $t["link_url"]) ?></span></td>
                      <td class="kv">
                        <span class="muted">Début: <?= e((string) ($t["start_date"] ?? "")) ?></span>
                        <span class="muted">Fin: <?= e((string) ($t["end_date"] ?? "")) ?></span>
                      </td>
                      <td>
                        <div style="display:flex; gap:8px; justify-content:flex-end;">
                          <a class="btn btn-ghost btn-sm"
                            href="trainings.php?action=edit&id=<?= (int) $t["id"] ?>">Modifier</a>

                          <form method="post" action="trainings.php"
                            onsubmit="return confirm('Supprimer cette formation ?');">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?= (int) $t["id"] ?>">
                            <button class="btn btn-ghost btn-sm" type="submit">Supprimer</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php if (empty($trainings)): ?>
                    <tr>
                      <td colspan="9" class="muted" style="padding:18px;">Aucune formation.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>

        </section>

      </div>
    </main>

  </div>
</body>

</html>