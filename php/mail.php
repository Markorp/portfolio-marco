<?php
    $from = 'marcorape07@gmail.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $header = "Enviado desde el portafolio de contacto";
    $completeMessage = $message . "\n Atentamente: " . $name;

    mail($from, $subject, $completeMessage, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>