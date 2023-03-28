<?php
if (isset($_POST['Message'])) {

    $email_to = "betriebsrat@heliservice.adac.de";
    $email_subject = "Anonymes Kontaktformular";

    function problem($error)
    {
        echo "Es gibt ein Problem mit deiner Eingabe:<br><br> ";
        echo $error . "<br><br>";
        echo "<br><br>";
        die();
    }

    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Message'])
    ) {
        problem('Es gibt ein Problem mit deiner Eingabe:');
    }

    $name = $_POST['Name'];
    $email = 'anonym@heliservice.adac.de';
    $message = $_POST['Message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'na .<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Das eingetragene Anliegen scheint nicht g&uuml;ltig zu sein!<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'Die eingetragene Nachricht scheint nicht g&uuml;ltig zu sein!<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

// Formular

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Anliegen: " . clean_string($name) . "\n";
    $email_message .= "Nachricht: " . clean_string($message) . "\n";

    // email header
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    Deine Nachricht wurde versendet!

<?php
}
?>
