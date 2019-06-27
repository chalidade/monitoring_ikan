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
					    <?php
					    include "proses/koneksi.php";
					    $kolam = mysqli_query($connect, "SELECT * FROM `kolam` ORDER BY `kolam`.`no` DESC");
					    while ($data = mysqli_fetch_array($kolam)) {
					      $no       = $data['no'];
					      $masuk    = $data['ikan_masuk'];
					      $mati     = $data['ikan_mati'];
					      $terjual  = $data['ikan_terjual'];
					      $total    = $data['total_ikan'];
					      $permati  = ($mati/$total)*100;
					      $perjual  = ($terjual/$total)*100;
					     ?>
					    <h4 style="margin:10px;text-align:center;;width:100%"><hr>Data <?php echo $data['nama']; ?></h4>
					    <canvas id="pie-chart<?php echo $no; ?>" width="800" height="450"></canvas>
					    <p style="text-align:center;font-size:12px;color:#000"> <br>Berdasarkan data, total ikan dalam kolam saat pertamakali masuk <?php echo $masuk; ?> ekor, mati <?php echo $mati; ?> ekor, terjual <?php echo $terjual; ?> ekor, total ikan dalam kolam saat ini <?php echo $total; ?> ekor</p>
							<script src="js/Chart.js"></script>
					    <script type="text/javascript">
					    var a = <?php echo $permati; ?>;
					    var b = <?php echo $perjual; ?>;
					    var c = <?php echo $total; ?>;
					    new Chart(document.getElementById("pie-chart<?php echo $no; ?>"), {
					    type: 'pie',
					    data: {
					      labels: ["Ikan Mati", "Ikan Terjual", "Ikan Hidup"],
					      datasets: [{
					        label: "Sertifikasi Alat",
					        backgroundColor: ["#0bb84e", "#d7d205", "#ee2828"],
					        data: [a,b,c]
					      }]
					    },
					    options: {
					      title: {
					        display: false,
					        text: 'Sertifikasi Alat'
					      }
					    }
					    });
					    </script>
					  <?php  } ?>
					<script src="js/vendor/bootstrap.min.js"></script>
					</div>
					</div>
				</div>
			</section>
		<?php include "footer.php"; ?>
