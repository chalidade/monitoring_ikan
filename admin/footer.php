<div class="sticky">
  <hr>
  <div class="row" style="padding-left:10px;padding-top:10px;margin-top:-10px;text-align:center;background:#242424;">
    <div class="col-3">
      <img id="home" src="img/pie-chart.png" alt="" style="width:35px;margin-left: -2px;">
      <font style="font-weight:600;color:#fff;font-size:10px">Dashboard</font>
    </div>
    <div class="col-3">
       <img id="user" src="img/goldfish.png" alt="" style="width:35px">
       <font style="font-weight:600;color:#fff;font-size:10px">Kolam</font>
    </div>
    <div class="col-3">
      <img id="tool" src="img/thermometer.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#fff;font-size:10px">Monitoring</font>
    </div>
    <div class="col-3">
      <a href="../index.php">
      <img src="img/logout.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#fff;font-size:10px">Logout</font>
      </a>
    </div>
  </div>
</div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script type="text/javascript">
    var mySwiper = new Swiper ('.swiper-container');
    </script>
    <script>
    $(document).ready(function(){
      $("#home").click(function(){
          $("#div1").load("home.php");
      });
    });
    $(document).ready(function(){
      $("#user").click(function(){
          $("#div1").load("user.php");
      });
    });
    $(document).ready(function(){
      $("#tool").click(function(){
          $("#div1").load("tool.php");
      });
    });
    $(document).ready(function(){
      $("#sdm").click(function(){
          $("#div1").load("sdm.php");
      });
    });
    $(document).ready(function(){
      $("#jadwal").click(function(){
          $("#div1").load("jadwal.php");
      });
    });
    </script>
  </body>
</html>
