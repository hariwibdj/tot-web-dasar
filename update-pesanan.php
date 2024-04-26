<?php
include "include/koneksi.php";

$id = $_POST['id'];

$nama         = $_POST['nama'];
$nohp         = $_POST['nohp'];
$tanggal 	  = $_POST['tanggal'];
$durasi       = $_POST['durasi'];
$peserta      = $_POST['peserta'];
$penginapan   = $_POST['penginapan'];
$transportasi = $_POST['transportasi'];
$makan        = $_POST['makanan'];
$hargapaket   = $_POST['hargapaket'];
$jumlah       = $_POST['jumlah'];



$sql = "UPDATE tabel_biodata SET " ;
$update = mysqli_query($sambungan, $sql_insert);
if(!$update){
?>

<script type="text/javascript">
alert("periksa lagi isian data");
window.history.back();
</script>
<?php

}
else
{
?>
<script type="text/javascript">
alert("Data dengan nama = <?php echo $nama ; ?> Sudah Terupdate");
window.location.href = "daftar-pesanan.php";
</script>
<?php
}
?>