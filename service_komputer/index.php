<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
<title>Data Barang</title>
</head>

<body>
<div>
<h1>Data Barang</h1>
<a href="create.php">Tambah Data</a>
<br>
<a href="print.php" target="_blank">Cetak Data</a>
<br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>Kode Barang</th>
<th>Nama</th>
<th>Stok</th>
<th>Harga</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data(); if (!empty($result)) {
foreach ($result as $data) : ?>
<tr>
<td><?= $index++ ?></td>
<td><?= $data->kode_barang ?></td>
<td><?= $data->nama ?></td>
<td><?= $data->stok ?></td>
<td><?= $data->harga ?></td>
<td>
<a name="edit" id="edit" href="edit.php?kode_barang=<?= $data->kode_barang ?>">Edit</a>
<a name="hapus" id="hapus" href="proses.php?kode_barang=<?= $data->kode_barang ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Belum ada data barang.</td>
</tr>
 
<?php } ?>
</tbody>
</table>
</div>
</body>

</html>
