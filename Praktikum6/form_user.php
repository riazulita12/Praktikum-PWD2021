<?php 
	//untuk menampilkan form tambah user, pembuatan form dengan methode pengiriman data yang digunakan post dan aksi yang akan dilakukan saat data dikirim ke file input_user.php
	echo "<h2>Tambah User</h2> 
	<form method=post action=input_user.php>
	<table>
	<tr><td>Username</td><td> : <input name='id_user' type='text'></td></tr>
	<tr><td>Password</td><td> : <input name='password' type='password'></td></tr>
	<tr><td>Nama Lengkap</td><td> : <input name='nama_lengkap' type='text'></td></tr>
	<tr><td>Email </td><td> : <input name='email' type='text'></td></tr>
	<tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
	</table>
	</form>"; //pada tabel user akan menginputkan username, password, nama lengkap, dan email
 ?>