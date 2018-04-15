<?php require('new-session.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>SpotterMed</title>
    <meta name="description" content="Medical School Spotter Exam Practice">
    <meta name="keywords" content="spotter, exam, medical student, medicine, barts, barts and the london, study, revision, practice, questions">
        
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




    

    <script>
     $(document).ready(function(){
 

        //watermark 

        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();


      });
      



    </script>

    <link rel="stylesheet" href="style1.0.css">
    <link rel="stylesheet" href="footer-basic-centered.css">

    <style>


/*iPad portrait*/
@media only screen and (min-device-width : 768px)  and (max-device-width : 1024px) {
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


.content {
  width: 95%;
  text-align: justify;
 
}

.content a {
  color: #1abc9c;
}

.content a:hover {
  color: #1abc9c;
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
          <a class="navbar-brand" href="index.php">
            <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
            <span id="siteName" style="font-family: 'Oswald', sans-serif;"><b>SpotterMed</b></span>
          </a>
        </nav>  

    </header>

   <div class="container">
      <div class="row" id="main">
        <div class="col-sm-12 question_col">

        <h3>About</h3>
              <br />
              <div class="content">
            <p>
            SpotterMed is a place on the web to practice questions for medical school spotter exams. It consists of large databank of questions covering numerous topics. New questions are added on a regular basis, each available with the correct answer and an explanation. New modules are also being added to further support your learning.</p>

            <p>The question format is a multiple choice question with a single best answer. Usually the question will contain an image and between 4-10 answer options to chose from. With each correct answer, you get a score of 1 mark. No marks are awarded for an incorrect answer, but feedback is provided with an explanation to that question. At the end of completing the round of questions, you receive an overall percentage score to see how well you have done.</p>

            <p>Take a look at the <b><a href="FAQ.php">FAQs</a></b> page to see some Frequently Asked Questions related to the website.</p>

            <p>Your feedback on this website is always welcome, so feel free to get in touch through the <b><a href="contact.php">Contact</a></b> page.</p>

            <p><b>Good luck with the studying!</b></p>              
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
  </html>
