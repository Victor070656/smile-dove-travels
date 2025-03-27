<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Matscode\Paystack\Transaction;
use Matscode\Paystack\Utility\Debug; // for Debugging purpose
use Matscode\Paystack\Utility\Http;

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
