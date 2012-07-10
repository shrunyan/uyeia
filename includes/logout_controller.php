<?php
session_start();

session_destroy();

$name = 'uyeia';
$value = 0;
$expire = 0;
$path = '/';
$domain = '.uyeia.com';

setcookie($name, $value, $expire, $path, $domain);

header('location:../index.php');

?>