<?php include("includes/functions.php");
      forceHTTPS();
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Luong Dang Hai - Software Developer</title>
  <meta name="description" content="Hello, I’m a Software Developer & Machine Learning Hobbyist from Hanoi, Vietnam. I am studying a bachelor degree of Science and Engineering in Tampere University of Technology. I have spent 2 years in learning to program myself and I have experience in C#/C++/Python/Swift">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Facebook Open Graph Meta tags -->
  <meta name="og:image" content="https://luongdanghai.com/images/facebook_thumbnail.jpg">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="assets/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person.jpg" alt="">
                        </div>
                        <h3>Luong Dang Hai</h3>
                        <h5>Bachelor Student - Software Developer</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
                    <li><a href="https://github.com/jarvisluong" target="_blank"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="https://techynovice.wordpress.com/" target="_blank"><i class="fa fa-pencil fa-fw"></i>Blog</a> <!-- target _blank to open a new tab -->
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title">HI! I'm <span>Luong Dang Hai</span></h1>
                    <h2 class="home-subtitle">Bachelor Student - Tampere University of Technology - Software Developer</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Contact Me <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">Brief Introduction</h3>
                <p>Hello, I’m a Software Developer &amp; Machine Learning Hobbyist from Hanoi, Vietnam. I am studying a bachelor degree of Science and Engineering in Tampere University of Technology. <br />
                I have spent 2 years in learning to program myself and I have experience in C#/C++/Python/Swift</p>
                <a href="cv/MyCV.pdf" target="_blank" class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/person.jpg" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>
                <h5><span>Name :</span> Luong Dang Hai</h5>
                <h5><span>Age :</span> 18</h5>
                <h5><span>Phone :</span> +358 4175 49116</h5>
                <h5><span>Email :</span> contact@luongdanghai.com</h5>
                <h5><span>Address :</span> Tampere, Finland</h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/danghai.luong.b45" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/jarvisluong" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://fi.linkedin.com/in/hailuongdang1998" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="https://github.com/jarvisluong" class="btn-floating waves-effect waves-light white"><i class="fa fa-github"></i></a>
                  </li>
                  <li>
                    <a href="https://techynovice.wordpress.com" class="btn-floating waves-effect waves-light white"><i class="fa fa-wordpress"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">I have past valuable time self-learning and currently study experience in a Technical University. That makes me feel confident in using a lot of programming languages.</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">Python</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="60%">
                            <div class="skill-visiable">
                              <span class="skill-title">JavaScript</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">60%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="70%">
                            <div class="skill-visiable">
                              <span class="skill-title">C#</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">70%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="75%">
                            <div class="skill-visiable">
                              <span class="skill-title">C++</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">75%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="80%">
                            <div class="skill-visiable">
                              <span class="skill-title">Swift</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">80%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="90%">
                            <div class="skill-visiable">
                              <span class="skill-title">HTML</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">90%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="65%">
                            <div class="skill-visiable">
                              <span class="skill-title">CSS</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">65%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="60%">
                            <div class="skill-visiable">
                              <span class="skill-title">PHP</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">60%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">Git</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="80%">
                            <div class="skill-visiable">
                              <span class="skill-title">Bootstrap</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">80%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">Experience</h2>
                      <p class="regular-text">I have experience in programming both in academic computational programming and software engineering.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">November 2016 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/tut.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Researcher Trainee - Programmer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Tampere University of Technology</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Researcher Trainee - Programmer<i class="mdi-navigation-close right"></i></span>
                                  <p>Tampere University of Technology</p>
                                </div>
                                <p class="rev-content">
                                  Use C++ to develop a library in C++ that supports banded matrixes to apply Arnoldi iteration. 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2013 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/home-bg.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Hobbyist Programmer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Self Employed</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Hobbyist Programmer<i class="mdi-navigation-close right"></i></span>
                                  <p>Self Employed</p>
                                </div>
                                <p class="rev-content">
                                  In my free time, I have a lot of hobby project in many languages (Python, C++, C#, Javascript). This is my github link: https://github.com/jarvisluong. 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">December 2015 - June 2016</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/ivmun.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>International Vietnam Model United Nations (IVMUN)</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>International Vietnam Model United Nations (IVMUN)</p>
                                </div>
                                <p class="rev-content">
                                  I was responsible for designing and maintaining the website for this organization, which is one of the most reputable Model United Nations conference team in Vietnam.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp exp-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">education</h2>
                      <p class="regular-text">This is the section of my academic background.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                          
                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2016 - Now</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/tut.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Tampere University of Technology</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Tampere University of Technology</p>
                                </div>
                                <p class="rev-content">
                                  This is one of the most reputable technical universities in Finland. The students are able to focus on their interest during their studies. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2013 - 2016</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="https://upload.wikimedia.org/wikipedia/vi/9/9d/PTTHCNN_logo.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">High School Diploma<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Foreign Language Specialized School - Vietnam</p>
                              </div>
                              <!-- Reveal content-->
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">High School Diploma<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Foreign Language Specialized School - Vietnam</p>
                                </div>
                                <p class="rev-content">
                                  This is one of the most reputable high school in Vietnam. Beside studying English as the major subject, the students are given a lot of chance to participate and organize extra-curricular activities. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education end -->

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- #resume Section end -->


    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
                    <p class="regular-text">Tampere, Finland</p>
                    <ul class="clearfix contact-info">
                      <li><a href="tel:358417549116">+358 4175 49116</a>
                      </li>
                      <li> <!-- prevent E-mail from being automatedly scanned and being spammed -->
                        <script type="text/javascript">
                          var first = 'contact';
                          var last = 'luongdanghai.com'
                          document.write('<a href="mailto:'+first + '@' + last+'">'+first + '@' + last+'<\/a>');
                        </script>
                      </li>
                      <li><a href="#home">www.luongdanghai.com</a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Contact Form start -->
                  <div class="col-sm-12">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="#" id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box">
                          <label for="contact_name" class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box">
                          <label for="subject" class="input-label">Subject</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Message</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="https://www.facebook.com/danghai.luong.b45" target="_blank" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://fi.linkedin.com/in/hailuongdang1998" target="_blank" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="https://twitter.com/jarvisluong" target="_blank" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="https://github.com/jarvisluong" target="_blank" class="tooltips tooltipped github" data-position="top" data-delay="50" data-tooltip="Github"><i class="fa fa-github"></i></a>
                </li>
                <li><a href="https://techynovice.wordpress.com" target="_blank" class="tooltips tooltipped wordpress" data-position="top" data-delay="50" data-tooltip="Wordpress"><i class="fa fa-wordpress"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>Luong Dang Hai &copy;2017 All Rights Reserved</p>
                <p><a href="privacypolicy.htm" target="_blank">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/detectmobilebrowser.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/libs/materialize/js/materialize.min.js"></script>
  <script src="assets/libs/jwplayer/jwplayer.js"></script>
  <script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>