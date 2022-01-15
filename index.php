<?php 

  include('koneksi/koneksi.php');

 ?>

<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php'); ?>

    <?php if ($_GET['include'] == 'profile') : ?>
      <style type="text/css">
        body {
          padding-bottom: 3rem;
          color: #5a5a5a;
        }
        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
          margin-bottom: 1.5rem;
          text-align: center;
        }
        .marketing h2 {
          font-weight: 400;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
          margin-right: .75rem;
          margin-left: .75rem;
        }
        /* Featurettes
        ------------------------- */

        .featurette-divider {
          margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          /* rtl:remove */
          letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
          /* Bump up size of carousel content */
          .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
          }

          .featurette-heading {
            font-size: 50px;
          }
        }

        @media (min-width: 62em) {
          .featurette-heading {
            margin-top: 7rem;
          }
        }

      </style>
    <?php endif; ?>

    <?php if ($_GET['include'] == 'kegiatan') : ?>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">

      <link href="css/features.css" rel="stylesheet">

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    <?php endif; ?>

      <style>
        .zoom {
          transition: transform .5s; /* Animation */
        }

        .zoom:hover {
          transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
      </style>
  </head>
  <body class="bg-light">
  	<?php include('includes/navbar.php'); ?>
      <?php 
      if (isset($_GET['include'])) {
          // datasiswa
    	   if($_GET['include'] == 'data-siswa'){
            include('include/datasiswa.php');
         } else if($_GET['include'] == 'detail-siswa'){
          include('include/detailsiswa.php');
        } else if($_GET['include'] == 'data-guru'){
          include('include/dataguru.php');
        } else if($_GET['include'] == 'detail-guru'){
          include('include/detailguru.php');
        }
          // home
         else {
            include('include/index.php');
         }
      } else {
        include('include/index.php');
      }

      ?>

      <div class="mb-5">

      </div>
    	<?php include('includes/footer.php'); ?>

    <?php include('includes/javascript.php'); ?>
    <?php if ($_GET['include'] == 'kegiatan') { ?>
      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <?php } ?>
  </body>
</html>