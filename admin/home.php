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
    <div class="col-md-8 header-text">
      <h3>Home</h3>
      <p> Overview </p>
    </div>
  </div>
  <div class="row" style="margin-top:0px; padding:10px">
    <h4 style="margin:10px;text-align:center;;width:100%"><hr>Data Ikan Kolam 1</h4>
    <canvas id="pie-chart" width="800" height="450"></canvas>
    <p style="text-align:center;font-size:12px;color:#000"> <br>Berdasarkan data, total ikan dalam kolam saat pertamakali masuk 100 ekor, mati 10 ekor, terjual 10 ekor, total ikan dalam kolam saat ini 80 ekor</p>
    <h4 style="margin:10px;text-align:center;;width:100%"><hr>Data Ikan Kolam 1</h4>
    <canvas id="pie-chart1" width="800" height="450"></canvas>
    <p style="text-align:center;font-size:12px;color:#000"> <br>Berdasarkan data, total ikan dalam kolam saat pertamakali masuk 100 ekor, mati 10 ekor, terjual 10 ekor, total ikan dalam kolam saat ini 80 ekor</p>
    </div>
</div>
</body>
<script src="js/Chart.js"></script>
<script type="text/javascript">
new Chart(document.getElementById("pie-chart"), {
type: 'pie',
data: {
  labels: ["Aktif", "Warning", "Kadaluarsa"],
  datasets: [{
    label: "Sertifikasi Alat",
    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
    data: [85,5,10]
  }]
},
options: {
  title: {
    display: false,
    text: 'Sertifikasi Alat'
  }
}
});

new Chart(document.getElementById("pie-chart1"), {
type: 'pie',
data: {
  labels: ["Aktif", "Warning", "Kadaluarsa"],
  datasets: [{
    label: "Sertifikasi SDM",
    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
    data: [60,30,10]
  }]
},
options: {
  title: {
    display: false,
    text: 'Sertifikasi SDM'
  }
}
});
</script>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
