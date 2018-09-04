<?php
require_once 'functions.php';

$captcha = generateCode();
$cookie = md5($captcha);
$_SESSION['captcha'] = $cookie;
imgCode($captcha);
?>
