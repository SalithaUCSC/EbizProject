<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lawyer Profile | The Law Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="   1sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">   
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body id="homebody" class="profbody">        
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

                    <div class="col-lg-12 col-md-12">       
	                    <h1 style="margin-top: 100px;"><center>LAWYER PROFILE</center></h1>
                        <div class="row">    
                            <div class="col-lg-4 col-sm-12">
                                <div class="card">
                                <br>
                                <center><button type="button" class="btn btn-dark"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Availability : YES</button><br><br>
                                  <h4 class="card-title">John Smith</h4>
                                  <h6 class="card-subtitle mb-2 text-muted">Lawyer</h6>
                                <br>
                                <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/law1.png" alt="Card image cap"></center>
                                <br>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><i class="fa fa-phone"></i> Contact : 0777123456</li>
                                  <li class="list-group-item"><i class="fa fa-address-book"></i> Workplace Address : 
                                    <p style="margin-left: 20px;">321/A,<br>
                                    St Anthony's Rd,<br>
                                    Colombo 08</p>
                                  </li>
                                  <li class="list-group-item"><i class="fa fa-hourglass-o"></i> Work Hours : 10.00AM - 4.00PM</li>
                                </ul>
                              </div>
                            </div> 
                        <div class="col-lg-8">
                          <div class="row">
                            <div class="jumbotron" style="margin-top: 30px; padding-top: 10px; width: 1200px; height: 730px;" id="lawjumbo">
                                <div class="container">
                                  <h4>PERSONAL DETAILS</h4>
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-user-circle-o"></i> Name  </p></td>
                                          <td><p class="lead">Mr. John Smith</p></td>
                                        </tr>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-calendar-check-o"></i> Age  </p></td>
                                          <td><p class="lead">45 yrs</p></td>
                                        </tr>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-university"></i> Qualified Institute  </p></td>
                                          <td><p class="lead">Sri Lanka Law College</p></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  <h4>PROFESSIONAL DETAILS</h4>
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-briefcase"></i> Win/Loss Ratio</p></td>
                                          <td><p class="lead">17/23</p></td>
                                        </tr>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-file-word-o"></i> Capable Areas  </p></td>
                                          <td><p class="lead">Civil works , Domestic Relations , Criminal cases</p></td>
                                        </tr>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-gavel"></i> Avaible main courts</p></td>
                                          <td><p class="lead">Colombo , Horana</p></td>
                                        </tr>
                                        <tr>
                                          <td><p class="lead"><i class="fa fa-list-ol"></i> Number of cases done</p></td>
                                          <td><p class="lead">23</p></td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td><button type="button" class="btn btn-info" style="float: right"><i class="fa fa-star"></i> Rate Lawyer</button></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                </div>
                              </div>
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
