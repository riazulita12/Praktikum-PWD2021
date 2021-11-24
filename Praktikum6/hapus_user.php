<?php 
	include "koneksi.php"; //mengkonfigurasikan bahwa file ini terhubung dengan file koneksi database

$sql="DELETE FROM users WHERE id_user= '$_GET[id]'"; //query yang digunakan untuk menghapus data 
mysqli_query($con, $sql);
 mysqli_close($con);
header('location:tampil_user.php'); //untuk mengarahkan ke tampil user untuk menampilkan data yang telah dihapus dalam daftar

 ?>