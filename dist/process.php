<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
            
    $to = 'javzero1@gmail.com';
    // Asunto
    $subject = 'Mensaje desde la web';
    
    // Cabecera que especifica que es un HMTL
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
    
    // Cabeceras adicionales
    $text = '
    <html>
    <head>
        <title>Mensaje desde la web</title>
    </head>
    <body>
        * No responda este e-mail directamente * <br />
        Para eso use el proporcionado por el cliente en este mensaje<br />
        ------------------------------------------------------------------------</p>
        <b>Datos recibidos</b> <br />
        <b>Nombre:</b> '.$name.' <br />
        <b>E-Mail:</b> '.$email.' <br />
        <b>Teléfono:</b> '.$phone.' <br />
        <b>Mensaje o Consulta:</b> '.$message.' <br />
    </body>
    </html>
    ';
            
    if (mail($to, $subject, $text, $headers)) {
        $response = ['response' => 'success'];
    } else {
        $response = ['response' => 'error'];
    }
    
    echo json_encode($response);
?>
  