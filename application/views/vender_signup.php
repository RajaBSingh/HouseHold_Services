<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href=" <?php echo base_url()?>tools/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url()?>tools/simple-line-icons/css/simple-line-icons.css">
  <link href="<?php echo base_url()?>tools/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
  <link href="<?php echo base_url()?>tools/css/flexslider.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>tools/fonts/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>tools/fonts/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>tools/js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url()?>tools/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>tools/css/auth.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>tools/fonts" />
  </head>
  <body>
    <div>
      <div class="title_box">
        <div class="row">
          <div class="col-sm-12">
            <header>
              <div class="navbar navbar-default navbar-static-top">
                  <div class="container">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="index-2.html"><img src="<?php echo base_url()?>tools/img/logo.png" alt="logo"/></a>
                      </div>
                      <div class="navbar-collapse collapse ">
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="<?php echo base_url()?>/home">Home</a></li> 
                     <li class="dropdown">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                  <li><a href="<?php echo base_url()?>home/about">Company</a></li>
                                  <li><a href="#">Our Team</a></li>
                                  <li><a href="#">News</a></li> 
                                  <li><a href="#">Investors</a></li>
                              </ul>
                          </li>
                  <li><a href="<?php echo base_url()?>home/services">Services</a></li> 
                              <li><a href="<?php echo base_url()?>home/portfolio">Portfolio</a></li>
                              <li><a href="<?php echo base_url()?>home/pricing">Pricing</a></li>
                              <li><a href="<?php echo base_url()?>home/contact">Contact</a></li>
                              <li><a href="<?php echo base_url()?>home/login"><i class="fa fa-user fa-2x"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
        </header>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="login_box">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Enter Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label>Enter E-Mail(Username)</label>
            <input type="email" name="username" class="form-control" placeholder="Username@example.com">
          </div>
          <div class="form-group">
            <label>Enter Mobile NO</label>
            <input type="text" name="mobile_no" class="form-control" placeholder="+977 98********">
          </div>
          <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="Password" class="form-control" placeholder="**************">
          </div>
          <div class="form-group col-sm-12">
            <label for="">Profession</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="home_cleaning">Home Cleaning</option>
            </select>
        </div>
        <div class="form-group">
            <label>Your Location</label>
            <input type="text" name="location" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info">Signup</button>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
         <center> <a href="<?php echo base_url().'home/login' ?>">SignUp As Vender. <span class="text-info"><b> SignUp</b></span></a></center>
        </div> 
      </div>
      <div class="row">
        <div class="col-sm-12">
         <center> <a href="<?php echo base_url().'home/login' ?>"> Have An Account. <span class="text-info"><b> Login</b></span></a></center>
        </div> 
      </div>
    </div>
  </div> 
  </div>
  <script src="<?php echo base_url()?>tools/js/jquery.js"></script>
  <script src="<?php echo base_url()?>tools/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()?>tools/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>tools/js/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url()?>tools/js/jquery.fancybox-media.js"></script> 
  <script src="<?php echo base_url()?>tools/js/portfolio/jquery.quicksand.js"></script>
  <script src="<?php echo base_url()?>tools/js/portfolio/setting.js"></script>
  <script src="<?php echo base_url()?>tools/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url()?>tools/js/animate.js"></script>
  <script src="<?php echo base_url()?>tools/js/custom.js"></script>
  <script src="<?php echo base_url()?>tools/js/owl-carousel/owl.carousel.js"></script>
  
</body>
</html>