<?php
$host="localhost"; //mengidentifikasi nama host
$username="root"; //mengidentifikasi username
$password=""; //mengidentifikasi password
$databasename="aakademik"; //mengidentifikasi nama database yang akan digunakan 

$con=@mysqli_connect($host,$username,$password,$databasename); //@mysqli_connect digunakan untuk menghubungkan database dengan file php ini

if (!$con) { //kondisi apabila terjadi error
 echo "Error: " . mysqli_connect_error();
exit();
}
?>