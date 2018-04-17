<?php
@ob_start();
session_start();
?>
<?php require('bb-session.php') ?>

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


    <script>
     $(document).ready(function(){
        if (typeof(Storage) !== "undefined") {
          // Store
          if (localStorage.getItem("BBuserMark") > 0) {
              
        } else {
          localStorage.setItem("BBuserMark", 0);
        }
        } else {
          document.getElementById("main").innerHTML = "Sorry, your browser does not support Web Storage and therefore you may have some trouble with viewing your score.";
        }

        if (typeof(Storage) !== "undefined") {
          // Store
          if (localStorage.getItem("BBquestionCounter") > 0) {
              
        } else {
          localStorage.setItem("BBquestionCounter", 0);
        }
        } 

        

      // Question Counter Script - runs only when questions not all done.
    <?php if ($done == 0) { ?>
        var temp = localStorage.getItem("BBquestionCounter");
        var int_questionCounter = parseInt(temp);
        int_questionCounter ++;
        localStorage.setItem("BBquestionCounter", int_questionCounter);
        $( "#questionCount" ).html(localStorage.getItem("BBquestionCounter"));
    <?php } ?>

/*        var questionObj = JSON.parse('<?php echo $question_json ?>');
        var correctAnswer = questionObj.questionText;
        alert (questionObj);*/

        var form = $('#AnswerForm');
        var formData = $(form).serialize();

        $.fn.test = function () {

        };






/*        $.fn.addAns = function() {
          $("#response").empty()
          userAnswer = $('input[name=optradio]:checked').val();
          $("#response").append('<textarea class="abc" name="'+ userAnswer +'">sasa</textarea>');
          $(".abc").hide();
       };*/



        $( "#AnswerForm" ).on( "submit", function( event ) {
          event.preventDefault();


        

          //show correct or incorrect feedback
          var b = $('#correctanswer').html();
          var selected = $('input[name=optradio]:checked')
          var userAnswer = selected.val();




          if (b == userAnswer) {
            $(".correct_response").css("display", "block");
            $(".incorrect_response").css("display", "none");
            abc = $('input[name=optradio]:checked')
            $(abc).after(" <i></i>");
            $("#AnswerForm").find("i").addClass("fas fa-check");
            var store = localStorage.getItem("BBuserMark");
            var int_userMark = parseInt(store);
            int_userMark ++;
            localStorage.setItem("BBuserMark", int_userMark);
            


          }
          else {
            $(".incorrect_response").css("display", "block");
            $(".correct_response").css("display", "none");

            abc = $('input[name=optradio]:checked')
            $(abc).after(" <i></i>");
            $("#AnswerForm").find("i").addClass("fas fa-times");

          }

          //Fixes glitch of enter key increasing userMark
          $('#AnswerForm').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
              e.preventDefault();
            return false;
          }
          });


          //hide submit button and show next button
          $(".submit_ans").hide();
          $(".next_q").css("display", "inline-block");
          $(".instruction").hide();
        }); 


        $(document).keydown(function(e) {
            //var target = (e.target) ? e.target : e.srcElement; // IE uses srcElement
            // jQuery seems to handle this, so e.target should be fine

            if(e.target.nodeName != 'BUTTON') {
                switch(e.which) {
                    case 39: $("#nextBtn").trigger('click');
                    break;
                  
                }
            }
        });

        //watermark 

        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();


      });
      



        //shows feedback, hide submit button, add tick
