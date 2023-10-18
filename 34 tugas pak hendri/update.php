<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kodebarang'];
$nama = $_POST['namabarang'];
$satuan = $_POST['satuanbarang'];
$stok = $_POST['stokbarang'];
$harga = $_POST['hargabarang'];
 
// update data ke database
mysqli_query($koneksi,"insert into tb_toko values('','$kode','$nama','$satuan','$stok','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");