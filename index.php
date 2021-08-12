<?php
ob_start();
session_start();
// $to      = 'nobody@example.com';
// $subject = 'the subject';
// $message = 'hello';
// $headers = 'From: webmaster@example.com' . "\r\n" .
//     'Reply-To: webmaster@example.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);
if(isset($_POST['send-mail'])){
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // $emailErr = $subjectErr = $messageErr = "";

  if($email == ""){
    $emailErr = "Please enter your email address";
  }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }else{
    $emailValue = $email;
  }
  if($subject == ""){
    $subjectErr = "Please enter your name";
  }else{
    $subjectValue = $subject;
  }
  if($message == ""){
    $messageErr = "Please enter your message";
  }else{
    $messageValue = $message;
  }

  if(isset($emailErr) or isset($subjectErr) or isset($messageErr)){
    $errorOccur = 1;
  }else{
     ini_set('display_errors', 1);
     error_reporting(E_ALL);
     
    $from = $email;
    $to      = 'emran9704@gmail.com';
    $subjects = $subject;
    $messages = $message;
    $headers = 'From: '.$from ;

    mail($to, $subjects, $messages, $headers);
    
    
    $from = 'emran9704@gmail.com';
    $to      = $email;
    $subjects = 'Developer Emran Portfolio';
    $messages = $subject . ', your message has been received, I will contact you soon.';
    $headers = 'From: '.$from;

    mail($to, $subjects, $messages, $headers);
    ?>
    
    
    <?php
    $_SESSION['message'] = '<span class="alert alert-success" >Please check your email inbox for feedback. Please also check your email spam folder.</span>';
    header("Location: index.php");
  }
  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Font-->

  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,700,700i,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- link for fav icon  -->
  <link rel="shortcut icon" href="./img/icon/blue-e-md.png" type="image/x-icon">

  <!-- Animate Css -->
  <link rel="stylesheet" href="css/animateCSS/animate.min.css">

  <!-- link for font awesome -->
  <link rel="stylesheet" href="css/font_awesome-5/font-awesome5.15.1cssall.min.css">

   <!-- link for font bootstrap css-->
  <link rel="stylesheet" href="./css/bootstrap-5/bootstrap.min.css">

  <!--  -->
  <link rel="stylesheet" href="./css/filterMagnify/1.1.0jquery.magnific-popup.min.css">

  <!-- link for main css file -->
  <link rel="stylesheet" href="css/style.css">
  <title>Portfolio</title>

  <!-- Designed by Emran Hasan -->

</head>

