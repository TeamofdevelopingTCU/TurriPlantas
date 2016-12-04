<?php

require '../phpmailer/PHPMailerAutoload.php';
//require '../phpmailer/class.phpmailer.php';

$name = $_POST['Name'];
$email = $_POST['Email'];
$telephone = $_POST['Telephone'];
$message = $_POST['Comments'];


if (strlen($name) > 0 && strlen($email) > 0 &&
        strlen($telephone) > 0 && strlen($message) > 0) {

    /* Don't touch */
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "relay-hosting.secureserver.net";
    $mail->SMTPAuth = false;
    $mail->setFrom($email, $name);
    /* end */

    /* Configure the address the email will be sent to */
    $mail->addAddress('michael.melendezm@gmail.com', 'Turriplantas');
    $mail->Subject = 'Consulta de: ' . $name = $_POST['name'];
    /* This is forwarded through a GoDaddy forwarding account */

    $mail->Body = $message . " El número telefónico de " . $name . " es: " . $telephone;

    if (!$mail->send()) {
        header("location: ../index.php?error=error");
    } else {
        header("location: ../index.php?success=send");
    }

}else{
    header("location: ../index.php?errorCampos=error");    
}
?>
