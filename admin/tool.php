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
      <h3>Monitoring Kolam</h3>
      <p> Data Berdasarkan Sensor</p>
    </div>
  </div>
  <div class="row" style="margin-top:0px; padding:10px;font-size:12pxtext-align:center;">
      <h4 style="margin:10px;width:100%;text-align:center;">Level Air</h4>
      <p style="text-align:center;width:100%;color:#242424;font-size:12px;">Status : Aman</p>
      <canvas id="pie-chart" width="800" height="450"></canvas>
      <h4 style="margin:10px;width:100%;text-align:center;"><hr>Suhu Air</h4>
      <p style="text-align:center;width:100%;color:#242424;font-size:12px;">Status : Aman</p>
      <canvas id="pie-chart1" width="800" height="450"></canvas>
      <h4 style="margin:10px;width:100%;text-align:center;"><hr>Ph</h4>
      <p style="text-align:center;width:100%;color:#242424;font-size:12px;">Status : Aman</p>
      <canvas id="pie-chart2" width="800" height="450"></canvas>
      <h4 style="margin:10px;width:100%;text-align:center;"><hr>Kekeruan</h4>
      <p style="text-align:center;width:100%;color:#242424;font-size:12px;">Status : Aman</p>
      <canvas id="pie-chart3" width="800" height="450"></canvas>
  </div>
  <script src="js/Chart.js"></script>
  <script type="text/javascript">
  new Chart(document.getElementById("pie-chart"), {
  type: 'line',
  data: {
    labels: ["a", "b", "c", "d", "e", "f", "g"],
    datasets: [{
      backgroundColor: ["#0bb84e"],
      data: [85,5,10,30,40,50,10]
    }]
  },
  options: {
    title: {
      display: false,
      text: 'Sertifikasi Al at'
    }
  }
  });

  new Chart(document.getElementById("pie-chart1"), {
    type: 'line',
    data: {
      labels: ["a", "b", "c", "d", "e", "f", "g"],
      datasets: [{
        backgroundColor: ["#2e84ff"],
        data: [85,5,10,30,40,50,10]
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Sertifikasi Al at'
      }
    }
  });

  new Chart(document.getElementById("pie-chart2"), {
    type: 'line',
    data: {
      labels: ["a", "b", "c", "d", "e", "f", "g"],
      datasets: [{
        backgroundColor: ["#ffb933"],
        data: [85,5,10,30,40,50,10]
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Sertifikasi Al at'
      }
    }
  });

  new Chart(document.getElementById("pie-chart3"), {
    type: 'line',
    data: {
      labels: ["a", "b", "c", "d", "e", "f", "g"],
      datasets: [{
        backgroundColor: ["#fd2446"],
        data: [85,5,10,30,40,50,10]
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Sertifikasi Al at'
      }
    }
  });
  </script>
  </div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
</html>
