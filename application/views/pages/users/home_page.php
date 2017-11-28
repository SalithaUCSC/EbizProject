<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | The Law Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="    sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">   
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body id="homebody">        
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
                    <a class="nav-link" href="<?php echo site_url('Home/signout') ?>">Sign Out</a>
                  </li>
                </ul>
            </span>
          </div>
        </nav>
	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/slide1.jpg" alt="First slide" style="height: 600px;">
				<div class="carousel-caption">
					<h3>Find a Legal Solution</h3>
					<h5 style="font-weight: bold;">according to your matter</h5>

				</div>
            </div>
            <div class="carousel-item">
              	<img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/slide2.jpg" alt="Second slide" style="height: 600px;">
              	<div class="carousel-caption text-left">
					<h3 style="color: whitesmoke;">Get the lawyer support</h3>
					<h5 style="color: whitesmoke; font-weight: bold;">to solve your matters</h5>
				</div>

            </div>
	        <div class="carousel-item">
	            <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/slide3.jpg" alt="Third slide" style="height: 600px;">
	            <div class="carousel-caption text-left">
					<h3 style="color: whitesmoke;">Meet Experienced Lawyers</h3>
					<h5 style="color: whitesmoke; font-weight: bold;">make your reservation</h5>
				</div>

	        </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      	</div>  

        <div class="container">            
            <div class="row">

                <div class="col-lg-1 col-md-12"></div>

                    <div class="col-lg-12 col-md-12">       
	                    <h1 style="margin-top: 100px;"><center>Keep in touch with The Law Guide!</center></h1>
	                    <p><center>CONNECT - MEET EXPERTISE - SOLVE</center></p>
	                    <br><br>       
				        <div class="row">
				          <div class="col-lg-4">
				            <center><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/images/lawman.png" alt="Generic placeholder image" width="150" height="150"><br><br>
				            <h2>Find Lawyers</h2>
				            <p style="text-align: justify;">Here you can get the details of the lawyers who are already connected with us. All the records of the lawyers after enagaged with us have been stored in our lawyer base.</p><br>
				            <p><a class="btn btn-dark" href="<?php echo site_url('Users/findLawyers') ?>" role="button">Find now &raquo;</a></p></center>
				          </div><!-- /.col-lg-4 -->
				          <div class="col-lg-4">
				            <center><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/images/done.png" alt="Generic placeholder image" width="150" height="150"><br><br>
				            <h2>Work Done</h2>
				            <p style="text-align: justify;">You have the chance to see the latest and past work done by the lawyers with our collaboration. According to the nature of the case, the experiences we got have been listed.</p><br>
				            <p><a class="btn btn-dark" href="#" role="button">View details &raquo;</a></p></center>
				          </div><!-- /.col-lg-4 -->
				          <div class="col-lg-4">
				            <center><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/images/dollar.png" alt="Generic placeholder image" width="150" height="150"><br><br>
				            <h2>Make reservation</h2>
				            <p style="text-align: justify;">Reserve your lawyer according to your legal needs. Advance online payment will guide you to complete this. Simply you have to pay using your credit/debit cards.</p><br>
				            <p><a class="btn btn-dark" href="#" role="button">View details &raquo;</a></p></center>
				          </div><!-- /.col-lg-4 -->
				        </div>
                    </div>
                <div class="col-lg-1 col-md-12"></div>      
            </div> 
        </div>
        <br><hr><br>
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
