<?php include('Controllers/index_controller.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="Assets\style.css?ver=1">
    
</head>

<body>
    <!-- Jumbo -->
    <div class="jumbotron jumbotron-fluid text-left">
        <div class="container text-left">
            <h1 class="display-4 text-left">La Manu</h1>
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
                        <!-- la value sert a garder les infos dans le champ si on actualise pour eviter de tout perdre sur une mauvaise saisie. -->
                        <input type="text" name="lastname" id="lastname" value="<?php if (isset($_POST['lastname'])) {
                                                                                    echo $_POST['lastname'];
                                                                                } ?>">
                        <!-- Span avec le message d'erreur a afficher. -->
                        <span class="error"> <?php echo $lastnameError; ?> </span>

                    </div>
                    <div>
                        <!-- Prénom -->
                        <label for="firstname">Prénom : </label>
                        <input type="text" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])) {
                                                                                        echo $_POST['firstname'];
                                                                                    }  ?>">
                        <span class="error"><?php echo $firstnameError; ?> </span>
                    </div>
                    <div>
                        <!-- Date de naissance -->
                        <label for="birthday">Date de Naissance : </label>
                        <input type="date" id="birthday" name="birthday" value="">
                        <span class="error"> <?php echo $ageError; ?> </span>

                    </div>
                    <div>
                        <!-- Pays de naissance -->
                        <label for="birthplace">Pays de Naissance : </label>
                        <select name="birthplace" id="birthplace">
                            <option value="">--Choisissez--</option>
                            <option value="AFG">Afghanistan</option>
                            <option value="ALA">Åland Islands</option>
                            <option value="ALB">Albanie</option>
                            <option value="DZA">Algérie</option>
                            <option value="ASM">Samoa</option>
                            <option value="AND">Andorre</option>
                            <option value="AGO">Angola</option>
                            <option value="AIA">Anguilla</option>
                            <option value="ATA">Antarctique</option>
                            <option value="ATG">Antigua et Barbuda</option>
                            <option value="ARG">Argentine</option>
                            <option value="ARM">Arménie</option>
                            <option value="ABW">Aruba</option>
                            <option value="AUS">Australie</option>
                            <option value="AUT">Autriche</option>
                            <option value="AZE">Azerbaïdjan</option>
                            <option value="BHS">Bahamas</option>
                            <option value="BHR">Bahrain</option>
                            <option value="BGD">Bangladesh</option>
                            <option value="BRB">Barbade</option>
                            <option value="BLR">Belarus</option>
                            <option value="BEL">Belgique</option>
                            <option value="BLZ">Belize</option>
                            <option value="BEN">Bénin</option>
                            <option value="BMU">Bermuda</option>
                            <option value="BTN">Bhutan</option>
                            <option value="BOL">Bolivie</option>
                            <option value="BES">Bonaire, Saint-Eustache et Saba</option>
                            <option value="BIH">Bosnie-Herzégovine</option>
                            <option value="BWA">Botswana</option>
                            <option value="BVT">Île Bouvet</option>
                            <option value="BRA">Brésil</option>
                            <option value="IOT">Territoire britannique de l'océan Indien</option>
                            <option value="BRN">Brunéi Darussalam</option>
                            <option value="BGR">Bulgarie</option>
                            <option value="BFA">Burkina Faso</option>
                            <option value="BDI">Burundi</option>
                            <option value="KHM">Cambodge</option>
                            <option value="CMR">Cameroun</option>
                            <option value="CAN">Canada</option>
                            <option value="CPV">Cap-Vert</option>
                            <option value="CYM">Îles Caïmans</option>
                            <option value="CAF">République centrafricaine</option>
                            <option value="TCD">Tchad</option>
                            <option value="CHL">Chili</option>
                            <option value="CHN">Chine</option>
                            <option value="CXR">Île Christmas</option>
                            <option value="CCK">Îles Cocos (Keeling)</option>
                            <option value="COL">Colombie</option>
                            <option value="COM">Comores</option>
                            <option value="COG">Congo</option>
                            <option value="COD">Congo, République démocratique du Congo</option>
                            <option value="COK">Îles Cook</option>
                            <option value="CRI">Costa Rica</option>
                            <option value="CIV">Côte d'Ivoire</option>
                            <option value="HRV">Croatie</option>
                            <option value="CUB">Cuba</option>
                            <option value="CUW">Curaçao</option>
                            <option value="CYP">Chypre</option>
                            <option value="CZE">République tchèque</option>
                            <option value="DNK">Danemark</option>
                            <option value="DJI">Djibouti</option>
                            <option value="DMA">Dominique</option>
                            <option value="DOM">République dominicaine</option>
                            <option value="ECU">Équateur</option>
                            <option value="EGY">Égypte</option>
                            <option value="SLV">El Salvador</option>
                            <option value="GNQ">Guinée équatoriale</option>
                            <option value="ERI">Érythrée</option>
                            <option value="EST">Estonie</option>
                            <option value="ETH">Éthiopie</option>
                            <option value="FLK">Îles Falkland (Malvinas)</option>
                            <option value="FRO">Îles Féroé</option>
                            <option value="FJI">Fidji</option>
                            <option value="FIN">Finlande</option>
                            <option value="FRA">France</option>
                            <option value="GUF">Guyane française</option>
                            <option value="PYF">Polynésie française</option>
                            <option value="ATF">Terres australes françaises</option>
                            <option value="GAB">Gabon</option>
                            <option value="GMB">Gambie</option>
                            <option value="GEO">Géorgie</option>
                            <option value="DEU">Allemagne</option>
                            <option value="GHA">Ghana</option>
                            <option value="GIB">Gibraltar</option>
                            <option value="GRC">Grèce</option>
                            <option value="GRL">Groenland</option>
                            <option value="GRD">Grenade</option>
                            <option value="GLP">Guadeloupe</option>
                            <option value="GUM">Guam</option>
                            <option value="GTM">Guatemala</option>
                            <option value="GGY">Guernesey</option>
                            <option value="GIN">Guinée</option>
                            <option value="GNB">Guinée-Bissau</option>
                            <option value="GUY">Guyane</option>
                            <option value="HTI">Haïti</option>
                            <option value="HMD">Île Heard et îles McDonald</option>
                            <option value="VAT">Saint-Siège (État de la Cité du Vatican)</option>
                            <option value="HND">Honduras</option>
                            <option value="HKG">Hong Kong</option>
                            <option value="HUN">Hongrie</option>
                            <option value="ISL">Islande</option>
                            <option value="IND">Inde</option>
                            <option value="IDN">Indonésie</option>
                            <option value="IRN">Iran, République islamique d Iran'</option>
                            <option value="IRQ">Irak</option>
                            <option value="IRL">Irlande</option>
                            <option value="IMN">Île de Man</option>
                            <option value="ISR">Israël</option>
                            <option value="ITA">Italie</option>
                            <option value="JAM">Jamaïque</option>
                            <option value="JPN">Japon</option>
                            <option value="JEY">Jersey</option>
                            <option value="JOR">Jordanie</option>
                            <option value="KAZ">Kazakhstan</option>
                            <option value="KEN">Kenya</option>
                            <option value="KIR">Kiribati</option>
                            <option value="PRK">Corée, République populaire démocratique de Corée</option>
                            <option value="KOR">Corée, République de Corée</option>
                            <option value="KWT">Koweït</option>
                            <option value="KGZ">Kirghizistan</option>
                            <option value="LAO">République démocratique populaire lao</option>
                            <option value="LVA">Lettonie</option>
                            <option value="LBN">Liban</option>
                            <option value="LSO">Lesotho</option>
                            <option value="LBR">Liberia</option>
                            <option value="LBY">Libye</option>
                            <option value="LIE">Liechtenstein</option>
                            <option value="LTU">Lituanie</option>
                            <option value="LUX">Luxembourg</option>
                            <option value="MAC">Macao</option>
                            <option value="MKD">Macédoine, ancienne République de Yougoslavie</option>
                            <option value="MDG">Madagascar</option>
                            <option value="MWI">Malawi</option>
                            <option value="MYS">Malaisie</option>
                            <option value="MDV">Maldives</option>
                            <option value="MLI">Mali</option>
                            <option value="MLT">Malte</option>
                            <option value="MHL">Îles Marshall</option>
                            <option value="MTQ">Martinique</option>
                            <option value="MRT">Mauritanie</option>
                            <option value="MUS">Maurice</option>
                            <option value="MYT">Mayotte</option>
                            <option value="MEX">Mexique</option>
                            <option value="FSM">Micronésie, États fédérés de Micronésie</option>
                            <option value="MDA">Moldavie, République de Moldavie</option>
                            <option value="MCO">Monaco</option>
                            <option value="MNG">Mongolie</option>
                            <option value="MNE">Monténégro</option>
                            <option value="MSR">Montserrat</option>
                            <option value="MAR">Maroc</option>
                            <option value="MOZ">Mozambique</option>
                            <option value="MMR">Myanmar</option>
                            <option value="NAM">Namibie</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Népal</option>
                            <option value="NLD">Pays-Bas</option>
                            <option value="NCL">Nouvelle-Calédonie</option>
                            <option value="NZL">Nouvelle-Zélande</option>
                            <option value="NIC">Nicaragua</option>
                            <option value="NER">Niger</option>
                            <option value="NGA">Nigéria</option>
                            <option value="NIU">Niue</option>
                            <option value="NFK">Île Norfolk</option>
                            <option value="MNP">Îles Mariannes du Nord</option>
                            <option value="NOR">Norvège</option>
                            <option value="OMN">Oman</option>
                            <option value="PAK">Pakistan</option>
                            <option value="PLW">Palau</option>
                            <option value="PSE">Territoire palestinien occupé</option>
                            <option value="PAN">Panama</option>
                            <option value="PNG">Papouasie-Nouvelle-Guinée</option>
                            <option value="PRY">Paraguay</option>
                            <option value="PER">Pérou</option>
                            <option value="PHL">Philippines</option>
                            <option value="PCN">Pitcairn</option>
                            <option value="POL">Pologne</option>
                            <option value="PRT">Portugal</option>
                            <option value="PRI">Porto Rico</option>
                            <option value="QAT">Qatar</option>
                            <option value="REU">Réunion</option>
                            <option value="ROU">Roumanie</option>
                            <option value="RUS">Fédération de Russie</option>
                            <option value="RWA">Rwanda</option>
                            <option value="BLM">Saint Barthélemy</option>
                            <option value="SHN">Sainte-Hélène, Ascension et Tristan da Cunha</option>
                            <option value="KNA">Saint-Kitts-et-Nevis</option>
                            <option value="LCA">Sainte-Lucie</option>
                            <option value="MAF">Saint-Martin (partie française)</option>
                            <option value="SPM">Saint-Pierre-et-Miquelon</option>
                            <option value="VCT">Saint-Vincent-et-les Grenadines</option>
                            <option value="WSM">Samoa</option>
                            <option value="SMR">Saint-Marin</option>
                            <option value="STP">Sao Tomé-et-Principe</option>
                            <option value="SAU">Arabie saoudite</option>
                            <option value="SEN">Sénégal</option>
                            <option value="SRB">Serbie</option>
                            <option value="SYC">Seychelles</option>
                            <option value="SLE">Sierra Leone</option>
                            <option value="SGP">Singapour</option>
                            <option value="SXM">Sint Maarten (partie néerlandaise)</option>
                            <option value="SVK">Slovaquie</option>
                            <option value="SVN">Slovénie</option>
                            <option value="SLB">Îles Salomon</option>
                            <option value="SOM">Somalie</option>
                            <option value="ZAF">Afrique du Sud</option>
                            <option value="SGS">Géorgie du Sud et îles Sandwich du Sud</option>
                            <option value="SSD">Soudan du Sud</option>
                            <option value="ESP">Espagne</option>
                            <option value="LKA">Sri Lanka</option>
                            <option value="SDN">Soudan</option>
                            <option value="SUR">Suriname</option>
                            <option value="SJM">Svalbard et Jan Mayen</option>
                            <option value="SWZ">Swaziland</option>
                            <option value="SWE">Suède</option>
                            <option value="CHE">Suisse</option>
                            <option value="SYR">République arabe syrienne</option>
                            <option value="TWN">Taïwan, province de Chine</option>
                            <option value="TJK">Tadjikistan</option>
                            <option value="TZA">Tanzanie, République-Unie de Tanzanie</option>
                            <option value="THA">Thaïlande</option>
                            <option value="TLS">Timor-Leste</option>
                            <option value="TGO">Togo</option>
                            <option value="TKL">Tokelau</option>
                            <option value="TON">Tonga</option>
                            <option value="TTO">Trinité-et-Tobago</option>
                            <option value="TUN">Tunisie</option>
                            <option value="TUR">Turquie</option>
                            <option value="TKM">Turkménistan</option>
                            <option value="TCA">Îles Turques et Caïques</option>
                            <option value="TUV">Tuvalu</option>
                            <option value="UGA">Ouganda</option>
                            <option value="UKR">Ukraine</option>
                            <option value="ARE">Émirats arabes unis</option>
                            <option value="GBR">Royaume-Uni</option>
                            <option value="USA">États-Unis</option>
                            <option value="UMI">Îles mineures éloignées des États-Unis</option>
                            <option value="URY">Uruguay</option>
                            <option value="UZB">Ouzbékistan</option>
                            <option value="VUT">Vanuatu</option>
                            <option value="VEN">Venezuela, République bolivarienne</option>
                            <option value="VNM">Viet Nam</option>
                            <option value="VGB">Îles Vierges britanniques</option>
                            <option value="VIR">Îles Vierges américaines.</option>
                            <option value="WLF">Wallis et Futuna</option>
                            <option value="ESH">Sahara occidental</option>
                            <option value="YEM">Yémen</option>
                            <option value="ZMB">Zambie</option>
                            <option value="ZWE">Zimbabwe</option>
                        </select>
                        <span class="error"> <?php echo $birthplaceError; ?> </span>
                    </div>
                    <div>
                        <!-- Nationalité -->
                        <label for="nationality">Nationalité : </label>
                        <input type="text" name="nationality" id="nationality" value="<?php if (isset($_POST['nationality'])) {
                                                                                            echo $_POST['nationality'];
                                                                                        }  ?>">
                        <span class="error"><?php echo $natioError; ?> </span>
                    </div>
                    <div>
                        <!--  Adresse -->
                        <label for="adress"> Adresse : </label>
                        <input type="text" name="adress" id="adress" value="<?php if (isset($_POST['adress'])) {
                                                                                echo $_POST['adress'];
                                                                            }  ?>">
                        <span class="error"><?php echo $adressError; ?> </span>
                    </div>
                    <!-- E-mail -->
                    <div>
                        <label for="email">e-mail : </label>
                        <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) {
                                                                                echo $_POST['email'];
                                                                            }  ?>">
                        <span class="error"><?php echo $emailError;  ?> </span>
                    </div>
                    <!-- Téléphone -->
                    <div>
                        <label for="tel">Telephone : </label>
                        <input type="text" name="tel" value="<?php if (isset($_POST['tel'])) {
                                                                    echo $_POST['tel'];
                                                                }  ?>">
                        <span class="error"><?php echo $telError;  ?> </span>

                    </div>
                    <!-- Diplome -->
                    <div>
                        <label for="diplome">Diplome : </label>
                        <select id="diplome" name="diplome">
                            <option value="">--Choisissez--</option>
                            <option value="sans">Sans</option>
                            <option value="Bac">Bac</option>
                            <option value="Bac+2">Bac+2</option>
                            <option value="Bac+3 ou supérieur">Bac+3 ou Supérieur</option>
                        </select>
                        <span class="error"> <?php echo $dipError; ?> </span>
                    </div>
                    <!-- Nmo PE -->
                    <div>
                        <label for="PENumber"> Numéro Pole Emploi : </label>
                        <input type="PENumber" name="PENumber" value="<?php if (isset($_POST['PENumber'])) {
                                                                            echo $_POST['PENumber'];
                                                                        } ?>">
                        <span class="error"><?php echo $PEError; ?> </span>

                    </div>
                    <!-- Nombre de badges, la ligue m'attend. -->
                    <div>
                        <label for="badges"> Nombres de badges : </label>
                        <input type="badges" name="badges" value="<?php if (isset($_POST['badges'])) {
                                                                        echo $_POST['badges'];
                                                                    } ?>">
                        <span class="error"><?php echo $badgesError;  ?> </span>

                    </div>
                    <!-- Lien Code Academy -->
                    <div>
                        <label for="codeAc"> Lien Code Academy : </label>
                        <input type="codeAc" name="codeAc" value="<?php if (isset($_POST['codeAc'])) {
                                                                        echo $_POST['codeAc'];
                                                                    } ?>">
                        <span class="error"><?php echo $codeAcError; ?>
                    </div>
                    <!-- Premier text Area pour une question -->
                    <div>
                        <label for="heroQ">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? <br> </label>
                        <textarea id="heroQ" name="heroQ" maxlength="200"></textarea>
                        <span class="error"><?php echo $heroQError;  ?> </span>

                    </div>
                    <!-- Second Text Aera pour la deuxieme question -->
                    <div>
                        <label for="hackQ">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <br> </label>
                        <textarea id="hackQ" name="hackQ" maxlength="200"></textarea>
                        <span class="error"><?php echo $hackQError;  ?> </span>

                    </div>
                    <div>
                        <!-- Exp -->
                        <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <select id="exp" name="exp">
                            <option value="">--Choisissez--</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non.</option>
                        </select>
                        <span class="error"><?php echo $expError;  ?> </span>

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