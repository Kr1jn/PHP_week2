<?php 
    echo ($_GET['voornaam'] . ' ');
    if (isset($_GET['tussenvoegsels'])) echo ($_GET['tussenvoegsels'] . ' ');
    echo ($_GET['achternaam'] . ' <br>');
    echo ($_GET['leeftijd'] * 4 . ' <br>');
?>
<style>
    body {
        background-color: <?php 
            echo ($_GET['kleur'])
            ?>;
    }
</style>