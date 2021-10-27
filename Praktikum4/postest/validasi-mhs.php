<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{color: #FF0000;}
	</style>
</head>
<body>
	<?php 
		//mendefinisikan variabel dan set ke nilai default kosong
		 $namaErr = $emailErr = $nimErr = $prodiErr = $genderErr = "";
		 $nama = $email = $nim = $prodi = $gender = $alamat = "";
		 
		 //jika terdapat request method post, maka variabel input akan diisi dengan $_POST akan divalidasi terlebih dahulu oleh fungsi test_input()
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 //untuk validasi nama
		 if (empty($_POST["nama"])) {
		 	$namaErr = "Nama harus diisi";
		 }else {
		 	$nama = test_input($_POST["nama"]);
		 }
		 
		 //untuk validasi email
		 if (empty($_POST["email"])) {
			 $emailErr = "Email harus diisi";
		 }else {
			 // check if e-mail address is well-formed
			 if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			 	$emailErr = "Email tidak sesuai format"; 
			 }else{
			 	$email = htmlspecialchars($_POST["email"]);
			 }
		 }
		 
		//untuk validasi nim
		if (empty($_POST["nim"])) {
		 	$nimErr = "Nim harus diisi";
		 }else {
		 	$nim = test_input($_POST["nim"]);
		 }

		//untuk validasi prodi
		if (empty($_POST["prodi"])) {
		 	$prodiErr = "Prodi harus diisi";
		 }else {
		 	$prodi = test_input($_POST["prodi"]);
		}

		  //untuk validasi gender
		if (empty($_POST["gender"])) {
		 	$genderErr = "Gender harus dipilih";
		 }else {
		 	$gender = test_input($_POST["gender"]);
		 }
		 
		//untuk validasi komentar
		if (empty($_POST["alamat"])) {
		 	$alamat = "";
		}else {
		 	$alamat = test_input($_POST["alamat"]);
		}
		}
		 
		 //fungsi untuk menvalidasi seluruh input
		 function test_input($data) {
			 $data = trim($data);
			 $data = stripslashes($data);
			 $data = htmlspecialchars($data);
			 return $data;
		 }
	 ?>

	 <h2>Data Mahasiswa </h2>
	 
	 <p><span class = "error">* Harus Diisi.</span></p>
	 
	 <!-- $_SERVER [“PHP_SELF”] adalah variabel super global yang mengembalikan nama file dari skrip yang sedang dieksekusi. -->
	 <form method = "post" action = "<?php 
	 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	 <table>
	 <tr>
		 <td>Nama:</td>
		 <td><input type = "text" name = "nama">
		 <span class = "error">* <?php echo $namaErr;?></span>
		 </td>
	 </tr>
	 
	 <tr>
		 <td>E-mail: </td>
		 <td><input type = "text" name = "email">
		 <span class = "error">* <?php echo $emailErr;?></span>
		 </td>
	 </tr>
	 
	 <tr>
		 <td>Nim: </td>
		 <td><input type = "text" name = "nim">
		 <span class = "error">* <?php echo $nimErr;?></span>
		 </td>
	 </tr>
	 
	  <tr>
		 <td>Program Studi: </td>
		 <td><input type = "text" name = "prodi">
		 <span class = "error">* <?php echo $prodiErr;?></span>
		 </td>
	 </tr>

	  <tr>
		 <td>Gender:</td>
		 <td>
		 <input type = "radio" name = "gender" value = "L">Laki-Laki
		 <input type = "radio" name = "gender" value = "P">Perempuan
		 <span class = "error">* <?php echo $genderErr;?></span>
		 </td>
	 </tr>

	 <tr>
		 <td>Alamat:</td>
		 <td> <textarea name = "alamat" rows = "5" cols = "40"></textarea></td>
	 </tr>
	 
		 <td>
		 <input type = "submit" name = "submit" value = "Submit"> 
		 </td>
	 </table>
	 </form>
	 
	 <!-- Meanampilkan seluruh hasil validasi dari variabel input -->
	 <?php
		 echo "<h2>Data yang anda isi:</h2>";

		 //menampilkan dengan tabel
		 echo "<table width=500 border=1>
		 <tr>
		 <td>Nama</td>
		 <td>$nama</td>
		 </tr>
		 <tr>
		 <td>Email</td>
		 <td>$email</td>
		 </tr>
		 <tr>
		 <td>Nim</td>
		 <td>$nim</td>
		 </tr>
		 <tr>
		 <td>Prodi</td>
		 <td>$prodi</td>
		 </tr>
		 <tr>
		 <td>Gender</td>
		 <td>$gender</td>
		 </tr>
		 <tr>
		 <td>Alamat</td>
		 <td>$alamat</td>
		 </tr>
		 ";
	 ?>
</body>
</html>