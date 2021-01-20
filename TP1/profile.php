<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST['civ']) || trim($_POST['civ']=='')
    || !isset($_POST['lastname']) || trim($_POST['lastname']=='')
    || !isset($_POST['firstname']) || trim($_POST['firstname']=='')
    || !isset($_POST['soc']) || trim($_POST['soc']=='')
    || !isset($_POST['age']) || trim($_POST['age']=='')) 
    {
        echo 'Un champ n\'as pas été rempli convenablement <br>';
        echo '<a href="index.php">Retour au formulaire </a>';
    } else {

        echo 'Bonjour ' . $_POST['civ'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '<br>';
        echo 'Société : ' . $_POST['soc'] . ' <br> Age : ' .$_POST['age'] . ' ans.s';
    }





    ?>
<div>
</div>


</body>

</html>