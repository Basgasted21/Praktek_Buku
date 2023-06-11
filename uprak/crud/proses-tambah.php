<?php

include("config.php");

if (isset($_POST['daftar'])) {
    $category = $_POST['kategori'];
    $isbn_number = $_POST['no_isbn'];
    $title_book = $_POST['judul_buku'];
    $author = $_POST['pengarang'];
    $publication_year = $_POST['tahun_terbit'];
    $publisher = $_POST['penerbit'];


    $sql = "INSERT INTO ukk_buku(kategori, no_isbn, judul_buku, pengarang, tahun_terbit, penerbit) VALUES ('$category', '$isbn_number', '$title_book', '$author', '$publication_year', '$publisher')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
        exit; // Stop further execution after redirect
    } else {
        header('Location: index.php?status=gagal');
        exit; // Stop further execution after redirect
    }
} else {
    die("Gagal terhubung dengan situs...");
}

?>
