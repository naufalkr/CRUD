<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		header {
			text-align: center;
			padding: 10px;
		}

		nav {
			text-align: center;
			margin-top: 10px;
		}

		table {
			width: 80%;
			margin: 0 auto;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		table, th, td {
			border: 1px solid #ccc;
		}

		th, td {
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: #5c5470;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		a {
			text-decoration: none;
			 color: #5c5470;
		}

		a:hover {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<header>
		<h3>List yang Sudah Mendaftar</h3>
	</header>

	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Usia</th>
				<th>Email</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM test";
			$query = mysqli_query($db, $sql);

			$counter = 1;
			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$counter."</td>";
				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['usia']."</td>";
				echo "<td>".$siswa['email']."</td>";

				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";

				echo "</tr>";

				$counter++;
			}
			?>

		</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
