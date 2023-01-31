<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./form1results.php" method="Get">
        <div>voornaam:<br><input type="text" name="voornaam" required></div><br>
        <div>tussenvoegsels:<br><input type="text" name="tussenvoegsels"></div><br>
        <div>achternaam:<br><input type="text" name="achternaam" required></div><br>
        <div>leeftijd:<br><input type="number" name="leeftijd" required></div><br>
        <div>Kleur:<br><select type="text" name="kleur" required>
            <option value="Blue">Blue</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Orange">Orange</option>
            <option value="Purple">Purple</option><br>
        </select>
    </div>
    <div><input type="submit"></div><br>
    </form>
    <form action="./form2results.php" method="Post">
        <div>E-mail:<br><input type="e-mail" name="E-mail" required></div><br>
        <div>Wachtwoord:<br><input type="password" name="Wachtwoord" required></div>
        <div><input type="submit"></div><br>
    </form>
</body>
</html>