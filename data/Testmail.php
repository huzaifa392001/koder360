
<?php 



  


  require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
  require("vendor/phpmailer/phpmailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    



$body = "sammar";

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host = "mail.madhappy.com"; // SMTP server
$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "tls"; // sets the prefix to the servier
$mail->Host = "theanimationconcept.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "leads@theanimationconcept.com";
$mail->Password ="#xWM.BLt(Gz,";
$mail->SetFrom("leads@theanimationconcept.com", "Leads");
$mail->Subject = "Leads";
$mail->Body = $body;


// $mail->AddAddress("fahadbashir757@gmail.com");
$mail->AddAddress("sammar130@gmail.com");

//$mail->AddAttachment("images/phpmailer.gif"); // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
 echo " sent!";
}
?>  

  