<?php include "conn.php";
$selector = $_GET["selector"];

switch($selector){
	case "add":
		if(isset($_GET["post-nama"], $_GET["post-jenis_kelamin"]) && isset($_GET["post-agama"], $_GET["post-sekolah_asal"]) &&
		   isset($_GET["post-alamat"])
		){
			$query = "('" .  . "', '', '', '', '')";
			$result = mysqli_query($conn, "INSERT INTO peserta VALUES" . $query);
		}
	break;
	default: $_SESSION["isselectorwork"] = false;
}
?>