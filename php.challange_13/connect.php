<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "extraopdrachten";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die( "Connection failed: " . $conn->connect_error);
}

$statusmsg = '';

if ($_SERVER["REQUEST_METHOD"] =="POST"){

    $merk = $_REQUEST['merk'];
    $kenteken = $_REQUEST['kenteken'];
    $prijs = $_REQUEST['prijs'];
    $kleur = $_REQUEST['kleur'];
    $bouwjaar = $_REQUEST['bouwjaar'];
    }

    $sql = "INSERT INTO autodb (merk, prijs, kleur, bouwjaar, kenteken) VALUES ('$merk', '$prijs', '$kleur', '$bouwjaar', '$kenteken')";

    if ($conn->query($sql) === TRUE){
        echo "<h3>goedgegaan</h3>";
    } else{
        echo "Error $sql"
        . $conn->error;
    }

    $conn->close();

?>