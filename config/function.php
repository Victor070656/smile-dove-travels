<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Matscode\Paystack\Transaction;
use Matscode\Paystack\Utility\Debug; // for Debugging purpose
use Matscode\Paystack\Utility\Http;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$secKey = "sk_test_e3bb322135d48ff5c41900329e9aceade2dc7511";

function getCurrencyExchange()
{
    $url = "https://v6.exchangerate-api.com/v6/6a5827ebff0307cf01be282c/pair/USD/NGN";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $response = json_decode($response, true);
    // var_dump($response);
    return $response;
}

function makePayment($email, $amount, $callback)
{
    global $secKey;
    $transaction = new Transaction($secKey);

    $response = $transaction
        ->setCallbackUrl($callback)
        ->setEmail($email)
        ->setAmount($amount)
        ->initialize();

    $_SESSION["ref"] = $response->reference;
    echo "<script>location.href = '" . $response->authorizationUrl . "'</script>";
    // Http::redirect($response->authorizationUrl);
}

function confirmTransaction($ref)
{
    global $secKey;

    $transaction = new Transaction($secKey);
    return $transaction->isSuccessful($ref);
}

function sendMail($subject, $body)
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.smiledovetravels.com.ng';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'mail@smiledovetravels.com.ng';                     //SMTP username
        $mail->Password = 'smiledovetravels.com.ng';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mail@smiledovetravels.com.ng', 'Smile Dove Travels');
        $mail->addAddress('info@smiledovetravels.com.ng');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}

function sendNotification($email, $subject, $body)
{
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'mail.smiledovetravels.com.ng';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'mail@smiledovetravels.com.ng';                     //SMTP username
        $mail->Password = 'smiledovetravels.com.ng';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mail@smiledovetravels.com.ng', 'Smile Dove Travels');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}
