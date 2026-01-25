<?php
require "config.php";

// Anti-bot
if (!empty($_POST['website'])) {
    header("Location: contact.php");
    exit;
}

// Clean inputs
function clean($data) {
    return trim(htmlspecialchars($data));
}

$company = clean($_POST['company_name']);
$activity = clean($_POST['activity']);
$city = clean($_POST['city_postal']);
$name = clean($_POST['full_name']);
$phone = clean($_POST['phone']);
$email = clean($_POST['email']);
$question = clean($_POST['question']);

// Basic validation
if (!$company || !$name || !$phone || !$email || !$question) {
    die("Champs obligatoires manquants");
}

$stmt = $pdo->prepare("
    INSERT INTO contact_form
    (company_name, activity, city_postal, full_name, phone, email, question)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->execute([
    $company,
    $activity,
    $city,
    $name,
    $phone,
    $email,
    $question
]);



header("Location: contact.php?success=1");
exit;
