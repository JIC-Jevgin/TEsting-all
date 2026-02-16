<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    $to = "orders.jicprint@gmail.com";
    $subject = "Nova poptavka 3D tisku od: $firstName $lastName";
    
    $body = "Jméno: $firstName $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Zpráva:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error"]);
    }
}
?>
