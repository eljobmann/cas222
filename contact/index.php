<?php

//include '../includes/db.inc.php';
include '../includes/db_local.inc.php';

if ((isset($_POST['myName'])) && (empty($_POST['honeypot'])))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $myName = $_POST['myName'];
    $myEmail = $_POST['myEmail'];
    $myQuestion = $_POST['myQuestion'];
    
    try {
        $sql = 'INSERT INTO contact SET
        name = :myName,
        email = :myEmail,
        question = :myQuestion';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myName', $myName);
        $s->bindValue(':myEmail', $myEmail);
        $s->bindValue(':myQuestion', $myQuestion);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error fetching content: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
      }

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
//date_default_timezone_set('Etc/UTC');

require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->IsSMTP();
//$mail->SMTPDebug = 3;
//$mail->Debugoutput = 'html';
$mail->SMTPAuth = true;
$mail->Host = "mail.elliottjobmann.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
$mail->Username = "phpmailer@elliottjobmann.webhostingforstudents.com";
$mail->Password = "myp4ssw0rd";
$mail->SetFrom('phpmailer@elliottjobmann.webhostingforstudents.com');
//Set who the message is to be sent to
$mail->AddAddress($myEmail, 'Elliott');
$mail->AddAddress('phpmailer@elliottjobmann.webhostingforstudents.com');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
$mail->isHTML(true);
$mail->Body = 'Email:' . $myEmail . '<br>';
$mail->Body .= 'Name:' . $myName . '<br>';
$mail->Body .= 'Question:' . $myQuestion . '<br>';

    
//send the message, check for errors
if (!$mail->send()) {
    echo 'Message was not sent.';
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    include 'success.html.php';
    echo "Message Sent!";
}
    
} else {

include 'contact.html.php';
}
?>