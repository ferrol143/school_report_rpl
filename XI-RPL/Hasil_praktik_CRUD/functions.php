<?php 

$conn = mysqli_connect('localhost','root','','smkpesat2');

function read($query){

    global $conn;

    $result = mysqli_query($conn,$query);
    $rows = [];
    
    while($row = mysqli_fetch_assoc($result)){

        $rows[] = $row;

    }

    return $rows;
}

function cari($cari){

	global $conn;

	$query = "SELECT * FROM siswa_smk WHERE 
		Nama LIKE '%$cari%' ";

	return read($query);

}

function tambah($data){

    global $conn;

	$nis = htmlspecialchars($data['nis']);
	$nama = htmlspecialchars($data['name']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = upload();
	
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO siswa_smk VALUES(
	'','$nis','$nama','$email','$jurusan','$gambar'
	)";
	
	mysqli_query($conn,$query);
   
    return mysqli_affected_rows($conn);
}

function upload(){
	global $conn;

	$namaFile = $_FILES['gambar']['name'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$sizeFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];

	if($error == 4){
		echo "
		<script>	
			alert('Tolong Upload Gambar!');
			document.location.href = 'index.php';
		</script>
		";

		return false;
	}

	$ekstensiGambarFix = ['jpg','png','gif'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar,$ekstensiGambarFix)){
		echo "
		<script>	
			alert('Tolong Upload Gambar, Jangan yang lain!');
			document.location.href = 'index.php';
		</script>
		";
		return false;
	}


	if($sizeFile > 1000000){
		echo "
		<script>	
			alert('File terlalu besarr!');
			document.location.href = 'index.php';
		</script>
		";
		return false;
	}

	$newNamaFile = uniqid();
	$newNamaFile .= '.';
	$newNamaFile .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $newNamaFile);

	return $newNamaFile;
	
}

function ubah($data){

    global $conn;
	
	$id= htmlspecialchars($data['id']);
	$nis = htmlspecialchars($data['nis']);
	$nama = htmlspecialchars($data['name']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);
	if($_FILES['gambar']['error'] === 4){
	$gambar = $gambarLama;	
	}else{
		$gambar = upload();
	}
	
	
	
	$query = "UPDATE siswa_smk SET
		NIS ='$nis',
		Nama = '$nama',
		Email = '$email',
		Jurusan = '$jurusan',
		Gambar = '$gambar'
	WHERE id = $id
	";
	
	mysqli_query($conn,$query);
   
    return mysqli_affected_rows($conn);
}

function hapus($id){

    global $conn;

	mysqli_query($conn, "DELETE FROM siswa_smk WHERE id = $id");
   
    return mysqli_affected_rows($conn);
}

?>