    <?php
    //---- $regexStandard = '/^[\p{L}\p{Nd}\s]+$/'; Probleme avec les accents sur cette regex la.
    $regexStandard = "/^[a-zA-Z0-9àâäéèêëïîôöùûü\'\-\/\.\,\s]+$/";
    $regexNumber = '/^[0-9]+$/';
    $regexMail = '/^(\s*|[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})$/';
    $regexTel = '/^[0-9]{10}$/';
    $regexURL = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#\/%=~_|]/i';
    $regexDate = '/\d{4}-\d{1,2}-\d{1,2}/';
    // Boolean pour verifier si tout est bon.
    $allGood = FALSE;

    // Message d'erreur : 
    $lastnameError = $firstnameError = $natioError = $birthplaceError = $adressError = $emailError = $telError = $codeAcError = $dipError = $PEError = $badgesError = $heroQError = $hackQError = $expError = $ageError = '';
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
        function ErrorM($ToCheck, $errorM)
        {
            if ($ToCheck == false) {
                $errorM = 'Erreur dans le champ.';
                return $errorM;
            }
        }

        // Fonction pour calculer l'age selon la date de naissance
        function calculateAge($DoB)
        {
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

        $checkLastname = (CheckInput($regexStandard, $_POST['lastname']));
        $lastnameError = errorM($checkLastname, $lastnameError);

        $checkFirstname = (CheckInput($regexStandard, $_POST['firstname']));
        $firstnameError = errorM($checkFirstname, $firstnameError);

        $checkNationality = (CheckInput($regexStandard, $_POST['nationality']));
        $natioError = errorM($checkNationality, $natioError);

        $checkAdress = (CheckInput($regexStandard, $_POST['adress']));
        $adressError = errorM($checkAdress, $adressError);

        $checkEmail = (CheckInput($regexMail, $_POST['email']));
        $emailError = errorM($checkEmail, $emailError);

        $checkTel = (CheckInput($regexTel, $_POST['tel']));
        $telError = errorM($checkTel, $telError);

        $checkPE = (CheckInput($regexStandard, $_POST['PENumber']));
        $PEError = errorM($checkPE, $PEError);

        $checkBadges = (CheckInput($regexNumber, $_POST['badges']));
        $badgesError = errorM($checkBadges, $badgesError);

        $checkCodeAc = (CheckInput($regexURL, $_POST['codeAc']));
        $codeAcError = errorM($checkCodeAc, $codeAcError);

        $checkHeroQ = (CheckInput($regexStandard, $_POST['heroQ']));
        $heroQError = errorM($checkHeroQ, $heroQError);

        //Verif réponse Hack
        $checkHackQ = (CheckInput($regexStandard, $_POST['hackQ']));
        $hackQError = errorM($checkHackQ, $hackQError);

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
        if (!preg_match($regexDate, $_POST['birthday'])) {
            $ageError = 'Erreur dans le champ';
        } else {
            $ageToCheck = calculateAge($_POST['birthday']);
            // ON verifie si l'age est compris entre 18 et 90. 
            if ($ageToCheck >= 18 && $ageToCheck < 100) {
                $checkAge = TRUE;
            } else {
                $ageError = 'Erreur dans le champ.';
            }
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
