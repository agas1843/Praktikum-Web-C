<!DOCTYPE html>
<html>
<head>
    <title>Formulir Tambah Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Formulir Tambaha Data Mahasiswa</h3>
    </header>

    <form action="proses_pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="nim" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="telepon">No Telepon: </label>
            <input type="text" name="telepon" placeholder="no telepon" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <input type="submit" value="Tambah" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>