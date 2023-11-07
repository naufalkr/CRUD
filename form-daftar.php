<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 200px;
        }

        header {
            text-align: center;
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
        <h3>Formulir</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap" />

            <label for="usia">Usia:</label>
            <input type="text" name="usia" placeholder="Masukkan Usia" />

            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Masukkan Email" />

            <input type="submit" value="Submit" name="daftar" />
        </fieldset>

    </form>
</body>
</html>
