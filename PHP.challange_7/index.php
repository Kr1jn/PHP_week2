<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $kleur = array("red", "yellow", "blue", "green", "orange", "purple", "black", "white", "grey", "brown", "pink", "indigo", "turquoise", "beige");
    shuffle($kleur);
    ?>
    <div id="backblock">
        <div class="blocks" style="background-color: <?php echo $kleur[0] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[1] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[2] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[3] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[4] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[5] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[6] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[7] ?>;"></div>
        <div class="blocks" style="background-color: <?php echo $kleur[8] ?>;"></div>
    </div>
    <style>
        #backblock {
            background-color: hotpink;
            padding: 20px;
            width: 560px;
            height: 560px;
            display: flex;
            flex-wrap: wrap;
        }
        .blocks {
            height: 150px;
            width: 150px;
            margin: 17px;
        }
    </style>
</body>
</html>