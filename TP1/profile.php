<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $regexStandard = '/^[a-zA-Z0-9àâäéèêëïîôöùûü\'\-\/\.\,\s]+$/';
    $regexNumber = '/^[0-9]+$/';
    $errorName = $errorFirstname = $errorSoc = $errorAge = '';
    $lastNameOK = $firstnameOK = $socOK = $ageOK = FALSE;


    if (!preg_match($regexStandard, $_POST['lastname']) || empty($_POST['lastname'])) {
        $errorName = 'Nom';
    } else {
        $lastNameOK = TRUE;
    }


    if (!preg_match($regexStandard, $_POST['firstname']) || empty($_POST['firstname'])) {
        $errorFirstname = 'Prénom';
    } else {
        $firstnameOK = TRUE;
    }


    if (!preg_match($regexStandard, $_POST['soc']) || empty($_POST['soc'])) {
        $errorSoc = 'Société';
    } else {
        $socOK = TRUE;
    }


    if (!preg_match($regexNumber, $_POST['age']) || empty($_POST['age'])) {
        $errorAge = 'Age';
    } else {
        $ageOK = TRUE;
    }


    if ($lastNameOK == TRUE && $firstnameOK == TRUE && $socOK == TRUE && $ageOK == TRUE) {
    ?>
        <p> gg no re </p>
    <?php
    } else {
    ?>
        <p>Champ(s) mal ou non renseigné(s) : <?= $errorName ?><?= $errorFirstname ?><?= $errorSoc ?><?= $errorAge ?></p>
        <p><a href="index.php">Retour au formulaire</a></p>
    <?php

    }
    ?>



</body>

</html>