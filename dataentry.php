<?php require('session.php') ?>
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



    <title>Spotter Med</title>
    

    <script>
     $(document).ready(function(){
        

        $('select').change(function() {
         var num = parseInt($(this).val(), 10);
         var container = $('<div />');

         for(var i = 1; i <= num; i++) {
             $('<label class=".col-form-label-sm">' + "Option " + i + '</label>  <input type="text" class="form-control" id="option' + i + '" name="option' + i + '" placeholder="Provide an answer option." /> <br />').appendTo(container);
         }

         $('#optionsTextField').html(container);
         });      

        

  
        //watermark 

        $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').parent().closest('a').closest('div').remove();


      });
      



    </script>

    <link rel="stylesheet" href="style.css">
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

.container {
  margin: 0 auto;
  padding-bottom: 63px;

}

#main {
  padding: 5%;
}

.btn {
  float: right;
}



    </style>


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
      <div class="row">
        <form id="main">
          <div class="form-group">
            <label for="questionText">Question:</label>
            <input type="text" class="form-control" id="questionText" placeholder="Enter the question here.">
          </div>

          <div class="form-group">
            <label for="questionImageDirectory">Image URL:</label>
            <input type="text" class="form-control" id="questionImageDirectory" placeholder="Enter the image url.">
          </div>

          <div class="form-group">
            <label for="answer">Answer:</label>
            <input type="text" class="form-control" id="answer" placeholder="Enter the answer to the question here.">
          </div>



          <div class="form-group answerOptions">
            <label for="numberOfOptions">Number of Answer Options</label>
                  <select id="numberOfOptions" class="numberOfOptions form-control">
                    <option selected>Choose...</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
          </div>

          <div id="optionsTextField" class="form-group"> 
          </div>

          <div class="form-group">
            <label for="answerExplanation">Answer:</label>
            <input type="text" class="form-control" id="answerExplanation" placeholder="Provide an explanation to the answer here.">
          </div>

           <button type="submit" class="btn btn-primary">Submit</button>


<script>




</script>




        </form>  	
        </div>	
    </div> 	

    <footer class="footer-basic-centered">



      <p class="footer-links">
        <a href="index.php">Home</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">FAQ</a>
        ·
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">SpotterMed &copy; 2018</p>

    </footer>









  </body>
  </html>