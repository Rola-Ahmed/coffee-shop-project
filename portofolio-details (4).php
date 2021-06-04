<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
   .button {
  background-color: #009970; 
  border: none;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  height: 50px;
  width: 120px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25px;
}

</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><span>MIU Coffee shop</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Drink details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Drink details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
       <?php if (isset($_GET['u']))
     { 
      $i=$_GET['u'];
        // Include database file
        include 'additionalcond.php';

        $customerObj1 = new drinktype();

        $customers1 = $customerObj1->displayData(); 
        foreach ($customers1 as $customer) {
          if($i==$customer['id'])
          {
            $DN=$customer['drinkname'];
            $DC=$customer['cost'];
            $DE=$customer['description'];
            $IM=$customer['image'];
          }
        }

      ?> 
        <div class="portfolio-details-container" data-aos="fade-up" data-aos-delay="100">

          <div class="owl-carousel portfolio-details-carousel">
            <?php
       echo '<img src="'.$IM.'" class="img-fluid" onerror=this.src="iportfolio/images/nopic.jpg">';
         ?> 
            </div>

          <div class="portfolio-info">
            <h3>Drink information</h3>
            <ul>
              <li><strong>Name</strong>: <?php echo $DN?></li>
              <li><strong>Price</strong>: <?php echo $DC?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Description</h2>
          <p>
             <?php echo $DE?>
          </p>
          <form action="addadditionalcon.php" method="post">
          <?php echo '<input type="hidden" name="i" value="'.$i.'">' ?>
          <input class="button" type="submit" name="cart" value="Add to cart">
        </form>
        </div>
<?php 
} ?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>