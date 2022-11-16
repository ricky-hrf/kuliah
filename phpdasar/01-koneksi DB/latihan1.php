<?php
$conn = mysqli_connect('localhost', 'root', '', 'semester5');
$result = mysqli_query($conn, "SELECT * FROM buku");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
$buku = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kuliah</title>
</head>

<body>
  <h1>Daftar Buku</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Judul Buku</th>
      <th>Gambar</th>
      <th>Nama Pengarang</th>
      <th>Action</th>
      </th>

      <?php $i = 1;
      foreach ($buku as $bk) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $bk['judul']; ?></td>
      <td><img src="asset/gambar/<?= $bk['gambar']; ?>" width="60" height="60"></td>
      <td><?= $bk['pengarang']; ?></td>
      <td><a href="">Edit</a> || <a href="">Hapus</a></td>
    </tr>
  <?php endforeach; ?>

  </table>
</body>

</html>