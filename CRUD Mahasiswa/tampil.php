<?php
include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

// $result = mysqli_fetch_assoc($result);
// var_dump($result);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '%$cari%' 
    OR npm LIKE '%$cari%'");
}
?>
