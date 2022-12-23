<?php
include_once("koneksi.php");
$name   = $_POST['name'];
$kategori    = $_POST['kategori'];
$kota    = $_POST['kota'];
$website   = $_POST['website'];
$instagram   = $_POST['instagram'];
$alamat   = $_POST['alamat'];
$provinsi   = $_POST['provinsi'];
$latitude   = $_POST['latitude'];
$longtitude   = $_POST['longtitude'];
$tambah = mysqli_query($koneksi, "INSERT INTO mixuepwt values ('','$name', '$kategori', '$kota', '$website', '$alamat', '$instagram', '$provinsi', '$longtitude', '$latitude')");
if ($tambah) {
  header("location:data.php");
} else {
  echo "gagal menambah data";
}
