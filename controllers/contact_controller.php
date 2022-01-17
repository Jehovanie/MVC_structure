<?php

if (!empty($_POST) && isset($_POST["btnContact"])) {

    if (isset($_POST["email"]) && isset($_POST["firstname"]) && isset($_POST["message"])) {

        if (!empty($_POST["email"]) && !empty($_POST["firstname"]) && !empty($_POST["message"])) {

            $email = str_secur($_POST["email"]);
            $firstname = str_secur($_POST["firstname"]);
            $message = str_secur($_POST["message"]);

            ///transforme le message 
            $message .= ' - email envoyer par : ' . $firstname . ' : ' .  $email;

            debug("this message is " . $message);

            ///Envoye de message
            mail("jehovanieram@gmail.com", "On me contact sur mon site", $message);
        } else {
            $error = "Vous devez completer tous les champs.";
            echo ($error);
        }
    } else {
        $error = "une error s'est produite . Reesseyez !";
        echo ($error);
    }
}
