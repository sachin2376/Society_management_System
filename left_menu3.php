<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Industrial &mdash; Website Template by Colorlin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
      .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(241, 234, 234);
  overflow-x: hidden;
  padding-top: 20px;
}

.menu{
    color: rgb(22, 22, 21);
}
.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #080101;
  display: block;
}

.sidenav a:hover {
  color: #03292b;
}
.li{
  font-size: 2%;
}

.dropbtn {
  background-color: rgb(146, 223, 148);
  border: none;
  color: rgb(8, 0, 0);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 4cm;
}

.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fcf9f9;
  min-width: 160px;
  box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 13px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(247, 240, 240);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
      </style>
  </head>
  <body>
    <font align="center"><h1>Treasurer Details</h1></font>

   <?php
   session_start();
   if($_SESSION['t_user'])
   {
   ?>
	<font align="Right"><h6><?php echo "Welcome   ".$_SESSION['t_user'] ?></h6></font>
	<?php
   }
	?>
      <div class="sidenav">

          <div class="dropdown">
            <h1>Menu</h1></br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="dropbtn">Generate_Bill</button>
              <div class="dropdown-content">
                  <a href="Maintanance.html">Add</a>
                  <a href="#">View</a>
              </div>
            </div>

            <div class="drop">
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="drpbtn" href="logout.php">Logout</a>
            </div>
          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="con/contactus.html">Contact us</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="">About</a>
              </li>      
              <li class="nav-item">
                <a class="nav-link" href="">Help</a>
              </li>
              
            </ul>

            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

    
      <div class="slider-item" style="background-image: url('.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate"></div>
             </div>
          </div>
        </div>
      </div>

      
      

        
    </section>
    
            </div>
            <div class="col-md-5 mb-5 pl-md-5">
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block">Address:</span>
                  <span >34 Street Name, Pune , India.</span></li>
                <li class="d-block"><span class="d-block">Telephone:</span><span >+91 27929-28-28</span></li>
                <li class="d-block"><span class="d-block">Email:</span><span >info@yourdomain.com</span></li>
              </ul>
            </div>
          
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
             <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright @2019 All Right Reserved</script> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>
    
  </body>
</html>