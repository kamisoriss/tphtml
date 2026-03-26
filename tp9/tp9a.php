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
        <legend><strong>DEMANDEUR</strong></legend>
        <label>Nom (en capitales) : <input type="text" class="input-ligne"></label>
        <label>Prénom : <input type="text" class="input-ligne"></label>
        <br><br>
        <span>QUALITÉ :</span>
        <label><input type="radio" name="demandeur" id="particulier"> particulier</label>
        <label><input type="radio" name="demandeur" id="commerçant"> commerçant</label>
    </fieldset>
    <fieldset class="bordure">
        <legend><strong>ADRESSE</strong></legend>
        <label>(N°-Voie-Lieu-dit, ...)<input type="text" class="input-ligne"></label>
        <br><label>Code Postal:<input type="text" class="input-ligne">Vile:<input type="text" class="input-ligne"></label>
    </fieldset>
    <fieldset class="bordure">
        <legend><strong>Période d'absence</strong></legend>
        <label>Du: <input type="text" class="input-ligne"> Au:<input type="text" class="input-ligne"></label>
    </fieldset>
    <fieldset class="bordure">
        <legend><strong>Type et caractéristique du domicile ou du commerce</strong></legend>
        <label><input type="radio" name="type" value="Maison">Maison <input type="radio" name="type" value="Apartement">Apartement <input type="radio" name="type" value="Commerce">Commerce</label>
        <br><label>Etage: <input type="text" class="input-ligne">N°Porte :<input type="text" class="input-ligne">digicode: <input type="text" class="input-ligne"></label>
        <br><label>Existance d'un dispositif d'alarm: Oui<input type="radio" name="alarm" value="oui">/Non <input type="radio" name="alarm" value="non"></label>
        <br><label>Si oui, lequel?<input type="text" class="input-ligne"></label>
    </fieldset>
    <fieldset class="bordure section-double">
        <div class="colonne">
            <strong class="titre-colonne">PERSONNE À AVISER EN CAS D'ANOMALIE</strong>
            <div class="champs">
                <label>Nom : <input type="text" class="input-ligne"></label>
                <label>Prénom : <input type="text" class="input-ligne"></label>
            </div>
        </div>

        <div class="colonne">
            <strong class="titre-colonne">RENSEIGNEMENTS PARTICULIERS</strong>
            <div class="champs">
                <label>Lieu de vacances : <input type="text" class="input-ligne"></label>
                <label>êtes-vous joignable pendant votre absence ?<br>Oui<input type="radio" name="joignable" id="oui">Non<input type="radio" name="joignable" id="non"></label>
                <br><label>Si oui à quelle adresse ? <br> <input type="text" class="input-ligne">&#9742<input type="text" class="input-ligne"></label>
                <br><label>Courriel: <input type="email" class="input-ligne"></label>
            </div>
        </div>
    </fieldset>
    <fieldset class="bordure">
        <legend>Autre renseignement à préciser</legend>
        <label><input type="text" class="input-ligne"></label>
    </fieldset>
    <p>Le déclarant certifie l'exactitude des renseignements mentionnée ci-dessous.<br>Il déclare : "Je m'engage à aviser le commissariat de police ou la brigade de gendarmerie de tout retour anticipé".</p>
        <label><br>Date :<input type="date"> Signature du demandeur <input type="text" class="input-ligne">
        <br><input type="submit"></label
</form>
</body>
</html>