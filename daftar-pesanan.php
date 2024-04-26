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

    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->

        <div class="container-fluid">
            <a class="nav-link" href="index.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="form-pemesanan.php">Pendaftaran Paket
                        Wisata</a>
                    <a class="navbar-brand" href="daftar-pesanan.php">Daftar Pesanan</a>

                </div>
            </div>
    </nav>

    <main class="container border">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="row">
                    <h1>Daftar Pesanan Paket Wisata</h1>

                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Tanggal</th>
                            <th>Durasi</th>
                            <th>Harga Paket</th>
                            <th>Penginapan</th>
                            <th>Transportasi</th>
                            <th>Makanan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        include "include/koneksi.php";
                        $sql = "select * from pemesanan";
                        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
                        $no = 1;
                        while ($data=mysqli_fetch_array($que)) 
                        { ?>

                        <tr>
                            <td><?=$no;?></td>
                            <td><?=$data['nama'];?></td>
                            <td><?=$data['nohp'];?></td>
                            <td><?=$data['tanggal'];?></td>
                            <td><?=$data['durasi'];?></td>
                            <td><?=$data['hargapaket'];?></td>
                            <td><?=$data['penginapan'];?></td>
                            <td><?=$data['transportasi'];?></td>
                            <td><?=$data['makanan'];?></td>
                            <td><?=$data['jumlah'];?></td>
                            <td><a href="ubah-data.php?id=<?=$data['id']; ?>" class="btn btn-primary">ubah</a><a
                                    href="hapus-data.php?id=<?=$data['id']; ?>" class="btn btn-danger">hapus</a></td>
                        </tr>
                        <?php
                            $no++;
                        }
                            ?>

                    </table>





                </div>
            </div>
            <!-- <div class="col-md-4 mt-5">

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
            </div> -->
        </div>
    </main>

    <footer class="container bg-primary text-white mt-5">
        <div class="row">
            <div class="col-12 py-4">&copy; <?php echo date("Y");?> TOT Web Dasar</div>
        </div>
    </footer>
</body>

</html>