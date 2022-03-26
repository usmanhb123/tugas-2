<?php
$id = $_GET['kode_barang']; include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Edit Data Barang</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">

  <h1>Edit Data Barang</h1></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Data barang <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./penjualan">Penjualan</a>
      </li>
    
    </ul>
   
  </div>
</nav>
<div class="container">
    <br><br>
<form action="proses.php" method="post">
<div class="form-group">

    <label>kode_barang</label>
    
    <input class="form-control" type="text" name="kode_barang" value="<?php echo $data->kode_barang ?>">
</div>

<div class="form-group">

    <label>Nama</label>
    
    <input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
</div>

<div class="form-group">

    <label>stok</label>
    
    <input class="form-control" type="text" name="stok" value="<?php echo $data->stok ?>">
</div>

<div class="form-group">

    <label>harga</label>
    
    <input class="form-control" type="text" name="harga" value="<?php echo $data->harga ?>">
</div>
<div class="text-right">

    <a href="index.php" class="btn btn-warning text-white">kembali</a>
    <button type="submit" name="submit_edit" class="btn btn-primary">Submit</button>
</div>
</form>  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>

</html>
