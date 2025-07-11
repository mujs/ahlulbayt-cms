<?php

/*################################*\
|# - Ahlulbayt Portal             #|
|# - v1.0 beta                    #|
|# - Developed by Ahlulbayt Group #|
|# - 2011                         #|
\*################################*/

session_start();

$width = 60;
$height = 18;
$im = imagecreatetruecolor($width, $height);
$bg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 0, 0, $bg);

$len = 5;
$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
$string = '';

for ($i = 0; $i < $len; $i++) {
    $pos = random_int(0, strlen($chars) - 1);
    $string .= $chars{$pos};
}

$_SESSION['captcha_code'] = md5($string);

$grid_color = imagecolorallocate($im, 232, 238, 211);
$number_to_loop_x = ceil($width / 20);
$number_to_loop_y = ceil($height / 10);

for ($i = 0; $i < $number_to_loop_x; $i++) {
    $x = ($i + 1) * 20;
    imageline($im, $x, 0, $x, $height, $grid_color);
}

for ($i = 0; $i < $number_to_loop_y; $i++) {
    $y = ($i + 1) * 10;
    imageline($im, 0, $y, $width, $y, $grid_color);
}

$line_color = imagecolorallocate($im, 232, 238, 211);

for ($i = 0; $i < 30; $i++) {
    $rand_x_1 = random_int(0, $width - 1);
    $rand_x_2 = random_int(0, $width - 1);
    $rand_y_1 = random_int(0, $height - 1);
    $rand_y_2 = random_int(0, $height - 1);
    imageline($im, $rand_x_1, $rand_y_1, $rand_x_2, $rand_y_2, $line_color);
}

$text_color = imagecolorallocate($im, 115, 136, 30);
$rand_x = 10;
$rand_y = 3;
imagestring($im, 3, $rand_x, $rand_y, $string, $text_color);

header("Content-type: image/png");
imagepng($im);
imagedestroy($im);
