<?php

class Database{
	
	private $connection;

function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'perpus');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function create($kode,$judul,$pengarang,$penerbit,$tahun){
		$sql = "INSERT INTO buku (kode_buku, judul_buku, pengarang, penerbit, tahun_terbit) VALUES ('$kode', '$judul', '$pengarang', '$penerbit', '$tahun')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

	public function read($id=null){
		$sql = "SELECT * FROM buku ";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function update($kode,$judul,$pengarang,$penerbit,$tahun){
		$sql = "UPDATE buku SET juduls='$judul', pengarangs='$pengarang', penerbits='$penerbit', penerbits='$penerbit' WHERE kodes=$kode";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$sql = "DELETE FROM buku WHERE kodebuku=$kodebuku";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>