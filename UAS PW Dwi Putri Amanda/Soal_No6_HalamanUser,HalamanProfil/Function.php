<?php 

$conn = mysqli_connect("localhost", "root", "", "tokosepatu");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$size = htmlspecialchars($data["size"]);
	$model = htmlspecialchars($data["model"]);
	$merk = htmlspecialchars($data["merk"]);
	$harga = htmlspecialchars($data["harga"]);

	
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO tokosepatu
				VALUES
			  ('', '$size', '$model', '$merk', '$harga', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tokosepatu WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$size = htmlspecialchars($data["size"]);
	$model = htmlspecialchars($data["model"]);
	$merk = htmlspecialchars($data["merk"]);
	$harga = htmlspecialchars($data["harga"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	
	

	$query = "UPDATE tokosepatu SET
				size = '$size',
				model = '$model',
				merk = '$merk',
				harga = '$harga',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function cari($keyword) {
	$query = "SELECT * FROM tokosepatu
				WHERE
			  size LIKE '%$keyword%' OR
			  model LIKE '%$keyword%' OR
			  merk LIKE '%$keyword%' OR
			  harga LIKE '%$keyword%'
			";
	return query($query);
}













?>