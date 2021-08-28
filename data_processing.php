<?php include "conn.php"; session_start();

$selector = $_GET["selector"];

switch($selector){
	case "add":
		if(isset($_GET["post-nama"], $_GET["post-jenis_kelamin"]) && isset($_GET["post-agama"], $_GET["post-sekolah_asal"]) &&
		   isset($_GET["post-alamat"])
		){
			$jumlah_baris++;
			$query = "('" . $jumlah_baris . "', '" . $_GET["post-nama"] . "', '" . $_GET["post-jenis_kelamin"] . "', '" . $_GET["post-alamat"] . "', '" . $_GET["post-agama"] . "', '" . $_GET["post-sekolah_asal"] . "')";
			//echo $query;
			if(!mysqli_query($conn, "INSERT INTO peserta VALUES " . $query)){
				echo("ERROR: " . mysqli_error($conn));
			}
			$_SESSION["isdatauploaded"] = true;
			header("location:submain_page_peserta.php");
		}
	break;
	case "delete":  
		if($_GET["post_id"] != null){
			$query = "DELETE FROM peserta WHERE id = '" . $_GET["post_id"] . "'";
            if(!mysqli_query($conn, $query)){echo "Error: " . mysqli_error($conn);}
            header("location:submain_page_admin.php");
		}
	break;
    case "update":
        if($_GET["pre_id"] != null && $_GET["pre_nama"] != null && $_GET["pre_jenis_kelamin"] != null && $_GET["pre_agama"] != null && $_GET["pre_asal_sekolah"] != null && $_GET["pre_alamat"] != null){
            $query = "UPDATE peserta SET id='" . $_GET["pre_id"] . "', nama='" . $_GET["post_nama"] . "', jenis_kelamin='" . $_GET["post_jenis_kelamin"] . "', agama='" . $_GET["post_agama"] . "', alamat='" . $_GET["post_alamat"] . "' WHERE id='" . $_GET["pre_id"] . "'";
            echo $query;
            //if(!mysqli_query($conn, $query)){echo "Error: " . mysqli_error($conn);}header("location:submain_page_admin.php");
        }
    break;
	default: $_SESSION["isselectorwork"] = false;
}
?>