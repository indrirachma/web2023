<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<form class="container mt-5" method="post">
    <h1>Form Belanja Online</h1>
    <div class="form-group row">
        <label for="customer" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
            <input id="jumlah" name="jumlah" type="number" min="1" required="required" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'];
    $jenisProduk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $harga = 0;

    if ($jenisProduk == "TV") {
        $harga = 4200000 * $jumlah;
    } elseif ($jenisProduk == "KULKAS") {
        $harga = 3100000 * $jumlah;
    } elseif ($jenisProduk == "MESIN CUCI") {
        $harga = 3800000 * $jumlah;
    }
    
    echo "Nama Pembeli: $customer <br/>";
    echo "Jenis Produk: $jenisProduk <br/>";
    echo "Jumlah Barang: $jumlah <br/>";
    echo "Harga Barang: Rp " . number_format($harga, 0, ',', '.');
}
?>
</body>
</html>