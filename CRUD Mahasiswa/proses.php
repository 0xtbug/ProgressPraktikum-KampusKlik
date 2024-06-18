<?php
include "koneksi.php";

if(isset($_POST["proses"])){
    $nama_mhs = $_POST['input1'];
    $prodi_mhs = $_POST['input2'];
    $npm = $_POST['npm'];
    $perulangan = $_POST['ulangi'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, npm, prodi_mhs) VALUES ('$nama_mhs', '$npm', '$prodi_mhs')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';
    
    if($proses){
        echo "<script>alert('sukses')</script>";
        header("location: form3.php");
        } else {
        echo "<script>alert('gagal')</script>";
        header("location: form3.php");
    }
}
?>
