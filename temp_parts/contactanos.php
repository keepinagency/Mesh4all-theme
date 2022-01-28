<?php
//error_reporting(0);
if (isset($_POST['email'])){
    $email = $_POST['email'];
}else{
    echo "Por favor debe colocar un email" . "<br>";
}
if (isset($_POST['ciudad'])){
    $ciudad = $_POST['ciudad'];
}else{
    echo "Por favor debe colocar un ciudad" . "<br>";
}
if (isset($_POST['pais'])){
    $pais = $_POST['pais'];
}else{
    echo "Por favor debe colocar un pais" . "<br>";
}
if (isset($_POST['mensaje'])){
    $mensaje = $_POST['mensaje'];
}else{
    echo "Por favor debe colocar un mensaje" . "<br>";
}
    $from = $_POST['email'];
    $to = "contact@mesh4all.org";
    $subject = "Mesh4all.com - Email de contáctanos";
    $message =" <html>
        <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <title>Mesh4all - Unete a la red Mesh - Email enviado de la Web</title>
        </head>
        <body>

            Nueva solicitud de más información desde formulario de contáctanos en www.mesh4all.com<br><br>
            
            Solicitud de: <b>".$from."</b><br>
            Ciudad: <b>".$ciudad."</b><br>
            País: <b>".$pais."</b><br>
            Mensaje: <b>".$mensaje."</b><br>

            www.mesh4all.com <br>
            (by <a href='mesh4all.com'>mesh4all.com</a>)
        </body>
        </html>
    ";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    header('Location: '.$_SERVER['HTTP_REFERER'], true, 301); 
    exit();

?>
