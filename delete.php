<?php
include 'koneksi.php';

$query = "DELETE FROM mixuepwt WHERE id_mixue='" . $_GET["id"] . "'";
if (mysqli_query($koneksi, $query)) {
  echo "Records were deleted successfully.";
} else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($koneksi);
}

// Close connection
mysqli_close($koneksi);
