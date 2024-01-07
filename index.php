<?php include('./include/db.php');

$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    

    <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        #hero {
            background: url(assets/img/<?=$data['homewallpaper']?>);
        }
       

  .form{
    width: 550px;
    height: 480px;
    background-color: white;
    box-shadow: 0 5px 30px black;
    margin: auto;
  }
  
  .formGroup{
    display: flex;
    justify-content: center;
  }
  .formGroup input{
    border: none;
    width: 80%;
    padding: 7px;
    margin-top:15px;
    margin-bottom: 22px;
    background-color: transparent;
    border-bottom: 2px solid rgb(68, 68, 68);
    color: black;
    font-weight: bold;
    font-size: 14px;
  }
   
  input:focus{
    outline: none;
    font-size: 17px;
    background-color: transparent;
  }
  .text{
    color: rgb(42, 41, 41);
    font-size: 13px;
  }
  .btn2{
    padding: 10px;
    outline: none;
    width: 150px;
    border-radius: 20px;
    border-style: none;
    background-color: rgb(28, 131, 28);
    color: whitesmoke;
    font-weight: 600;
    margin-top: 10px;
  }
  .btn2:hover {
   background-color: rgb(1, 63, 1);
  }

  .status {
   color: green;
   text-align: center;
   font-weight: 600;
  }
    </style>
</head>

<body>
  
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/<?=$data['profilepic']?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#"><?=$data['name']?></a></h1>
                <div class="social-links mt-3 text-center">
                    <?php 
        if($data['twitter']!=""){
            ?>
                    <a href="<?=$data['twitter']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <?php
        }    
        if($data['facebook']!=""){
            ?>
                    <a href="<?=$data['facebook']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <?php
        }
      if($data['instagram']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <?php
        }
       if($data['skype']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <?php
        }
      if($data['linkedin']!=""){
            ?>
                    <a href="<?=$data['linkedin']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <?php
        }
      if($data['github']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="github"><i class="bx bxl-github"></i></a>
                    <?php
        } 
        ?>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class=""><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1><?=$data['name']?></h1>

            <p>I'm <span class="typed" data-typed-items="<?php
          $prof = explode(",",$data['professions']);
          foreach($prof as $value){echo $value.",";}?>"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p><?=$data['shortdesc']?></p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?=$data['heading']?></h3>
                        <p class="font-italic">
                            <?=$data['subheading']?>
                        </p>
                        <div>
                            <ul class="row">
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
                               
                                
                                


                            </ul>
                        </div>
                        <p>
                            <?=$data['longdesc']?>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">
<?php
                    $query3 = "SELECT * FROM skills";
$runquery3= mysqli_query($db,$query3);
while($data3=mysqli_fetch_array($runquery3)){
    ?>
                        <div class="progress col-lg-6">
                            <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                                <?php
}
                    ?>
                        

                        
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                   <?php
                    $query5 = "SELECT * FROM portfolio";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
    ?>
                  <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                            <div class="portfolio-links" title="<?=$data5['projectname']?>">
                                
                                <a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="Project"><i class="bx bx-plus"></i></a>
                                <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                                <?php
}
                    ?>
                    

                    
                       

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$data['location']?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                        </div>

                    </div>
                    
                    
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <?php include 'mail.php' ?>
 
                    <form method="post" class="form" enctype="multipart/form-data">

 
   <div class="formGroup">
    <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="email" name="email" id="email" placeholder="Email ID" autocomplete="off" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" required="">
   </div>
 
   <div class="formGroup">
    <input type="text" name="message" placeholder="Your Message" autocomplete="off" <?php echo !empty($postData['message']) ? $postData['message'] : ''; ?> required="">
   </div>
 
   <div class="formGroup">
    <input type="file" name="attachment" class="form-control" multiple>
   </div>
 
   <!-- Display submission status -->
   <div class="status">
    <?php if (!empty($statusMsg)) { ?>
     <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>">
      <?php echo $statusMsg; ?></p>
    <?php } ?>
   </div>
 
   <div class="formGroup">
    <button class="btn2" name="submit" value="SUBMIT" type="submit">SUBMIT </button>
   </div>
 
   <form />
</div>  

</div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
<!--
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
-->
            <div class="credits">
                Developed by <a href="#">Rushikesh Chavan</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }

    </script>
</body>


<!-- Mirrored from bootstrapmade.com/demo/themes/iPortfolio/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 03:40:16 GMT -->

</html>
