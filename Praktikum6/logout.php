<?php 
	session_start(); //session_start() digunakan untuk memulai sebuah sesi 
	session_destroy(); //session_destroy() digunakan untuk menhancurkan semua data session yang telah tersimpan didalam penyimpanan file sistem
	echo "Anda telah sukses keluar sistem <b>LOGOUT</b>" //akan menampilkan teks "Anda telah sukses keluar sistem LOGOUT"
?>