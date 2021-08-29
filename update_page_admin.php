<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit data member</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="form-wrapper">
			<h2 class="card-title">Ubah data peserta</h2>
			<form action="data_processing.php" method="get" id="form1">
				<div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="input" value="<?php echo $_GET['pre_nama'];?>" name="post_nama">
                </div>
				<div class="form-group">
					<label for="">Jenis Kelamin</label>
					<div class="input-rad">
                        <?php switch($_GET['pre_jenis_kelamin']){
                        case "L": echo '
                        <input type="radio" value="L" name="post_jenis_kelamin" checked><label for="" class="item-rad">Laki - laki</label>
                        <input type="radio" value="P" name="post_jenis_kelamin"><label for="" class="item-rad">Perempuan</label>
                        ';break;
                        case "P": echo '
                        <input type="radio" value="L" name="post_jenis_kelamin"><label for="" class="item-rad">Laki - laki</label>
                        <input type="radio" value="P" name="post_jenis_kelamin" checked><label for="" class="item-rad">Perempuan</label>
                        ';break;
                        default:break;
                        }?>
                    </div>
				</div>
				<div class="form-group">
					<label for="">Agama</label>
					<div class="input-rad">
                        <?php switch($_GET['pre_agama']){
                        case "Islam": echo '
                        <input type="radio" value="Islam" name="post_agama" checked><label for="" class="item-rad">Islam</label><input type="radio" value="Kristen" name="post_agama"><label for="" class="item-rad">Kristen</label><input type="radio" value="Katholik" name="post_agama"><label for="" class="item-rad">Katholik</label><input type="radio" value="Buddha" name="post_agama"><label for="" class="item-rad">Buddha</label><input type="radio" value="Konghucu" name="post_agama"><label for="" class="item-rad">Konghucu</label><input type="radio" value="Hindu" name="post_agama"><label for="" class="item-rad">Hindu</label>
                        ';break;
                        case "Kristen": echo '<input type="radio" value="Islam" name="post_agama"><label for="" class="item-rad">Islam</label><input type="radio" value="Kristen" name="post_agama" checked><label for="" class="item-rad">Kristen</label><input type="radio" value="Katholik" name="post_agama"><label for="" class="item-rad">Katholik</label><input type="radio" value="Buddha" name="post_agama"><label for="" class="item-rad">Buddha</label><input type="radio" value="Konghucu" name="post_agama"><label for="" class="item-rad">Konghucu</label><input type="radio" value="Hindu" name="post_agama"><label for="" class="item-rad">Hindu</label>';break;
                        case "Katholik": echo '
                        <input type="radio" value="Islam" name="post_agama"><label for="" class="item-rad">Islam</label><input type="radio" value="Kristen" name="post_agama"><label for="" class="item-rad">Kristen</label><input type="radio" value="Katholik" name="post_agama" checked><label for="" class="item-rad">Katholik</label><input type="radio" value="Buddha" name="post_agama"><label for="" class="item-rad">Buddha</label><input type="radio" value="Konghucu" name="post_agama"><label for="" class="item-rad">Konghucu</label><input type="radio" value="Hindu" name="post_agama"><label for="" class="item-rad">Hindu</label>
                        ';break;
                        case "Hindu": echo '
                        <input type="radio" value="Islam" name="post_agama"><label for="" class="item-rad">Islam</label><input type="radio" value="Kristen" name="post_agama"><label for="" class="item-rad">Kristen</label><input type="radio" value="Katholik" name="post_agama"><label for="" class="item-rad">Katholik</label><input type="radio" value="Buddha" name="post_agama"><label for="" class="item-rad">Buddha</label><input type="radio" value="Konghucu" name="post_agama"><label for="" class="item-rad">Konghucu</label><input type="radio" value="Hindu" name="post_agama"><label for="" class="item-rad" checked>Hindu</label>
                        ';break;
                        case "Buddha": echo '
                        <input type="radio" value="Islam" name="post_agama"><label for="" class="item-rad">Islam</label><input type="radio" value="Kristen" name="post_agama"><label for="" class="item-rad">Kristen</label><input type="radio" value="Katholik" name="post_agama"><label for="" class="item-rad">Katholik</label><input type="radio" value="Buddha" name="post_agama" checked><label for="" class="item-rad">Buddha</label><input type="radio" value="Konghucu" name="post_agama"><label for="" class="item-rad">Konghucu</label><input type="radio" value="Hindu" name="post_agama"><label for="" class="item-rad">Hindu</label>
                        ';break;
                        default:break;
                        }?>
                    </div>
				</div>
				<div class="form-group">
                    <label for="">Asal Sekolah</label>
                    <input type="text" class="input" value="<?php echo $_GET['pre_asal_sekolah'];?>" name="post_asal_sekolah">
                </div>
				<div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="input" value="<?php echo $_GET['pre_alamat'];?>" name="post_alamat">
                </div>
				<input type="hidden" value="<?php echo $_GET['pre_id'];?>" name="post_id">
                <input type="hidden" value="update" name="selector">
				<div style="display: flex; width: 100%; justify-content: flex-end;">
                    <button class="btn" form="form1" style="background: none;border:unset;">Submit</button>
					<a href="submain_page_admin.php" class="btn" style="color:black;">Cancel</a>
				</div>
			</form>
		</div>
	</body>
</html>
