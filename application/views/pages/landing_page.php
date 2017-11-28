<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Law Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="    sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">   
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body id="landbody">        
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">The Law Guide</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTexts" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navTexts">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Home') ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/about') ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/contact') ?>">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/login') ?>">Login</a>
                  </li>
                </ul>
            </span>
          </div>
        </nav>   
        <div class="container">            
            <div class="row">
                <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-12 col-md-12">       
                    <h1 style="margin-top: 100px;"><center>Welcome to The Law Guide!</center></h1>
                    <p><center>CONNECT - MEET EXPERTISE - SOLVE</center></p>
                    <center>Already a member? <a class="nav-link" href="<?php echo site_url('Home/login') ?>" style="font-weight: bold;">LOGIN</a></center><br>          
                        <div class="jumbotron">                          
                          <center><img src="<?php echo base_url(); ?>/assets/images/lawyers.png" id="lwyrs"></center><br>
                          <center><p class="lead">The Ultimate platform to get the expertise help for your legal matters and search for a best solution online.</p></center>             
                        </div>
                         <!-- START THE FEATURETTES -->

                        <hr class="featurette-divider">
                        <br>
                        <div class="row featurette">
                          <div class="col-md-7">
                            <h2 class="featurette-heading">Get the Lawyer support</h2><br>
                            <p class="lead">We provide users a detailed information on lawyers and legal issues so that you can make the choices that are right for you. Get the legal support from them and fulfill your requirements.</p>
                          </div>
                          <div class="col-md-5">
                            <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/images/lawsup.jpg" alt="Generic placeholder image">
                          </div>
                        </div>
                        <br>
                        <hr class="featurette-divider">
                        <br>
                        <div class="row featurette">
                          <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">Find the Best Solution</h2>
                            <p class="lead">You can get to know how our experts perform in cases to fulfill customers' requirements. We have all the records of our law consultants and their win/loss ratios and other stuff. You can optimize and choose the best person for you</p>
                          </div>
                          <div class="col-md-5 order-md-1">
                            <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/images/best.jpg" alt="Generic placeholder image">
                          </div>
                        </div>
                        <br>
                        <hr class="featurette-divider">
                        <br>
                        <div class="row featurette">
                          <div class="col-md-7">
                            <h2 class="featurette-heading">Make your Reservation</h2>
                            <p class="lead">You can reserve our experts through your phone/laptops. Depending on your requirements, you’ll be charged and we guarantee to give you a satisfactory service. We accept credit cards and debit cards to make your life simple.</p>
                          </div>
                          <div class="col-md-5">
                            <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/images/lawsute.jpg" alt="Generic placeholder image">
                          </div>
                        </div>
                        <br>
                        <hr class="featurette-divider">
                        <br>
                        <!-- /END THE FEATURETTES -->
   
                    </div>
                <div class="col-lg-1 col-md-12"></div>      
            </div> 
        </div>
        
      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="float-left">&copy; The Law Guide 2017</p>
      </footer>

        <!-- <p class="text-right">&copy StudentMate 2017</p> -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  -->
  </body>
</html>
