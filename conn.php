<?php
$severnm = "localhost";
$usernm = "root";
$password = "";
$dbnm = "digital_talent_db";

$conn = mysqli_connect($severnm, $usernm, $password, $dbnm);

if(!$conn){
	die("Connection to database has fails");
}

// Pre-defined Script

$pre_query1 = mysqli_query($conn, "SELECT * FROM peserta");
$jumlah_baris = mysqli_num_rows($pre_query1);
$jumlah_kolom = mysqli_field_count($conn);
?>