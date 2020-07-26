<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SIGMAT PROJECT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <?php include 'header.php';
  ?>


  <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
         <p><h3>Jumlah Lantai Rumah Anda</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="form-group ">
                <label>Panjang Tanah</label>
                <input class="form-control">
            </div>
            <div class="form-group ">
                <label>Lebar Tanah</label>
                <input class="form-control">
            </div>
             <div class="form-group">
                <label>Jalanan Depan Rumah</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Motor Saja
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                     1 Mobil
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    2 Mobil
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      > 3 Mobil
                  </label>
                </div>
              </div>
          </div>	
          
  <div class="col-md-6">
          <label>
          <input class="rad" type="radio" name="rad_tanah" value="1">
          <img src="img/pinggir.jpg" class="img-thumbnail" style="width:100%;">
          Pinggir Jalan Utama       </label>
        </div>
        <div class="col-md-6">
          <label>
          <input class="rad" type="radio" name="rad_tanah" value="2">
          <img src="img/hook.jpg" class="img-thumbnail" style="width:100%;">
          Hook Jalan Utama     </label>
        </div>
    <a href="perkiraan-biaya.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Back</a><span>
    <a href="perhitungan.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">next</a>

          </div>
        </div>


      </div>
    </section> 	 	



    <?php include "footer.php";
    ?>
  </footer>
</body>

</html>