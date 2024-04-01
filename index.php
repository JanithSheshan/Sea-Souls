<?php
session_start();

if (isset($_SESSION['success_message'])) {
    echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
    unset($_SESSION['success_message']);
}

if (isset($_SESSION['error_message'])) {
    echo "<script>alert('" . $_SESSION['error_message'] . "');</script>";
    unset($_SESSION['error_message']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sea Souls | Diving Instructor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta property="og:title" content="Sea Souls | Diving Instructor">
  <meta property="og:description" content="Dive into the depths with Salin, your expert diving instructor, and discover a world beneath the waves like never before. Whether you're a novice seeking guidance or a seasoned diver looking to enhance your skills, Salin provides tailored training and unforgettable underwater experiences. Join Salin on an adventure beneath the surface and unlock the wonders of the ocean together.">
  <meta property="og:image" content="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/logo.png">
  <meta property="og:url" content="Sea Souls | Scuba Diving Instructor">

  <!-- Favicons -->
  <link href="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/favicon.png" rel="icon">
  <link href="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <a href="index.html"><img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/logo.png" alt="" class="img-fluid"></a> -->
        <h1><a href="index.html"><span>Sea Souls</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="dropdown"><a href="#divesite" class="scrollto"><span>Diving Sites</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#divesite">Nilaveli</a></li>
              <li><a class="nav-link scrollto" href="#divesite">Trincomalee</a></li>
              <li><a class="nav-link scrollto" href="#divesite">Mirissa</a></li>
              <li><a class="nav-link scrollto" href="#divesite">Unawatuna</a></li>
              <li><a class="nav-link scrollto" href="#divesite">Hikkaduwa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#courses">Courses</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Sea Souls | <span> Diving Instructor</span></h1>
            <h2>Learn to scuba dive, Explore underwater world <br> with SALI <br>(OWSI #445838)</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="30">
          <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
    
        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch video-box" data-aos="fade-right">
            <a href="https://youtu.be/F4ee4Zvau2M?si=6qB_r0rGW_H6Rgpr" class="glightbox play-btn mb-4"></a>
          </div>
          
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Experience the Thrill of Scuba Diving</h3>
            <p>Embark on an adventure beneath the waves with Sea Souls. Whether you're a beginner or an experienced diver, we offer comprehensive training and unforgettable diving experiences.</p>
    
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="10">
              <div class="icon"><i class='bx bx-user-voice'></i></div>
              <h4 class="title">Expert Instruction</h4>
              <p class="description">Learn from certified instructors with years of experience in scuba diving. Our personalized approach ensures you receive the guidance you need to become a skilled diver.</p>
            </div>
    
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="20">
              <div class="icon"><i class='bx bx-star'></i></div>
              <h4 class="title">Unforgettable Experiences</h4>
              <p class="description">Explore vibrant coral reefs, fascinating wrecks, and diverse marine life. Our diving trips promise unforgettable moments and breathtaking underwater landscapes.</p>
            </div>
    
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="30">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title">Safety First</h4>
              <p class="description">Your safety is our top priority. We adhere to strict safety protocols and provide top-of-the-line equipment to ensure every dive is enjoyable and risk-free.</p>
            </div>
    
          </div>
        </div>
    
      </div>
    </section><!-- End About Section -->
    

    <!-- ======= services Section ======= -->
    <section id="services" class="features">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Explore Our Services</p>
        </div>
    
        <div class="row" data-aos="fade-left">
          
          <div class="col-lg-3 col-md-4 text-center">
            <div class="popup" onclick="myFunction1()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img src = "https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Fun%20Diving.svg" alt="Fun Diving"style="color: #ffbb2c; width: auto; height: 50px;"/>
                <h3>Fun Diving</h3>
              </div>
              <span class="popuptext" id="myPopup1">Fun diving is recreational underwater exploration for certified divers. It's about enjoying the beauty of the underwater 
                world without the focus on training or skill development. Divers explore dive sites, reefs, and wrecks for leisure and relaxation.<br>
                <a href="#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-center">
            <div class="popup" onclick="myFunction2()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img src = "https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Surfing.svg" alt="Fun Diving"style="color: #ffbb2c; width: auto; height: 50px;"/>
                <h3>Surfing</h3>
              </div>
              <span class="popuptext" id="myPopup2">Surfing involves riding waves on a board, requiring skillful balance and agility while harnessing the energy of the ocean. 
                It's a thrilling water sport that allows individuals to connect with nature and experience the rush of gliding across the water's surface.<br>
                <a href="#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-center">
            <div class="popup" onclick="myFunction3()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img src = "https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Diving%20Tours.svg" alt="Fun Diving"style="color: #ffbb2c; width: auto; height: 50px;"/>
                <h3>Diving Tours</h3>
              </div>
              <span class="popuptext" id="myPopup3">Diving tours provide guided exploration of underwater realms, offering certified divers immersive experiences in diverse marine ecosystems. 
                Led by experienced guides, these tours cater to various skill levels and interests, ensuring unforgettable adventures beneath the waves.<br>
                <a href="#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 text-center">
            <div class="popup" onclick="myFunction4()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img src = "https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Diving%20Courses.svg" alt="Fun Diving"style="color: #ffbb2c; width: auto; height: 50px;"/>
                <h3>Diving Courses</h3>
              </div>
              <span class="popuptext" id="myPopup4">Diving courses provide essential skills and knowledge under certified instructors, 
                enabling safe exploration of underwater environments, fostering thrilling diving experiences.<br>
                <a href="#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->
    
    <!-- ======= Details Section ======= -->
    <section id="divesite" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Diving Areas</h2>
          <p>Explore Our Diving sites</p>
        </div>
      <div>
        <div>
        
        <video autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="myVideo">
          <source src="./divingsites.mp4" type="video/mp4">
        </video>
      </div>

      </div>
      
    </section><!-- End Details Section -->
    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>

        <div class="gallery" unique-script-id="w-w-dm-id">
          <div class="responsive-container-block bg">
           
            <div class="swiper-container mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-1.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im image-block" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-2.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-3.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-4.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-5.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-6.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-7.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-8.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-9.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-10.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-11.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-12.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-13.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-14.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-15.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-16.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-17.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-18.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-19.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-20.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-21.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-22.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-23.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-24.jpg">
                </div>
                <div class="swiper-slide">
                  <img class="im" src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-25.jpg">
                </div>
              </div>
              <div class="swiper-pagination container-block">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="10">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Passionate Diver</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  My diving experience with Sea Souls has been absolutely amazing! The instructors are knowledgeable, friendly, and always prioritize safety. I've explored breathtaking underwater landscapes and encountered fascinating marine life. Highly recommend!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Adventurous Explorer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sea Souls provided me with an unforgettable diving experience. The instructors are highly skilled and made me feel comfortable throughout my dives. Exploring the underwater world has been a dream come true. Can't wait to dive with them again!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Nature Enthusiast</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Diving with Sea Souls has been an incredible experience. The instructors are passionate about marine conservation and share their knowledge with enthusiasm. I've learned so much about marine life and ocean ecosystems while diving with them.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Nature Enthusiast</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Diving with Sea Souls has been an incredible experience. The instructors are passionate about marine conservation and share their knowledge with enthusiasm. I've learned so much about marine life and ocean ecosystems while diving with them.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Adventurous Explorer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sea Souls provided me with an unforgettable diving experience. The instructors are highly skilled and made me feel comfortable throughout my dives. Exploring the underwater world has been a dream come true. Can't wait to dive with them again!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= courses Section ======= -->
    <section id="courses" class="pricing">
      <div class="container">
    
        <div class="section-title" data-aos="fade-up">
          <h2>Dive Courses</h2>
          <p>Explore Our Dive Courses & Activities</p>
        </div>
    
        <div class="row" data-aos="fade-left">
    
          <!-- <div class="col-lg-3 col-md-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="10">
              <h3></h3>
               <h4>Starting from <sup>$</sup>80</h4>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div> -->
    
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="20">
              <h3>PADI COURSES</h3>
              <!-- <h4>Starting from <sup>$</sup>350</h4> -->
              <ul>
                <li>Open Water Diver </li>
                <li>Advanced Open Water Diver</li>
                <li>Emergency First Response(EFR)</li>
                <li>Rescue Diver</li>
                <li>Divemaster</li>
                <li><br></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="30">
              <h3>DISCOVERY DIVING FOR BEGGINERS</h3>
              <!-- <h4>Starting from <sup>$</sup>250</h4> -->
              <ul>
                <li>Fun Diving</li>
                <li>Diving Tour</li>
                <li>Snorkaling</li>
                <li>Surfing</li>
                <li><br></li>
                <li><br></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="40">
              <h3>FUN DIVING</h3>
              <!-- <h4>Starting from <sup>$</sup>400</h4> -->
              <ul>
                <li>Deep Diving</li>
                <li>Reef Diving</li>
                <li>Wreck Diving</li>
                <li>Cave Diving</li>
                <li>Pinnacle Diving</li>
                <li>Night Diving</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>
    
        </div>
    
      </div>
    </section><!-- End Dive Courses Section -->
    

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What certifications do you hold as a diving instructor?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="10">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How many years of experience do you have in teaching diving?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="20">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What types of diving do you specialize in?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="30">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Do you offer personalized instruction or group lessons?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="40">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What equipment do I need to bring for diving lessons?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="50">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">What level of fitness or swimming ability is required for your courses?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="60">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">What is your cancellation policy for diving lessons?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="70">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Are there any age restrictions for your diving courses?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="80">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">What locations do you offer diving lessons in?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="90">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">How do I get started with booking diving lessons?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">What is the typical duration of a diving lesson or course?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="10">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Locations:</h4>
                <p>Nilaveli, Trincomalee<br>Mirissa, Unawatuna, Hikkaduwa</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>seasoulssrilanka@gmail.com</p>
              </div>

              <a href="https://wa.me/94715812982" target="_blank"><div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>Whatsapp:</h4>
                <p>+94 71 581 2982</p>
              </div></a>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="20">

          <form action="contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subjectnew" id="subjectnew" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Sea Souls</h3>
              <p class="pb-3"><em>Scuba Diving Instructor <br> (OWSI #445838) | Learn to scuba dive, Explore underwater world...</em></p>
              <p>
                <strong>Phone:</strong> +94 71 581 2982<br>
                <strong>Email:</strong> seasoulssrilanka@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#divesite">Diving Sites</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#courses">Fun Diving</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#courses">Surfing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#courses">Diving Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#courses">Snorkaling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#courses">Padi Courses</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>However, if there are many people who do not know what I read, then I will read our great fault</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sea Souls | Diving Instructor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Powered by <a href="https://forgear.lk/">FORGEAR</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center scrollto"><i class="bi bi-arrow-up-short"></i></a>
  <a href="#hero" class="scrollto">
    <div id="google_translate_element" class="d-flex align-items-center justify-content-center">
      <script type="text/javascript" defer>
        function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ru,es,es-419,it,de,hi,ta,ar,iw,zh-CN,zh-TW,fr,pt,af,ja,ko,nl,tl,te,uk,id,mt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
      </script>
    </div>
  </a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script type="text/javascript" async src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>