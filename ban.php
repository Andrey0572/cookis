<?php
require_once 'function/functions.php';

if (!isset($_COOKIE['ban'])) {
    header('location:index.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ban</title>
</head>
<body>
    <h1>Вы забанены на 1 час</h1>
</body>
</html>
