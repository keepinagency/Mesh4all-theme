<!--?php

    //$from = "kmestizo@gmail.com";
    $from = $_POST['correo'];
    $to = "kmestizo@gmail.com";
	//$to = "kmestizo@gmail.com";
    $subject = "Mesh4all.com - Email de contáctanos";

    

    //die();
    $message =" <html>
                <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <title>Mesh4all - Unete a la red Mesh - Email enviado de la Web</title>
                </head>
                <body>
                    Nueva solicitud de más información desde www.mesh4all.com:<br><br>

                    
                    Correo: <b>".$_POST['correo']."</b><br><br><br><br>

                    www.mesh4all.com <br>
                    (by <a href='mesh4all.com'>mesh4all.com</a>)
                </body>
                </html>
            ";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    mail($to,$subject,$message, $headers);
    //echo "The email message was sent.";
    //header("Location: ".$base_url, true, 301);
    exit();
?-->

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "kmestizo@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>
