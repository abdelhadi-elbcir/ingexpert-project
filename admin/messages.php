<?php
// /admin/messages.php
declare(strict_types=1);

require __DIR__ . "/auth.php";
require __DIR__ . "/../config.php";

// ---- AJAX: mark as viewed ----
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["action"] ?? "") === "mark_viewed") {
  header("Content-Type: application/json; charset=utf-8");

  $id = (int) ($_POST["id"] ?? 0);
  if ($id <= 0) {
    http_response_code(400);
    echo json_encode(["ok" => false, "error" => "Invalid id"]);
    exit;
  }

  $stmt = $pdo->prepare("UPDATE contact_form SET viewed = 1, viewed_at = NOW() WHERE id = :id");
  $stmt->execute([":id" => $id]);

  echo json_encode(["ok" => true]);
  exit;
}

// ---- Read messages ----
$stmt = $pdo->query("
  SELECT id, company_name, activity, city_postal, full_name, phone, email, question, created_at,
         viewed, viewed_at
  FROM contact_form
  ORDER BY id DESC
");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// unread count
$unreadCount = 0;
foreach ($messages as $m) {
  if ((int) ($m["viewed"] ?? 0) === 0)
    $unreadCount++;
}

function e(string $v): string
{
  return htmlspecialchars($v, ENT_QUOTES, "UTF-8");
}

// safe preview (strip tags + clamp length)
function preview_text(string $text, int $max = 160): string
{
  $t = trim(strip_tags($text));
  if ($t === "")
    return "";
  // mb_strimwidth keeps UTF-8 clean
  return mb_strimwidth($t, 0, $max, "…", "UTF-8");
}

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

    <?php include __DIR__ . "/admin/layouts/sidebar.inc.php"; ?>

    <main class="admin-main">
      <header class="admin-topbar">
        <div class="admin-topbar-inner">
          <div class="admin-title">
            <h2>Messages de contact</h2>
            <div class="subtitle">Consultation des messages envoyés via le formulaire</div>
          </div>

          <div class="admin-actions">
            <span class="badge">
              <span class="badge-dot" aria-hidden="true"></span><?= count($messages) ?> message(s)
            </span>
            <span class="badge" title="Messages non lus">
              <span class="badge-dot" aria-hidden="true"
                style="background: var(--accent-yellow); box-shadow: 0 0 0 4px rgba(238,201,66,.18)"></span>
              <?= (int) $unreadCount ?> non lu(s)
            </span>
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
                      <th>ID</th>
                      <th>Statut</th>
                      <th>Date</th>
                      <th>Contact</th>
                      <th>Société / Activité / Ville</th>
                      <th>Aperçu</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($messages as $m): ?>
                      <?php
                      $id = (int) $m["id"];
                      $isUnread = ((int) ($m["viewed"] ?? 0) === 0);

                      $fullName = trim((string) ($m["full_name"] ?? ""));
                      $email = trim((string) ($m["email"] ?? ""));
                      $phone = trim((string) ($m["phone"] ?? ""));

                      $company = trim((string) ($m["company_name"] ?? ""));
                      $activity = trim((string) ($m["activity"] ?? ""));
                      $city = trim((string) ($m["city_postal"] ?? ""));

                      $question = (string) ($m["question"] ?? "");
                      $preview = preview_text($question, 180);
                      $createdAt = (string) ($m["created_at"] ?? "");
                      ?>
                      <tr class="<?= $isUnread ? "is-unread" : "" ?>" data-row-id="<?= $id ?>">
                        <td><strong><?= $id ?></strong></td>

                        <td>
                          <span class="status <?= $isUnread ? "unread" : "read" ?>" data-status-id="<?= $id ?>">
                            <span class="dot" aria-hidden="true"></span>
                            <?= $isUnread ? "Non lu" : "Lu" ?>
                          </span>
                        </td>

                        <td class="kv">
                          <span class="muted"><?= e($createdAt) ?></span>
                          <?php if (!empty($m["viewed_at"])): ?>
                            <span class="muted">Vu: <?= e((string) $m["viewed_at"]) ?></span>
                          <?php endif; ?>
                        </td>

                        <td class="kv">
                          <?php if ($fullName !== ""): ?><strong><?= e($fullName) ?></strong><?php endif; ?>
                          <?php if ($email !== ""): ?><span class="muted"><?= e($email) ?></span><?php endif; ?>
                          <?php if ($phone !== ""): ?><span class="muted"><?= e($phone) ?></span><?php endif; ?>
                        </td>

                        <td class="kv">
                          <?php if ($company !== ""): ?><strong><?= e($company) ?></strong><?php endif; ?>
                          <?php if ($activity !== ""): ?><span class="muted"><?= e($activity) ?></span><?php endif; ?>
                          <?php if ($city !== ""): ?><span class="muted"><?= e($city) ?></span><?php endif; ?>
                        </td>

                        <td>
                          <div class="msg-preview"><?= e($preview !== "" ? $preview : "(vide)") ?></div>
                          <div class="msg-meta">Longueur: <?= (int) mb_strlen(trim($question), "UTF-8") ?> caractères</div>
                        </td>

                        <td>
                          <button class="btn btn-ghost btn-sm js-view" type="button" data-id="<?= $id ?>"
                            data-created="<?= e($createdAt) ?>" data-full_name="<?= e($fullName) ?>"
                            data-email="<?= e($email) ?>" data-phone="<?= e($phone) ?>" data-company="<?= e($company) ?>"
                            data-activity="<?= e($activity) ?>" data-city="<?= e($city) ?>"
                            data-question="<?= e($question) ?>" data-viewed="<?= $isUnread ? "0" : "1" ?>">
                            Voir
                          </button>
                        </td>
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

  <!-- Modal -->
  <dialog class="modal" id="msgModal" aria-label="Détails du message">
    <div class="modal-card">
      <div class="modal-head">
        <div>
          <h3 id="mTitle">Message</h3>
          <div class="muted" id="mSub" style="color:var(--text-muted); font-weight:800; margin-top:4px"></div>
        </div>
        <button class="btn btn-ghost btn-sm" type="button" id="mClose">Fermer</button>
      </div>

      <div class="modal-body">
        <div class="modal-grid">
          <div class="modal-block">
            <div class="label">Contact</div>
            <div><strong id="mName"></strong></div>
            <div class="muted" id="mEmail" style="color:var(--text-muted); font-weight:700"></div>
            <div class="muted" id="mPhone" style="color:var(--text-muted); font-weight:700"></div>
          </div>

          <div class="modal-block">
            <div class="label">Société</div>
            <div><strong id="mCompany"></strong></div>
            <div class="muted" id="mActivity" style="color:var(--text-muted); font-weight:700"></div>
            <div class="muted" id="mCity" style="color:var(--text-muted); font-weight:700"></div>
          </div>
        </div>

        <div class="modal-block" style="margin-bottom:12px;">
          <div class="label">Statut</div>
          <div id="mStatus"></div>
        </div>

        <div class="modal-block">
          <div class="label">Message</div>
          <div class="modal-message" id="mQuestion"></div>
        </div>
      </div>

      <div class="modal-actions">
        <button class="btn btn-ghost" type="button" id="mMarkRead">Marquer comme lu</button>
        <button class="btn btn-primary" type="button" id="mOk">OK</button>
      </div>
    </div>
  </dialog>

  <script>
    (function () {
      const modal = document.getElementById("msgModal");
      const closeBtn = document.getElementById("mClose");
      const okBtn = document.getElementById("mOk");
      const markReadBtn = document.getElementById("mMarkRead");

      const el = (id) => document.getElementById(id);

      let currentId = null;
      let currentViewed = "0";

      function setText(id, value) {
        el(id).textContent = value || "";
      }

      function statusHTML(viewed) {
        if (viewed === "1") {
          return `<span class="status read"><span class="dot" aria-hidden="true"></span>Lu</span>`;
        }
        return `<span class="status unread"><span class="dot" aria-hidden="true"></span>Non lu</span>`;
      }

      async function markAsViewed(id) {
        const fd = new FormData();
        fd.append("action", "mark_viewed");
        fd.append("id", id);

        const res = await fetch("messages.php", { method: "POST", body: fd });
        const data = await res.json().catch(() => null);
        if (!res.ok || !data || !data.ok) return false;

        // Update row UI
        const status = document.querySelector(`[data-status-id="${id}"]`);
        if (status) {
          status.classList.remove("unread");
          status.classList.add("read");
          status.innerHTML = `<span class="dot" aria-hidden="true"></span>Lu`;
        }
        const row = document.querySelector(`[data-row-id="${id}"]`);
        if (row) row.classList.remove("is-unread");

        return true;
      }

      document.querySelectorAll(".js-view").forEach(btn => {
        btn.addEventListener("click", async () => {
          currentId = btn.dataset.id;
          currentViewed = btn.dataset.viewed;

          setText("mTitle", `Message #${currentId}`);
          setText("mSub", btn.dataset.created || "");

          setText("mName", btn.dataset.full_name || "");
          setText("mEmail", btn.dataset.email || "");
          setText("mPhone", btn.dataset.phone || "");

          setText("mCompany", btn.dataset.company || "");
          setText("mActivity", btn.dataset.activity || "");
          setText("mCity", btn.dataset.city || "");

          el("mStatus").innerHTML = statusHTML(currentViewed);
          el("mQuestion").textContent = btn.dataset.question || "";

          // Show/hide "mark as read"
          markReadBtn.style.display = (currentViewed === "1") ? "none" : "inline-flex";

          if (typeof modal.showModal === "function") modal.showModal();
          else modal.setAttribute("open", "open");

          // Option A (recommended): mark as viewed automatically when opened
          if (currentViewed === "0") {
            const ok = await markAsViewed(currentId);
            if (ok) {
              currentViewed = "1";
              btn.dataset.viewed = "1";
              el("mStatus").innerHTML = statusHTML("1");
              markReadBtn.style.display = "none";
            }
          }
        });
      });

      closeBtn.addEventListener("click", () => modal.close());
      okBtn.addEventListener("click", () => modal.close());

      // Option B: manual mark read (kept, but modal already auto-marks)
      markReadBtn.addEventListener("click", async () => {
        if (!currentId) return;
        const ok = await markAsViewed(currentId);
        if (ok) {
          currentViewed = "1";
          el("mStatus").innerHTML = statusHTML("1");
          markReadBtn.style.display = "none";
        }
      });

      // Close when clicking outside content
      modal.addEventListener("click", (e) => {
        const rect = modal.getBoundingClientRect();
        const inDialog =
          e.clientX >= rect.left && e.clientX <= rect.right &&
          e.clientY >= rect.top && e.clientY <= rect.bottom;
        if (!inDialog) modal.close();
      });
    })();
  </script>

</body>

</html>