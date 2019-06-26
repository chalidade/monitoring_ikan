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
        <tr>
          <td>1</td>
          <td><a data-toggle="modal" data-target="#myModal">Kolam 1</a></td>
          <td>100 ekor</td>
        </tr>
        <tr>
          <td>2</td>
          <td><a data-toggle="modal" data-target="#myModal">Kolam 2</a></td>
          <td>150 ekor</td>
        </tr>
      </table>
    </div>
    <div class="col-md-12" style="margin-top:20px">
      <button type="button" data-toggle="modal" data-target="#adduser" class="btn btn-success" name="button" style="width:100%">Tambah Kolam</button>
    </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
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
            <td>: Kolam 1</td>
          </tr>
          <tr>
            <td>Ikan Masuk</td>
            <td>: 100 ekor</td>
          </tr>
          <tr>
            <td>Ikan Mati</td>
            <td>: 10 ekor</td>
          </tr>
          <tr>
            <td>Ikan Terjual</td>
            <td>: 10 ekor</td>
          </tr>
          <tr>
            <td>Total Ikan </td>
            <td>: 80 ekor</td>
          </tr>
        </table>
        <hr>
        <table width="100%">
          <tr>
            <td colspan="2"><h5><b style="color:#000">Tambah Data</b></h5><hr></td>
          </tr>
          <tr>
            <td width="40%">Ikan Baru </td>
            <td><input type="text" class="form-control" name="baru" value=""> </td>
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
            <td colspan="2"><br><input type="submit" style="width:100%" class="btn btn-primary" value="Simpan Data"> </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
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
              <td><input type="text" disabled name="tanggal" value="<?php echo date('d/m/Y'); ?>" class="form-control"></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal" style="width:100%">Simpan</button>
        </div>
      </div>
    </div>
    </div>
</div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
