<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="tp9.css">
    <link rel="stylesheet" href="../tp8/style.css">
    <script src="../script.js" defer></script>
    <title>tp9a</title>
</head>
<body>
<header><?php include '../tp8/header.php'?></header>
<form method="get" name="demande_individuel" action="traitement-formulaire.php" class="form">

    <div class="titre-form">
        <strong>Opération<br>Tranquillité-vacances</strong><br>
        DEMANDE INDIVIDUELLE
    </div>

    <fieldset class="bordure">
        <legend><strong>DEMANDEUR</strong></legend> <label>Nom (en capitales) : <input type="text"></label>
        <label>Prénom : <input type="text"></label>
        <br><br>

        <span>QUALITÉ :</span>
        <label><input type="checkbox"> particulier</label>
        <label><input type="checkbox"> commerçant</label>
    </fieldset>

</form>
</body>
</html>