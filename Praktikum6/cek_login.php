<?php 
include "koneksi.php"; //mengkonfigurasikan bahwa file ini terhubung dengan file koneksi database
	
	$id_user = $_POST['id_user']; //deklarasi id_user
	$pass=md5($_POST['paswd']); //deklarasi password
	 session_start(); //memulai session

	$sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'"; //query untuk menampilkan data yang ada pada tabel users
	$login=mysqli_query($con,$sql);
	$ketemu=mysqli_num_rows($login);
	$r= mysqli_fetch_array($login);
	if($_POST["captcha_code"] == $_SESSION["captcha_code"]){ //menambahkan kondisi sesion capctha untuk keamanan
		if ($ketemu > 0){ //kondisi jika username dan password yang dimasukkan benar
			 $_SESSION['iduser'] = $r['id_user']; //membuat variabel session iduser yang merupakan hasil dari r(baca) data yang ada di id_user
			 $_SESSION['passuser'] = $r['password']; //membuat variabel session passuser yang merupakan hasil dari r(baca) data yang ada di password
			echo"USER BERHASIL LOGIN<br>"; //output berhasil login 
			echo "id_user =",$_SESSION['iduser'],"<br>"; //session yang digunakan untuk menampilkan id_user = iduser (username)
			echo "password=",$_SESSION['passuser'],"<br>"; //session yang digunakan untuk menampilkan password = passuser (password)
			echo "<a href=logout.php><b>LOGOUT</b></a></center>"; //logout berisi link yang mengarahkan ke file logout.php
		}
		else{ //kondisi jika username dan password yang dimasukkan tidak match
			echo "<center>Login gagal! username & password tidak benar<br>"; //output teks bila salah username dan password
			echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>"; //ulangi lagi yang akan mengarahkan oengguna ke form login
		}
		mysqli_close($con);
	}
 ?>