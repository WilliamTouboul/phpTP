<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="profile.php" method="POST" id="form">
        <!-- Civilité -->
        <div>
            <label for="civ">Civilité : </label>
            <select name="civ" id="civ">
                <option value="">--Choisir--</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
                <option value="">Autre</option>
            </select>
        </div>
        <div>
            <label for="lastname">Nom : </label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="age">Age : </label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <label for="soc">Société : </label>
            <input type="text" name="soc" id="soc">
        </div>

        <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">

    </form>

</body>

</html>