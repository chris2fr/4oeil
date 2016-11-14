<?
$mail_to = "studio@4oeil.com";
$mail_from = "studio@4oeil.com";


$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));
$subject = strip_tags(trim($_POST['subject']));
if($subject!='') $mail_subject = $subject;
else $mail_subject = 'Contact form of website';
$text = strip_tags(trim($_POST['message']));

$message = "<h3>Nouveau petit mot gentille :)</h3>"."<br>";
$message .= "<b>Nom complet:</b> ".$name."<br>";
$message .= "<b>Courriel:</b> ".$email."<br>";
$message .= "<b>Mot d'encouragement:</b> ".$text."<br>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <".$mail_from.">" . "\r\n";

mail($mail_to,$mail_subject,$message,$headers);
?>