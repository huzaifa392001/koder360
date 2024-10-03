<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
switch ($_POST["mode"]) {
    case "contactForm":
        try {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $country_phone = $_POST["country_phone"];
            $msg = $_POST["msg"];
            $left_header = $_POST["header"];
            $client_ip = get_client_ip();
            // $ins = insert_leads($_POST,$db);
            // print_r($ins);
            $message = "<html><body>";
            $message .= "<h1>" . $left_header . "</h1> \n ";
            $message .= "<p>Name : " . $name . "</p> \n ";
            $message .= "<p>Email : " . $email . "</p> \n ";
            $message .= "<p>Cell Phone: " . $country_phone . "</p> \n ";
            $message .= "<p>Message: " . $msg . "</p> \n ";
            $message .= "<p>Ip Address : " . $client_ip . "</p> \n ";
            $message .= "<p>Lead Page: " . $_SERVER["HTTP_REFERER"] . "</p> \n ";
            $message .= "</body></html>";
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }

        break;
    case "popupForm":
        try {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $country_phone = $_POST["country_phone"];
            $msg = $_POST["msg"];
            $left_header = $_POST["header"];
            $client_ip = get_client_ip();
            // $ins = insert_leads($_POST,$db);
            // print_r($ins);
            $message = "<html><body>";
            $message .= "<h1>" . $left_header . "</h1> \n ";
            $message .= "<p>Name : " . $name . "</p> \n ";
            $message .= "<p>Email : " . $email . "</p> \n ";
            $message .= "<p>Cell Phone: " . $country_phone . "</p> \n ";
            $message .= "<p>Message: " . $msg . "</p> \n ";
            $message .= "<p>Ip Address : " . $client_ip . "</p> \n ";
            $message .= "<p>Lead Page: " . $_SERVER["HTTP_REFERER"] . "</p> \n ";
            $message .= "</body></html>";
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }

        break;
}

$sadaKhushbuMail = false;

if ($sadaKhushbuMail) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = 'From: info@koder360.com' . "\r\n" .
        'Reply-To: info@koder360.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail('info@koder360.com', 'Contact Form', $message, $headers);
    $data = ["status" => 1, "message" => "Data sent successfully !"];
    die(json_encode($data));
}


// Load Composer's autoloader
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
// $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;
$mail->Host = "smtpout.secureserver.net";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "info@koder360.com";
$mail->Password = "Ibrahim-321";
$mail->SetFrom("info@koder360.com", "Leads");
$mail->Subject = "Leads";
$mail->Body = $message;


// $mail->AddAddress("fahadbashir757@gmail.com");
$mail->AddAddress("info@koder360.com");

// $mail->AddBCC("ryan.alonso@koder360.com");
// $mail->AddBCC("aaron.chess@koder360.com");
// $mail->AddBCC("rhrevol@gmail.com");
if (isset($_FILES) && !empty($_FILES)) {
    $mail->AddAttachment(
        $_FILES["attachment"]["tmp_name"],
        $_FILES["attachment"]["name"]
    );
}
if (!$mail->send()) {
    error_log("Message Mailer Error: " . $mail->ErrorInfo);
} else {
    $data = ["status" => 1, "message" => "Data sent successfully !"];
    echo json_encode($data);
    error_log("Message has been sent");
}
// Function to get the client IP address
function get_client_ip()
{
    $ipaddress = "";
    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        $ipaddress = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $ipaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
        $ipaddress = $_SERVER["HTTP_X_FORWARDED"];
    } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        $ipaddress = $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
        $ipaddress = $_SERVER["HTTP_FORWARDED"];
    } elseif (isset($_SERVER["REMOTE_ADDR"])) {
        $ipaddress = $_SERVER["REMOTE_ADDR"];
    } else {
        $ipaddress = "UNKNOWN";
    }
    return $ipaddress;
}
