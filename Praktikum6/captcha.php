<?php 
session_start(); //memulai session 
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 6); //jumlah karakter captcha
$_SESSION["captcha_code"] = $captcha_code; //memberi nama session dengan nama captcha_code
$target_layer = imagecreatetruecolor(70,30); //untuk membuat gambar dengan ukuran (70, 30)
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); //untuk warna background captcha (warna coral)
imagefill($target_layer,0,0,$captcha_background); 
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); //untuk warna teks pada captcha (warna hitam)
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color); //digunakan untuk gambar string secara horizontal
header("Content-type: image/jpeg");
imagejpeg($target_layer); //untuk membuat atau generate gambar
 ?>