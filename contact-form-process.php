<?php
if (isset($_POST['Message'])) {

    $email_to = "recipient@example.de";
    $email_subject = "Contact form";

    function problem($error)
    {
        echo "There is a problem with your input:<br><br> ";
        echo $error . "<br><br>";
        echo "<br><br>";
        die();
    }

    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Message'])
    ) {
        problem('There is a problem with your input:');
    }

    $name = $_POST['Name'];
    $email = 'sender@example.de';
    $message = $_POST['Message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'na .<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The registered concern does not seem to be valid!<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The registered message does not seem to be valid!<br>';
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

    $email_message .= "Concerns: " . clean_string($name) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // email header
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    Your message has been sent!

<?php
}
?>
