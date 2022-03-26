<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$model = new Model();
$model->insert($kode_barang, $nama, $stok, $harga); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
   
    $kode_barang = $_POST['kode_barang'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->update($kode_barang, $nama, $stok, $harga); header('location:index.php');
    }
    if (isset($_GET['kode_barang'])) {
    $id = $_GET['kode_barang'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }