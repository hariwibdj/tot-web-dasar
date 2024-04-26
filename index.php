<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata Lampung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css" />

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

    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Pendaftaran Paket Wisata</a>
                    <a class="nav-link" href="#">Daftar Pesanan</a>

                </div>
            </div>
    </nav>

    <main class="container border">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="row">

                    <?php
                        include "include/koneksi.php";
                        $sql = "select * from destination";
                        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
                        while ($data=mysqli_fetch_array($que)) 
                        { ?>

                    <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="<?php echo " images/".$data['foto']; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?=$data['nama']; ?></h5>
                            <p class="card-text">
                                <?=$data['deskripsi'];?>
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div>

                    <?php 
                        }
                    ?>





                    <!-- <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="images/pantai-mutun.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata 2</h5>
                            <p class="card-text">
                                Pantai Mutun
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                    <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="images/pantai-sari-ringgung.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata 3</h5>
                            <p class="card-text">
                                Pantai Sari Ringgung
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                    <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="images/wisata-pulu-pahawang.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata 4</h5>
                            <p class="card-text">
                                Pulau Pahawang
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                    <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="images/lembah-hijau-lampung.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata 5</h5>
                            <p class="card-text">
                                Lembah Hijau
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                    <div class="card mb-5 m-auto" style="width: 18rem">
                        <img src="images/Tanjung-putus-island.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Paket Wisata 6</h5>
                            <p class="card-text">
                                Tanjung Putus Island
                            </p>
                            <a href="#" class="btn btn-primary">Booking</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <?php 
                        $sql1 = "select * from destination";
                        $que1 = mysqli_query($sambungan, $sql1);//eksekusi perintah $sql
                        while ($data=mysqli_fetch_array($que1)) 
                        { ?>

                <div class="card  m-auto mb-3" style="width: 18rem">

                    <div class="card-body">
                        <h5 class="card-title"><?=$data['nama']; ?></h5>
                        <iframe width="250" height="115" src="<?=$data['video'];?>">
                        </iframe>
                    </div>
                </div>
                <?php
                        }
                ?>
                <!-- <div class="card  m-auto" style="width: 18rem">

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
                </div> -->
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