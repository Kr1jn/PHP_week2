<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body img{
            max-width: 200px;
        }
    </style>
<?php 
echo "<h3> PNG Images </h3>";
foreach (glob("*.png") as $filename){

    echo "<p>$filename</p><br>";
    echo "<img src='$filename' alt='$filename' />";

}

echo "<h3> JPG Images </h3>";

foreach (glob("*.jpg") as $filename){

    echo "<p>$filename</p><br>";
    echo "<img src='$filename' alt='$filename' />";
}

echo "<h3> WEBP Images </h3>";

foreach (glob("*.webp") as $filename){

    echo "<p>$filename</p><br>";
    echo "<img src='$filename' alt='$filename' />";
}

echo "<h3> JPEG Images </h3>";

foreach (glob("*.jpeg") as $filename){

    echo "<p>$filename</p><br>";
    echo "<img src='$filename' alt='$filename' />";
}
?>
<script>
</script>
</body>
</html>
