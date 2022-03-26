<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($pembeli, $kode_barang, $jumlah)
{
    $total_belanja = 0;
    $aa = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";

    $bind = $this->conn->query($aa); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) 
    {
        $total_belanja = $baris[0]->harga * $jumlah;
        $stok_baru = $baris[0]->stok-$jumlah;
        $barang = $baris[0]->nama;
        $dda = "UPDATE data_barang SET  stok='$stok_baru' WHERE kode_barang='$kode_barang'";
        $this->conn->query($dda);
    }else{
        echo "<center>
        <h1>Data Barang tidak ditemukan!</h1><br>
        <a href='./index.php'>Kembali</a>
        </center>
        ";
        die;
    }
    
    $sql = "INSERT INTO data_penjualan (kode_penjualan, pembeli, kode_barang, nama_barang, jumlah, total_belanja) VALUES ('', '$pembeli',
    '$kode_barang','$barang', '$jumlah', '$total_belanja')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM data_penjualan";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM data_penjualan WHERE kode_penjualan='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kode_penjualan, $pembeli, $kode_barang, $jumlah)
    {
        $aa = "SELECT * FROM data_barang WHERE kode_barang='$kode_barang'";

        $bind = $this->conn->query($aa); 
        while ($obj = $bind->fetch_object()) {
        $baris[] = $obj;
        }

        $pp = "SELECT * FROM data_penjualan WHERE kode_penjualan='$kode_penjualan'";
        
        $bind = $this->conn->query($pp); 
        while ($obja = $bind->fetch_object()) {
        $p[] = $obja;
        }
       


        $jumlahawal = $baris[0]->stok+$p[0]->jumlah;
        $jumlah_baru = $jumlahawal-$jumlah;
        $total_belanja =  $baris[0]->harga*$jumlah;
        // var_dump($baris);
        $dda = "UPDATE data_barang SET stok='$jumlah_baru' WHERE kode_barang='$kode_barang'";
        $this->conn->query($dda);

        $jhgkhjg = "UPDATE data_penjualan SET pembeli='$pembeli', jumlah='$jumlah',
        total_belanja='$total_belanja'
        WHERE kode_penjualan='$kode_penjualan'";
     
      
        $this->conn->query($jhgkhjg);
    }
    public function delete($kode_penjualan)
    {
    $sql = "DELETE FROM data_penjualan WHERE kode_penjualan='$kode_penjualan'";
    $this->conn->query($sql);
    }
    }
    