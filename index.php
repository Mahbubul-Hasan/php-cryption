<?php
 
// @Mahbubul Hasan

require 'vendor/autoload.php';
use Defuse\Crypto\Key;
use Defuse\Crypto\Crypto;

$plaintext = "Secret Key";
$key = Key::createNewRandomKey();

echo $encryptedData = Crypto::encrypt("Secret Key", $key);
echo "</br>";
echo $decryptedData = Crypto::decrypt($encryptedData, $key);