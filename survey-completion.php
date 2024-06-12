<?php
// Capture des paramètres envoyés par CPX Research
$status = $_GET['status'] ?? '';
$trans_id = $_GET['trans_id'] ?? '';
$user_id = $_GET['user_id'] ?? '';
$sub_id = $_GET['sub_id'] ?? '';
$sub_id_2 = $_GET['sub_id_2'] ?? '';
$amount_local = $_GET['amount_local'] ?? '';
$amount_usd = $_GET['amount_usd'] ?? '';
$offer_id = $_GET['offer_id'] ?? '';
$hash = $_GET['hash'] ?? '';
$ip_click = $_GET['ip_click'] ?? '';

// Affichage des paramètres pour vérification (à retirer une fois testé)
echo "Status: $status <br>";
echo "Transaction ID: $trans_id <br>";
echo "User ID: $user_id <br>";
echo "Sub ID: $sub_id <br>";
echo "Sub ID 2: $sub_id_2 <br>";
echo "Amount Local: $amount_local <br>";
echo "Amount USD: $amount_usd <br>";
echo "Offer ID: $offer_id <br>";
echo "Hash: $hash <br>";
echo "IP Click: $ip_click <br>";
?>
