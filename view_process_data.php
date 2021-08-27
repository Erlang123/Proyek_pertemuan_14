<?php 
$result = mysqli_query($conn, "SELECT * FROM peserta");

if(mysqli_num_rows($result) > 0){
	$_SESSION["datacontainer"] = array(array());
	$_SESSION["isdatanotempty"] = true;
	$rowcounter = 0;
	while($row = mysqli_fetch_array($result)){
		for($var1 = 0; $var1 < /*jumlah kolom tabel*/; $var1++){
			$_SESSION["datacontainer"][$rowcounter][$var1] = $row[$var1];
		}
		$rowcounter++;
	}
}
else{ $_SESSION["isdatanotempty"] = false; }
?>