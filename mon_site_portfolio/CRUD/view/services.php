<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>mon site portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
 
    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
      	<div class="img" style="background-image: url(../images/moitrainnb.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="../../index.html" class="logo">Mohamed Ba</a></h1>
              <ul>
                <li><a href="../../index.html"><span><small>01</small>Accueil</span></a></li>
                <li><a href="about.html"><span><small>02</small>Moi</span></a></li>
                <li class="active"><a href="services.php"><span><small>03</small>Compétences</span></a></li>
                <li><a href="portfolio.html"><span><small>04</small>Portfolio</span></a></li>
                <li><a href="blog.html"><span><small>05</small>Bonus</span></a></li>
                <li><a href="contact.html"><span><small>06</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="../../index.html"><span class="logo-img" style="background-image: url(../images/momo.jpg);"></span>Mohamed Ba</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>

      <?php var_dump($donnees)?>

      <section class="ftco-section">
        <div class="container mt-5">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Ce que je sais faire</span>
              <h2>Mes compétences</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><?= $donnees["icone"] ?></div>
                <div class="media-body">
                  <h3 class="heading">UI/UX Design</h3>
                  <h3 class="heading">Responsive Design</h3>
                  <h3 class="heading">Wordpress</h3>
                  <h3 class="heading">Bootstrap</h3>
                  <h3 class="heading">Ligne de commande</h3>
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><?= $donnees["icone"] ?></div>
                <div class="media-body">
                  <h3 class="heading">Photoshop</h3>
                  <h3 class="heading">Illustrator</h3>
                  <h3 class="heading">Indesign</h3>
                  <h3 class="heading">Acrobat</h3>
                  <h3 class="heading">Quark Xpress</h3>
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><?= $donnees["icone"] ?></div>
                <div class="media-body">
                  <h3 class="heading">HTML/CSS</h3>
                  <h3 class="heading">Javascript</h3>
                  <h3 class="heading">JQuery</h3>
                  <h3 class="heading">PHP</h3>
                  <h3 class="heading">AJAX</h3>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </section>
      
     <!-- DEBUT FOOTER -->
		 <footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-5 text-center">
						<div class="ftco-footer-widget mb-5">
							<ul class="ftco-footer-social list-unstyled">
								<li class="ftco-animate"><a href="https://www.linkedin.com/in/mohamed-ba-975661171/" target="_blank"><span class="icon-linkedin"></span></a></li>
								<li class="ftco-animate"><a href="https://github.com/Momoba783" target="_blank"><span class="icon-github"></span></a></li>
								<li class="ftco-animate"><a href="https://www.facebook.com/tiba.ba" target="_blank"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/mojowkk" target="_blank"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
						<div class="ftco-footer-widget">
							<h2 class="mb-3">Contactez-moi</h2>
							<p class="h3 email"><a href="#">j.mohamed.ba@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p>
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mohamed BA - All rights reserved</a>
		</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- FIN FOOTER -->

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>
    
  </body>
</html>