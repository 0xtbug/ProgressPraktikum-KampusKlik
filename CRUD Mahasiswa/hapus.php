<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($koneksi));

if($query){
    header("location: form3.php");
}else{
    header("location: form3.php");
}
?>
