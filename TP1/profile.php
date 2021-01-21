<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (
        !isset($_POST['civ']) || $_POST['civ'] == ''
        || !isset($_POST['lastname']) || $_POST['lastname'] == ''
        || !isset($_POST['firstname']) || $_POST['firstname'] == ''
        || !isset($_POST['soc']) || $_POST['soc'] == ''
        || !isset($_POST['age']) || $_POST['age'] == ''
    ) { ?>
        <p> Un champ n'as pas été rempli convenablement <br> <a href="index.php">Retour au formulaire </a> </p>
    <?php
    } else {
    ?>
        <p>
            Bonjour <?= $_POST['civ'] ?> <?= $_POST['firstname'] ?> <?= $_POST['lastname'] ?> <br>
            Société : <?= $_POST['soc'] ?> <br> Age : <?= $_POST['age'] ?> ans.
        </p>
    <?php
    }
    ?>



</body>

</html>