<body>
    <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            
        }
    
    ?>
  <!-- Shuttle Part -->

  <div class="toTop magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Back To Top">
    <i class="fas fa-space-shuttle"></i>
  </div>

  <!-- nav part -->

  <section>
    <div class="navDiv fixed-top">

      <nav class="navbar navbar-expand-md d-md-none navbar-dark ">

        <div class="container-fluid">

          <div class="navbg">

            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

            <a style="height: 50px; width: 40px; margin-left: 15px; overflow: hidden;" class="navbar-brand" href="#"><img style="height: 100%; width: 100%; border-radius: 50%;" class="img-fluid" src="./img/myPic/p.jpg" alt=""></a>


            <!-- icon -->
            <ul class="list-inline mt-3 me-2" >
              <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x me-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x me-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x me-2"></i> </a> </li>
              <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
            </ul>
            <!-- btn -->
            <div class="navIcon">
              <div class="nav1"></div>
              <div class="nav2"></div>
              <div class="nav3"></div>
            </div>

          </div>

          <!-- navbar -->

          <div class="w-100 text-light menuBg" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="nav2">

              <li class="nav-item active2">
                <a class="nav-link" aria-current="page" href="#mainPart">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutMe">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#educationPart" tabindex="-1" aria-disabled="true">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicePart" tabindex="-1" aria-disabled="true">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolioPart" tabindex="-1" aria-disabled="true">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactPart" tabindex="-1" aria-disabled="true">Contact</a>
              </li>
              
            </ul>

          </div>

        </div>

      </nav>

    </div>

  </section>

  <!-- sidebar part body part -->

  <section>
    <div class="row g-0">

      <!-- sidebar part -->

      <div class="d-none col-md-3 d-md-block position-fixed sidebar">

        <aside>

          <div class="sidebarImg">
            <img src="./img/myPic/p.jpg" alt="">
          </div>

          <div class="name">
            <h3 class="changeColor magic-cursor">Developer Emran</h3>
          </div>

          <ul id="nav">
            <li class="active"><a class="magic-cursor" href="#mainPart">Home</a></li>
            <li><a class="magic-cursor" href="#aboutMe">About</a></li>
            <li><a class="magic-cursor" href="#educationPart">Education</a></li>
            <li><a class="magic-cursor" href="#servicePart">Services</a></li>
            <li><a class="magic-cursor" href="#portfolioPart">Portfolio</a></li>
            <li><a class="magic-cursor" href="#contactPart">Contact</a></li>
          </ul>

          <div class="sidebarIcon">
            <ul class="list-inline" >
              <li class="list-inline-item"> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x"></i> </a> </li>
              <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x"></i> </a> </li>
              <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x"></i> </a> </li>
              <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x"></i> </a> </li>
            </ul>
          </div>

        </aside>
      </div>

      <!-- Body part -->

      <div id="mainPart" class="col-md-9 offset-md-3 overflow-hidden">
        <!-- bg section -->
          <div class="mainBg">
            <div class="mainBgImg mainBgImg2">

                <div class=" opa mt-sm-5">
                  <!-- <center><div class="midBgImg d-md-none d-sm-block">
                    <img src="./img/myPic/copy.JPG" alt="">
                  </div></center> -->

                  <div class="midBgImg d-md-none d-sm-block">
                    <img src="./img/myPic/copy.JPG" alt="">
                  </div>
                    
                    
                    <div class="bgText1">
                      <h2 class="changeColor">Welcome</h2>
                    </div>
    
                    <div class="bgText2">
                      <h3 class="display">Emran <span class="changeColor">Hasan</span></h3>
                    </div>
    
                    <div class="bgText3">
                      <h4 id="example" class="typewriter"><span class=""></span></h4>
                    </div>

                    <div class="hire">
                      <a class="magic-cursor" href="#contactPart">Hire Me</a>
                    </div>

                    <div class="wrapper">
                        <div class="arrow">
                            <a class="magic-cursor" href="#aboutMe"><i class="fas fa-angle-double-down icon"></i></a>
                        </div>
                    </div>

                </div>

            </div>
          </div>

          <!-- About Me Part -->

            <div class="about wow animate__animated animate__fadeInUp" id="aboutMe">
              <div class="row container aboutDiv">

                <!-- left section -->
                  <div class="col-xl-5 col-12 wow animate__animated animate__fadeInLeft">
                      <div class="bio">
                          <span class="changeColor">Biography</span>
                          <h3>About Me</h3>
                      </div>

                      <div class="imgDiv">
                       
                        <div class="img1 animate__animated animate__fadeInLeft">

                          <div class="myBorder"></div>

                            <img class="mp1" id="jpg36" src="./img/myPic/IMG_20210514_191744.jpg" alt="">

                            <div class="ab"></div>
                            
                        </div>
                        
                      </div>

                  </div>
                  <!--  -->
                  <!-- right section -->
                  <div class="col-xl-7 col-12 wow animate__animated animate__fadeInRight">
                      <div class="aboutLeft">
                          <div class="aboutLeftTitle">
                              <h3 id="example2" class="typewriter">
                                <label>I'm Emran Hasan and</label>
                                <span class=""></span>
                              </h3>

                              <div class="aboutRightText">
                                <p>Hi! My name is <span class="changeColor magic-cursor">Emran Hasan</span>. I am a Web designer and Web Developer, and I'm very passionate and dedicated to my work. With 05 years experience as a professional Web designer and Web developer, I have acquired the skills and knowledge necessary to make your project a success.</p>
                                </div>
                          </div>

                          <!-- last part of left part-->
                          
                          <div class="myIntro">
                              <div class="intro">
                                  <ul>

                                    <li>
                                      <i class="fas fa-gift"></i>
                                      <span>
                                        <label>Birthday:</label>
                                        03.11.1998
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-calendar-alt"></i>
                                      <span>
                                        <label>Age:</label>
                                        23
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-map-marker-alt"></i>
                                      <span>
                                        <label>Location:</label>
                                        Uttara, Dhaka, Bangladesh
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-gamepad"></i>
                                      <span>
                                        <label>Interests:</label>
                                        Playstation, Reading, Traveling
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-user-graduate"></i>
                                      <span>
                                        <label>Study:</label>
                                        Bangladesh University
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-graduation-cap"></i>
                                      <span>
                                        <label>Degree:</label>
                                        Diploma Engineering
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-phone-alt"></i>
                                      <span>
                                        <label>Phone:</label>
                                        +09638511638
                                        +8801766989707
                                      </span>
                                    </li>

                                    <li>
                                      <i class="fas fa-envelope"></i>
                                      <span>
                                        <label>Mail:</label>
                                        emranhasan@aol.com
                                      </span>
                                    </li>

                                  </ul>

                              </div>

                              
                                <div class="cv magic-cursor">
                                    <a href="img/Cv/Md.Al_Emranul_Hasan.pdf" download>Download CV</a>
                                </div>

                          </div>

                          <!--  -->

                      </div>
                  </div>
              </div>
            </div>

            <!-- Education Section -->

            <div class="academic wow animate__animated animate__fadeInUp" id="educationPart">
                <div class="education">

                      <div class="row eduTitle container wow animate__animated animate__fadeInLeft">
                        <span class="changeColor">Academic</span>
                        <h3>Education</h3>
                      </div>
                      
                      <div class="row container boxEdu wow animate__animated animate__fadeInUp">

                          <div class="col-10 col-md-5 jdc offset-1 wow animate__animated animate__fadeInUp">
                              <span>Appear</span>
                              <h2>BSC In CSE</h2>
                              <label>Bangladesh University</label>
                              <h6>Appear BSC In CSE</h6>
                              <p>
                                Result: Appear <br>
                                Session: Appear
                              </p>
                          </div>

                          <div class="col-10 col-md-5 jdc offset-1 wow animate__animated animate__fadeInUp">
                              <span>2014-2015</span>
                              <h2>Diploma In Computer</h2>
                              <label>BIIT,(Bogra)</label>
                              <h6>Completed Diploma In Computer</h6>
                              <p>
                                Result: GPA 3.72 out of 4.00 <br>
                                Session: 2014-2015 <br>
                                Board: Technical <br>
                              </p>
                          </div>

                          <div class="col-10 col-md-5 jdc offset-1 wow animate__animated animate__fadeInUp">
                              <span>2013-2014</span>
                              <h2>Science</h2>
                              <label>Sayedpur Dakhil Madrasah</label>
                              <h6>Completed SSC</h6>
                              <p>
                                Result: GPA 4.88 out of 5.00 <br>
                                Session: 2013-2014 <br>
                                Board: Madrasah <br>
                              </p>
                          </div>

                          <div class="col-10 col-md-5 jdc offset-1 wow animate__animated animate__fadeInUp">
                              <span>2012</span>
                              <h2>Madrasah</h2>
                              <label>Sayedpur Dakhil Madrasah</label>
                              <h6>Completed JDC</h6>
                              <p>
                                Result: GPA 3.89 out of 5.00 <br>
                                Session: 2012 <br>
                                Board: Madrasah <br>
                              </p>
                          </div>

                      </div>
                  
                </div>
            </div>

            <!-- Services Section -->

            <div class="quality wow animate__animated animate__fadeInUp" id="servicePart">

              <div class="servicesQ">
                  <div class="row servicesTitleQ container wow animate__animated animate__fadeInUp">
                    <span class="changeColor">Services</span>
                    <h3>Quality Services</h3>
                  </div>

                  <div class="row container services2ndP wow animate__animated animate__fadeInUp">

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5 offset-1 firstServices wow animate__animated animate__fadeInRight">

                      
                      <i class="fas fa-edit changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Web Design</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5  offset-1 firstServices wow animate__animated animate__fadeInRight">

                      <i class="fas fa-laptop-code changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Web Development</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5  offset-1 firstServices wow animate__animated animate__fadeInUp">

                      <i class="far fa-lightbulb changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Creative Design</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5 offset-1 firstServices wow animate__animated animate__fadeInRight">

                      <i class="far fa-image changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Adobe Photoshop</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5 offset-1 firstServices wow animate__animated animate__fadeInRight">

                      <i class="far fa-eye changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Adobe Illustrator</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                    <div class="col-10 col-xl-3 col-md-5 col-lg-5 offset-1 firstServices wow animate__animated animate__fadeInRight">

                      <i class="fas fa-share-alt changeColor magic-cursor"></i>
                      <h3 class="magic-cursor">Social Media</h3>
                      <p class="lead">Web design is a similar process of creation, with the intention of presenting...</p>

                    </div>

                  </div>

                  <div class="row text-center mt-5 container contactServiceMe">
                      <p class="wow animate__animated animate__fadeInRight">Are you interested in working with me? <a class="magic-cursor" href="#contactPart"> Let's started now</a></p>
                  </div>

              </div>

            </div>

            <!-- Skills Section -->

            <div class="skillsSection">

              <div class="row skillsTitle container">
                <span class="changeColor">skills</span>
                <h3>My Work Skills</h3>
              </div>

              <div class="row container skills">

                  <div class="col-11 col-md-5 offset-1 mb-3 mb-md-0 skills-1">

                    <!-- progress-1 Html-->

                      <div class="html">

                            <div class="progressTitle">
                                <p>HTML</p>
                                <label class="fw-700"><span class="wow counter">80</span>%</label>
                            </div>

                            <div class="progress mt-2">

                                <div class="progress-bar-html" role="progressbar" aria-valuenow= "80" aria-valuemin= "0" aria-valuemax="100">

                                    <div class="wow skillsAnimate"></div>

                            </div>

                        </div>

                      </div>

                       <!-- progress-2 css-->

                    <div class="css">

                        <div class="progressTitle">
                            <p>CSS</p>
                            <label class="fw-700"><span class="wow counter">70</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-css" role="progressbar" aria-valuenow= "70" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                             </div>

                          </div>

                    </div>

                       <!-- progress-3 Bootstrap -->

                    <div class="bootstrap">

                        <div class="progressTitle">
                            <p>Bootstrap</p>
                            <label class="fw-700"><span class="wow counter">65</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-bootstrap" role="progressbar" aria-valuenow= "65" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                             </div>

                          </div>

                    </div>

                       <!-- progress-4 JavaScript -->

                    <div class="javaScript">

                        <div class="progressTitle">
                            <p>JavaScript</p>
                            <label class="fw-700"><span class="wow counter">55</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-javaScript" role="progressbar" aria-valuenow= "55" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                             </div>

                          </div>

                    </div>

                       <!-- progress-5 JQuery -->

                    <div class="jquery">

                        <div class="progressTitle">
                            <p>JQuery</p>
                            <label class="fw-700"><span class="wow counter">70</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-jquery" role="progressbar" aria-valuenow= "70" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                             </div>

                          </div>

                    </div>

                       <!-- progress-6 php -->

                    <div class="php">

                        <div class="progressTitle">
                            <p>PHP</p>
                            <label class="fw-700"><span class="wow counter">50</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-php" role="progressbar" aria-valuenow= "50" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                             </div>

                          </div>

                    </div>

                    <!-- col-5 div -->
                  </div>

                  <!-- 2nd side -->

                  <div class="col-11 col-md-5 offset-1 skills-2">

                       <!-- progress-7 mySQL -->

                    <div class="mySQL">

                        <div class="progressTitle">
                            <p>mySQL</p>
                            <label class="fw-700"><span class="wow counter">60</span>%</label>
                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar-mySQL" role="progressbar" aria-valuenow= "60" aria-valuemin= "0" aria-valuemax="100">

                                <div class="wow skillsAnimate"></div>

                            </div>

                          </div>

                    </div>

                       <!-- progress-8 laravel-->

                    <div class="laravel">

                      <div class="progressTitle">
                          <p>Laravel</p>
                          <label class="fw-700"><span class="wow counter">5</span>%</label>
                      </div>

                      <div class="progress mt-2">

                          <div class="progress-bar-laravel" role="progressbar" aria-valuenow= "5" aria-valuemin= "0" aria-valuemax="100">

                              <div class="wow skillsAnimate"></div>

                           </div>

                        </div>

                    </div>

                       <!-- progress-9 json-->

                    <div class="json">

                      <div class="progressTitle">
                          <p>JSON</p>
                          <label class="fw-700"><span class="wow counter">5</span>%</label>
                      </div>

                      <div class="progress mt-2">

                          <div class="progress-bar-json" role="progressbar" aria-valuenow= "5" aria-valuemin= "0" aria-valuemax="100">

                              <div class="wow skillsAnimate"></div>

                           </div>

                        </div>

                    </div>

                       <!-- progress-10 AJAX-->

                    <div class="ajax">

                      <div class="progressTitle">
                          <p>AJAX</p>
                          <label class="fw-700"><span class="wow counter">5</span>%</label>
                      </div>

                      <div class="progress mt-2">

                          <div class="progress-bar-ajax" role="progressbar" aria-valuenow= "5" aria-valuemin= "0" aria-valuemax="100">

                              <div class="wow skillsAnimate"></div>

                           </div>

                        </div>

                    </div>

                       <!-- progress-11 Rest API-->

                    <div class="restApi">

                      <div class="progressTitle">
                          <p>Rest API</p>
                          <label class="fw-700"><span class="wow counter">5</span>%</label>
                      </div>

                      <div class="progress mt-2">

                          <div class="progress-bar-restApi" role="progressbar" aria-valuenow= "5" aria-valuemin= "0" aria-valuemax="100">

                              <div class="wow skillsAnimate"></div>

                           </div>

                        </div>

                    </div>

                       <!-- progress-12 Rest react-->

                    <div class="react">

                      <div class="progressTitle">
                          <p>React</p>
                          <label class="fw-700"><span class="wow counter">5</span>%</label>
                      </div>

                      <div class="progress mt-2">

                          <div class="progress-bar-react" role="progressbar" aria-valuenow= "5" aria-valuemin= "0" aria-valuemax="100">

                              <div class="wow skillsAnimate"></div>

                          </div>

                        </div>

                    </div>


                    <!-- col-5 div wnd part -->
                  </div>

              </div>

            </div>

            <!-- portfolio part -->

            <div class="portfolioSection  wow animate__animated animate__fadeInLeft" id="portfolioPart">
                <div class="innerPortfolioSection">

                  <!-- title -->

                      <div class="row portfolioTitle container  wow animate__animated animate__fadeInRight">
                        <span class="changeColor">Portfolio</span>
                        <h3>Featured Works</h3>
                      </div>

                  <!-- filter part -->

                  <div class="filter  wow animate__animated animate__fadeInRight">

                      <ul class="controls">
                        <li class="filterBtn active magic-cursor" data-filter="all">All</li>
                        <li class="filterBtn magic-cursor" data-filter="CSS">CSS</li>
                        <li class="filterBtn magic-cursor" data-filter="Bootstrap">Bootstrap</li>
                        <li class="filterBtn magic-cursor" data-filter="JavaScript">JavaScript</li>
                        <li class="filterBtn magic-cursor" data-filter="JQuery">JQuery</li>
                        <li class="filterBtn magic-cursor" data-filter="PHP">PHP</li>
                        <li class="filterBtn magic-cursor" data-filter="Laravel">Laravel</li>
                      </ul>

                  </div>

                    <!-- feature work -->

                      <div class="row gallery container pImagePart">
                        
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image CSS  wow animate__animated animate__fadeInRight">
                            <!-- 1st image part -->
                              <div class="card portCard">

                                <div class="imgDiv2 cssimg1">
                                  <div class="inner1ImgDiv2">
                                      <a class="magic-cursor" href="https://github.com/Freelancer-Emran/01-HTML-CSS/tree/master/Website/Site-1" target="_blank">Github</a>
                                  </div>
                  
                                  <div class="inner2ImgDiv2">
                                      <a class="magic-cursor" href="https://freelancer-emran.github.io/01-HTML-CSS/Website/Site-1/" target="_blank">Live</a>
                                  </div>
                                </div>

                                <div class="card-body">
                                  <div class="card-title">
                                      <h5 class="magic-cursor">Slider Website</h5>
                                  </div>

                                  <div class="useLang">
                                    <span>HTML5</span>
                                    <span>CSS3</span>
                                  </div>
                                </div>
                              </div>

                            <!-- col-4 part -->
                          </div>

                          <!-- 2nd image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image CSS  wow animate__animated animate__fadeInRight">

                            <div class="card portCard">

                              <div class="imgDiv2 cssimg2">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Psd_To_Html_Blogin_Project" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Psd_To_Html_Blogin_Project/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Blogin Project</h5>
                                </div>

                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                </div>
                              </div>
                            </div>

                            <!--  -->
                          </div>

                          <!-- 3rd image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image CSS  wow animate__animated animate__fadeInRight">
                            <div class="card portCard">

                              <div class="imgDiv2 cssimg3">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Psd_To_Html_Fedelicious_Project" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Psd_To_Html_Fedelicious_Project/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Fedelecius Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 4th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image Bootstrap  wow animate__animated animate__fadeInLeft">
                            <div class="card portCard">

                              <div class="imgDiv2 bootstrapImg1">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Bootstrap_5_EmranLAB_Project_1" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Bootstrap_5_EmranLAB_Project_1/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">EmranLab Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                           <!-- 5th image part -->
                           <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image Bootstrap wow animate__animated animate__fadeInLeft">
                            <div class="card portCard">

                              <div class="imgDiv2 bootstrapImg2">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/EmRanBD_Project_B5" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/EmRanBD_Project_B5/Index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">EmranBD Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>
                          

                          <!-- 6th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInLeft">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript1">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JavaScript_Project/tree/master/Testimonial-project" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JavaScript_Project/Testimonial-project/Index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Testimonial Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 7th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInUp">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript2">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Calculation_Project" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Calculation_Project/index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Four projects in one</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 8th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInUp">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript3">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JavaScript_Project/tree/master/Google" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JavaScript_Project/Google/index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Google project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 9th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInUp">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript4">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JavaScript_Project/tree/master/balloon-popping-game" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JavaScript_Project/balloon-popping-game/Index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Balloons Popping Game </h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 10th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInRight">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript5">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Color_Select_Game" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Color_Select_Game/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Win Lose Game</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 11th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInRight">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript6">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/SumMathGame" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/SumMathGame/index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Sum Math Game</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 12th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JavaScript wow animate__animated animate__fadeInRight">
                            <div class="card portCard">

                              <div class="imgDiv2 javaScript7">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JavaScript_Project/tree/master/key_detect" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JavaScript_Project/key_detect/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Key Detect Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 13th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JQuery wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 JQuery1">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/Freelancing_Earning_Website" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/Freelancing_Earning_Website/Index.html" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">E-commerce Website</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 14th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JQuery wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 JQuery2">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JQuery_Project/tree/master/Responsive%20Filterable%20Lightbox%20Gallery" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JQuery_Project/Responsive%20Filterable%20Lightbox%20Gallery/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Data Filterable Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 15th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image JQuery wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 JQuery3">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/JQuery_Project/tree/master/Calculator_Using_Jquery" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://freelancer-emran.github.io/JQuery_Project/Calculator_Using_Jquery/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Calculator Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          
                          <!-- 16th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image PHP wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 php1">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/PHP_Blog_Project/tree/master/admin" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="http://stand-blog.epizy.com/admin/dashboard.php" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">PHP Admin Panel</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>Bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                  <span>PHP</span>
                                  <span>MySQL</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 17th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image PHP wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 php2">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/PHP_News_Projects" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="http://news-site.epizy.com/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">News Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>Bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                  <span>PHP</span>
                                  <span>MySQL</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 18th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image PHP wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 php3">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/PHP_Blog_Project" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="http://stand-blog.epizy.com/" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">Blog Project</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>Bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                  <span>PHP</span>
                                  <span>MySQL</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 19th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image PHP wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 php4">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/MySQL_CRUD" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/MySQL_CRUD" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">MYSQL CRUD</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>Bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                  <span>PHP</span>
                                  <span>MySQL</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- 20th image part -->
                          <div class="col-sm-6 col-md-6 col-lg-4 mb-3 portInner image PHP wow animate__animated animate__fadeInDown">
                            <div class="card portCard">

                              <div class="imgDiv2 php5">
                                <div class="inner1ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/CRUD_APP" target="_blank">Github</a>
                                </div>
                
                                <div class="inner2ImgDiv2">
                                    <a class="magic-cursor" href="https://github.com/Freelancer-Emran/CRUD_APP" target="_blank">Live</a>
                                </div>
                              </div>

                              <div class="card-body">
                                <div class="card-title">
                                    <h5 class="magic-cursor">CRUD APP</h5>
                                </div>
                                <div class="useLang">
                                  <span>HTML5</span>
                                  <span>CSS3</span>
                                  <span>Bootstrap5</span>
                                  <span>JavaScript</span>
                                  <span>JQuery</span>
                                  <span>PHP</span>
                                  <span>MySQL</span>
                                </div>
                              </div>
                            </div>
                            <!--  -->
                          </div>

                          <!-- <div class="col-4"></div> -->
                      </div>

                </div>
            </div>

            <!-- Work History Part -->

            <div class="work wow animate__animated animate__fadeInLeft">
                <div class="history">
                    <div class="row container experience">

                      <div class="experienceTitle">
                        <span class="changeColor">History</span>
                        <h3>My Work History</h3>
                      </div>

                        <div class="col-12 col-lg-3 col-sm-5 col-md-5 exp exp-1 magic-cursor">
                            <h2><Span class="wow counter">2</Span>+</h2>
                            <p>Working of years</p>
                        </div>

                        <div class="col-12 col-lg-3 col-sm-5 col-md-5 exp exp-2 magic-cursor">
                          <h2><Span class="wow counter">10</Span>+</h2>
                          <p>Training of Month</p>
                        </div>

                        <div class="col-12 col-lg-3 col-sm-5 col-md-5 exp exp-3 magic-cursor">
                          <h2><Span class="wow counter">3</Span>+</h2>
                          <p>Education Experience</p>
                        </div>

                        <div class="col-12 col-lg-3 col-sm-5 col-md-5 exp exp-4 magic-cursor">
                          <h2><Span class="wow counter">15</Span>+</h2>
                          <p>Project Complete</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- news part -->

            <div class="news wow animate__animated animate__fadeInUp">

                <div class="newsBody">
                  <div class="row container">

                    <div class="experienceTitle wow animate__animated animate__fadeInLeft">
                      <span class="changeColor">news</span>
                      <h3>Latest News</h3>
                    </div>

                    <!-- first col -->
  
                    <div class="col-11 mt-4 mt-lg-0 col-lg-4 firstNews wow animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#newsModal1">
                      <div class="newsImg">
                        <img src="./img/newsPic/1_news.jpg" alt="">
                      </div>

                      <div class="newsTitle">
                          <h3 class="magic-cursor">Developers watch out for these burnout symptoms</h3>

                          <p>By Paola Atkins / <span>05 April 2020</span></p>
                      </div>
                    </div>

                    
                    <!-- 1st modal part -->

                    <div class="modal fade newsModalFirst" id="newsModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modalHeader d-flex m-2 justify-content-end">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                          </div>

                          <div class="modal-body">
            
                            <div class="firstNews">
                              <div class="newsImg modalImg">
                                <img src="./img/newsPic/1_news.jpg" alt="">
                              </div>
        
                              <div class="newsTitle">
                                  <h3 class="fs-5">Developers watch out for these burnout symptoms</h3>
        
                                  <p>By Paola Atkins / <span>05 April 2020</span></p>
                              </div>

                              <div class="modalPara">
                                  <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</p>
                                    
                                    <blockquote>As Vintage decided to have a closer look into fast-paced New York web design realm in person. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</blockquote>

                                    <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. We encounter professionals with careers to covet and lives to write books about. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.
                                  </p>

                                  <div class="modalSocial">
                                    <span>Share:</span>
                                    <ul class="list-inline ms-3 me-2" >
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
                                    </ul>
                                  </div>
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- 2nd col --> 
  
                    <div class="col-11 mt-5 mt-lg-0 col-lg-4 firstNews wow animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#newsModal2">
                      <div class="newsImg">
                        <img src="./img/newsPic/2_news.jpg" alt="">
                      </div>

                      <div class="newsTitle">
                          <h3 class="magic-cursor">How to be appreciated for your hard work as a developer</h3>

                          <p>By Alex Watson / <span>22 March 2020</span></p>
                      </div>
                    </div>

                    <!-- 2nd modal part -->

                    <div class="modal newsModalFirst" id="newsModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modalHeader d-flex m-2 justify-content-end">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                          </div>

                          <div class="modal-body">
            
                            <div class="firstNews">
                              <div class="newsImg modalImg">
                                <img src="./img/newsPic/2_news.jpg" alt="">
                              </div>
        
                              <div class="newsTitle">
                                  <h3 class="fs-5">How to be appreciated for your hard work as a developer</h3>
        
                                  <p>By Alex Watson / <span>22 March 2020</span></p>
                              </div>

                              <div class="modalPara">
                                  <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</p>
                                    
                                    <blockquote>As Vintage decided to have a closer look into fast-paced New York web design realm in person. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</blockquote>

                                    <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. We encounter professionals with careers to covet and lives to write books about. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.
                                  </p>

                                  <div class="modalSocial">
                                    <span>Share:</span>
                                    <ul class="list-inline ms-3 me-2" >
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
                                    </ul>
                                  </div>
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- 3rd col -->
  
                    <div class="col-11 mt-5 mt-lg-0 col-lg-4 firstNews wow animate__animated animate__fadeInLeft" data-bs-toggle="modal" data-bs-target="#newsModal3">
                      <div class="newsImg">
                        <img src="./img/newsPic/3_news.jpg" alt="">
                      </div>

                      <div class="newsTitle">
                          <h3 class="magic-cursor">How designers and developers can collaborate better</h3>

                          <p>By Paola Atkins / <span>05 April 2020</span></p>
                      </div>
                    </div>

                    <!-- 3rd modal part -->
                    
                    <div class="modal fade newsModalFirst" id="newsModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modalHeader d-flex m-2 justify-content-end">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                          </div>

                          <div class="modal-body">
            
                            <div class="firstNews">
                              <div class="newsImg modalImg">
                                <img src="./img/newsPic/3_news.jpg" alt="">
                              </div>
        
                              <div class="newsTitle">
                                <h3>How designers and developers can collaborate better</h3>

                                <p>By Paola Atkins / <span>05 April 2020</span></p>
                              </div>

                              <div class="modalPara">
                                  <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</p>
                                    
                                    <blockquote>As Vintage decided to have a closer look into fast-paced New York web design realm in person. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.</blockquote>

                                    <p>As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. We encounter professionals with careers to covet and lives to write books about. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities. As Vintage decided to have a closer look into fast-paced New York web design realm in person, we get to acquaint with most diverse and exceptionally captivating personalities.
                                  </p>

                                  <div class="modalSocial">
                                    <span>Share:</span>
                                    <ul class="list-inline ms-3 me-2" >
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x me-2"></i> </a> </li>
                                      <li class="list-inline-item "> <a data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
                                    </ul>
                                  </div>
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>

                    </div>


                    <!-- end col-3 -->
                 </div>
                </div>

            </div>

            <!-- Get In Touch Section -->

            <div class="getTouchSection wow animate__animated animate__fadeInUp" id="contactPart">

              <div class="container row getTouchBody">
                <div class="row servicesTitleQ container getTouchTitle wow animate__animated animate__fadeInLeft">
                  <span class="changeColor">Contact</span>
                  <h3>Get In Touch</h3>
                </div>

                <div class="col-11 col-lg-6 getTouch1st wow animate__animated animate__fadeInLeft">
                  <!-- <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. AT, Monday through Friday</p> -->
                  <p class="">Please fill out the form on this section to contact with me. Or call 24 Hours AT, Everyday.</p>
                    <div class="feedbackMsg"></div>
                  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="<?= isset($errorOccur)?'form-error':'' ?> contact_form mt-5" id="contact_form">

                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>

                    <div class="empty_notice text-center"><span>Please Fill Required Fields</span></div>

                    <div class="first">

                      <ul>

                        <li>
                          <input class="<?= isset($subjectErr)?'is-invalid':'' ?>" name="subject" id="name" type="text" placeholder="Name" value="<?= isset($subjectValue)?$subjectValue:'' ?>" autocomplete="on" required>
                          <span class="invalid-feedback"><?= $subjectErr ?></span>
                        </li>

                        <li>
                          <input class="<?= isset($emailErr)?'is-invalid':'' ?>" id="email" type="email" name="email" placeholder="Email" value="<?= isset($emailValue)?$emailValue:'' ?>"  autocomplete="on" required>
                          <span class="invalid-feedback"><?= $emailErr ?></span>
                        </li>

                        <li>
                          <textarea class="<?= isset($messageErr)?'is-invalid':'' ?>" id="message" name="message" placeholder="Tell us more about your needs...."><?= isset($messageValue)?$messageValue:'' ?></textarea>
                          <span class="invalid-feedback"><?= $messageErr ?></span>
                        </li>

                      </ul>

                    </div>

                    <div class="subBtn magic-cursor d-inline-block" data-color="dark">
                      <!-- <a id="send_message" href="" type="submit" name="send-mail">Send Message</a> -->
                      <input id="send-mails" class="btn a" name="send-mail" type="submit" value="Send Massage">
                    </div>
                  </form>

                </div>

                <!-- 2nd col -->
                <div class="col-11 col-lg-6 mt-5 mt-lg-0 getTouch2nd wow animate__animated animate__fadeInRight">
                  <div class="map mt-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785530.7844080603!2d89.84488395529691!3d23.85208105289779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1624151947737!5m2!1sen!2sbd" width="100%" height="405px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
                  
              </div>

            </div>

            <!-- footer Part -->

            <div class="footer wow animate__animated animate__fadeInUp">
                <div class="row footerBody">
                    <div class="col-10 col-md-6 footerTile wow animate__animated animate__fadeInLeft">
                        
                          <p class="text-center">&copy; Copyright 2021 <span class="magic-cursor"><a class="changeColor" style="text-decoration: none;" href="#mainPart">Developer Emran</a></span> All Right Reserved</p>
                          
                          <div class="text-center terms">
                            <a href="#"><span>Terms & Condition |</span></a>
                            <a href="#"><span>Disclaimer </span></a>
                          </div>
                        
                    </div>

                    <div class="col-10 col-md-6 socialPartF wow animate__animated animate__fadeInRight">
                        <div class="socialPartBodyF">
                          <ul class="list-inline ms-3 me-2" >
                            <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" href="https://web.facebook.com/profile.php?id=100008803447036" target="_blank"> <i class="fab fa-facebook-f fa-1x me-2"></i> </a> </li>
                            <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter" href="https://twitter.com/EmranHa20744963" target="_blank"> <i class="fab fa-twitter fa-1x me-2"></i> </a> </li>
                            <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram" href="https://www.instagram.com/emranhasan788/" target="_blank"> <i class="fab fa-instagram fa-1x me-2"></i> </a> </li>
                            <li class="list-inline-item "> <a class="magic-cursor" data-bs-toggle="tooltip" data-bs-placement="top" title="GitHub" href="https://github.com/Freelancer-Emran" target="_blank"> <i class="fab fa-github fa-1x mr-2"></i> </a> </li>
                          </ul>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--  -->
            
            <!-- WORKED BODY DIV -->
      </div>
      

      <!-- Injected Code -->
      <!-- Code For Color Switcher -->
      <div class="color-switcher">
        <div class="switcher-btn magic-cursor changeColor">
            <i class="fas fa-cog"></i>
        </div>

        <h3>Select Color</h3>

        <div class="theme-buttons-container">
            <span class="theme-buttons" data-color="#8e44ad" style="background:#8e44ad;"></span>
            <span class="theme-buttons" data-color="#2980b9" style="background:#2980b9;"></span>
            <span class="theme-buttons" data-color="#f39c12" style="background:#f39c12;"></span>
            <span class="theme-buttons" data-color="#27ae60" style="background:#27ae60;"></span>
            <span class="theme-buttons" data-color="#e74c3c" style="background:#e74c3c;"></span>
            <span class="theme-buttons" data-color="#e84393" style="background:#e84393;"></span>
            <span class="theme-buttons" data-color="#333333" style="background:#333333;"></span>
            <span class="theme-buttons" data-color="#ffc312" style="background:#ffc312;"></span>
            <span class="theme-buttons" data-color="#17c0eb" style="background:#17c0eb;"></span>
            <span class="theme-buttons" data-color="#e65f78" style="background:#e65f78;"></span>
            <span class="theme-buttons" data-color="#666D41" style="background:#666D41;"></span>
            <span class="theme-buttons" data-color="#9200EE" style="background:#9200EE;"></span>
        </div>

        <div class="mouseOption mt-2">
            <div class="mouseOptionTitle">
              <h3>Magic Cursor</h3>
            </div>

            <div class="d-flex mouseParent">
              <div class="mouseIcon1 circleMouse">
                <span><i class="far fa-dot-circle"></i></span>
              </div>
  
              <div class="mouseIcon2 defaultMouse">
                <span><i class="fas fa-mouse-pointer"></i></span>
              </div>
            </div>
        </div>
    </div>
    <!-- End of color Switcher -->
    <!-- magic mouse -->

    <div class="pointerOutside"></div>
    <div class="pointerCenter"><div class="overlay"></div></div>    

    <!-- End magic mouse -->

    <!-- loader part -->

    <div class="loader_bg">
      <div class="loader"></div>
    </div>

    <!-- loader part End-->
      <!-- main row div -->
    </div>

  </section> 


    <!-- jquery1.10.2jquery.min. -->
    <script src="./js/jqueryPlugin/jquery1.10.2jquery.min.js"></script>

    <!-- waypoints2.0.3waypoints -->
    <script src="./js/waypoints/waypoints2.0.3waypoints.js"></script>
  
    <!-- jquery.counterup  -->
    <script src="./js/counterup/1.0.0jquery.counterup.min.js"></script>

    <script>
      // jquery counter up part
      jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
      });
    </script>

  <!-- script for bootstrap -->

  <script src="./js/bootstrap-5/bootstrap.bundle.min.js"></script>

  <!-- script for jquery -->
  <script src="./js/jqueryPlugin/jquery-3.5.1.min.js"></script>

  <!-- Nav Smooth Scroll -->
  <script src="js/navSmoothScroll/jquery.nav.js"></script>
    <script>
        $('#nav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
        });

        $('#nav2').onePageNav({
        currentClass: 'active2',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing'
        });
    </script>
    <?php
        if(isset($_SESSION['message'])){
            ?>  
                <script>
                    setTimeout(() => {
                        location.href="alert.php";
                    }, 10000);
                    
                </script>
                
            <?php
        }
    
    ?>

  <!-- script for Typewritter -->

  <script src="./js/typewriter/typer.min.js"></script>

  <!-- script for water Plugin -->

  <!--<script src="./js/water_plugin/jquery.ripples-min.js"></script>-->
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js">
        </script>

  <!-- wow plugin -->
  <script src="./js/wow/wow.min.js"></script>

  <!-- jquery.magnific-popup -->
  <script src="./js/filterMagnify/1.1.0jquery.magnific-popup.min.js"></script>

  <!-- script for Main Js -->
  <script src="js/script.js"></script>

</body>

</html>