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
  <title>Scuba Diving | Best Diving Instructor in Sri Lanka - Sea Souls</title>
  <meta name="description" content="Experience the best scuba diving in Sri Lanka with Sea Souls. Join our professional diving courses in Unawatuna, Trincomalee, and Mirissa for unforgettable underwater adventures.">
  <meta name="keywords" content="scuba diving, diving Sri Lanka, best diving instructor, best scuba diving, diving course, diving Unawatuna, diving Trincomalee, diving Mirissa">
  <meta property="og:title" content="Sea Souls | Best Scuba Diving Instructor in Sri Lanka">
  <meta property="og:description" content="Explore the wonders of scuba diving in Sri Lanka with our expert diving instructor. Offering diving courses and guided dives in Unawatuna, Trincomalee, and Mirissa.">
  <meta property="og:image" content="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/logo.webp">
  <meta property="og:url" content="https://seasoulsdiving.com/">
  <!-- Favicons -->
  <link href="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/favicon.webp" rel="icon">
  <link href="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/apple-touch-icon.webp"
    rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="canonical" href="https://seasoulsdiving.com#courses">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <a href="index.html"><img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/logo.webp" alt="" class="img-fluid"></a> -->
        <h1><a href="https://seasoulsdiving.com"><span>Sea Souls</span></a></h1>
        <div class="social-links mt-3">
          <a href="https://youtube.com/@Salin989?si=LH0suNt3hLkvOlvt" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100064441372182&mibextid=ZbWKwL" class="facebook"><i
              class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/explore_the_ocean_with_sali?igsh=MWR4emVqem5naGw1ag==" class="instagram"><i
              class="bx bxl-instagram"></i></a>
          <a href="https://wa.me/94715812982" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://www.tiktok.com/@seasouls0" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="https://seasoulsdiving.com#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#about">About</a></li>
          <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#services">Services</a></li>
          <li class="dropdown"><a href="https://seasoulsdiving.com#divesite" class="scrollto"><span>Diving Sites</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#divesite">Nilaveli</a></li>
              <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#divesite">Trincomalee</a></li>
              <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#divesite">Mirissa</a></li>
              <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#divesite">Unawatuna</a></li>
              <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#divesite">Hikkaduwa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#courses">Courses</a></li>
          <li><a class="nav-link scrollto" href="https://seasoulsdiving.com#contact">Contact</a></li>
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
            <h1>Sea Souls | <span> Scuba Diving in Sri Lanka with the Best Instructor</span></h1>
            <h2>Learn scuba diving, Explore the underwater world <br> with SALI <br>(OWSI #445838)</h2>
            <div class="text-center text-lg-start">
              <a href="https://seasoulsdiving.com#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="30">
          <img src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/hero-img.webp"
            class="img-fluid animated" alt="best scuba diving instructor">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <a href="https://wa.me/94715812982" target="_blank"><button class="fixedbtn"
      style="background-color: #075E54; bottom: 10%;"><i class="bi bi-whatsapp"></i>
      <p style="background-color: #075E54;">Chat_Now</p>
    </button></a>
  <a href="https://t.me/+94715812982" target="_blank"><button class="fixedbtn"
      style="background-color: #0088CC; bottom: 18%;"><i class="bi bi-telegram"></i>
      <p style="background-color: #0088CC;">Chat_Now</p>
    </button></a>
  <a href="https://ig.me/m/explore_the_ocean_with_sali" target="_blank"><button class="fixedbtn"
      style="background: linear-gradient(#405DE6 0%, #5B51D8 11%,	#833AB4 22%, #C13584 33%, #E1306C 44%, #FD1D1D 56%, #F56040 67%, #F77737 78%, #FCAF45 89%, #FFDC80 100%); bottom: 26%;"><i
        class="bi bi-instagram"></i>
      <p
        style="background: linear-gradient(#405DE6 0%, #5B51D8 11%,	#833AB4 22%, #C13584 33%, #E1306C 44%, #FD1D1D 56%, #F56040 67%, #F77737 78%, #FCAF45 89%, #FFDC80 100%);">
        Chat_Now</p>
    </button></a>
  <a href="http://m.me/252879671531851" target="_blank"><button class="fixedbtn"
      style="background: linear-gradient(#168AFF 0%, #9F33FF 33%,	#FFFFFF 66%, #FF6070 100%); bottom: 34%;"><i
        class="bi bi-messenger"></i>
      <p style="background: linear-gradient(#168AFF 0%, #9F33FF 33%,	#FFFFFF 66%, #FF6070 100%);">Chat_Now</p>
    </button></a>

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch video-box"
            data-aos="fade-right">
            <a href="https://youtu.be/tt9Q9ZGL57U?feature=shared" class="glightbox play-btn mb-4"></a>
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
            data-aos="fade-left">
            <h3>Meet Sali, Your Passionate PADI Scuba Diving Instructor in Sri Lanka</h3>
            <p>Embark on a scuba diving adventure with Sea Souls by Sali. Whether you're a beginner or an experienced
              diver, we offer comprehensive training and unforgettable diving experiences.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="10">
              <div class="icon"><i class='bx bx-user-voice'></i></div>
              <h4 class="title">About Me</h4>
              <p class="description">Hey there! I'm Sali, your go-to PADI-certified scuba diving instructor, ready to
                unlock the wonders of the deep blue for you. With over a decade of experience exploring the mesmerizing
                waters of Sri Lanka, diving isn't just a job—it's my lifelong passion.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="20">
              <div class="icon"><i class='bx bx-star'></i></div>
              <h4 class="title">Experience</h4>
              <p class="description">With a decade of experience and over 8000 dives logged, I've become intimately
                acquainted with Sri Lanka's most breathtaking dive sites. From the vibrant coral reefs of Unawatuna and
                Hikkaduwa to the serene waters of Nilaveli, Trincomalee, and Mirissa, I've navigated them all with ease.
              </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="30">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title">Why Dive With Me</h4>
              <p class="description">As a laid-back and friendly individual, I bring a relaxed vibe to every dive,
                ensuring you feel safe, comfortable, and ready to dive into adventure. Whether you're a beginner seeking
                your first underwater experience or a seasoned diver looking to explore new depths, I'm here to make
                every dive unforgettable.</p>
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

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-center">
            <div class="popup" onclick="myFunction2()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img
                  src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Surfing.svg"
                  alt="best scuba diving instructor Fun Diving" style="color: #ffbb2c; width: auto; height: 50px;" />
                <h3>Surfing...</h3>
              </div>
              <span class="popuptext" id="myPopup2">Surfing involves riding waves on a board, requiring skillful balance
                and agility while harnessing the energy of the ocean.
                It's a thrilling water sport that allows individuals to connect with nature and experience the rush of
                gliding across the water's surface.<br>
                <a href="https://seasoulsdiving.com#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 text-center">
            <div class="popup" onclick="myFunction3()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img
                  src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Diving%20Tours.svg"
                  alt="best scuba diving instructor Fun Diving" style="color: #ffbb2c; width: auto; height: 50px;" />
                <h3>Diving Tours...</h3>
              </div>
              <span class="popuptext" id="myPopup3">Diving tours provide guided exploration of underwater realms,
                offering certified divers immersive experiences in diverse marine ecosystems.
                Led by experienced guides, these tours cater to various skill levels and interests, ensuring
                unforgettable adventures beneath the waves.<br>
                <a href="https://seasoulsdiving.com#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 text-center">
            <div class="popup" onclick="myFunction1()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img
                  src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Fun%20Diving.svg"
                  alt="best scuba diving instructor Fun Diving" style="color: #ffbb2c; width: auto; height: 50px;" />
                <h3>Fun Diving...</h3>
              </div>
              <span class="popuptext" id="myPopup1">Fun diving is recreational underwater exploration for certified
                divers. It's about enjoying the beauty of the underwater
                world without the focus on training or skill development. Divers explore dive sites, reefs, and wrecks
                for leisure and relaxation.<br>
                <a href="https://seasoulsdiving.com#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 text-center">
            <div class="popup" onclick="myFunction4()">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="5">
                <img
                  src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/722915ad3c8904c03872716de5d329eed9fda3f5/svg/Diving%20Courses.svg"
                  alt="best scuba diving instructor Fun Diving" style="color: #ffbb2c; width: auto; height: 50px;" />
                <h3>Diving Courses...</h3>
              </div>
              <span class="popuptext" id="myPopup4">Diving courses provide essential skills and knowledge under
                certified instructors,
                enabling safe exploration of underwater environments, fostering thrilling diving experiences.<br>
                <a href="https://seasoulsdiving.com#courses" class="btn-get-started scrollto">More info</a>
              </span>
            </div>
          </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Divesite Section ======= -->
    <section id="divesite" class="divesite">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Explore the Best Diving Spots in Unawatuna, Trincomalee, and Mirissa</h2>
          <p>Explore Our Diving sites</p>
        </div>

        <div class="containertwo">
          <div class="options">
            <div class="option active"
              style="--optionBackground:url(https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/details-11.webp);">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="bi-pin-map-fill"></i>
                </div>
                <div class="info">
                  <div class="main">Trincomalee</div>
                  <div class="sub">Trincomalee, Eastern Province, Sri Lanka</div>
                </div>
              </div>
            </div>
            <div class="option"
              style="--optionBackground:url(https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/details-22.webp);">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="bi-pin-map-fill"></i>
                </div>
                <div class="info">
                  <div class="main">Nilaveli</div>
                  <div class="sub">Trincomalee, Eastern Province, Sri Lanka</div>
                </div>
              </div>
            </div>
            <div class="option"
              style="--optionBackground:url(https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/details-33.webp);">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="bi-pin-map-fill"></i>
                </div>
                <div class="info">
                  <div class="main">Mirissa</div>
                  <div class="sub">Matara, Southern Province, Sri Lanka</div>
                </div>
              </div>
            </div>
            <div class="option"
              style="--optionBackground:url(https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/details-44.webp);">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="info">
                  <div class="main">Unawatuna</div>
                  <div class="sub">Galle, Southern Province, Sri Lanka</div>
                </div>
              </div>
            </div>
            <div class="option"
              style="--optionBackground:url(https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/details-55.webp);">
              <div class="shadow"></div>
              <div class="label">
                <div class="icon">
                  <i class="bi-pin-map-fill"></i>
                </div>
                <div class="info">
                  <div class="main">Hikkaduwa</div>
                  <div class="sub">Galle, Southern Province, Sri Lanka</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Divesite Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Check our Gallery</p>
        </div>

        <div class="slider-wrapper">
          <button id="prev-slide" class="slide-button material-symbols-rounded">
            chevron_left
          </button>
          <ul class="image-list">
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-1.jpg"
              alt="best scuba diving instructor img-1" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-2.jpg"
              alt="best scuba diving instructor img-2" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-3.jpg"
              alt="best scuba diving instructor img-3" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-4.jpg"
              alt="best scuba diving instructor img-4" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-5.jpg"
              alt="best scuba diving instructor img-5" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-6.jpg"
              alt="best scuba diving instructor img-6" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-7.jpg"
              alt="best scuba diving instructor img-7" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-8.jpg"
              alt="best scuba diving instructor img-8" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-9.jpg"
              alt="best scuba diving instructor img-9" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-10.jpg"
              alt="best scuba diving instructor img-10" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-11.jpg"
              alt="best scuba diving instructor img-11" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-12.jpg"
              alt="best scuba diving instructor img-12" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-13.jpg"
              alt="best scuba diving instructor img-13" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-14.jpg"
              alt="best scuba diving instructor img-14" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-15.jpg"
              alt="best scuba diving instructor img-15" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-16.jpg"
              alt="best scuba diving instructor img-16" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-17.jpg"
              alt="best scuba diving instructor img-17" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-18.jpg"
              alt="best scuba diving instructor img-18" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-19.jpg"
              alt="best scuba diving instructor img-19" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-20.jpg"
              alt="best scuba diving instructor img-20" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-21.jpg"
              alt="best scuba diving instructor img-21" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-22.jpg"
              alt="best scuba diving instructor img-22" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-23.jpg"
              alt="best scuba diving instructor img-23" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-24.jpg"
              alt="best scuba diving instructor img-24" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-25.jpg"
              alt="best scuba diving instructor img-25" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-26.jpg"
              alt="best scuba diving instructor img-26" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-27.jpg"
              alt="best scuba diving instructor img-27" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-28.jpg"
              alt="best scuba diving instructor img-28" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-29.jpg"
              alt="best scuba diving instructor img-29" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-30.jpg"
              alt="best scuba diving instructor img-30" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-31.jpg"
              alt="best scuba diving instructor img-31" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-32.jpg"
              alt="best scuba diving instructor img-32" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-33.jpg"
              alt="best scuba diving instructor img-33" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-34.jpg"
              alt="best scuba diving instructor img-34" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-35.jpg"
              alt="best scuba diving instructor img-35" data-category="courses" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-36.jpg"
              alt="best scuba diving instructor img-36" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-37.jpg"
              alt="best scuba diving instructor img-37" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-38.jpg"
              alt="best scuba diving instructor img-38" data-category="creatures" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-39.jpg"
              alt="best scuba diving instructor img-39" data-category="diving" />
            <img class="image-item"
              src="https://raw.githubusercontent.com/JanithSheshan/Sea-Sauls-images/main/img/gallery/gallery-40.jpg"
              alt="best scuba diving instructor img-40" data-category="diving" />
          </ul>
          <button id="next-slide" class="slide-button material-symbols-rounded">
            chevron_right
          </button>
        </div>
        <div>
          <button class="show-all" id="show-all">ALL</button>
          <button class="category-button" data-category="courses">COURSES</button>
          <button class="category-button" data-category="diving">DIVING</button>
          <button class="category-button" data-category="creatures">CREATURES</button>
        </div>
        <div class="slider-scrollbar">
          <div class="scrollbar-track">
            <div class="scrollbar-thumb"></div>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>What our clients say</p>
        </div>
        <div class="elfsight-app-f50a22af-a9cc-41dc-b79f-5010b93f4942" data-elfsight-app-lazy></div>
        <!-- <div class="elfsight-app-c974434e-76f5-4eb5-b0ef-05ab4bc2408d" data-elfsight-app-lazy></div> -->
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= courses Section ======= -->
    <section id="courses" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Diving Courses and Scuba Adventures for All Levels</h2>
          <p>Explore Our Dive Courses & Activities</p>
        </div>

        <div class="row" data-aos="fade-left">

          <!-- <div class="col-lg-3 col-md-6">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="10">
              <h3>Sample</h3>
                <h4>Starting from <sup>$</sup>80</h4>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>  -->

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="20">
              <h3>PADI COURSES</h3>
              <!-- <h4>Starting from <sup>$</sup>350</h4> -->

              <details>
                <summary>Open Water Diver</summary>
                <p>Begin your underwater exploration with Sea Souls in Sri Lanka! Dive into the world's most popular
                  scuba course, designed for beginners seeking adventure beneath the waves. Earn your first scuba diving
                  certification and discover the mesmerizing beauty of the ocean depths!</p>
              </details>
              <details>
                <summary>Advanced Open Water Diver</summary>
                <p>Dive deeper into adventure with Sea Souls in Sri Lanka! Experience the thrill of exploration and
                  expand your diving skills with the PADI Advanced Open Water Diver course. Designed for qualified
                  divers, this course offers a gateway to new experiences and excitement beneath the waves. Build upon
                  your Open Water Diver certification and elevate your diving expertise with us!</p>
              </details>
              <details>
                <summary>Emergency First Response(EFR)</summary>
                <p>Unlock life-saving skills with Sea Souls in Sri Lanka! Become an Emergency First Response (EFR)
                  Instructor and empower others with essential CPR and first aid knowledge. Our internationally
                  recognized courses are open to all, ensuring everyone can learn to respond effectively in emergencies.
                </p>
              </details>
              <details>
                <summary>Rescue Diver</summary>
                <p>Elevate your diving skills with Sea Souls in Sri Lanka! Join us for the PADI Rescue Diver course,
                  hailed as both challenging and immensely rewarding by scuba enthusiasts. Take your qualification to
                  new heights and become a certified rescue diver with us!</p>
              </details>
              <details>
                <summary>Divemaster</summary>
                <p>Passionate about scuba diving? Ready to take it to the next level? Dive into the PADI Divemaster
                  course with Sea Souls in Sri Lanka! Become a leader in the diving community, guiding and inspiring
                  others to explore the underwater world. Experience the thrill of sharing your love for diving while
                  enjoying countless underwater adventures as a certified Divemaster!</p>
              </details>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="30">
              <h3>DISCOVERY DIVING FOR BEGGINERS</h3>
              <!-- <h4>Starting from <sup>$</sup>250</h4> -->
              <details>
                <summary>Introduction to Scuba Gear</summary>
                <p>You'll receive an introduction to scuba gear and learn how to use it in a pool or calm water
                  environment. This includes getting fitted with essential equipment like a mask, fins, and a buoyancy
                  control device (BCD).</p>
              </details>
              <details>
                <summary>Basic Scuba Skills</summary>
                <p>A PADI Professional will guide you through some fundamental diving skills, such as how to clear your
                  mask and regulator, equalize your ears, and communicate underwater using hand signals. These skills
                  are essential for a safe and enjoyable diving experience.</p>
              </details>
              <details>
                <summary>First Underwater Breaths</summary>
                <p>Experience the thrill of taking your first breaths underwater! Under the guidance of your instructor,
                  you'll learn to breathe comfortably from a scuba regulator and acclimate to the sensation of being
                  submerged.</p>
              </details>
              <details>
                <summary>Exploration and Fun</summary>
                <p>Once you've mastered the basic skills, you'll have the opportunity to explore the underwater world
                  and enjoy the freedom of swimming beneath the surface. This part of the experience allows you to
                  interact with marine life and discover the beauty of the underwater environment.</p>
              </details>
              <details>
                <summary>No Prerequisites</summary>
                <p>The Discover Scuba Diving program is open to anyone aged 10 and above, with no prior diving
                  experience required. Whether you're a curious beginner or looking for a new adventure, this
                  introductory course welcomes participants of all backgrounds.</p>
              </details>
              <details>
                <summary>Total Time Commitment</summary>
                <p>The entire Discover Scuba Diving experience typically takes 2-3 hours, making it an accessible and
                  convenient way to try scuba diving. During this time, you'll receive personalized instruction and
                  guidance from a certified PADI Professional.</p>
              </details>
              <details>
                <summary>Non-Certification Course</summary>
                <p>Discover Scuba Diving is a non-certification course designed to provide a taste of scuba diving under
                  the supervision of a qualified instructor. While it doesn't result in a certification, it serves as a
                  stepping stone for those interested in pursuing further training, such as the PADI Open Water Diver
                  certification.</p>
              </details>
              <div class="btn-wrap">
                <a href="https://wa.me/94715812982" target="_blank" class="btn-buy">Chat Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="40">
              <h3>FUN DIVING</h3>
              <!-- <h4>Starting from <sup>$</sup>400</h4> -->
              <details>
                <summary>Deep Diving</summary>
                <p>Dive into the depths of adventure with our Deep Diving experience! Discover hidden treasures and
                  encounter fascinating marine life as you explore the mysteries of the deep.</p>
              </details>
              <details>
                <summary>Reef Diving</summary>
                <p>Delve into the vibrant ecosystems of our Reef Diving sites! Encounter colorful corals, darting fish,
                  and a kaleidoscope of marine creatures as you glide through the enchanting underwater landscapes.</p>
              </details>
              <details>
                <summary>Wreck Diving</summary>
                <p>Uncover the secrets of history with our Wreck Diving expeditions! Explore sunken ships and submerged
                  relics, each with its own story to tell, as you venture into the realm of underwater archaeology.</p>
              </details>
              <details>
                <summary>Cave Diving</summary>
                <p>Embark on an exhilarating journey through the unknown with our Cave Diving excursions! Navigate
                  through intricate passageways and marvel at the otherworldly formations of submerged caves.</p>
              </details>
              <details>
                <summary>Pinnacle Diving</summary>
                <p>Reach new heights of excitement with our Pinnacle Diving adventures! Ascend towering underwater peaks
                  and witness the teeming life that congregates around these natural underwater landmarks.</p>
              </details>
              <details>
                <summary>Night Diving</summary>
                <p>Experience the magic of the ocean after dark with our Night Diving escapades! Witness the
                  transformation of the underwater world as nocturnal creatures emerge and the reef comes alive under
                  the glow of your dive light.</p>
              </details>
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
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">What certifications do you hold as a diving instructor?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  As an Open Water Scuba Diving Instructor, I hold certifications from PADI (Professional Association of
                  Diving Instructors), which is one of the most recognized and respected certification agencies
                  worldwide for recreational diving. My PADI certification allows me to teach and certify divers up to
                  the Open Water level, enabling them to explore the underwater world safely and confidently.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="10">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                class="collapsed">How many years of experience do you have in teaching diving?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  I have over 10 years experience of scuba diving, helping countless individuals discover the wonders of
                  the underwater world safely and with confidence.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="20">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                class="collapsed">What types of diving do you specialize in?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  As a PADI Open Water Scuba Diving Instructor, you specialize in a range of dives tailored to different
                  skill levels and certification courses. These may include:<br><br>

                  1. Discover Scuba Diving (DSD) Dives: Introducing beginners to the basics of scuba diving in a
                  controlled environment under direct supervision.<br><br>

                  2. Open Water Dives: Guiding students through the essential skills and techniques required for safe
                  diving in open water environments up to a maximum depth of 18 meters (60 feet).<br><br>

                  3. Advanced Open Water Dives: Leading certified divers through advanced training dives to improve
                  their skills and confidence in various diving conditions and specialties.<br><br>

                  4. Rescue Dives: Instructing divers on rescue techniques and emergency procedures to prepare them for
                  handling dive-related emergencies.<br><br>

                  5. fun dives: which are recreational dives conducted for the sheer enjoyment of exploring underwater
                  environments. Fun dives typically cater to certified divers who want to experience the beauty and
                  diversity of marine life without undergoing formal training or certification.<br><br>

                  These dives allow divers to explore various dive sites, practice their skills, and simply have fun
                  underwater, all under the guidance and supervision of a qualified instructor like yourself.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="30">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                class="collapsed">Do you offer personalized instruction or group lessons?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes, as an instructor, i offer both personalized instruction and group lessons to cater to the diverse
                  needs and preferences of your students. Whether someone prefers one-on-one attention or enjoys the
                  dynamic of learning in a group setting, you strive to accommodate their learning style and ensure they
                  receive quality instruction tailored to their individual goals and abilities.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="40">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
                class="collapsed">What equipment do I need to bring for diving lessons?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We provide all diving equipment needed for the lesson, so you won't need to bring anything except for
                  personal items like swimwear, a towel, sunscreen, and a change of clothes. We've got you covered for a
                  hassle-free diving experience!
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="50">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6"
                class="collapsed">What level of fitness or swimming ability is required for your courses?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The fitness and ability requirements vary depending on the specific course, but generally,
                  participants should have:<br><br>

                  1. Basic Fitness: Participants should have a reasonable level of physical fitness and health to
                  comfortably handle the demands of diving. This includes being able to swim and move in the water
                  comfortably.<br><br>

                  2. Medical Clearance: Some courses may require a medical clearance from a physician, especially if
                  participants have pre-existing medical conditions that could affect their ability to dive
                  safely.<br><br>

                  3. Comfort in Water: Participants should feel comfortable in the water and be able to tread water or
                  float for a period of time.<br><br>

                  4. Ability to Equalize: Being able to equalize pressure in the ears and sinuses is crucial for safe
                  diving. Participants should have the ability to equalize comfortably and effectively.<br><br>

                  5. Communication Skills: Clear communication is essential for diving, so participants should be able
                  to understand and follow instructions given by the instructor.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="60">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7"
                class="collapsed">What is your cancellation policy for diving lessons?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1. Cancellation by Participant: If you need to cancel your diving lesson, please notify us at least 24
                  hours in advance to receive a full refund or reschedule your lesson at no additional cost.<br><br>

                  2. Cancellation by Instructor: In the event of unforeseen circumstances or inclement weather
                  conditions that necessitate the cancellation of the lesson, we will make every effort to reschedule
                  the lesson at a convenient time for you, or provide a full refund if rescheduling is not
                  possible.<br><br>

                  3. No-Show: If you fail to show up for your scheduled lesson without prior notice, you will not be
                  eligible for a refund or rescheduling.<br><br>

                  We understand that plans can change, and we strive to accommodate our customers to the best of our
                  ability while ensuring the smooth operation of our diving lessons. Thank you for your understanding
                  and cooperation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="70">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8"
                class="collapsed">Are there any age restrictions for your diving courses?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes, there are age restrictions for diving courses, which vary depending on the certification agency
                  and the specific course. However, here are some general guidelines:<br><br>

                  1. Discover Scuba Diving (DSD) Experience: Participants must usually be at least 10 years old to
                  participate in a DSD experience.<br><br>

                  2. Junior Open Water Diver Certification: Children as young as 10 years old can become certified as
                  Junior Open Water Divers, with certain depth and supervision restrictions until they reach the age of
                  15.<br><br>

                  3. Open Water Diver Certification: Most certification agencies require participants to be at least 15
                  years old to become certified as Open Water Divers without age restrictions.<br><br>

                  4. Advanced Open Water Diver Certification: Participants must typically be at least 12 years old to
                  enroll in the Advanced Open Water Diver course.<br><br>

                  5. Rescue Diver Certification: Participants usually need to be at least 12-15 years old to enroll in
                  the Rescue Diver course, depending on the certification agency.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="80">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9"
                class="collapsed">What locations do you offer diving lessons in?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                <p>
                  For diving lessons, we offer a variety of locations depending on sea conditions and your preferences.
                  Our primary locations include Unawatuna, Mirissa, Nilaveli, and Hikkaduwa, each offering unique dive
                  sites and experiences.<br><br>

                  Our dive locations may vary based on certification level and sea conditions, ensuring a safe and
                  enjoyable experience tailored to your needs. Whether you're interested in wreck dives, reef dives,
                  pinnacle dives, cave dives, or night dives, we've got the perfect spot for you to dive in and explore.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="90">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10"
                class="collapsed">How do I get started with booking diving lessons?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                <p>
                  To get started booking diving lessons, you can easily book through WhatsApp or email. Here's how:
                  <br><br>

                  1. *WhatsApp:* Simply send us a message on WhatsApp with your name, preferred dates for the lessons,
                  the number of participants, and any specific requests or questions you may have. Our team will
                  promptly respond to assist you with booking your diving lessons.<br><br>

                  2. *Email:* Alternatively, you can send us an email with the same information mentioned above, and
                  we'll get back to you with the necessary details to proceed with booking your diving lessons.<br><br>

                  Once we receive your message or email, we'll work with you to confirm the availability of your
                  preferred dates and finalize the booking details. We look forward to helping you embark on your diving
                  adventure!
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11"
                class="collapsed">What is the typical duration of a diving lesson or course?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                <p>
                  can vary depending on several factors, including the specific course curriculum, the certification
                  agency, and individual progress. Here's a general overview of typical durations:Discover Scuba Diving
                  (DSD) Experience: This introductory experience usually lasts around half a day, including a brief
                  orientation, basic skills training in shallow water, and a guided dive in open water.Open Water Diver
                  Certification: The Open Water Diver course typically spans 3-4 days, with a combination of classroom
                  sessions, confined water training (usually in a pool), and open water dives. Each day may involve
                  several hours of instruction and practice.Advanced Open Water Diver Certification: The Advanced Open
                  Water Diver course usually takes 2-3 days to complete, involving a series of adventure dives that
                  focus on specific skills and specialties. These dives may be spread out over multiple days.Rescue
                  Diver Certification: The Rescue Diver course typically spans 2-3 days and covers a range of rescue
                  techniques and emergency procedures. It includes both classroom sessions and practical scenarios in
                  open water.<br><br>
                  Dive Master Certification: The Dive Master course is an extensive program that typically spans several
                  weeks to several months, depending on the certification agency and the specific training schedule. The
                  course involves in-depth theoretical knowledge, practical skills development, and hands-on experience
                  assisting instructors with courses and guiding certified divers.
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

              <a href="https://wa.me/94715812982" target="_blank">
                <div class="phone">
                  <i class="bi bi-whatsapp"></i>
                  <h4>Whatsapp:</h4>
                  <p>+94 71 581 2982</p>
                </div>
              </a>

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
                <input type="text" class="form-control" name="subjectnew" id="subjectnew" placeholder="Subject"
                  required>
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
              <p class="pb-3"><em>Scuba Diving Instructor <br> (OWSI #445838) | Learn to scuba dive, Explore underwater
                  world...</em></p>
              <p>
                <strong>Phone:</strong> +94 71 581 2982<br>
                <strong>Email:</strong> seasoulssrilanka@gmail.com<br>
              </p>
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
            <p>However, you can connect with our social media to get the latest updates</p>
            <div class="social-links mt-3">
              <a href="https://youtube.com/@Salin989?si=LH0suNt3hLkvOlvt" class="youtube"><i
                  class="bx bxl-youtube"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100064441372182&mibextid=ZbWKwL" class="facebook"><i
                  class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/explore_the_ocean_with_sali?igsh=MWR4emVqem5naGw1ag=="
                class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://wa.me/94715812982" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="https://www.tiktok.com/@seasouls0" class="tiktok"><i class="bx bxl-tiktok"></i></a>
            </div>
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

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center scrollto"><i
      class="bi bi-arrow-up-short"></i></a>
  <a href="#hero" class="scrollto">
    <div id="google_translate_element" class="d-flex align-items-center justify-content-center">
      <script type="text/javascript" defer>
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({ pageLanguage: '', includedLanguages: 'ru,es,es-419,it,de,hi,ta,ar,iw,zh-CN,zh-TW,fr,pt,af,ja,ko,nl,tl,en,uk,id,mt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
        }
      </script>
    </div>
  </a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js" async></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" async></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous" async></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js" async></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" async></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" async></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>

  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer async></script>

  <script type="text/javascript" async
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async></script>

  <!-- Template Main JS File -->
  <script type="text/javascript" src="assets/js/main.js" async></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Sea Souls Diving",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Unawatuna Beach Road",
      "addressLocality": "Galle",
      "addressRegion": "Southern Province",
      "postalCode": "80000",
      "addressCountry": "Sri Lanka"
    },
    "telephone": "+94 71 581 2982",
    "url": "https://seasoulsdiving.com"
  }
  </script>


</body>

</html>