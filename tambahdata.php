<?php
if (isset($_POST['submit'])) {
  $name   = $_POST['name'];
  $kategori    = $_POST['kategori'];
  $kota    = $_POST['kota'];
  $website   = $_POST['website'];
  $instagram   = $_POST['instagram'];
  $alamat   = $_POST['alamat'];
  $provinsi   = $_POST['provinsi'];
  $latitude   = $_POST['latitude'];
  $longtitude   = $_POST['longtitude'];

  if ($name && $kategori && $kota && $website && $instagram && $alamat && $provinsi && $longtitude && $latitude) {
    $sql = "insert into mixuepwt(name, kategori, kota, website, instagram, alamat, provinsi, latitude, longtitude) VALUES ('$name', '$kategori', '$kota', '$website', $alamat, $instagram, $provinsi, $longtitude, $latitude)";
    $Q = mysqli_query($koneksi, $sql);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/tambah.css" rel="stylesheet">
  <title>Tambah Data</title>
</head>

<body>
  <center>
    <h1>Tambah Data</h1>
    <h5>Kamu dapat menambah data pada form berikut</h5>
    <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
          <div>
            <label>Nama Mixue</label>
            <input type="text" name="name" autofocus="" required="" />
          </div>
          <div>
            <label>Kategori</label>
            <input type="text" name="kategori" />
          </div>
          <div>
            <label>Website</label>
            <input type="text" name="website" required="" />
          </div>
          <div>
            <label>Instagram</label>
            <input type="text" name="instagram" required="" />
          </div>
          <div>
            <label>Alamat</label>
            <input type="text" name="alamat" required="" />
          </div>
          <div>
            <label>Kota</label>
            <input type="text" name="kota" required="" />
          </div>
          <div>
            <label>Provinsi</label>
            <input type="text" name="provinsi" required="" />
          </div>
          <div>
            <label>Latitude</label>
            <input type="text" name="latitude" required="" />
          </div>
          <div>
            <label>Longtitude</label>
            <input type="text" name="longtitude" required="" />
          </div>
          <div>
            <button type="submit">Simpan</button>
          </div>
        </section>
      </form>
</body>

</html>