<?php 
if ( ($_POST ["E-mail"] == "test@test.nl") && ($_POST ["Wachtwoord"] == "tEst")) {
    echo "U heeft toegang tot deze pagina";
}

else {
    echo "U heeft geen toegang tot deze pagina";
}
?>