<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    $to = "your-email@example.com";  // Kendi e-posta adresinizi buraya yazın
    $subject = "Yeni Form Başvurusu";
    $message = "Ad: $name\nE-posta: $email\nNeden Silmek İstiyorsun?: $reason";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilemedi.";
    }
}
?>
