<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Data Mahasiswa </h3>
    </header>

    <nav>
        <a href="form_daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id_data']."</td>";
            echo "<td>".$siswa['nim']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['telepon']."</td>";
            echo "<td>".$siswa['alamat']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id_data=".$siswa['id_data']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_data=".$siswa['id_data']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>