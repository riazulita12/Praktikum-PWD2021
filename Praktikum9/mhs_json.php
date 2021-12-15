<?php 
include "koneksi.php"; //mengkonfigurasikan bahwa file ini terhubung dengan file koneksi.php

$sql="select * from mahasiswa order by nim"; //variabel sql untuk menampung query untuk menampilkan data pada tabel mahasiswa dengan record dalam pengurutan nim secara 'ascending'
$tampil = mysqli_query($con,$sql); //variabel tampil untuk menampung hasil dari variabel $con dengan $query
if (mysqli_num_rows($tampil) > 0) { //kondisi jika terdapat data untuk ditampilkan
	$no=1;
	$response = array(); //variabel response untuk menampung array data
	 $response["data"] = array(); //array data
	while ($r = mysqli_fetch_array($tampil)) { //perulangan untuk menampilkan sejumlah data yang ada pada tabel mahasiswa
		$h['nim'] = $r['nim']; //data nim dan untuk membaca serta menampilkan data nim
		$h['nama'] = $r['nama']; //data nama dan untuk membaca serta menampilkan data nama
		$h['jkel'] = $r['jkel']; //data jkel dan untuk membaca serta menampilkan data jkel
		$h['alamat'] = $r['alamat']; //data alamat dan untuk membaca serta menampilkan data alamat
		$h['tgllhr'] = $r['tgllhr']; //data tgllhr dan untuk membaca serta menampilkan data tgllhr
		array_push($response["data"], $h); // fungsi menyisipkan satu atau lebih elemen ke akhir array. Tip: Anda dapat menambahkan satu nilai
	}
	echo json_encode($response); //Fungsi json_encode() untuk mengembalikan representasi JSON dari suatu nilai. Dengan kata lain, ia mengubah variabel PHP (berisi array) menjadi JSON.
}
else { //kondisi apabila tidak terdapat data pada tabel mahasiswa
	$response["message"]="tidak ada data"; //maka akan menampilkan pesan "tidak ada data"
	echo json_encode($response);
}
 ?>