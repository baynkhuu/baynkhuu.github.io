<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "bayna@choijamts.be";
    $subject = "Nieuw bericht van je website";
    $body = "Naam: $name\nE-mail: $email\nBericht:\n$message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    // redirect terug naar contact sectie
    header("Location: ../../index.html#contact?success=1");
    exit;
}
?>
