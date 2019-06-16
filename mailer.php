<?php
$name = $_POST['name']; //set writers name per POST (form)
$email = $_POST['email']; //set writers email per POST (form)
$txt = $_POST['message']; //set writers message per POST (form)
$nameto = "Name (Reciver)";
// Creating the Mime message
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";
include('Mail/mime.php');

$host = "localhost";
$username = "webmaster@domain.com ";
$password = "password";
$port = "0000";
$to = $_POST['to']; //set reciver e-mail per POST
$email_from = "Your E-Mail Adress ";
$email_subject = "Your Subject";
$email_address = "Your E-Mail Adress";


$crlf = "\r\n";
$mime = new Mail_mime($crlf);

$html = "<html>
<head><meta http-equiv=\'Content-Type\' content=\'text/html; charset=UTF-8\'></head>
<table class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
<td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;'>
<div class='content' style='box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;'><span class='preheader' style='color: transparent; display: none; height: 0px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0px;'>This is preheader text. Some clients will show this text as a preview.</span>
<table class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>
<tbody>
<tr>
<td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
<table style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>Neue Nachricht von,</p>
<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>$name</p>
<table class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;' align='left'>
<table style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'> E-Mail: <b><a href='mailto:$email'>$email</a></b></p>
<p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'><b>Nachricht:</b> $txt</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<div class='footer' style='clear: both; margin-top: 10px; text-align: center; width: 100%;'>
<table style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' border='0' cellspacing='0' cellpadding='0'>
<tbody>
<tr>
<td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'><span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>Contact: <a style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;' href='mailto:info@baumirein.de'>info@baumirein.de</a></span> <br /> CEO &amp; Head-Developer of <a style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;' href='https://werkstatt-company.de'>Werkstatt-Company</a>.</td>
</tr>
<tr>
<td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>Powered by <a style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;' href='https://baumirein.de'>baumirein.de</a>.</td>
</tr>
</tbody>
</table>
</div>
</div>
</td>
<td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
</tr>
</tbody>
</table>";
$html_txt = "Neue nachricht von $name (E-Mail: $email) Nachricht: $txt";
$mime->setHTMLBody($html);
//$mime->setTXTBody($html_txt);
$message = $mime->get();

$email_body = $message;

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address, 'MIME-Version' => 1, 'Content-type' => 'text/html;charset=iso-8859-1');
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$headers = $mime->headers($headers);
$mail = $smtp->send($to, $headers, $email_body);




if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
header("Location: index.php?err=". $mail->getMessage() ."");
} else {
echo("<p>Message successfully sent!</p>");
header("Location: index.php?err=0");
}
