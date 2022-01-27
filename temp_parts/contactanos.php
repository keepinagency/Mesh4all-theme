
<?php
    
    /*$uri = $_SERVER['REQUEST_URI']; // $uri == example.com/sub
    $exploded_uri = explode('/', $uri); //$exploded_uri == array('example.com','sub')
    $domain_name = $exploded_uri[1]; //$domain_name = 'example.com'
    $server = ( isset($_SERVER['HTTPS']) ? 'https' : 'http' ). "://" . $_SERVER['SERVER_NAME'];
    $port   = ( !empty($_SERVER['SERVER_PORT']) ? ':'.$_SERVER['SERVER_PORT'] : '' );
    $pos_v  = strpos($_SERVER['REQUEST_URI'],"v");
    $pos_sl = strpos($_SERVER['REQUEST_URI'],"v",$pos_v);
    $vers   = ( $pos_v > 0 ? substr($_SERVER['REQUEST_URI'],$pos_v,6) : '' );
    $base_url = $server.$port.'/';*/
    
    $from = "kmestizo@gmail.com";
    //$to = "$_POST['email'];
	$to = "kmestizo@gmail.com";
    $subject = "Mesh4all.com - Email de contáctanos";
    
    
    $message =" <html>
                <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <title>Mesh4all - Unete a la red Mesh - Email enviado de la Web</title>
                </head>
                <body>
                    Nueva solicitud de más información desde www.mesh4all.com<br><br>

                    
                    Correo: <b>".$to."</b><br><br><br><br>

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
    //header("Location: ".$base_url, true, 301);
    header('Location: '.$_SERVER['HTTP_REFERER'], true, 301); 
    exit();
?>

<!--?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "kmestizo@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
 
?-->
