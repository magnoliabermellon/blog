<?php
if(isset($_POST['email'])) {

$email_to = "magnoliabermellon@gmail.com";
$email_subject = "Mensaje del blog Magnolia Bermellon";

if(!isset($_POST['name']) ||
!isset($_POST['text']) ||
!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['comment'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}



$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Apellido: " . $_POST['text'] . "\n";
$email_message .= "Email: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['subject'] . "\n";
$email_message .= "Mensaje: " . $_POST['comment'] . "\n";



$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡Your message was sent succesfully!";
header("Location: index.html");
}
?>