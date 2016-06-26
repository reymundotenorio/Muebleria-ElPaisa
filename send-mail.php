<?php
/*
* This php sends the email using the form post data at the contact.html 
* Author: Reymundo Tenorio
*/

//vars
$recipients = "dj-rex@hotmail.com";
$subject = $_POST['subject'];
$to = explode(',', $recipients );

$from = $_POST['email'];

//data
$msg = "Nombre: "  .$_POST['name']    ."<br>\n";
$msg .= "Correc electrónico: "  .$_POST['email']    ."<br>\n";
//$msg .= "Sitio Web: "  .$_POST['web']    ."<br>\n";
$msg .= "Comentarios: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send for each mail
foreach($to as $mail){
   mail($mail, $subject, $msg, $headers);
}

?>
