<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($kode_barang, $nama, $stok, $harga)
{
   
    $sql = "INSERT INTO service_komputer (kode_barang, nama, stok, harga) VALUES ('$kode_barang', '$nama',
    '$stok', '$harga')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM service_komputer";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM service_komputer WHERE kode_barang='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kode_barang, $nama, $stok, $harga)
    {
    $sql = "UPDATE service_komputer SET nama='$nama', stok='$stok', harga='$harga' WHERE kode_barang='$kode_barang'";
    $this->conn->query($sql);
    }
    public function delete($kode_barang)
    {
    $sql = "DELETE FROM service_komputer WHERE kode_barang='$kode_barang'";
    $this->conn->query($sql);
    }
    }
    