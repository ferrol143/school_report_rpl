<?php

require 'functions.php';

if( isset($_POST['submit']) ){
	
	if(tambah($_POST) > 0 ){
		echo "
		<script>	
			alert('Data Berhasil di tambah!');
				
		</script>
		";
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class = "row ml-4 mt-3 justify-content-center">
	<div class = "col-lg-6" style = "box-shadow: 1px 2px 5px rgba(0,0,0,.5); padding:10px;">
	<form action = "" method = "post" enctype = "multipart/form-data">
		<div class="mb-3">
			<label for="nis" class="form-label">NIS</label>
			<input type="nis" class="form-control" id="nis" name = "nis" required placeholder="Ketik disini ...">
		</div>
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" id="name" name = "name" required placeholder="Ketik disini ...">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="text" class="form-control" id="email" name = "email" required placeholder="Ketik disini ...">
		</div>
		<div class="mb-3">
			<label for="jurusan" class="form-label">Jurusan</label>
			<input type="text" class="form-control" id="jurusan" name = "jurusan" required placeholder="Ketik disini ...">
		</div>
		<div>
			<label for="jurusan" class="form-label">Pilih Gambar : </label>
		</div>
		<div class="mb-3">
			<input type="file"  id="gambar" name = "gambar" required placeholder="Ketik disini ...">
		</div>
		<button class = "btn btn-primary float-right" type = "submit" name = "submit">Submit</button>
	 </form>
	</div>
		
  </div>
	
  
  
  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>