<?php
 require_once('database.php');
 if(isset($_POST) & !empty($_POST)){
	 $kode = $database->sanitize($_POST['kode']);
	 $judul = $database->sanitize($_POST['judul']);
	 $pengarang = $database->sanitize($_POST['pengarang']);
	 $penerbit = $_POST['penerbit'];
	 $tahun = $_POST['tahun'];

	 $res = $database->create($kode, $judul, $pengarang, $penerbit, $tahun);
	 if($res){
	 	echo "Successfully inserted data";
	 }else{
	 	echo "failed to insert data";
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>oop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Kode Buku</label>
			    <div class="col-sm-10">
			      <input type="text" name="kode"  class="form-control" id="input1" placeholder="Kode Buku" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Judul Buku</label>
			    <div class="col-sm-10">
			      <input type="text" name="judul"  class="form-control" id="input1" placeholder="Judul Buku" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Pengarang</label>
			    <div class="col-sm-10">
			      <input type="texts" name="pengarang"  class="form-control" id="input1" placeholder="Pengarang" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Penerbit</label>
			    <div class="col-sm-10">
			      <input type="text" name="penerbit"  class="form-control" id="input1" placeholder="Penerbit" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tahun Terbit</label>
			    <div class="col-sm-10">
			      <input type="text" name="tahun"  class="form-control" id="input1" placeholder="Tahun Terbit" />
			    </div>
			</div>

			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>