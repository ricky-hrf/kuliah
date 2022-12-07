<?php

$conn = mysqli_connect('localhost', 'root', '', 'semester5');

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  global $conn;
  $judul = htmlspecialchars($data["judul"]);
  $gambar = htmlspecialchars($data["gambar"]);
  $pengarang = htmlspecialchars($data["pengarang"]);
  //query tambah data
  $query = "INSERT INTO buku VALUES
  (
    '', '$judul','$gambar','$pengarang')";
  //memasukkan ke dalam database
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id=$id");

  return mysqli_affected_rows($conn);
}
