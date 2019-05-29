<?php
include "config.php";
?>
<!DOCTYPE html>
  <html>
    <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <meta charset="utf-8">
      <meta name="description" content="portfolio redazahidi"/>
      <meta name="keywords" content="HTML, portfolio,">
      
      <title>PORTEFOLIO-REDAZAHIDI</title>

       <!-- CSS  -->      
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="css/default-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      <!-- Main css File -->
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    .langue p{
font-size: 20px;
}

    </style>
    </head>

    <body>
      <!-- COMMENCER PRELOADER -->         
      <div id="preloader">        
        <div class="progress">
          <div class="indeterminate"></div>
        </div>        
      </div>
      <!-- FIN PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <!-- LOGO -->

                <!--LOGO À BASE DE TEXTE -->
                <a href="index.php" class="brand-logo">Zahidi Reda</a>

                 <!-- <a href="index.html" class="brand-logo"><img src="img/logo.jpeg" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="#about"><?php echo $lang['title1']; ?></a></li>
                  <li><a href="#resume"><?php echo $lang['title2']; ?></a></li>
                  <li><a href="#portfolio"><?php echo $lang['title3']; ?></a></li>
                  <li><a href="#footer"><?php echo $lang['title4']; ?></a></li>
                  <!-- <li><a href="login.php"><?php echo $lang['title5']; ?></a></li> -->
                </ul>
          
                <!-- Pour la vue mobile -->
                <ul id="slide-out" class="side-nav menu-scroll">
                  <li><a href="#about"><?php echo $lang['title1']; ?></a></li>
                  <li><a href="#resume"><?php echo $lang['title2']; ?></a></li>
                  <li><a href="#experience"><?php echo $lang['title3']; ?></a></li>
                  <li><a href="#footer"><?php echo $lang['title4']; ?></li>
                  <!-- <li><a href="login.php"><?php echo $lang['title5']; ?></a></li> -->
                </ul>
                
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>  
      </header>
      <div class="main-wrapper">
        <main role="main">

          <!-- Commencer la section Home -->

          <section id="home">
            <div class="overlay-section">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="home-inner">
                      <h1 class="home-title"><?php echo $lang['salut']; ?><span>REDA ZAHIDI</span></h1>
                      <p><?php echo $lang['suis']; ?></p>
                      <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#footer"><?php echo $lang['recrut'];?> <i class="mdi-content-send left"></i></a>

                      <!-- bouton vers à propos de moi  -->

                      <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>    
                      
                      
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>

          <!-- COMMENCER LA SECTION a PROPOS DE MOI -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <div class="col s12 m4 l3">
                        <div class="about-inner-left">
                          <img class="profile-img" src="img/profile-img1.jpg" alt="Profile Image">
                        </div>
                      </div>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <h3><?php echo $lang['titre']; ?></h3>
                          <p><?php echo $lang['script']; ?></p>

                          <div class="personal-information col s12 m12 l6">
                            <h3><?php echo $lang['titre1']; ?></h3>
                            <ul>
                              <li><span><?php echo $lang['nom']; ?></span>REDA ZAHIDI </li>
                              <li><span>Age : </span>23 Years</li>
                              <li><span>Phone : </span>0614967048</li>
                              <li><span>Email : </span>Redazahidi96@gmail.com</li>
                              <li><span>Address : </span>Mohamadi,20 Avenue Mohammed V. Youssoufia</li>
                            </ul>
                          </div>
                          <div class="resume-download col s12 m12 l6">
                            <a href="REDA ZAHIDI CV.pdf" target="" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> <?php echo $lang['cv']; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Start Resume -->

          <section id="resume">

            <!-- COMMENCER COMPÉTENCE -->

            <section id="skill">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title"><?php echo $lang['title6']; ?></h2>
                 
                  <!-- Démarrer la barre de progression des compétences -->

                  <div class="skill-progress-bar">
                    <span>Html5</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="50"></div>
                    </div>
                    <span>css</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="90" data-pro-bar-delay="50"></div>
                    </div>
                    <span>Photoshop</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="80" data-pro-bar-delay="50"></div>
                    </div>
                    <span>Illustrator</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="70" data-pro-bar-delay="60"></div>
                    </div>
                    <span>javascript</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="50"></div>
                    </div>
                    <span>bootstrap</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-50 color-amethyst" data-pro-bar-percent="50" data-pro-bar-delay="60"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!--COMMENCER EXPERIENCE-->

            <section id="experience">
              <div class="container">
                <div class="experience-inner">
                  <h2 class="title">Experience</h2>
                  <p> <?php echo $lang['script1']; ?></p>
                  <div id="owl-carousel" class="experience-slider row">

                    <!--Commencer la partie Experience -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><?php echo $lang['date1']; ?></h2>
                          <img class="activator" src="img/ban.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Application MObile<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Android Phone</a></p>
                        </div>
                      </div>
                    </div>

                    <!-- Commencer la partie Experience -->


                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><?php echo $lang['date1']; ?></h2>
                          <img class="activator" src="img/cinq.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Site Web<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">YOUCODE</a></p>
                        </div>
                      </div>
                    </div>

                    <!--  Commencer la partie Experience -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><?php echo $lang['date1']; ?></h2>
                          <img class="activator" src="img/Cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">site portfolio<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">projet</a></p>
                        </div>
                      </div>
                    </div> 

                    <!--  Commencer la partie Experience -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><?php echo $lang['date1']; ?></h2>
                          <img class="activator" src="img/hack.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><?php echo $lang['discri']; ?><i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Evenement</a></p>
                        </div>
                      </div>
                    </div> -->
                   
                  <!-- owl navigation -->              
            </section>

            <!--  Commencer la partie Education -->

            <section id="edcuation">
              <div class="container">
                <div class="education-inner">
                  <h2 class="title">Education</h2>
                  <p></p>
                  <div id="owl-carousel1" class="experience-slider row">

                    <!--  Commencer la partie Education -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2015 - 2016</h2>
                          <img class="activator" src="img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><?php echo $lang['discri3']; ?> <i class="material-icons right">more_vert</i></span>
                          <p><a href="#">lycée technique jaber ben hayan Youssoufia </a></p>
                        </div>
                      </div>
                    </div>

                    <!--  Commencer la partie Education -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2017 - 2018</h2>
                          <img class="activator" src="img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><?php echo $lang['discri4']; ?><i class="material-icons right">more_vert</i></span>
                          <p><a href="#"><?php echo $lang['discri5']; ?></a></p>
                        </div>
                      </div>
                    </div>

                    <!--  Commencer la partie Education -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2018- présent</h2>
                          <img class="activator" src="img/download.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><?php echo $lang['discri6']; ?><i class="material-icons right">more_vert</i></span>
                          <p><a href="#"><?php echo $lang['discri7']; ?></a></p>
                        </div>
                      </div>
                    </div>

                    <!--  Commencer la partie Education -->

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2020</h2>
                          <img class="activator" src="img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">développeur Web and mobile<i class="material-icons right">more_vert</i></span>
                          <p><a href="#"><?php echo $lang['discrip0']; ?></a></p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </section>
          <!-- Start Portfolio -->
          <section id="portfolio">
            <div class="portfolio-top">
              <div class="container">
                <div class="portfolio-top-inner">
                   <h2 class="title">projets</h2>
                   <div class="controls">  
                    <button class="filter waves-effect waves-light btn" data-filter="all">All</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".html">HTMl</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".design">Design</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".fashion">Gallery</button>
                </div>
              </div>
            </div>
            </div>
            <div class="portfolio-bottom">
              <div class="container">
                <div class="portfolio-bottom-inner">
                  <div id="portfolio-list">                    
                    <div class="mix html" data-value="2">
                      <a href="img/portfolio/html/html-2.jpg">
                        <img src="img/portfolio/html/html-2.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix fashion" data-value="4">
                      <a href="img/portfolio/fashion/reda.jpg">
                        <img src="img/portfolio/fashion/reda.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>           
                      </a>
                    </div>
                    <div class="mix design" data-value="1">
                      <a href="img/portfolio/design/des2.jpg">
                        <img src="img/portfolio/design/des2.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix html" data-value="5">
                      <a href="img/portfolio/html/html-1.jpg">
                        <img src="img/portfolio/html/html-1.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix fashion" data-value="3">
                      <a href="img/portfolio/fashion/reda2.jpg">
                        <img src="img/portfolio/fashion/reda2.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix design" data-value="9">
                      <a href="img/portfolio/design/des.jpg">
                        <img src="img/portfolio/design/des.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix html" data-value="12">
                      <a href="img/portfolio/html/html-3.jpg">
                        <img src="img/portfolio/html/html-3.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>

                    <div class="mix design" data-value="6">
                      <a href="img/portfolio/design/des3.jpg">
                        <img src="img/portfolio/design/des3.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix html" data-value="12">
                      <a href="img/portfolio/html/Capture.PNG">
                        <img src="img/portfolio/html/Capture.PNG" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Facts -->
          <section id="facts">
            <div class="facts-overlay">
              <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="facts-inner">
                    <div class="row">
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">work</i>
                          <span class="counter">10</span>
                          <span class="counter-text"><?php echo $lang['discri8']; ?></span>
                        </div>
                      </div>
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">supervisor_account</i>
                          <span class="counter">12</span>
                          <span class="counter-text"><?php echo $lang['discri9']; ?></span>
                        </div>
                      </div>
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">redeem</i>
                          <span class="counter">3</span>
                          <span class="counter-text"><?php echo $lang['conteur']; ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>
        
          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Contact</h2>
                      <a href="https://www.facebook.com/reda.berrada.315" target="_blank"><i class="fa fa-facebook-square fa-2x color-facebook style_i" ></i></a>
                      <a href="https://github.com/Zahidi-reda" target="_blank"><i class="fa fa-github-square fa-2x color-github style_i"></i></a>
                      <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin-square fa-2x color-linkedin style_i" ></i></a>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">


                              <form action="contact.php" method="post">
                              
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactName" id="contact-name">
                                  <label class="input-label" for="contact-name">Name</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="contactEmail" id="email">
                                  <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="contactSubject" id="subject">
                                  <label class="input-label" for="subject">Subject</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="contactMessage" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Message</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit" name="submit">send message</button>
                              </form>
                            </div>
                          </div>
                          <div class="col s12 m6 l6">
                            <div class="contact-map">
                             <img class="photo" src="img/Capture.PNG" alt="mps">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="langue">
                  <ul>
                    <a href="index.php?lang=fr"><img width=3% height=3%  src="img/flagfr.png"></a>
                    <a href="index.php?lang=en"><img width=3% height=3% src="img/flag-en.png"></a>
                  </ul>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-inner">
                      <!-- Bottom to Up Btn -->
                      <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </main>
      </div>
     



      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Skill Progress Bar -->
      <script src="js/appear.min.js" type="text/javascript"></script>
      <script src="js/pro-bars.min.js" type="text/javascript"></script>
      <!-- Owl slider -->      
      <script src="js/owl.carousel.min.js"></script>    
      <!-- Mixit slider  -->
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>     

      <!-- Custom Js -->
      <script src="js/custom.js"></script>      
    </body>
  </html>