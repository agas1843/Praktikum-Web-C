<?php

include("config.php");

if( isset($_GET['id_data']) ){

    // ambil id dari query string
    $id = $_GET['id_data'];

    // buat query hapus
    $sql = "DELETE FROM data WHERE id_data=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>