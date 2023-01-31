<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <label for="Kenteken">Vul hier uw info in AUB</label><br>
        <input type="text" id="kenteken" name="Kenteken" placeholder="kenteken">
        <input type="text" id="merk" name="Merk" placeholder="merk">
        <input type="text" id="kleur" name="kleur" placeholder="kleur">
        <input type="text" id="bouwjaar" name="bouwjaar" placeholder="bouwjaar">
        <input type="text" id="prijs" name="Prijs" placeholder="Verkoop prijs">
        <input type="file" name="file">
        <input type="submit" name="submit" value="verstuur">
</form>
    <?php
    include 'connect.php';
     ?>
</body>
</html>