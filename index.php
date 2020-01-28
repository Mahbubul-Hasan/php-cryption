<?php
/**
 * @package Php Cryption
 * @copyright (C) 2020 Mahbubul Hasan
 * @license MIT
 */
require("vendor\autoload.php");

use MiladRahimi\PhpCrypt\Symmetric;

$key = '0123456789';
$symmetric = new Symmetric($key);
var_dump($encryptedData = $symmetric->encrypt('Secret key'));
echo $symmetric->decrypt($encryptedData);