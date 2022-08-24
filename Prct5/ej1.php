<?php
    $destinatario = "xx@xx.com ";
    $asunto = "Prct5. Ej 1";
    $cuerpo = '
        <html>
            <head>
                <title>Enviar un correo electrónico</title>
            </head>
            <body>
                <h1>Ejercicio 1</h1>
                    <p>Email con formato HTML</p>
            </body>
        </html>
    ';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    mail($destinatario,$asunto,$cuerpo,$headers)
?>