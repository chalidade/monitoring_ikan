<?php
  include "koneksi.php";

  $id       = $_REQUEST['id'];
  $data     = $_REQUEST['data'];

  if ($id == "tambah") {
    $nama     = $_POST['nama'];
    $jumlah   = $_POST['jumlah'];
    $tanggal  = $_POST['tanggal'];
    $insert = mysqli_query($connect, "INSERT INTO `kolam` (`no`, `nama`, `ikan_masuk`, `ikan_terjual`, `ikan_mati`, `total_ikan`, `tanggal`) VALUES (NULL, '$nama', '$jumlah', '0', '0', '$jumlah', '$tanggal');");
    echo "<script>alert('Data Kolam Ditambahkan');window.location = '../index.php';</script>";
  } else if($id == "ubahdata") {
    $baru     = $_POST['baru'];
    $mati     = $_POST['mati'];
    $terjual  = $_POST['terjual'];
    $total    = $_POST['total'];
    $terkini  = ($total+$baru)-($mati+$terjual);
    $update   = mysqli_query($connect, "UPDATE `kolam` SET `ikan_terjual` = '$terjual', `ikan_mati` = '$mati', `total_ikan` = '$terkini' WHERE `kolam`.`no` = '$data';");
    echo "<script>alert('Update Data = Ikan Mati : $mati | Terjual : $terjual | Terkini : $terkini ');window.location = '../index.php';</script>";
  } else if($id == "hapus") {
    $delete   = mysqli_query($connect, "DELETE FROM `kolam` WHERE `kolam`.`no` = $data");
    echo "<script>alert('Data Kolam Dihapus');window.location = '../index.php';</script>";
  }
 ?>
