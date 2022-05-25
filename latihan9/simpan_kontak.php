<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "kontak";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="INSERT INTO kontak (id, nama, jkel, email, alamat, kota, pesan) VALUES ('','$vnama','$vjkel','$vemail','$valamat','$vkota','$vpesan')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);


header("location:kontak.html");
?>