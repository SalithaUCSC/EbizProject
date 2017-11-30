<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register | The Law Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="    sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">   
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body id="logbody">        
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
                    <a class="nav-link" href="<?php echo site_url('Home') ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/about') ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Home/contact') ?>">Contact Us</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('Home/register') ?>">Sign Up <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
            </span>
          </div>
        </nav>        
        <div class="container">             
            <div class="row">

                <div class="col-lg-6">                        
                    <div class="card" style="margin-bottom: 220px;">               
                        <div class="card-body">
                            <center><h3>SIGN UP</h3></center>

                            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>','</div>'); ?>

                            <?php if($this->session->flashdata('success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                    <?php echo $this->session->flashdata('success');?>
                            </div>
                            <?php endif; ?>

                            <?php echo form_open('Home/registerUser'); ?>
                                <div class="form-group">
                                <label class="col-form-label" for="username"><i class="fa fa-user"></i> Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username">
                                </div>
                                <div class="form-group">
                                <label class="col-form-label" for="fname"><i class="fa fa-user-circle-o"></i> Full Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your Full Name">
                                </div>                                   
                                <div class="form-group">
                                <label class="col-form-label" for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                                </div> 
                                <br><br>
                        </div>
                    </div> 
                    </div> 
                    <div class="col-lg-6">
                        <div class="card">               
                            <div class="card-body">
                                <div class="form-group">
                                <label class="col-form-label" for="contact"><i class="fa fa-phone"></i> Mobile Phone</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your mobile number">
                                </div> 
                                <div class="form-group">
                                <label class="col-form-label" for="password"><i class="fa fa-lock"></i> Password</label>
                                <input type="password" class="form-control" id="password" name="password"  placeholder="Enter your Password">
                                </div>
                                <div class="form-group">
                                <label class="col-form-label" for="cpassword"><i class="fa fa-lock"></i> Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Retype your Password" onkeyup='check();'>
                                </div> 
                                <span id='message'></span><br><br>
                                <button type="submit" class="btn btn-success">Sign Up</button>
                                <a href="<?php echo site_url('Home/login'); ?>" class="btn btn-link">Login</a>
                            <?php echo form_close(); ?>            
                            </div>
                        </div>
                    </div>     
                </div>
                <!-- <div class="col-lg-3 col-md-12"></div>      -->
            </div>
        </div>
      <!-- FOOTER -->
      <footer>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p class="float-left">&copy; The Law Guide 2017</p>
      </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  -->
    <script type="text/javascript">
        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password matching';
          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password not matching';
          }
        }
    </script>
  </body>
</html>
