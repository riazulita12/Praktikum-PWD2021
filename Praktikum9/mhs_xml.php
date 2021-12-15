<?php 
include "koneksi.php"; //mengkonfigurasikan bahwa file ini terhubung dengan file koneksi.php

header('Content-Type: text/xml'); 
$query = "SELECT * FROM mahasiswa"; //variabel query  untuk menampung query untuk menampilkan data pada tabel mahasiswa
$hasil = mysqli_query($con,$query); //variabel hasil untuk menampung hasil dari variabel $con dengan $query
$jumField = mysqli_num_fields($hasil); 
echo "<?xml version='1.0'?>"; //xml yang digunakan versi 1.0
echo "<data>"; //tag data awal
while ($data = mysqli_fetch_array($hasil)){ //perulangan untuk menampilkan sejumlah data yang ada pada tabel mahasiswa
	 echo "<mahasiswa>"; //tag awal mahasiswa
	 echo"<nim>",$data['nim'],"</nim>"; //untuk menampilkan tag nim dan data yang ada pada field nim 
	 echo"<nama>",$data['nama'],"</nama>"; //untuk menampilkan tag nama dan data yang ada pada field nama 
	 echo"<jkel>",$data['jkel'],"</jkel>"; //untuk menampilkan tag jenis kelamin(jkel) dan data yang ada pada field jkel
	 echo"<alamat>",$data['alamat'],"</alamat>"; //untuk menampilkan tag alamat dan data yang ada pada field alamat
	 echo"<tgllhr>",$data['tgllhr'],"</tgllhr>"; //untuk menampilkan tag tanggal lahir(tgllhr) dan data yang ada pada field tgllhr 
	 echo "</mahasiswa>"; //tag akhir mahasiswa
}
echo "</data>"; //tag data akhir

 ?>