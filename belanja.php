<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Form Belanja</title>
  </head>
  <body style="background-color:white;">

        <div>
            <div>
           <body>
        <div>
        <div>
        <h5>Belanja Online</h5>
            <div>
            <form method="post" action="belanja.php" autocomplete="off">
                <div>
                    <label>Pelanggan</label> 
                    <div>
                    <input id="customer" name="customer" placeholder="Nama Pelanggan" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div>
                    <label>Barang</label> 
                    <div>
                    <div">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div>
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div>
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div>
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div>
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div>
                    <div>
                    <button name="submit" type="submit">Kirim</button>
                    </div>
                </div>
            </form>
            </div>
            <div>
                <table>
                    <tr>
                        <td>Harga</td>
                    </tr>
                    <tr>
                        <td>TV: 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas: 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci: 3.800.000</td>
                    </tr>
                    <tr>
                        <td>HARGA DAPAT BERUBAH SETIAP SAAT</td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
    error_reporting(0);
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $kirim = $_POST['kirim'];

    if ($produk == 'TV') {
        $total = $jumlah * 4200000;
    }
    elseif ($produk == 'Kulkas') {
        $total = $jumlah * 3100000;
    }
    elseif ($produk == 'Mesin Cuci') {
        $total = $jumlah * 3800000;
    }
    ?>

        <div>
            <div>
                <table>
                    <tr>
                        <td>Pelanggan</td>
                        <td>:</td>
                        <td><?php echo $customer; ?></td>
                    </tr>
                    <tr>
                        <td>Barang</td>
                        <td style="padding-right:3em;">:</td>
                        <td><?php echo $produk; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td><?php echo $jumlah; ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo number_format($total,2,',','.'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>