<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="Assets/style.css" rel="stylesheet">
</head>

<body>

    <?php include('Controllers/index_controller.php'); ?>

    <div class="jumbotron jumbotron-fluid text-left">
        <div class="container text-left">
            <h1 class="display-4 text-left"><a href="http://phppartie10/TP2/" id="LaManuLink">La Manu</a></h1>
            <p class="lead">Enregistrement apprenant</p>
        </div>
    </div>
    <?php

    if ($allGood) {
    ?>
        <div class="container-fluid" id="outerDiv">
            <div class="row" id="innerDiv">
                <h2>Nouvel apprenant : </h2>
                <div>
                    <i> Nom : </i> <?= $_POST['lastname'] ?> <br>
                    <i> Prénom : </i> <?= $_POST['firstname'] ?> <br>
                    <i> Date de naissance : </i> <?= $_POST['birthday'] ?> <br>
                    <i> Nationalité : </i> <?= $_POST['nationality'] ?> <br>
                    <i> Adresse : </i> <?= $_POST['adress'] ?> <br>
                    <i> E-mail : </i> <?= $_POST['email'] ?> <br>
                    <i> Téléphone : </i> <?= $_POST['tel'] ?> <br>
                    <i> Niveau d'étude : </i> <?= $_POST['diplome'] ?> <br>
                    <i> N° Pôle Emploi : </i> <?= $_POST['PENumber'] ?> <br>
                    <i> Badges Obtenus : </i> <?= $_POST['badges'] ?> <br>
                    <i> Code Academy : </i> <?= '<a href="' . $_POST['codeAc'] . '">' . $_POST['codeAc'] . '</a>' ?> <br>
                    <i> Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi : </i> <?= $_POST['heroQ'] ?> <br>
                    <i> Racontez-nous un de vos "hacks" : </i> <?= $_POST['hackQ'] ?> <br>
                    <i> Experience : </i> <?= $_POST['exp'] ?>
                </div>
            </div>
        </div>

    <?php
    } else {
    ?>

        <h1>Formulaire d'inscription</h1>
        <div class="container-fluid" id="outerDiv">
            <div class="row" id="innerDiv">
                <form action="index.php" method="POST" id="form">
                    <div>
                        <!-- Nom -->
                        <label for="lastname">Nom : </label>
                        <input type="text" name="lastname" id="lastname" value="<?= isset($_POST['lastname']) ?
                                                                                    htmlspecialchars($_POST['lastname']) : ''
                                                                                ?>">
                        <span class="error"> <?= $errorMessages['lastname'] ?? '' ?> </span>

                    </div>
                    <div>
                        <!-- Prénom -->
                        <label for="firstname">Prénom : </label>
                        <input type="text" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])) {
                                                                                        echo $_POST['firstname'];
                                                                                    }  ?>">
                    </div>
                    <div>
                        <!-- Date de naissance -->
                        <label for="birthday">Date de Naissance : </label>
                        <input type="date" id="birthday" name="birthday" value="">

                    </div>
                    <div>
                        <!-- Pays de naissance -->
                        <label for="birthplace">Pays de Naissance : </label>
                        <select name="birthplace" id="birthplace">
                            <option selected disabled>--Choisissez--</option>
                            <?php
                            foreach ($countryArray as $key => $value) { ?>
                                <option value="<?= $key ?>" <?= isset($_POST['birthplace']) && $_POST['birthplace'] == $key ? 'selected' : '' ?> ><?= $value ?></option>
                            <?php
                            }
                            ?>


                        </select>
                        <span class="error"> <?= $errorMessages['birthplace'] ?? '' ?> </span>
                    </div>

                    
                    <div>
                        <!-- Nationalité -->
                        <label for="nationality">Nationalité : </label>
                        <input type="text" name="nationality" id="nationality" value="<?php if (isset($_POST['nationality'])) {
                                                                                            echo $_POST['nationality'];
                                                                                        }  ?>">
                                                                                                            </div>
                    <div>
                        <!--  Adresse -->
                        <label for="adress"> Adresse : </label>
                        <input type="text" name="adress" id="adress" value="<?php if (isset($_POST['adress'])) {
                                                                                echo $_POST['adress'];
                                                                            }  ?>">
                    </div>
                    <!-- E-mail -->
                    <div>
                        <label for="email">e-mail : </label>
                        <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) {
                                                                                echo $_POST['email'];
                                                                            }  ?>">
                    </div>
                    <!-- Téléphone -->
                    <div>
                        <label for="tel">Telephone : </label>
                        <input type="text" name="tel" value="<?php if (isset($_POST['tel'])) {
                                                                    echo $_POST['tel'];
                                                                }  ?>">

                    </div>
                    <!-- Diplome -->
                    <div>
                        <label for="diplome">Diplome : </label>
                        <select id="diplome" name="diplome">
                            <option value="" selected>--Choisissez--</option>
                            <option value="sans">Sans</option>
                            <option value="Bac">Bac</option>
                            <option value="Bac+2">Bac+2</option>
                            <option value="Bac+3 ou supérieur">Bac+3 ou Supérieur</option>
                        </select>
                    </div>
                    <!-- Nmo PE -->
                    <div>
                        <label for="PENumber"> Numéro Pole Emploi : </label>
                        <input type="PENumber" name="PENumber" value="<?php if (isset($_POST['PENumber'])) {
                                                                            echo $_POST['PENumber'];
                                                                        } ?>">

                    </div>
                    <!-- Nombre de badges, la ligue m'attend. -->
                    <div>
                        <label for="badges"> Nombres de badges : </label>
                        <input type="badges" name="badges" value="<?php if (isset($_POST['badges'])) {
                                                                        echo $_POST['badges'];
                                                                    } ?>">

                    </div>
                    <!-- Lien Code Academy -->
                    <div>
                        <label for="codeAc"> Lien Code Academy : </label>
                        <input type="codeAc" name="codeAc" value="<?php if (isset($_POST['codeAc'])) {
                                                                        echo $_POST['codeAc'];
                                                                    } ?>">
                    </div>
                    <!-- Premier text Area pour une question -->
                    <div>
                        <label for="heroQ">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? <br> </label>
                        <textarea id="heroQ" name="heroQ" maxlength="200"></textarea>
                    

                    </div>
                    <!-- Second Text Aera pour la deuxieme question -->
                    <div>
                        <label for="hackQ">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <br> </label>
                        <textarea id="hackQ" name="hackQ" maxlength="200"></textarea>

                    </div>
                    <div>
                        <!-- Exp -->
                        <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <select id="exp" name="exp">
                            <option value="" selected>--Choisissez--</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non.</option>
                        </select>

                    </div>
                    <!-- Bouton -->
                    <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">
                </form>
            </div>
        </div>

    <?php
    }

    ?>


</body>

</html>