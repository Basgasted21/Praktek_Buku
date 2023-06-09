<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-buku.php');
    exit();
}

$id = $_GET['id'];

// // Sanitize the input to prevent SQL injection
// $id = mysqli_real_escape_string($db, $id);

$sql = "SELECT * FROM ukk_buku WHERE id=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Tidak berhasil menemukan data...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Buku Baru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #AFD3E2;
        }
    </style>
</head>
<body>
    <header>
        <h3 class="text-center">Formulir Edit Buku</h3>
    </header>
    <div class="container">
        <form action="proses-edit.php" method="post">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
                <div class="mb-3">
                    <label for="iJudul" class="form-label mt-3">Judul Buku</label>
                    <input type="text" name="iJudul" class="form-control" placeholder="Judul buku..." value=" <?php echo $buku['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iKatergori" class="form-label mt-3">Kategori Buku</label>
                    <input type="text" name="iKategori" class="form-control" placeholder="Kategori buku..." value=" <?php echo $buku['kategori']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iNo_isbn" class="form-label mt-3">NO. ISBN Buku</label>
                    <input type="number" name="iNo_isbn" class="form-control" placeholder="NO. ISBN buku..." value=" <?php echo $buku['no_isbn']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iPengarang" class="form-label mt-3">Pengarang</label>
                    <input type="text" name="iPengarang" class="form-control" placeholder="Pengarang buku..." value=" <?php echo $buku['pengarang']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iPenerbit" class="form-label mt-3">Penerbit Buku</label>
                    <input type="text" name="iPenerbit" class="form-control" placeholder="Penerbit buku..." value=" <?php echo $buku['penerbit']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iTahun_terbit" class="form-label mt-3">Penerbit Buku</label>
                    <input type="number" name="iTahun_terbit" class="form-control" placeholder="Tahun terbit buku..." value=" <?php echo $buku['tahun_terbit']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                </div>
            </fieldset>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
