<?php

include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM admin WHERE Username = '$id'");

header("location:Admin.php");

?>