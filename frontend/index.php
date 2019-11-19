<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata Matim</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Nami Dou Pota</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <!-- <iframe width="100%" height="100px" src="https://www.youtube.com/embed/H1Oyi69eQcw" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        <img class="img-fluid mb-5 d-block mx-auto" src="img/logo.png" alt="">
        <h1 class="text-uppercase mb-0">Wisata Matim</h1>
        <hr class="star-light">
        <!-- <h2 class="font-weight-light mb-0">Mahasiswa</h2> -->
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <?php
          include "koneksi.php";
          $sql = mysqli_query($con, "SELECT * FROM tb_galeri");
          while($row = mysqli_fetch_array($sql)) {
          ?>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center te<xt-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/admin/images/<?php echo $row['foto']?>" alt="">
              <h1> <b><?php echo $row['judul_foto']?></b></h1>
              <p><?php echo $row['ket_foto']?></p>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <p class="lead">Kabupaten Manggarai timur lahir dari kesadaran dan cita-cita. Kesadaran akan fakta pembangunan yang belum maksimal dan cita-cita untuk mengubah keadaan, mendekatkan pelayanan kepada masyarakat serta pemerataan pembangunan. Kesadaran dan cita-cita itu menjadi aspirasi. Aspirasi menjadi wacana. Wacana menjadi gerakan bersama perjuangan untuk membentuk Kabupaten Manggarai Timur. Dalam rekam peristiwa, wacana pembentukkan Kabupaten Manggarai Timur telah digullirkan sejak 1986. Berbagai elemen masyarakat berjuang agar Kabupaten Manggarai dibagi menjadi tiga yakni Kabupaten Manggarai Barat, Manggarai Tengah dan Manggarai Timur. Wacana ini lahir dari kesadaran bahwa wilayah Manggarai terlalu luas. Jika dimekarkan, kualitas pelayanan publik akan lebih baik dan tepat sasaran.</p>

<p>Wacana Pembentukan Kabupaten Manggarai Timur terus diperjuangkan dan disuarakan, namun belum menjadi arus utama. Antara akhir dekade 1980-an hingga akhir dekade 1990-an, wacana itu seperti kehilangan momentum. Ada namun belum melonjak ke permukaan. Sekitar tahun 2000 wacana pembentukan Kabupaten Manggarai Timur kembali bergulir. Tonggaknya adalah pernyataan dukungan dari DPRD Kabupaten Manggarai terhadap usulan pemekaran Kabupaten Manggarai menjadi tiga kabupaten. Dukungan itu tertuang dalam pernyataan Nomor 1/Perny.DPRD/2000 tanggal 29 Mei 2000. Dukungan tersebut ditindaklanjuti melalui keputusan politik lembaga DPRD Manggarai Nomor 06/DPRD/2002 tanggal 10 Agustus 2002. Selama lima tahun, aspirasi ini timbul-tenggelam-mengendap namun hidup dalam hati masyarakat.</p>

<p>Sejak tahun 2005, dukungan terhadap pembentukan Manggarai Timur mendapatkan angin segar. Dimulai dengan surat usulan Bupati Manggarai Nomor Pem. 135/22/I/2006, Keputusan DPRD Kabupaten Manggarai Nomor 03/DPRD/2006 tanggal 4 Februari 2006, Keputusan Nomor 04/DPRD/2006 tanggal tanggal 15 Februari 2006 dan Keputusan Nomor 05/ DPRD/2006, tanggal 17 Februari 2006. Usulan Gubernur NTT Nomor Pem. 135/04/2006 tanggal 27 Januari 2006 dan Keputusan DPRD Provinsi NTT Nomor 4/PIMP.DPRD/2006 tanggal 1 Februari 2006.

Dengan melihat kebutuhan masyarakat serta dukungan pemerintah, optimisme melingkupi semua elemen yang berjuang untuk membentuk Kabupaten Manggarai Timur. Gerakan bersama untuk memekarkan dan membentuk daerah otonom baru mulai dilaksanakan dengan teratur dan terencana. Jalur politis dan jalur budaya ditempuh. Pendekatan demi pendekatan gencar dilakukan. Puncak dari perjuangan ini adalah lahirnya Undang Undang Nomor 36 Tahun 2007 tentang Pembentukan Kabupaten Manggarai Timur di Provinsi Nusa Tenggara Timur yang disahkan pada tanggal 17 Juli 2007.
</p>
<center><iframe width="500px" height="350px" src="https://www.youtube.com/embed/H1Oyi69eQcw" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
          </div>

    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Siti Zulaiha
              <br>mai mena weki</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
         <!--  <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div> -->
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Website wisata Nami Dou Pota | 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <!-- <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Teratai</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/a1.png" alt="">
               <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Portfolio Modal 2 -->
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
