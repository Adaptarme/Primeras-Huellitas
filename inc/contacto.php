<?php

$nameError = '';
$emailError = '';
$commentError = '';

if (isset($_POST['enviar'])) :
    if (trim($_POST['nombre']) === '') :
        $nameError = 'Introduzca su nombre y apellido.';
        $hasError = true;
    else :
        $name = trim($_POST['nombre']);
    endif;

    if (trim($_POST['correo']) === '') :
        $emailError = 'Introduzca su dirección de correo electrónico.';
        $hasError = true;
    elseif (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['correo']))) :
        $emailError = 'Ha introducido una dirección de email válida.';
        $hasError = true;
    else :
        $email = trim($_POST['correo']);
    endif;

    if (trim($_POST['mensaje']) === '') :
        $commentError = 'Por favor, introduzca un mensaje.';
        $hasError = true;
    else :
        if (function_exists('stripslashes')) :
            $comments = stripslashes(trim($_POST['mensaje']));
        else :
            $comments = trim($_POST['mensaje']);
        endif;
    endif;

    if (!isset($hasError)) :
        $emailTo = get_option('admin_email');
        $subject = '[Contact Form] From ' . $name;
        $body = "Nombre: $name \n\nCorreo: $email \n\nMensaje: $comments";
        $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    endif;
endif;