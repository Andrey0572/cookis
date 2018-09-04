<?php
header('Content-type: image/png');
$testname = $_POST['testname'];
$username = $_POST['username'];
$date = $_POST['date'];
$correctAnswers = $_POST['correctAnswers'];
$totalAnswers = $_POST['totalAnswers'];
$answers = $correctAnswers . ' из ' . $totalAnswers;
$font = 'fonts/arial.ttf';
// Создаем картинку, размер и цвет шрифта
$img = imagecreatefrompng('img/sert.png');
$white = imagecolorallocate($img, 035, 035, 035);
// Определяем положение имени пользователя (по центру)
$imageWidth = getimagesize('img/sert.png');
$imageWidth = $imageWidth[0];
$textPoints = imagettfbbox(300, 0, $font, $username);
$textWidth = $textPoints[2] - $textPoints[0];
$x = ($imageWidth - $textWidth) / 2;
// Распологаем все данные на картинке
imagettftext($img, 300, 0, $x, 700, $white, $font, $username . ',');
imagettftext($img, 200, 0, 1600, 1625, $white, $font, $testname);
imagettftext($img, 180, 0, 1600, 1976, $white, $font, $answers);
imagettftext($img, 180, 0, 1600, 2325, $white, $font, $date);
// Возвращаем картинку
imagepng($img);
imagedestroy($img);
?>
