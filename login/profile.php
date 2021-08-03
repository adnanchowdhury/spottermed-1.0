<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<?php require('getUserInfo.php') ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SpotterMed | <?= $first_name.' '.$last_name ?></title>

  <!-- Required BOOTSTROP meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- FontAwesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <!-- Google Font CSS -->
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


  <!-- Shortcut.js --> 
  <script type="text/javascript" src="../js/shortcut.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117156842-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117156842-1');
  </script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../style1.0.css">
  <link rel="stylesheet" href="../footer-basic-centered.css">

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

    /* Profile Page Specific */

    .row {
      position: relative; 
      margin: auto; 
      width: 100%;
    }

    .mainpanel {
      margin: 3% auto;

    }

    .mainpanel .card {
      height: 250px;
      width: 40%;
      position: relative; 
      margin: auto; 

    }

    .moduleOverview {
      position: relative; 
      margin: 3% auto; 
      width: 100%;"
    }

    .card {
      padding: 2%;
      width: 100%;
      margin: 2% auto;
    
    }

  </style>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){

      //watermark 
        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();
    });
  </script>

</head>

<body>
    

  <header class="container-fluid">

      <nav class="navbar navbar-light">
        <a class="navbar-brand" href="../index.php">
          <img src="../logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
          <span id="siteName" style="font-family: 'Oswald', sans-serif;"><b>SpotterMed</b></span>
        </a>
      </nav>  

  </header>


<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
<script>
  <?php 
    $js_TestdateScored = json_encode($TestdateScored);
    echo "var TestdateScore=" . $js_TestdateScored . ";\n";
  ?>

</script>

  <div class="container">
    <div class="main">
          <h3>Welcome</h3>
      <div class="row mainpanel">
          <div class="card">
            My Profile:<br />
            <br />
            Name: <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>
            <br />
            Email: <?php echo $_SESSION['email']; ?>
            <br />
            Date Joined: <?php echo $dateJoined; ?>
          </div>


          <div class="card">
            <?php 
          // Test Module Results
            echo "Test Module: <br />";
            foreach ($Testresult as $userTest) {
              //Convert Date Format
              $phpDate = strtotime($userTest['dateScored']);
              $userDateScored = date("d-m-y", $phpDate);


                echo "Mark is: " . $userTest['score'] . "%   &nbsp;  &nbsp; Date: " . $userDateScored . "<br />";
            }

            echo "<br />Test Module Average: ";
            foreach ($averages as $module) {
              if ($module['moduleID'] == 3) {
                echo ( round($module['AVG(score)'], 1) );
            
              }
            }
            ?>
          </div>
        </div>
         <div class="row">
           <div class="card">
          <?php

          // BB Module Results
            echo "Brain & Behaviour Module: <br />";
            foreach ($BBresult as $userTest) {
              //Convert Date Format
              $phpDate = strtotime($userTest['dateScored']);
              $userDateScored = date("d-m-y", $phpDate);


                echo "Mark is: " . $userTest['score'] . "%   &nbsp;  &nbsp; Date: " . $userDateScored . "<br />";
            }

            echo "<br />Brain & Behaviour Module Average: ";
            foreach ($averages as $module) {
              if ($module['moduleID'] == 1) {
                echo ( round($module['AVG(score)'], 1) );
            
              }
            }
            ?>
          </div>
        </div>
          <div class="row">
           <div class="card moduleOverview">
            <?php

          // LC Module Results
            echo "Locomotor Module: <br />";
            foreach ($LCresult as $userTest) {
              //Convert Date Format
              $phpDate = strtotime($userTest['dateScored']);
              $userDateScored = date("d-m-y", $phpDate);


                echo "Mark is: " . $userTest['score'] . "%   &nbsp;  &nbsp; Date: " . $userDateScored . "<br />";
            }

            echo "<br />Locomotor Module Average: ";
            foreach ($averages as $module) {
              if ($module['moduleID'] == 2) {
                echo ( round($module['AVG(score)'], 1) );
            
              }
            }

           ?>
          </div>
        </div>
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          
          ?>
          
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
          
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
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
 
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
