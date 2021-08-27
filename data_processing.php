<?php include "conn.php"; session_start();
$selector = $_GET["selector"];

switch($selector){
	case "add":
		if(isset($_GET["post-nama"], $_GET["post-jenis_kelamin"]) && isset($_GET["post-agama"], $_GET["post-sekolah_asal"]) &&
		   isset($_GET["post-alamat"])
		){
			$query = "('" . $jumlah_baris++ . "', '" . $_GET["post-nama"] . "', '" . $_GET["post-jenis_kelamin"] . "', '" . $_GET["post-alamat"] . "', '" . $_GET["post-agama"] . "', '" . $_GET["post-sekolah_asal"] . "')";
			$result = mysqli_query($conn, "INSERT INTO peserta VALUES" . $query);
			$_SESSION["isdatauploaded"] = true;
			header("location:submain_page_peserta.php");
		}
	break;
	default: $_SESSION["isselectorwork"] = false;
}
?>