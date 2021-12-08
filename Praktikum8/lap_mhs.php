<?php 
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// AddPage() untuk membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan yaitu Arial dengan Bold atau tebal dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
// setting jenis font yang akan digunakan yaitu Arial dengan Bold atau tebal dengan ukuran 12
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
// setting jenis font yang akan digunakan yaitu Arial dengan Bold atau tebal dengan ukuran 10
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'TANGGAL LHR',1,1);
// setting jenis font yang akan digunakan yaitu Arial dengan ukuran 10
$pdf->SetFont('Arial','',10);
//mengkonfigurasikan bahwa file ini terhubung dengan database
include 'koneksi.php';
//query untuk menampilkan semua data yang ada pada tabel mahasiswa
$mahasiswa = mysqli_query($con, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
	 $pdf->Cell(20,6,$row['nim'],1,0);
	 $pdf->Cell(50,6,$row['nama'],1,0);
	 $pdf->Cell(25,6,$row['jkel'],1,0);
	 $pdf->Cell(50,6,$row['alamat'],1,0);
	 $pdf->Cell(30,6,$row['tgllhr'],1,1); 
}
$pdf->Output();

 ?>