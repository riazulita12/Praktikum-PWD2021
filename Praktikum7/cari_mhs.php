<?php 
include "koneksi.php"; //mengkonfigurasikan bahwa file ini terhubung dengan file koneksi database
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
	<form action="" method="get"> <!-- pembuatan form dengan methode pengiriman data yang digunakan get dan aksi yang akan dilakukan saat data dikirim pada file ini-->
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	<?php 
	if (isset($_GET['cari'])) { //kondisi dimana terdapat isset untuk memeriksa apakah suatu variabel sudah diatur atau belum
		# code...
		$cari = $_GET['cari']; //pendeklarasian variabel cari
		echo "<b>Hasil Pencarian : ".$cari."</b>"; //untuk menampilkan hasil pencarian
	}
	?>
	 
	<table border="1">  <!-- pembuatan tabel dengan border yang digunakan 1-->
		<tr>
		<th>No</th>
		<th>Nama</th>
		</tr>
		<?php 
		if(isset($_GET['cari'])){ //kondisi apabila user melakukan pencarian
			$cari = $_GET['cari']; //deklarasi variabel cari
			$sql="select * from mahasiswa where nama like'%".$cari."%'"; //kemudian memeriksa pada database berdasarkan data nama yang ingin dicari oleh user
			$tampil = mysqli_query($con,$sql); //deklarasi variabel tampil
		}else{ //kondisi jika user tidak sedang melakukan pencarian
			$sql="select * from mahasiswa"; //query untuk menampilkan data yang ada pada tabel mahasiswa
			$tampil = mysqli_query($con,$sql); //deklarasi tampil
		}
		$no = 1; //deklarasi nomor, dengan nilai 1
		while($r = mysqli_fetch_array($tampil)){ //perulangan untuk menampilkan data berdasarkan pengambilan data MySQL.
		?>
		<tr>
			<td><?php echo $no++; ?></td> <!-- untuk menampilkan nomor-->
			<td><?php echo $r['nama']; ?></td> <!-- untuk menampilkan nama yang sedang dicari-->
		</tr>
		<?php } ?>
	</table>
 </body>
 </html>