/*        $(".submit_ans").click(function(){
          $(".feedback").css("display", "inline-block");
          $(".option2 label").after(" <i></i>");
          $(".option2 i").addClass("fas fa-check");
          $(".submit_ans").hide();
          $(".next_q").css("display", "inline-block");
          event.preventDefault();

      });*/

    </script>

    <link rel="stylesheet" href="style1.0.css">
    <link rel="stylesheet" href="footer-basic-centered.css">
    <style>
      .footer-basic-centered{
        background-color: #red;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: center;
        font-family: 'Nunito', sans-serif;
        padding: 1rem;
        margin-top: 30px;
        position: absolute;
        bottom: 0;
        left: 0;

      }    

      .footer-basic-centered a:hover {
        color:#1abc9c;
      }

      .container {
      margin: 0 auto;
      padding-bottom: 63px;
      }
    </style>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    <header class="container-fluid">

        <nav class="navbar navbar-light">
          <a class="navbar-brand" href="index.php">
            <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
            <span id="siteName" style="font-family: 'Oswald', sans-serif;"><b>SpotterMed</b></span>
          </a>
        </nav>  

    </header>

    <div class="container">
      <div class="row" id="main" >
        <div class="col-sm-6 question_col">
   <?php if ($done == 0) { ?> <!-- If all questions are seen, hide everything. -->


          <div class="question_number"><p><b>Question <span id="questionCount"></b></p></span></div>

          <div class="question_text"><p><?php echo $question["questionText"]; ?></p></div>
          <div class="img_placeholder"><img src="<?php echo $question["questionImageDirectory"]; ?>" class="q_img img-fluid rounded"></div>

           </div>

        <!-- questionCounter Script -->




        <div class="col-sm-6 response_col">

          <div class="userMarkDisplay">
            <small> Number of Questions Correct: <span id="currentMark"></span></small>
                <script>
                  currentMark_int = parseInt(localStorage.getItem("BBuserMark"));
                  if (isNaN(currentMark_int) == 1) {
                    document.getElementById("currentMark").innerHTML = 0;
                  } else {
                   document.getElementById("currentMark").innerHTML = currentMark_int;
                  }
                </script>
          </div>

          <!-- Appears when answer is submitted -->

            <div class="alert alert-success feedback correct_response">
             <strong><?php echo "Correct!  <br />" ?></strong> 
            </div> 
            <div class="alert alert-danger feedback incorrect_response">
             <strong><?php echo "Incorrect. <br />" ?></strong> <?php echo $question["answerExplanation"]; ?>
            </div> 


     
            <div class="instruction"><p>Select the best answer.</p></div>



          <form name="AnswerForm" id="AnswerForm" method="post" action="<?=$_SERVER['PHP_SELF'];?>">


              <?php 
              if ($done == 0) {
                foreach ($optionsarray as $option) { 
                  if ($option != "") {
                    ?>
                    <div class="radio">
                      <label class="radioLabel"><?php echo $option; ?>
                        <input type="radio" name="optradio" value="<?php echo $option; ?>"> <span class="checkmark"></span></label>
                    </div>
                  <?php 
                    }

                  } 

              }
              ?>


             <input type="submit" id="submitBtn" class="btn btn-primary submit_ans" name="SubmitAnswer" />


            

<!--              <?php echo $_SESSION['BBuserMark'] ?>
 -->

          </form>
            
 
          
            <form action="" id="nextBtnForm">
               <input type="submit" id="nextBtn" class="btn btn-dark next_q" style="display:none;" value="Next">
           </form>


             <div id="correctanswer"><?php echo $question["answer"]; ?></div>
            <div id="result"></div>
             <script>

            </script>

          

      <?php } else { 
          unset($_SESSION['BBquestionhistory']);
        ?>
        <?php 
          echo '<pre>';
          var_dump($_SESSION);
          echo '</pre>';
        ?>

          Your score was: <span id="percetangeMark"></span>% <br />
          <span id="userMark"></span> out of <span id="questionNumber"></span>

          <!-- <p id="serverResponse"></p> -->
          <script> 

            userMark_float = parseFloat(localStorage.getItem("BBuserMark"));
            questionCounter_float = parseFloat(localStorage.getItem("BBquestionCounter")); 

            percentage = (userMark_float/questionCounter_float) * 100;
            percentageMark = percentage.toFixed(1);
          document.getElementById("percetangeMark").innerHTML = percentageMark;


           document.getElementById("userMark").innerHTML = userMark_float;
           document.getElementById("questionNumber").innerHTML =questionCounter_float;
 


           // GET FileName 

           var fileName = location.href.replace(/\.[^/.]+$/, "").split("/").slice(-1); 


            // XMLHttpRequest to send Percentage Mark and Filename

            const xhr = new XMLHttpRequest();

            xhr.onload = function() {
              // const serverResponse = document.getElementById("serverResponse");
              // serverResponse.innerHTML = this.responseText;
              console.log(this.responseText);
            };

            xhr.open("POST", "marks.php");
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("userScore=" + percentageMark + "&moduleName=" + fileName);




         localStorage.removeItem("BBuserMark");
          localStorage.removeItem("BBquestionCounter");
        </script> 

      <?php } ?><!--  // If all questions are seen, hide everything. -->

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