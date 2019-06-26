			<?php include "header.php"; ?>

			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
				<div id="div1">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-md-8 pb-10 header-text">
								<h3>Home</h3>
								<p> Overview </p>
							</div>
						</div>
						<div class="row" style="margin-top:0px; padding:10px">
							<h4 style="margin:10px;text-align:center;;width:100%"><hr>Data Ikan Kolam 1</h4>
					    <canvas id="pie-chart" width="800" height="450"></canvas>
							<p style="text-align:center;font-size:12px;color:#000"> <br>Berdasarkan data, total ikan dalam kolam saat pertamakali masuk 100 ekor, mati 10 ekor, terjual 10 ekor, total ikan dalam kolam saat ini 80 ekor</p>
							<h4 style="margin:10px;text-align:center;;width:100%"><hr>Data Ikan Kolam2</h4>
					    <canvas id="pie-chart1" width="800" height="450"></canvas>
							<p style="text-align:center;font-size:12px;color:#000"> <br> Berdasarkan data, total ikan dalam kolam saat pertamakali masuk 100 ekor, mati 10 ekor, terjual 10 ekor, total ikan dalam kolam saat ini 80 ekor</p>
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

					new Chart(document.getElementById("pie-chart2"), {
					type: 'pie',
					data: {
					  labels: ["Aktif", "Warning", "Kadaluarsa"],
					  datasets: [{
					    label: "Sertifikasi Lingkungan",
					    backgroundColor: ["#0bb84e", "#d7d205", "#d70505"],
					    data: [90,5,5]
					  }]
					},
					options: {
					  title: {
					    display: true,
					    text: 'Sertifikasi Lingkungan'
					  }
					}
					});
					</script>
					</div>
				</div>
			</section>
			<!-- End service Area -->
		<?php include "footer.php"; ?>
