<?php
include 'include/koneksi.php';
if (isset($_GET['id'])) {
    $query = "SELECT * FROM pemesanan WHERE id = '$_GET[id]'";
    $data  = mysqli_query($sambungan, $query);
	$baris = mysqli_fetch_array($data);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata Lampung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
    function add() {
        var a, b, c, d, e, f, g, h; //membuat variabel
        a = Number(document.getElementById("durasi").value); //menangkap input angka pertama
        b = Number(document.getElementById("peserta").value); //menangkap input angka kedua
        d = Number(document.getElementById("penginapan").value); //menangkap input angka kedua
        e = Number(document.getElementById("transfortasi").value); //menangkap input angka kedua
        f = Number(document.getElementById("makan").value); //menangkap input angka kedua
        g = Number(document.getElementById("hargapaket").value); //menangkap input angka kedua

        h = d + e + f + g;
        c = (a * b) * h; //melakukan penjumlahan

        document.getElementById("jumlah").value = c;
    }
    </script>




</head>

<body>
    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Pariwisata Lampung</h1>
                <p class="lead">Wonderful Indonesia</p>
            </div>
        </div>
    </header>

    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="nav-link" href="index.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand" aria-current="page" href="form-pemesanan.php">Pendaftaran Paket
                        Wisata</a>
                    <a class="nav-link" href="daftar-pesanan.php">Daftar Pesanan</a>

                </div>
            </div>
    </nav>

    <main class="container border">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="row">
                    <h1>Form Pemesanan Paket Wisata</h1>
                    <form action="update-pesanan.php" method="post">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="namapemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="namapemesan" name="nama"
                                    value="<?=$baris['nama'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="nomorhp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" id="nomorhp" name="nohp"
                                    value="<?=$baris['nohp'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpemesanan" class="form-label">Tanggal Pemesananan</label>
                                <input type="date" class="form-control" id="tanggalpemesanan" name="tanggal"
                                    value="<?=$baris['tanggal'];?>">
                            </div>
                            Durasi Perjalanan
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" name="durasi" id="durasi"
                                    value="<?=$baris['durasi'];?>">
                                <span class="input-group-text" id="basic-addon2">hari</span>
                            </div>

                            Jumlah Peserta
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2" name="peserta" id="peserta"
                                    value="<?=$baris['peserta'];?>">
                                <span class="input-group-text" id="basic-addon2">Orang</span>
                            </div>

                            <div class="mb-3">
                                <label for="pelayananpaket" class="form-label">Pelayanan Paket
                                    Perjalanan</label><br>
                                Penginapan
                                <div class="input-group mb-3">

                                    <input class="form-control" type="text" name="penginapan" id="penginapan"
                                        value="<?=$baris['penginapan'];?>">

                                </div>
                                Tranportasi
                                <div class="input-group mb-3">

                                    <input class="form-control" type="text" name="transportasi" id="transfortasi"
                                        value="<?=$baris['transportasi'];?>">
                                </div>
                                Makan
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="makanan" id="makan"
                                        value="<?=$baris['makanan'];?>">

                                </div>
                                Harga Paket
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="text" class="form-control" aria-label="Username"
                                        aria-describedby="basic-addon1" name="hargapaket" id="hargapaket"
                                        value="<?=$baris['hargapaket'];?>">
                                </div>

                                Jumlah Tagihan
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="text" class="form-control" aria-label="Username"
                                        aria-describedby="basic-addon1" name="jumlah" id="jumlah"
                                        value="<?=$baris['jumlah'];?>">
                                </div>

                            </div>

                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <input type="button" onclick="add()" class="btn btn-info" value="Hitung">
                            <input type="reset" class="btn btn-danger" value="Reset">

                        </div>


                    </form>

                </div>
            </div>
            <div class="col-md-4 mt-5">

                <div class="card  m-auto mb-3" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 1</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 2</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 3</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 4</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 5</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
                <div class="card  m-auto" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title">Paket wisata 6</h5>
                        <iframe width="250" height="115" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4">&copy; <?php echo date("Y");?> TOT Web Dasar</div>
        </div>
    </footer>


</body>



</html>