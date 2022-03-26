<!doctype html>
<html lang="en">

<head>
<title>Tambah Barang</title>
</head>

<body>
<h1>Tambah</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>kode_barang</label>
<br>
<input type="text" name="kode_barang">
<br>
<label>nama</label>
<br>
<input type="text" name="nama">
<br>
<label>stok</label>
<br>
<input type="number" name="stok">
<br>
<label>harga</label>
<br>
<input type="number" name="harga">
<br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>

</html>
