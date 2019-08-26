<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>penerbit</th>
				<th>Tahun Terbit</th>
			</tr>
			<?php 
			while($r = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $r['kode_buku']; ?></td>
				<td><?php echo $r['judul_buku']; ?></td>
				<td><?php echo $r['pengarang']; ?></td>
				<td><?php echo $r['penerbit']; ?></td>
				<td><?php echo $r['tahun_terbit']; ?></td>
				<td><a href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
</body>
</html>