<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tugas Pertemuan 14</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		
		<!-- Content situs -->
		<content>
			<!-- Card Wrapper -->
			<div class="form-wrapper">
				<!-- Card title -->
				<h2 class="card-title">Daftar peserta</h2>
				
				<!-- Form container -->
				<form action="data_processing.php" method="get" id="form1">
					
					<!-- Form content -->
					<div class="form-group">
						<label for="">Nama</label>
						<input class="input" type="text" name="post-nama" required>
					</div>
					<div class="form-group">
						<label for="">Jenis Kelamin</label>
						<div class="input-rad">
							<input type="radio" name="post-jenis_kelamin" value="L" required>
							<label class="item-rad" for="">Laki - laki</label>
							<input type="radio" name="post-jenis_kelamin" value="P" required>
							<label class="item-rad" for="">Perempuan</label>
						</div>
					</div>
					<div class="form-group">
						<label for="">Agama</label>
						<div class="input-rad">
							<input type="radio" name="post-agama" value="Islam" required>
							<label class="item-rad" for="">Islam</label>
							<input type="radio" name="post-agama" value="Kristen" required>
							<label class="item-rad" for="">Kristen</label>
							<input type="radio" name="post-agama" value="Buddha" required>
							<label class="item-rad" for="">Buddha</label>
							<input type="radio" name="post-agama" value="Hindu" required>
							<label class="item-rad" for="">Hindu</label>
							<input type="radio" name="post-agama" value="Katholik" required>
							<label class="item-rad" for="">Katholik</label>
							<input type="radio" name="post-agama" value="Konghucu" required>
							<label class="item-rad" for="">Konghucu</label>
						</div>
					</div>
					<div class="form-group">	
						<label for="">Sekolah Asal</label>
						<input class="input" type="text" name="post-sekolah_asal" required>
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<textarea class="input" type="text" name="post-alamat" required></textarea>
						<!-- Input hidden untuk selector pemroses data -->
						<input type="hidden" value="add" name="selector">
						<button class="btn btn-primary" form="form1">Submit</button>
					</div>
					
				</form>
				
			</div>
		</content>
		
	</body>
</html>