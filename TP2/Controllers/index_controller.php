    <?php
    //---- $regexStandard = '/^[\p{L}\p{Nd}\s]+$/'; Probleme avec les accents sur cette regex la.
    $regexStandard = "/^[a-zA-Zàâäéèêëïîôöùûü\'\-\/\.\,\s]+$/";
    $regexNumber = '/^[0-9]+$/';
    $regexMail = '/^(\s*|[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})$/';
    $regexTel = '/^[0-9]{10}$/';
    $regexURL = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&@#\/%=~_|]/i';
    $regexDate = '/\d{4}-\d{1,2}-\d{1,2}/';
    // Boolean pour verifier si tout est bon.
    $allGood = FALSE;

    $errorMessages = [];
    $countryArray = [
        'AFG' => 'Afghanistan',
        'ALA' => 'Åland Islands',
        'ALB' => 'Albania'
    ];







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

    if (isset($_POST['buttonSubmit'])) {

        if (isset($_POST['lastname'])) {

            if (!preg_match($regexStandard, $_POST['lastname'])) {
                $errorMessages['lastname'] = 'Veuillez respecter le format ex:Dupont';
            }
            if (empty($_POST['lastname'])) {
                $errorMessages['lastname'] = 'Veuillez renseigner votre nom.';
            }
        }

        if (empty($_POST['birthplace'])) {
            $errorMessages['birthplace'] = 'Veuillez selectioner un pays.';
        }
        
        if(isset($_POST['birthplace'])) {
            if(!array_key_exists($_POST['birthplace'],$countryArray)) {
                $errorMessages['birthplace'] = 'Tu as essayé de tricher.';
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
