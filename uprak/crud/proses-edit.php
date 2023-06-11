<?php

include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $category = $_POST['iKategori'];
    $isbn_number = $_POST['iNo_isbn'];
    $title_book = $_POST['iJudul_buku'];
    $author = $_POST['iPengarang'];
    $publication_year = $_POST['iTahun_terbit'];
    $publisher = $_POST['iPenerbit'];

    $sql = "UPDATE ukk_buku SET kategori='$category', no_isbn='$isbn_number', judul_buku='$title_book', pengarang='$author', tahun_terbit='$publication_year', penerbit='$publisher' WHERE id=$id";
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
