<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact pour le conseil du management de la maintenance</title>
    <meta name="description" content="Formulaire de contact d'Ingexpert pour l'amélioration du management de votre maintenance par le conseil, la formation et l'accompagnement dans votre secteur">
    <meta name="keywords" content="externalisation, prestataire, inventaire, donneur d'ordres, entreprise extérieure, contractant, contracté, contrat, maintenance, entretien, audit, ingénieur, conseil, industrie, fiabilité, disponibilité, normes, plan de maintenance, TRS, TPM">
    <meta name="author" content="Laloux Guillaume, consultant maintenance">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/style_redesign.css">
    <link rel="icon" href="/images/icone/conseil-formation-maintenance-industrielle.ico" type="image/x-icon">

    <style>
        .content-wrapper {
            max-width: 1100px;
            margin: 40px auto;
            padding: 40px 30px;
            background: #ffffff;
            color: #333;
        }

        .content-wrapper p,
        .content-wrapper li {
            font-size: 15px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .content-wrapper a {
            color: #1a73e8;
            text-decoration: none;
        }

        .content-wrapper a:hover {
            text-decoration: underline;
            color: #0b5ed7;
        }

        .content-wrapper table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }

        .content-wrapper table th,
        .content-wrapper table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        .content-wrapper table th {
            background-color: #f8f8f8;
        }

        .content-wrapper table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body class="theme-ingexpert">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/header.inc.php"; ?>

<div class="content-wrapper">

    <!-- Entête -->
    <div class="entete">
        <table>
            <tr>
                <td>
    
                    <h1 style="font-family: Arial; color: grey;">
                        Expert MAINTENANCE
                    </h1>
                    <h2 style="color: orange;">Conseil, formation, expertise</h2>
                    <p>pour le management de la maintenance industrielle</p>
                    <hr>
                    <p>Accompagnement de votre management de la maintenance industrielle, SAV, BTP, tertiaire, transport, biomédicale, énergie par le conseil, le coaching et l'ingénierie : audit, formation, contrats, fiabilisation, progrès, etc.</p>
                    <hr>
                </td>
            </tr>
        </table>
    </div>


  



<div class="form-container">
    <h2>Adhésion à la lettre INGEXPERT</h2>
    <form method="post" action="">
        <label for="mail">Votre email :</label>
        <input type="email" name="mail" id="mail" required placeholder="exemple@mail.com">
        <input type="submit" value="S'inscrire">
    </form>
</div>
<style>
/* Conteneur du formulaire */
.form-container {
    max-width: 400px;          /* largeur du formulaire */
    margin: 30px auto;         /* centré horizontalement */
    padding: 30px 25px;
    background: #f9f9f9;       /* fond clair */
    border-radius: 10px;       /* coins arrondis */
    box-shadow: 0 4px 10px rgba(0,0,0,0.1); /* ombre légère */
    text-align: center;
    font-family: Arial, sans-serif;
}

/* Titre du formulaire */
.form-container h2 {
    color: #1a73e8;
    margin-bottom: 20px;
}

/* Labels */
.form-container label {
    display: block;
    text-align: left;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

/* Inputs */
.form-container input[type="email"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    transition: border-color 0.2s ease-in-out;
}

.form-container input[type="email"]:focus {
    border-color: #1a73e8;
    outline: none;
}

/* Bouton */
.form-container input[type="submit"] {
    background-color: #1a73e8;
    color: #fff;
    border: none;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.form-container input[type="submit"]:hover {
    background-color: #0b5ed7;
}
</style>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['mail']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d H:i:s');

    // Vérifications simples
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Email invalide.</p>";
    } elseif (stripos($email, "ingexpert") !== false) {
        echo "<p style='color:red;'>Email interdit.</p>";
    } else {
        // Connexion DB
        $connexion = mysqli_connect($host, $user, $secret, $user);
        if (!$connexion) die("Impossible de se connecter au serveur de base de données");

        $email = mysqli_real_escape_string($connexion, $email);
        $check = mysqli_query($connexion, "SELECT * FROM newsletter1 WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            echo "<p style='color:red;'>Cette adresse mail est déjà enregistrée.</p>";
        } else {
            mysqli_query($connexion, "INSERT INTO newsletter1 (email, ip, date) VALUES ('$email', '$ip', '$date')");
            mail("lettre@ingexpert.com", "Adhérent lettre Ingexpert", $email, "From: lettre@ingexpert.com");

            echo "<p style='color:green;'>Votre email - $email - est enregistré. Vous recevrez un mail de confirmation.</p>";
        }
    }
}
?>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/layouts/footer.inc.php"; ?>

<script src="/assets/js/site.js"></script>
</body>
</html>
