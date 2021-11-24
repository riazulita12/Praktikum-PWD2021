<?php 
include "koneksi.php"; // mengkonfigurasikan bahwa file ini terhubung dengan file koneksi database

	$id_user = $_POST['id_user']; //deklarasi id_user
	$nama_lengkap = $_POST['nama_lengkap']; //deklarasi nama_lengkap
	$email = $_POST['email']; //deklarasi email
	$password = md5($_POST['password']); //deklarasi password
	$sql = "INSERT INTO users(id_user, password, nama_lengkap, email) VALUES ('$id_user', '$password', 
	'$nama_lengkap','$email')"; //query yang digunakan untuk menambahkan data id_user, password, nama_lengkap, dan email yang ada pada database tabel users
	$query=mysqli_query($con, $sql); 
	mysqli_close($con); //menutup mysqli
	header('location:tampil_user.php'); //untuk mengarahkan ke tampil user untuk menampilkan data yang telah ditambahi dalam daftar
 ?>