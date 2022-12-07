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
    <button><a href="tambah.php">Tambah data</a></button>
    <table cellpadding="30" cellspacing="20">


      <?php $i = 1;
      foreach ($buku as $bk) : ?>
        <tr>
          <td><?= $i++; ?>.</td>
          <td><a href="detail.php?id=<?= $bk['id']; ?>"><?= $bk['judul']; ?></a></td>
          <td><a href="detail.php?id=<?= $bk['id']; ?>"><img src="asset/gambar/<?= $bk['gambar']; ?>" width="60" height="60"></a></td>
        </tr>
      <?php endforeach; ?>

    </table>

  </div>
</body>

</html>