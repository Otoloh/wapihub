<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wapi Hub</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="home">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?=ROOT?>/home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt=""> 
        <h1 class="sitename">Wapi Hub</h1>
      </a>

      <form action="">
        
       <input type="search" placeholder="Search Wapi Hub">
       <i class="bi bi-search"></i>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      </form>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?=ROOT?>/home" class="active">Home</a></li>
          <li><a href="<?=ROOT?>/about">About</a></li>
          <li><a href="<?=ROOT?>/services">Services</a></li>
          
          <li><a href="<?=ROOT?>/team">Team</a></li>
          <li><a href="<?=ROOT?>/blog">Blog</a></li>
         
          <li><a href="<?=ROOT?>/contact">Contact</a></li>
          <li><a href="<?=ROOT?>/login">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

          <div class="carousel-item active">
            <div class="carousel-container">
              <h2>Welcome to Wapi Hub</h2>
              <p>In an increasingly fast-paced world, Wapi hub helps you cut through the noise, ensuring you never miss out on opportunities to shop, dine, play, or connect. It’s not just an app—it’s your guide to living life to the fullest.</p>
              <a href="<?=ROOT?>/about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>Explore More</h2>
              <p>Wapi, inspired by the Swahili word meaning "where," is your ultimate lifestyle companion. It’s a smart platform designed to keep you effortlessly connected to everything exciting happening around you.</p>
              <a href="<?=ROOT?>/about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <div class="carousel-item">
            <div class="carousel-container">
              <h2>Live More</h2>
              <p>From shopping sprees and culinary adventures to nightlife and cultural events, Wapi makes discovering your city simple, seamless, and fun.</p>
              <a href="<?=ROOT?>/about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Carousel Item -->

          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Categories</h2>
      </div><!-- End Section Title -->

      <div class="container py-3">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="bi bi-cup-hot-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Restaurants</h3>
              </a>
                <p>Make reservations</p></br><p>Order delivery</p></br><p>Kenyan dishes</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="bi bi-buildings-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Hotels & Travel</h3>
              </a>
              <p>Make reservations</p></br><p>5 star hotels</p></br><p>Close to Airport</p>
            </div>

          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="bi bi-moon-stars-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Nightlife</h3>
              </a>
               <p>Clubs</p></br><p>Concerts</p></br><p>Kenyan/ Rhumba</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-event"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Events & Event planning Services</h3>
              </a>
               <p>Popular Events</p></br><p>Concerts</p></br><p>Deals on Tickets</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>


       <div class="container py-3">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="bi bi-cart4"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Shopping</h3>
              </a>              
               <p>Malls</p></br><p>Near me</p></br><p>Shopping deals</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="bi bi-bicycle"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Gym & Fitness</h3>
              </a>                
               <p>Best Facilities</p></br><p>With Trainer/Instructor</p></br><p>Membership deals</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="bi bi-book-half"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Education</h3>
              </a>
               <p>Popular Schools</p></br><p>Libraries</p></br><p>Best Facilities</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="bi bi-emoji-sunglasses"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Beauty & Spa</h3>
              </a>          
               <p>Popular Spas</p></br><p>Make up artists</p></br><p>Hair products</p>              
               <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>


        <div class="container py-3">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="bi bi-truck"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Local Services</h3>
              </a>
             
               <p>Electricians</p></br><p>Home Movers</p></br><p>Deals on Services</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="bi bi-hospital-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Health & Welfare</h3>
              </a>
            
               <p>Hospitals</p></br><p>Maternity</p></br><p>Kupa Kenya</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="bi bi-house-gear-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Home Services</h3>
              </a>
           
               <p>Plumbing</p></br><p>Garbage Collection</p></br><p>Home Delivery</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="bi bi-car-front-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Automotive & Auto Services</h3>
              </a>            
               <p>Best Car Dealers</p></br><p>Auto Garages</p></br><p>Best Prices</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>


     
      <div class="container py-3">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <i class="bi bi-houses-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Real Estate & Rentals</h3>
              </a>
             
               <p>Air BnB deals</p></br><p>Rental apartments</p></br><p>Real Estate</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Mass Media Services</h3>
              </a>
             
               <p>Popular Podcasts</p></br><p>Radio/TV shows</p></br><p>Deals on Tickets</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <div class="icon">
                <i class="bi bi-briefcase-fill"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Professional Services</h3>
              </a>
             
               <p>Therapy</p></br><p>Mentorship/coaching</p></br><p>DJ Academies</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <div class="icon">
                <i class="bi bi-bank2"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Financial Services</h3>
              </a>
              
               <p>Banks</p></br><p>Money Market Funds</p></br><p>Financial Advisors</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>


    </section><!-- /Featured Services Section -->



    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Wapi Hub Platform offers exclusive features to business owners and customers alike. </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Give your business the online presence it surely deserves </h3>
            <p class="fst-italic">
           Elevate your business with a powerful and professional online presence that drives growth and connects you with your customers.
            </p>
            <ul>
              <li><i class="bi bi-check"></i><span> Engage customers and build trust with consistent, high-quality online content.</span></li>
              <li><i class="bi bi-check"></i> <span>Enhance visibility and reach through effective SEO and digital marketing strategies.</span></li>
              <li><i class="bi bi-check"></i> <span>Access a visually appealing and user-friendly platform tailored to your brand.</span></li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Monitor your business through your business dashboard</h3>
            <p class="fst-italic">
              Take control of your business operations with a comprehensive business dashboard that provides real-time insights and simplifies decision-making.
            </p>
            <p>
              The business dashboard is your centralized hub for monitoring key performance metrics, tracking progress, and making data-driven decisions. From sales and revenue trends to customer engagement and operational efficiency, it offers a clear, real-time view of your business health. With customizable features and intuitive visuals, you can quickly identify opportunities, address challenges, and stay ahead of the competition. Streamline your workflow, save time, and empower your team with the tools needed to drive success—all from one convenient platform.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Communicate easily with business owners or potential customers</h3>
            <p> Simplify and enhance your communication with business owners and potential customers through seamless, efficient, and professional tools.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Use integrated messaging on the platform to connect instantly and maintain clear, consistent communication.</span></li>
              <li><i class="bi bi-check"></i><span> Leverage customer relationship management systems to track interactions, personalize outreach, and build stronger relationships.</span></li>
              <li><i class="bi bi-check"></i> <span>Employ video conferencing and collaboration tools to engage effectively, no matter the location.</span>.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
            <h3>Keep track of upcoming events and appointments with your calender</h3>
            <p class="fst-italic">
               Stay organized and never miss a beat with a reliable calendar system designed to keep track of your upcoming events and appointments.
            <p>
              A well-maintained calendar is essential for managing your time effectively and ensuring you stay on top of important commitments. By centralizing all your events, meetings, and deadlines in one place, you can easily visualize your schedule, set reminders, and prioritize tasks. Whether it’s a client meeting, project deadline, or personal appointment, a calendar helps you plan ahead, avoid conflicts, and maintain productivity. With features like syncing across devices, sharing availability, and integrating with other tools, you can streamline your workflow and focus on what matters most—achieving your goals.
            </p>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?=ROOT?>/home" class="d-flex align-items-center">
            <span class="sitename">Wapi Hub</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>Nairobi,  535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+254 718 233 401</span></p>
            <p><strong>Email:</strong> <span>info@wapihub.io</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Wapi Hub for Business</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Restaurants</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Hotels & Travel</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Events & Event Planning Services</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <strong class="px-1 sitename">Wapi Hub 2025</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>