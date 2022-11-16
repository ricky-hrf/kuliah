<?php
require 'functions.php';
$id = $_GET['id'];

$bk = query("SELECT * FROM buku WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>
    Detail buku
  </h3>
  <ul>
    <li><img src="asset/gambar/<?= $bk['gambar']; ?>" width="100" height="100"></li>
    <li>Judul : <?= $bk['judul']; ?></li>
    <li>Pengarang : <?= $bk['pengarang']; ?></li>
    <LI><a href="">ubah</a> | <a href="">Hapus</a></LI>
    <a href="index.php">Kembali</a>

  </ul>
</body>

</html>