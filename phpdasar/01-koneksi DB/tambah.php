<?php
//menghubungkan ke halaman functions
require 'functions.php';

//mengaktifkan tombol submit
if (isset($_POST["submit"])) {
  //menampilkan pesan data berhasil ditambah
  if (tambah($_POST) > 0) {
    echo "<script>
    document.location.href='index.php';
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
</head>

<body>
  <h3>Silahkan isi data baru di bawah!</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="judul">Judul</label></td>
        <td><input type="text" id="judul" name="judul" required></td>
      </tr>
      <tr>
        <td><label for="gambar">Gambar</label></td>
        <td><input type="text" id="gambar" name="gambar" required></td>
      </tr>
      <tr>
        <td><label for="pengarang">Pengarang</label></td>
        <td><input type="text" id="pengarang" name="pengarang" required></td>
      </tr>
      <tr>
        <td>
        </td>
        <td><button type="submit" name="submit">Simpan</button></td>
      </tr>
      <tr>
        <td>
        </td>
        <td><button type="submit" name="kembali"><a href="index.php">Kembali</a></button></td>
      </tr>
    </table>
  </form>

</body>

</html>