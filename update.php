<?php
 require_once('database.php');
 $kodes = $_GET['kode'];
 $res = $database->read($kode);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
	 $juduls = $database->sanitize($_POST['judul']);
	 $pengarangs = $database->sanitize($_POST['pengarang']);
	 $penerbits = $database->sanitize($_POST['penerbit']);
	 $tahuns = $_POST['tahun'];

	$res = $database->update($kode,$judul,$pengarang,$penerbit,$tahun);
	if($res){
	 	echo "Successfully updated data";
	}else{
	 	echo "failed to update data";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in PHP & MySQL - Update</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
	<h2>Update Operation in CRUD Application</h2>
	<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Judul Buku</label>
			    <div class="col-sm-10">
			      <input type="email" name="judul"  class="form-control" id="input1" placeholder="Judul" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Pengarang</label>
			    <div class="col-sm-10">
			      <input type="email" name="pengarang"  class="form-control" id="input1" placeholder="Pengarang" />
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
			      <input type="email" name="tahun"  class="form-control" id="input1" placeholder="Tahun Terbit" />
			    </div>
			</div>
	<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Update" />
</form>
	</div>
</div>
</body>
</html>