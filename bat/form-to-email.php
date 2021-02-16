<?php

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i"; //i es por el caseInsensitive del pattern regex
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}





$recipients = 'contacto@lmabusiness.net';


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$company = $_POST['company'];
$message = $_POST['message'];


if(IsInjected($visitor_email))
{
    echo "Correo con codigo inyectado!";
    die('MF255');
}







$email_body = "Tiene un nuevo mensaje de $name.\n".
                "Nombre de la compañía: $company\n".
                "Este es el mensaje:\n $message";



$to = $recipients;

$headers = "From: $recipients \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

if(mail($to,$subject,$email_body,$headers)){
    die('MF000');
}

?>