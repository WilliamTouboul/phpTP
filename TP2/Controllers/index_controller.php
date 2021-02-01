
    <?php
    //Regex pour la plupart des champs 
    //---- $regexStandard = '/^[\p{L}\p{Nd}\s]+$/'; Probleme avec les accents sur cette regex la.
    $regexStandard = '/^[a-zA-Z0-9àâäéèêëïîôöùûü\'\-\/\.\,\s]+$/';
    // Regex badges et champ avec chiffres
    $regexNumber = '/^[0-9]+$/';
    //Regex Mail
    $regexMail = '/^(\s*|[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})$/';
    //Regex Num Tel
    $regexTel = '/^[0-9]{10}$/';
    //regexURL
    $regexURL = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#\/%=~_|]/i';
    // Boolean pour verifier si tout est bon.
    $allGood = FALSE;
    // Message d'erreur : 
    $lastnameError = $firstnameError = $natioError = $birthplaceError = $adressError = $emailError = $telError = $codeAcError = $dipError = $PEError = $badgesError = $heroQError = $hackQError = $expError = $ageError = '';
    // String avec message d'erreur
    $errorMessage = 'Erreur dans le champ.';
    // Boolean pour verifier chaque champ
    $checkLastname = FALSE;
    $checkFirstname = FALSE;
    $checkNationality = FALSE;
    $checkAdress = FALSE;
    $checkEmail = FALSE;
    $checkTel = FALSE;
    $checkCodeAc = FALSE;
    $checkPE = FALSE;
    $checkBadges = FALSE;
    $checkHeroQ = FALSE;
    $checkHackQ = FALSE;
    $checkBirthplace = FALSE;
    $checkDiplome = FALSE;
    $checkExp = FALSE;
    $checkAge = FALSE;

    // Si Submit on verifie chaque champ Regex+Vide ou non
    if (isset($_POST['buttonSubmit'])) {
        // Fonction pour verifier les regex ET si les champs sont vides.
        function CheckInput($regex, $posted)
        {
            if (!preg_match($regex, $posted) || empty($posted)) {
                return FALSE;
            } else {
                return TRUE;
            }
        }

        // Fonction pour calculer l'age selon la date de naissance
        function calculateAge($DoB)
        {
            // On prend la date de naissance
            $userDob = $DoB;
            // Conversion en Date
            $dob = new DateTime($userDob);
            // ON prend la date du jour
            $now = new DateTime();
            // Calcul difference
            $difference = $now->diff($dob);
            // conversion en année.
            $age = $difference->y;
            return $age;
        }

        //Verif NAME :
        if (CheckInput($regexStandard, $_POST['lastname'])) {
            $checkLastname = TRUE;
        } else {
            $lastnameError = $errorMessage;
        }

        //Verif FIRSTNAME
        if (CheckInput($regexStandard, $_POST['firstname'])) {
            $checkFirstname = TRUE;
        } else {
            $firstnameError = $errorMessage;
        }

        //Verif PAYS
        if (CheckInput($regexStandard, $_POST['nationality'])) {
            $checkNationality = TRUE;
        } else {
            $natioError = $errorMessage;
        }


        //Verif Adresse
        if (CheckInput($regexStandard, $_POST['adress'])) {
            $checkAdress = TRUE;
        } else {
            $adressError = $errorMessage;
        }


        //Verif Email
        if (CheckInput($regexMail, $_POST['email'])) {
            $checkEmail = TRUE;
        } else {
            $emailError = $errorMessage;
        }

        //Verif Telephone
        if (CheckInput($regexTel, $_POST['tel'])) {
            $checkTel = TRUE;
        } else {
            $telError = $errorMessage;
        }

        //Verif N° PE
        if (CheckInput($regexStandard, $_POST['PENumber'])) {
            $checkPE = TRUE;
        } else {
            $PEError = $errorMessage;
        }

        // Verif nombre de Badges$
        if (CheckInput($regexNumber, $_POST['badges'])) {
            $checkBadges = TRUE;
        } else {
            $badgesError = $errorMessage;
        }


        //Verif lien Code Academy
        if (CheckInput($regexURL, $_POST['codeAc'])) {
            $checkCodeAc = TRUE;
        } else {
            $codeAcError = $errorMessage;
        }

        //Verif réponse Héros
        if (CheckInput($regexStandard, $_POST['heroQ'])) {
            $checkHeroQ = TRUE;
        } else {
            $heroQError = $errorMessage;
        }


        //Verif réponse Hack
        if (CheckInput($regexStandard, $_POST['hackQ'])) {
            $checkHackQ = TRUE;
        } else {
            $hackQError = $errorMessage;
        }

        //Verif si les selects sont vide :
        if ($_POST['birthplace'] == '') {
            $birthplaceError = 'Veuillez choisir un pays';
        } else {
            $checkBirthplace = TRUE;
        }
        //---------
        if ($_POST['diplome'] == '') {
            $dipError = 'Veuillez choisir un niveau d\'etude';
        } else {
            $checkDiplome = TRUE;
        }
        //----------
        if ($_POST['exp'] == '') {
            $expError = 'Veuillez Répondre';
        } else {
            $checkExp = TRUE;
        }

        // Verif AGE : 
        $ageToCheck = calculateAge($_POST['birthday']);
            // ON verifie si l'age est compris entre 18 et 90. 
        if ($ageToCheck >= 18 && $ageToCheck < 90) {
            $checkAge = TRUE;
        } else {
            $ageError = $errorMessage;
        }

        // Si tout les check sont passé en TRUE, on passe $allGood en TRUE. Si AllGood==TRUE on affiche le resultat, sinon on affiche le formulaire.
        if (
            $checkLastname == TRUE &&
            $checkNationality == TRUE &&
            $checkFirstname == TRUE &&
            $checkAdress == TRUE &&
            $checkEmail == TRUE &&
            $checkTel == TRUE &&
            $checkCodeAc == TRUE &&
            $checkPE == TRUE &&
            $checkBadges == TRUE &&
            $checkHeroQ == TRUE &&
            $checkHackQ == TRUE &&
            $checkBirthplace == TRUE &&
            $checkDiplome == TRUE &&
            $checkExp == TRUE &&
            $checkAge == TRUE
        ) {
            $allGood = TRUE;
        } else {
            $allGood = FALSE;
        }
    }
