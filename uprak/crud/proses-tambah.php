<?php

include("config.php");

if (isset($_POST['daftar'])) {
    $title = $_POST['judul'];
    $category = $_POST['kategori'];
    $isbn_number = $_POST['no_isbn'];
    $author = $_POST['pengarang'];
    $publisher = $_POST['penerbit'];
    $publication_year = $_POST['tahun_terbit'];


    $sql = "INSERT INTO ukk_buku(judul, kategori, no_isbn, pengarang, penerbit, tahun_terbit) VALUES ('$title', '$category', '$isbn_number', '$author', '$publisher', '$publication_year')";
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
