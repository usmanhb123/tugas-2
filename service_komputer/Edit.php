<?php
$id = $_GET['kode_barang']; include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
<title>Edit Data Barang</title>
</head>

<body>
<h1>Edit Data Barang</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>kode_barang</label>
<br>
<input type="text" name="kode_barang" value="<?php echo $data->kode_barang ?>">
<br>
<label>Nama</label>
<br>
<input type="text" name="nama" value="<?php echo $data->nama ?>">
<br>
<label>stok</label>
<br>
<input type="text" name="stok" value="<?php echo $data->stok ?>">
<br>
<label>harga</label>
<br>
<input type="text" name="harga" value="<?php echo $data->harga ?>">

<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>

</html>
