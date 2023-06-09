<?php

include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $title = $_POST['iJudul'];
    $category = $_POST['iKategori'];
    $isbn_number = $_POST['iNo_isbn'];
    $author = $_POST['iPengarang'];
    $publisher = $_POST['iPenerbit'];
    $publication_year = $_POST['iTahun_terbit'];

    $sql = "UPDATE ukk_buku SET judul='$title', kategori='$category', no_isbn='$isbn_number', pengarang='$author', penerbit='$publisher', tahun_terbit='$publication_year' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-buku.php');
        exit();
    } else {
        die("Gagal memperbarui data...");
    }
} else {
    die("Gagal mengakses situs...");
}
?>
