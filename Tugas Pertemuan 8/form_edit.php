<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_data']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id_data'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data WHERE id_data=$id";
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
    <title>Formulir Edit Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Mahasiswa</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_data" value="<?php echo $siswa['id_data'] ?>" />

        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="nim" value="<?php echo $siswa['nim'] ?>" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="telepon">Telepon: </label>
            <input type="text" name="telepon" placeholder="telepon" value="<?php echo $siswa['telepon'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>