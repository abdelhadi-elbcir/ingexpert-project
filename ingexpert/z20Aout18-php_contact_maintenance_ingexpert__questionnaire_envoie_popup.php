<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Vous avez pos� une question sur la maintenance � Ingexpert</title>

  <meta name="description" content="Ingexpert va r�pondre � votre question sur la maintenance sous 48 heures." />
  <meta name="keywords"
    content="maintenance, conseil maintenance, question maintenance, audit maintenance, diagnostic, fiabilit�, disponibilit�, GMAO, contrats, TPM, TRS" />
  <meta name="robots" content="all" />
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
    /* Small local layout */
    body.theme-ingexpert .status-box p {
      margin: 10px 0;
    }

    body.theme-ingexpert .kv {
      margin-top: 14px;
    }

    body.theme-ingexpert .kv dt {
      font-weight: 900;
      margin-top: 10px;
    }

    body.theme-ingexpert .kv dd {
      margin: 6px 0 0 0;
    }

    body.theme-ingexpert .actions {
      margin-top: 18px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
  </style>
</head>

<body class="theme-ingexpert">

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php";

  // Helpers
  function h($v)
  {
    return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
  }
  ?>

  <main class="section">
    <div class="container">

      <p class="breadcrumb">
        Vous �tes ici :
        <a href="https://dev.ingexpert.com">Accueil Ingexpert.com</a>
        <span class="sep">