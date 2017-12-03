<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reservations | The Law Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="   1sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">   
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style type="text/css">
          .modal-body a {
            color: black; 
            text-decoration: none;
          }
          .modal-body a:hover {
            color: red !important;
          }
        </style>
    </head>
    <body id="homebody" class="donebody">        
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

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Users') ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/about') ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/contact') ?>">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o"></i> User
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" style="color: black;">Profile</a>
                    <a class="dropdown-item" href="<?php echo site_url('Home/signout') ?>" style="color: black;">Sign Out</a>
                  </div>
                  </li>
                </ul>
            </span>
          </div>
        </nav>
	

        <div class="container">            
            <div class="row">
                <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-12 col-md-12"><br>     
	                     <h1 style="margin-top: 100px;"><center>SELECT YOUR CASE TYPE </center></h1>
                         <div class="row"> 
                            <div class="col-sm-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <center><h4 class="card-title">Civil works</h4></center>
                                        <center><i class="fa fa-male fa-5x" aria-hidden="true"></i></center><br>
                                        <center>
                                          <a href="<?php echo site_url('Users/reserveCase') ?>" class="btn btn-secondary">Reserve</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <center><h4 class="card-title">Domestic Relations</h4></center>
                                        <center><i class="fa fa-home fa-5x" aria-hidden="true"></i></center><br>
                                        <center>
                                          <a href="<?php echo site_url('Users/reserveCase') ?>" class="btn btn-secondary">Reserve</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <center><h4 class="card-title">Criminal Cases</h4></center>
                                        <center><i class="fa fa-gavel fa-5x" aria-hidden="true"></i></center><br>
                                        <center>
                                          <a href="<?php echo site_url('Users/reserveCase') ?>" class="btn btn-secondary">Reserve</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <center><h4 class="card-title">Emplayment and Labour</h4></center>
                                        <center><i class="fa fa-user fa-5x" aria-hidden="true"></i></center><br>
                                        <center>
                                          <a href="<?php echo site_url('Users/reserveCase') ?>" class="btn btn-secondary">Reserve</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" >
                                    <div class="card-body">
                                        <center><h4 class="card-title">Landlord and Tenant</h4></center>
                                        <center><i class="fa fa-map fa-5x" aria-hidden="true"></i></center><br>
                                        <center>
                                          <a href="<?php echo site_url('Users/reserveCase') ?>" class="btn btn-secondary">Reserve</a>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg">View Details</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
      <!--                       <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                          <center><h4 class="card-title">Civil works</h4></center>
                                          <center><i class="fa fa-male fa-5x" aria-hidden="true"></i></center><br>
                                          <center><a href="#" class="btn btn-primary">Reserve</a></center>
                                    </div>
                                </div>
                            </div> -->
                          
                          
                        </div>                        
                      </div>                       
                    </div><br>
                    <!-- Modal -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 30px;">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Civil works</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p style="font-size: 20px;">Procedure</p><hr>
                            <p><b>STEP 1 : </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et sapien eget velit laoreet venenatis. Aenean in ligula vitae enim efficitur dignissim nec quis sapien.</p>
                            <p><b>STEP 2 : </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et sapien eget velit laoreet venenatis. Aenean in ligula vitae enim efficitur dignissim nec quis sapien.</p>
                            <p><b>STEP 3 : </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et sapien eget velit laoreet venenatis. Aenean in ligula vitae enim efficitur dignissim nec quis sapien.</p>
                            <p><b>STEP 4 : </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et sapien eget velit laoreet venenatis. Aenean in ligula vitae enim efficitur dignissim nec quis sapien.</p>
                            <hr><p style="font-size: 20px;">Needed Documents</p><hr>
                            <p>Application Form <i class="fa fa-arrow-right" aria-hidden="true"></i> <small><a style="color: black; text-decoration: none;" href="<?php echo base_url(); ?>assets/files/ApplicationForm.docx" download>Download</a></small></p><hr>
                            <p>Document 1 <i class="fa fa-arrow-right" aria-hidden="true"></i> <small> <a href="<?php echo base_url(); ?>assets/files/ApplicationForm.docx" download>Download</a></small></p>
                            <!-- <a style="color: black; text-decoration: none;" href="<?php echo base_url(); ?>assets/files/ISMNote.docx" download>Application Form</a><hr> -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col-lg-1 col-md-12"></div>      
            </div> 
        </div>
        <br><hr>

      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="float-left">&copy; The Law Guide 2017</p>
      </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </body>
</html>
