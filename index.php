<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			text-align: center;
			padding: 20px;
		}

		h3 {
			margin: 0;
		}

		h1 {
			margin: 10px 0;
		}

		h4 {
			text-align: center;
		}

		nav ul {
			list-style-type: none;
			padding: 0;
		}

		nav ul li {
			margin-right: 20px;
			padding: 20px;
			text-align: center;
		}

		nav a {
			text-decoration: none;
			color: #5c5470;
			font-weight: bold;
		}

		nav a:hover {
			color: #352f44;
		}

		.status-message {
			text-align: center;
			margin: 20px 0;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
		}
	</style>
</head>

<body>
	<header>
		<h1>Homepage</h1>
	</header>

	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Lihat Pendaftar</a></li>
		</ul>
	</nav>

	<?php if(isset($_GET['status'])): ?>
		<div class="status-message">
			<?php
				if($_GET['status'] == 'sukses'){
					echo "Submit berhasil!";
				} else {
					echo "Submit gagal!";
				}
			?>
		</div>
	<?php endif; ?>
</body>
</html>
