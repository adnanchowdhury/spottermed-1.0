<?php require('new-session.php') ?>
<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery Form Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>


    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Shortcut.js --> 
    <script type="text/javascript" src="js/shortcut.js"></script>

    <!-- Google Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!--- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <title>Spotter Med</title>
    <meta name="description" content="Medical School Spotter Exam Practice">
    <meta name="keywords" content="spotter, exam, medical student, medicine, barts, barts and the london, study, revision, practice, questions">

    <script>
     $(document).ready(function(){
 

        //watermark 

        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();


      });
      



    </script>

    <link rel="stylesheet" href="style1.0.css">
    <link rel="stylesheet" href="footer-basic-centered.css">

    <style>

      .card {
        border-radius: 9px !important;
        border: 4px solid #E9EFF8;
        background: #fff;
        max-width: 90%;
        margin-top: 2%;

      }

      .card .btn {
        width: 100%;
      }

      .bb_btn, .loco_btn, .cr_btn {
        background-color:#1abc9c;
        border-color: #1abc9c;
      }

      .bb_btn:hover, .bb_btn:active, .bb_btn:focus, .bb_btn:active:focus {
        background-color: #16a085 !important;
        border-color: #16a085 !important;
      }

      .loco_btn:hover, .loco_btn:active, .loco_btn:focus, .loco_btn:active:focus {
        background-color: #16a085 !important;
        border-color: #16a085 !important;
      }

      .cr_btn:hover, .cr_btn:active, .cr_btn:focus, .cr_btn:active:focus {
        background-color: #16a085 !important;
        border-color: #16a085 !important;
      }

      @media only screen  and (max-device-width: 1024px) {
        .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        }

        .card .btn {
          margin: 0 auto;
          float: none;
          width: 90%;
        }
      }

/*iPad portrait*/
@media only screen and (min-device-width : 768px)  and (max-device-width : 1024px) {
  .btn {
    width: 90% !important;
    margin: 0 auto !important;
    float: none;
    font-size: 12px !important;

  }
}
     


.footer-basic-centered{
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: center;
  font-family: 'Nunito', sans-serif;
  padding: 1rem;
  margin-top: 30px;
  position: absolute !important;
  bottom: 0;
  left: 0;

}

.footer-basic-centered a:hover {
  color:#1abc9c;
}
.container {
  margin: 0 auto;
  padding-bottom: 70px;
}


    </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117156842-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117156842-1');
    </script>




  </head>
  <body> 
    <header class="container-fluid">

        <nav class="navbar navbar-light">
          <a class="navbar-brand" href="#">
            <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
            <span id="siteName" style="font-family: 'Oswald', sans-serif;"><b>SpotterMed</b></span>
          </a>
        </nav>  

    </header>

    <div class="container">
  		<div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/BB2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Brain &amp; Behaviour</h5>
              <p class="card-text"><small class="text-muted">Total Number of Questions: <?php echo $totalquestions; ?>.</small>
              </p><br />
             <a href="bb.php" class="bb_btn btn btn-primary">Practice B&amp;B Questions</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/loco 3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Locomotor</h5>
               <p class="card-text"><small class="text-muted">Total Number of Questions: 55. <br /></small>
              </p><br />
              <a href="lc.php" class="loco_btn btn btn-primary">Practice Locomotor Questions</a>
            </div>
        </div>		
  		  <div class="card">

  		    <img class="card-img-top" src="img/cr1.png" alt="Card image cap">
  		    <div class="card-body">
  		      <h5 class="card-title">Cardiorespiratory</h5>
             <p class="card-text"><small class="text-muted">Coming soon.</small>
            </p><br />
            <a href="#" class="cr_btn btn btn-primary">Practice CR Questions</a>
  		    </div>
		  </div>

		</div>
    </div> 	

    <footer class="footer-basic-centered">



      <p class="footer-links">
        <a href="index.php">Home</a>
        ·
        <a href="about.php">About</a>
        ·
        <a href="FAQ.php">FAQ</a>
        ·
        <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name">SpotterMed &copy; 2018</p>

    </footer>









  </body>