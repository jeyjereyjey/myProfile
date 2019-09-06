<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>J Lord P. Tolentino</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <style type="text/css">
    html{
      scroll-behavior: smooth;
    }
  </style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">WELCOME!!</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#aboutMe">About Me</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#skills">Skills</a>
          </li>
           <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#aboutThis">This Site</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-3" style="border-radius: 50%;" src="img/profile2.jpg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">J Lord P. Tolentino</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Hi!! I'm J Lord P. Tolentino a recent graduate of Bachelor of Science in Information Technology at Polytechnic University of the Philippines, currently looking for a company where I can use my skills, gain knowledge and learn actual experience in the field of IT industry. I am a DOST scholar and city of Taguig scholar. I have experience in different programming languages like C, JAVA, HTML, PHP, COBOL and programming frameworks like Laravel framework and dJango. If I were given the chance to work in your company I will assure you that I am going to give the best of my ability working and learn things that can benifit the company.</p>

    </div>
  </header >

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="aboutMe">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About ME!!</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Personal information Grid Items -->
      <div class="row">

        <?php
            function Calc_Age($myday) {
              date_default_timezone_set('Europe/Rome');
              $birth = new DateTime($myday);
              $birth->format('Y-m-d');
              $today = new DateTime('NOW');
              $today->format('Y-m-d');
              $diffs = $today->diff($birth);
              $myage = $diffs->y . ($diffs->y == 1 ? ' year' : ' years');
              return $myage;
            }
          ?>

        <div class="table-responsive col-md-4 table">
          <table style="border: none;">
            <tr>
              <td style="font-size: 25px;"><strong>Name:</strong></td>
              <td style="font-size: 20px;">Jlord P. Tolentino</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Birth Date:</strong></td>
              <td style="font-size: 20px;">November 9,1998</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Age:</strong></td>
              <td style="font-size: 20px;"><?php echo Calc_Age("1998-11-09"); ?> old</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Ethnicity:</strong></td>
              <td style="font-size: 20px;">Filipino</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Gender:</strong></td>
              <td style="font-size: 20px;">Male</td>
            </tr>
          </table>
        </div>

        <div class="table-responsive col-md-4 table">
          <table style="border: none;">
            <tr>
              <td style="font-size: 25px;"><strong>Civil Status:</strong></td>
              <td style="font-size: 20px;">Single</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Hobbies:</strong></td>
              <td style="font-size: 20px;">Reading manga, watching anime, movies, TV series.</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Birth Place:</strong></td>
              <td style="font-size: 20px;">Sanchez Mira Cagayan</td>
            </tr>            
          </table>
        </div>

        <div class="table-responsive col-md-4 table">
          <table style="border: none;">
            <tr>
              <td style="font-size: 25px;"><strong>Address:</strong></td>
              <td style="font-size: 20px;">Blk 150 Lot 30 Fernandez St. Central Bocutan Tgauig City</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Email:</strong></td>
              <td style="font-size: 20px;">jjlord9@gmail.com</td>
            </tr>
            <tr>
              <td style="font-size: 25px;"><strong>Mobile No.:</strong></td>
              <td style="font-size: 20px;">09205653105</td>
            </tr>
          </table>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="skills">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Skills</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div>
         <h3 style="margin-top: 30px;">HTML</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 85%; height: 20px; background-color: blue;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
      </div>

       <div>
        <h3 style="margin-top: 30px;">PHP</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px; background-color: blue;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
        </div>
      </div>

      <div>
        <h3 style="margin-top: 30px;">MySQl</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px; background-color: blue;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
        </div>
      </div>

      <div>
        <h3 style="margin-top: 30px;">C Programming</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 85%; height: 20px; background-color: blue;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
      </div>

      <div>
        <h3 style="margin-top: 30px;">Java</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 80%; height: 20px; background-color: blue;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
      </div>

       <h2 class="page-section-heading text-center text-uppercase text-white" style="margin-top: 50px;">Languages</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div>
        <h3 style="margin-top: 30px;">English</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 80%; height: 20px; background-color: blue;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
      </div>
     
     <div>
        <h3 style="margin-top: 30px;">Filipino</h3>
        <div class="progress md-progress" style="height: 20px">
         
            <div class="progress-bar" role="progressbar" style="width: 100%; height: 20px; background-color: blue;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
        </div>
      </Filipino

    </div>
  </section>

   <section class="page-section" id="education">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Education</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <div style="margin-top: 30px;">
        <img class="masthead-avatar mb-3" style="border-radius: 50%; height: 100px; width: 100px;" src="img/PUP.png" alt="">
        <h3>Polytechnic University of the Philippines</h3>
           <div class="row" style="margin-left: 50px;">
            <div >
              <div class="row">
                <label class="col"><strong>From:</strong></label>
                <p class="col-8">2015</p>
              </div>
              <div class="row">
                <label class="col"><strong>To:</strong></label>
                <p class="col-8">2019</p>
              </div>
              <div class="row">
                <label class="col"><strong>Adress:</strong></label>
                <p class="col-8">Anonas Street, Sta. Mesa, Manila City.</p>
              </div>
              <div class="row">
                <label class="col"><strong>Remarks:</strong></label>
                <p class="col-8">Graduate.</p>
              </div>
              <div class="row">
                <label class="col"><strong>Course:</strong></label>
                <p class="col-8">Bachelor of Science in Information Technology</p>
              </div>
              <div class="row">
                <label class="col"><strong>Awards:</strong></label>
                <ul class="col-8">
                  <li>Best In Capstone (Top 3)</li>
                  <li>Outstanding excellence and performance as Scholar</li>
                  <li>Volunteer as IT facilitator for assisting voters using the iVOTE++ System in Philippine Heart Center  </li>
                </ul>
              </div>
              <div class="row">
                <label class="col"><strong>Scholarship:</strong></label>
                <ul class="col-8">
                  <li>Department of Science and Technology(DOST-JLSS) 2017-2019</li>
                  <li>City of Taguig Scholarship(LANI) 2015-2019</li>
                </ul>
              </div>
            </div>
        </div>
      </div>
      <div style="margin-top: 30px;">
        <img class="masthead-avatar mb-3" style="border-radius: 20%; height: 100px; width: 100px;" src="img/MRTHS.jpg" alt="">
        <h3>Maria Asuncion Rodriguez Tinga High School</h3>
           <div class="row" style="margin-left: 50px;">
            <div >
              <div class="row">
                <label class="col"><strong>From:</strong></label>
                <p class="col-8">2011</p>
              </div>
              <div class="row">
                <label class="col"><strong>To:</strong></label>
                <p class="col-8">2015</p>
              </div>
              <div class="row">
                <label class="col"><strong>Adress:</strong></label>
                <p class="col-8">Eduria street, Central Bicutan, Taguig City.</p>
              </div>
              <div class="row">
                <label class="col"><strong>Remarks:</strong></label>
                <p class="col-8">Graduate.</p>
              </div>
              <div class="row">
                <label class="col"><strong>Awards:</strong></label>
                <p class="col-8">Athlete of the Year.</p>
              </div>
            </div>
         </div>
      </div>
      <div style="margin-top: 30px;">
        <img class="masthead-avatar mb-3" style="border-radius: 50% height100px; width: 100px;" src="img/UBES.jpg" alt="">
        <h3>Upper Bicutan Elementary School</h3>
         <div class="row" style="margin-left: 50px;">
          <div >
            <div class="row">
              <label class="col"><strong>From:</strong></label>
              <p class="col-8">2009</p>
            </div>
            <div class="row">
              <label class="col"><strong>To:</strong></label>
              <p class="col-8">2011</p>
            </div>
            <div class="row">
              <label class="col"><strong>Adress:</strong></label>
              <p class="col-8">General Santos Avenue, Upper Bicutan, Taguig City.</p>
            </div>
            <div class="row">
              <label class="col"><strong>Remarks:</strong></label>
              <p class="col-8">Graduated.</p>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 30px;">
        <img class="masthead-avatar mb-3" style="border-radius: 50%; height: 100px; width: 100px;" src="img/APC.jpg" alt="">
        <h3>Allasitan Pamplona Elementry School</h3>
      
        <div class="row" style="margin-left: 50px;">
          <div >
            <div class="row">
              <label class="col"><strong>From:</strong></label>
              <p class="col-8">2005</p>
            </div>
            <div class="row">
              <label class="col"><strong>To:</strong></label>
              <p class="col-8">2009</p>
            </div>
            <div class="row">
              <label class="col"><strong>Adress:</strong></label>
              <p class="col-8"> Allasitan Pamplona Cagayan Valley</p>
            </div>
            <div class="row">
              <label class="col"><strong>Remarks:</strong></label>
              <p class="col-8">Transfered to another school in Metro Manila.</p>
            </div>
          </div>
        </div>
      </div>

   
    
    </div>
  </section>

   <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="projects">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Projects</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div>
        <h4>College</h4>
        <div style="margin-left: 30px;" class="row">
         
          <div class="col-sm-3">
           <img style="height: 100px; width: 90px; border-radius: 5%;" src="img/logo.png">
            <label>Find&Hire: Handyman Application System</label>
          </div>
          <div class="col-sm-3">
            <img style="height: 100px; width: 90px; border-radius: 5%;" src="img/PUP.png">
            <label>ThesisIT: Thesis Library MAnagement System</label>
          </div>
          <div class="col-sm-2" id="neda">
            <img style="height: 100px; width: 90px; border-radius: 5%;" src="img/PUP.png">
            <label>Payroll System</label>
          </div>
         
        </div>
        <h4>Internship</h4>
        <div style="margin-left: 30px;" class="row">
          <div class="col-sm-3">
            <img src="img/neda.jpg" style="height: 100px; width: 90px; border-radius: 5%;">
            <label>Website, Software, Applications Monitoring System</label>
          </div>
          
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Employment History</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div style="margin-top: 30px;">
        <h3>National Economic and Development Authority(NEDA)</h3>
      
        <div class="row" style="margin-left: 50px;">
          <div >
            <div class="row">
              <label class="col"><strong>Position:</strong></label>
              <p class="col-8">Intern</p>
            </div>
            <div class="row">
              <label class="col"><strong>Duration:</strong></label>
              <p class="col-8">3 months</p>
            </div>
            <div class="row">
              <label class="col"><strong>Date:</strong></label>
              <p class="col-8">January 2019 - March 2019</p>
            </div>
            <div class="row">
              <label class="col"><strong>Adress:</strong></label>
              <p class="col-8">Escriva Dr, San Antonio, Pasig, Metro Manila.</p>
            </div>
            <div class="row">
              <label class="col"><strong>Task:</strong></label>
              <p class="col-8">To create a Web application Using Laravel Framework.<a href="#neda">Website, Software, Applications Monitoring System.</a> </p>
            </div>
          </div>
        </div>
      </div>
   
     
    </div>
  </section>

   <section class="page-section bg-primary text-white mb-0" id="aboutThis">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About this Site</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
         <div class="row">
            <div class="col-lg-4 ml-auto">
              <p class="lead">This site is made to view my profile, it contains basic informations about me such as educational attainment, employments, projects and personal informations.</p>
            </div>
            <div class="col-lg-4 mr-auto">
              <p class="lead">I used Laravel framework to create this website and I also use bootstrap template from <a href="startbootstrap.com" style="color: black;">startbootstrap.com</a> so that I can implement this website faster for my employment.</p>
            </div>
          </div>
     
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Address</h4>
          <p class="lead mb-0">Block 150 Lot 30 Fernandez St. <br>Central Bicutan Taguig City</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/jayjlord9" target="_blank">
            <img src="img/facebook.png" class="img-fluid">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/jeyjereyjeyjey" target="_blank">
            <img src="img/twitter.png" class="img-fluid">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/j-lord-tolentino-a1b622174/" target="_blank">
            <img src="img/linkedin.png" class="img-fluid">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/tolentinojlord/" target="_blank">
            <img src="img/instagram.png" class="img-fluid">
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About</h4>
          <p class="lead mb-0">This site is made to view my profile, it contains basic informations about me such as educational attainment, employment history, projects and personal informations.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendorr/jquery/jquery.min.js"></script>
  <script src="vendorr/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendorr/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
</body>

</html>
