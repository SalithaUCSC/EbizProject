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
	                    <h1 style="margin-top: 100px;"><center>RESERVATION DETAILS </center></h1>
                        <div class="row">    
                            <center>
                              <table class="table table-striped" style="margin-top: 30px; font-size: 24px; margin-bottom: 100px;">
                                <tbody>
                                  <tr>
                                    <td style="width: 1400px;"><b>Reservation 1</b><p>Reserved Case type : Landlord and Tenant<br>Reserved Lawyer : Ryan McDonald</p>
                                    </td>
                                   <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-user-circle-o"></i> 
                            Contact</button></td>

                                  </tr>
                                </tbody>
                              </table>

                            <br><br><br><br>

                        </div> 
                                                  <center><a class="btn btn-dark" href="<?php echo site_url('Users') ?>" role="button">Back to Home</a></center>                       
                      </div>                       
                    </div>
                                            <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="margin-top: 100px;">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title"  style="color: red;" id="exampleModalLongTitle">Send a message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                                                <form>
                                  <div class="row">
                                    <div class="col">
                                      <label>Your Email </label>
                                      <input type="text" class="form-control" placeholder="Enter your emial">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col">
                                      <label>Message</label>
                                  <textarea class="form-control" id="message" rows="3" name="message" placeholder="Type your Message" noresize="noresize"></textarea>

                                    </div>
                                  </div>
                                  <br>
                                    <div class="row">
                                    <div class="col">
                                      <label>Lawyer Email </label>
                                      <input type="text" class="form-control" placeholder="ryan94@gmail.com" disabled="disabled">
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send </button>
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
