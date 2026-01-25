<?php
// /admin/auth.php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// If not logged in, redirect to login
if (empty($_SESSION["admin_logged_in"])) {
  $current = $_SERVER["REQUEST_URI"] ?? "messages.php";
  header("Location: login.php?redirect=" . urlencode($current));
  exit;
}
