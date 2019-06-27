<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <h3>KOLAM IKAN</h3>
        <p>Data ikan dalam kolam</p>
      </div>
    </div>
    <div class="row" style="margin-top:10px; padding:10px;font-size:12px;">
      <div class="col-md-12">
      <table class="table" width="100%">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah Ikan</th>
        </tr>
        <?php
        include "proses/koneksi.php";
         $no    = 1;
         $kolam = mysqli_query($connect, "SELECT * FROM `kolam` ORDER BY `kolam`.`no` DESC");
         while ($data = mysqli_fetch_array($kolam)) {
        ?>
        <tr>
          <td><?php echo $no;$no++; ?></td>
          <td>
            <a data-toggle="modal" data-target="#myModal<?php echo $data['no']; ?>"><?php echo $data['nama']; ?></a>
            <div class="modal fade" id="myModal<?php echo $data['no']; ?>" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail Kolam</h4>
                </div>
                <div class="modal-body">
                  <table width="100%">
                    <tr>
                      <td width="40%">Nama </td>
                      <td>: <?php echo $data['nama']; ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Tanggal </td>
                      <td>: <?php echo $data['tanggal']; ?></td>
                    </tr>
                    <tr>
                      <td>Ikan Masuk</td>
                      <td>: <?php echo $data['ikan_masuk']; ?> ekor</td>
                    </tr>
                    <tr>
                      <td>Ikan Mati</td>
                      <td>: <?php echo $data['ikan_mati']; ?> ekor</td>
                    </tr>
                    <tr>
                      <td>Ikan Terjual</td>
                      <td>: <?php echo $data['ikan_terjual']; ?> ekor</td>
                    </tr>
                    <tr>
                      <td>Total Ikan </td>
                      <td>: <?php echo $data['total_ikan']; ?> ekor</td>
                    </tr>
                  </table>
                  <hr>
                  <form action="proses/kolam.php?id=ubahdata&data=<?php echo $data['no']; ?>" method="post">
                  <table width="100%">
                    <tr>
                      <td colspan="2"><h5><b style="color:#000">Tambah Data</b></h5><hr></td>
                    </tr>
                    <tr>
                      <td width="40%">Ikan Baru </td>
                      <td>
                        <input type="text" class="form-control" name="baru" value="">
                        <input type="hidden" name="total" value="<?php echo $data['total_ikan']; ?> ">
                       </td>
                    </tr>
                    <tr>
                      <td width="40%">Ikan Mati </td>
                      <td><input type="text" class="form-control" name="mati" value=""> </td>
                    </tr>
                    <tr>
                      <td>Ikan Terjual</td>
                      <td><input type="text" class="form-control" name="terjual" value=""> </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                      <input type="submit" style="width:100%" class="btn btn-primary" value="Simpan Data">
                      <a href="proses/kolam.php?id=hapus&data=<?php echo $data['no']; ?>" class="btn btn-danger" style="margin-top:10px;width:100%">Hapus</a>
                      </td>
                    </tr>
                  </table>
                </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
            </div>
          </td>
          <td><?php echo $data['total_ikan']; ?></td>
        </tr>
      <?php } ?>
      </table>
    </div>
    <div class="col-md-12" style="margin-top:20px">
      <button type="button" data-toggle="modal" data-target="#adduser" class="btn btn-success" name="button" style="width:100%">Tambah Kolam</button>
    </div>
    </div>
  </div>

  <div class="modal fade" id="adduser" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kolam</h4>
        </div>
        <form class="" action="proses/kolam.php?id=tambah" method="post">
        <div class="modal-body">
          <table>
            <tr>
              <td width="40%">Nama </td>
              <td><input type="text" name="nama" class="form-control"></td>
            </tr>
            <tr>
              <td>Jumlah Ikan</td>
              <td><input type="text" name="jumlah" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>
                <input type="text" disabled value="<?php echo date('d/m/Y'); ?>" class="form-control">
                <input type="hidden" name="tanggal" value="<?php echo date('d/m/Y'); ?>" class="form-control">
              </td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" style="width:100%">Simpan</button>
        </div>
      </form>
      </div>
    </div>
    </div>
</div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
