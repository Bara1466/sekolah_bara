<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($konek,"delete from siswa1 where id='$id'");
header("location:index.php");
?>