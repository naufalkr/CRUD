<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM test WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
			padding-top: 200px;
		}

		header {
			text-align: center;
			padding: 20px;
		}

		h3 {
			margin: 0;
		}

		form {
			width: 50%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		fieldset {
			border: 1px solid #ccc;
			padding: 10px;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		textarea,
		select {
			width: 100%;
		 padding: 10px;
		 margin-bottom: 10px;
		 border: 1px solid #ccc;
		 border-radius: 5px;
		}

		input[type="radio"] {
			margin-right: 5px;
		}

		input[type="submit"] {
		background-color: #5c5470;
		 color: #fff;
		 padding: 10px 20px;
		 border: none;
		 border-radius: 5px;
		 cursor: pointer;
		}

	</style>
</head>

<body>
	<header>
		<h3>Formulir Edit</h3>
	</header>

	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
			</p>
			<p>
				<label for="usia">Usia: </label>
				<input type="text" name="usia" placeholder="Usia" value="<?php echo $siswa['usia'] ?>" />
			</p>
			<p>
				<label for="email">Email: </label>
				<?php $email = $siswa['email']; ?>
				<input type="text" name="email" placeholder="Email" value="<?php echo $siswa['email'] ?>" />
			</p>
			<p>
				<input type="submit" value="Simpan" name="simpan" />
			</p>
		</fieldset>
	</form>
</body>
</html>