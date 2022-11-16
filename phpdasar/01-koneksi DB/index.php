<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="asset/style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="nav">
    <label for="checkbox" class="logo">Kuliah Sore</label>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Materi Kuliah</a></li>
      <li><a href="#">Idola</a></li>
      <li><a href="#">Galeri</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Gambar</th>
        <th>Action</th>
        </th>

        <?php $i = 1;
        foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $bk['judul']; ?></td>
        <td><img src="asset/gambar/<?= $bk['gambar']; ?>" width="60" height="60"></td>
        <td><a href="detail.php?id=<?= $bk['id']; ?>">lihat detail</a></td>
      </tr>
    <?php endforeach; ?>

    </table>
  </div>
</body>

</html>