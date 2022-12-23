<?php
include 'koneksi.php';
$id_mixue = $_GET['id'];
$data = mysqli_query($koneksi, "select * from mixuepwt where id='$id_mixue'");
while ($d = mysqli_fetch_array($data)) {
?>
  <form method="POST" action="edit.php" enctype="multipart/form-data">
    <section class="base">
      <div>
        <label>Nama Mixue</label>
        <input type="text" name="name" value="<?php echo $d['name']; ?>" autofocus="" required="" />
      </div>
      <div>
        <label>Kategori</label>
        <input type="text" name="kategori" value="<?php echo $d['kategori']; ?>" />
      </div>
      <div>
        <label>Website</label>
        <input type="text" name="website" required="" value="<?php echo $d['website']; ?>" />
      </div>
      <div>
        <label>Instagram</label>
        <input type="text" name="instagram" required="" value="<?php echo $d['instagram']; ?>" />
      </div>
      <div>
        <label>Alamat</label>
        <input type="text" name="alamat" required="" value="<?php echo $d['alamat']; ?>" />
      </div>
      <div>
        <label>Kota</label>
        <input type="text" name="kota" required="" value="<?php echo $d['kota']; ?>" />
      </div>
      <div>
        <label>Provinsi</label>
        <input type="text" name="provinsi" required="" value="<?php echo $d['provinsi']; ?>" />
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
<?php
}
?>