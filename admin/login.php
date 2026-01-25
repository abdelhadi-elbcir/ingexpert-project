<?php
// /admin/login.php
declare(strict_types=1);
session_start();

$ADMIN_USER = "laloux@ingexpert.com";
$ADMIN_PASS = "ThisStrongPassword!123"; 
// ============================

function clean(string $s): string {
  return trim($s);
}

if (empty($_SESSION["csrf_admin"])) {
  $_SESSION["csrf_admin"] = bin2hex(random_bytes(32));
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $csrf = $_POST["csrf"] ?? "";
  if (!hash_equals($_SESSION["csrf_admin"], $csrf)) {
    $error = "Session invalide. Recharge la page.";
  } else {
    $user = clean((string)($_POST["username"] ?? ""));
    $pass = (string)($_POST["password"] ?? "");

    if ($user === $ADMIN_USER && hash_equals($ADMIN_PASS, $pass)) {
      session_regenerate_id(true);
      $_SESSION["admin_logged_in"] = true;

      $redirect = $_GET["redirect"] ?? "messages.php";
      // Prevent open redirect
      if (str_starts_with($redirect, "http")) $redirect = "messages.php";

      header("Location: " . $redirect);
      exit;
    } else {
      $error = "Identifiants incorrects.";
    }
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Connexion</title>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body class="admin-login">
  <div class="login-card">
    <div class="login-head">
      <div class="brand-line">
        <div class="admin-logo" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
  <path fill="#87B4C3" d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 5a3 3 0 1 1-3 3 3.003 3.003 0 0 1 3-3Zm0 13.2a8.188 8.188 0 0 1-5.4-2.05 5.55 5.55 0 0 1 10.8 0A8.188 8.188 0 0 1 12 20.2Z"/>
</svg></div>
        <div>
          <h1>Ingexpert • Admin</h1>
          <p>Accès réservé à l’administration.</p>
        </div>
      </div>
    </div>

    <div class="login-body">
      <?php if ($error): ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="post" autocomplete="on">
        <input type="hidden" name="csrf" value="<?= htmlspecialchars($_SESSION["csrf_admin"]) ?>">

        <div class="field">
          <label for="username">Utilisateur</label>
          <input id="username" type="text" name="username" required autocomplete="username">
        </div>

        <div class="field">
          <label for="password">Mot de passe</label>
          <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <div class="login-actions">
          <button class="btn btn-primary" type="submit">Se connecter</button>
        </div>

        <p class="hint">Astuce : si vous changez le mot de passe, pensez à le stocker via une variable d’environnement (plutôt que dans le code).</p>
      </form>
    </div>
  </div>
</body>
</html>
