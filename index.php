<?php
include('header.php')
?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <img src="assets/img/home/hero.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 data-aos="fade-up" data-aos-delay="100">"Transform Your Wardrobe, Elevate Your Look with Codeswear</h2>
          <p data-aos="fade-up" data-aos-delay="200">At Codeswear, we create timeless, stylish clothing that empowers individuality and celebrates quality craftsmanship</p>
          <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#about" class="btn-get-started">Explore Now</a>
          </div>

        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Clients Section -->

  <!-- About Section -->
  <section id="about" class="about section section-bg dark-background">

    <div class="container position-relative">

      <div class="row gy-5">

        <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
          <h3>Welcome to Codeswear</h3>
          <p>
          At Codeswear, we’re more than just a clothing brand—we’re a lifestyle. Born in the heart of creativity and driven by a passion for design, we aim to redefine fashion with a perfect blend of comfort, style, and individuality.          </p>
          <a href="about.php" class="about-btn align-self-center align-self-xl-start"><span>About us</span> <i class="bi bi-chevron-right"></i></a>
        </div>

        <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6 icon-box position-relative">
              <i class="fas fa-lightbulb"></i>
              <h4><a href="" class="stretched-link">Our Philosophy</a></h4>
              <p>At Codeswear, we believe fashion is an expression of individuality and confidence. Our designs are crafted to inspire and empower every personality</p>
            </div><!-- Icon-Box -->

            <div class="col-md-6 icon-box position-relative">
              <i class="fas fa-gem"></i>
              <h4><a href="" class="stretched-link">Commitment to Quality</a></h4>
              <p>Every piece in our collection is made with precision and care, using premium materials to ensure comfort, durability, and style</p>
            </div><!-- Icon-Box -->

            <div class="col-md-6 icon-box position-relative">
              <i class="fas fa-leaf"></i>
              <h4><a href="" class="stretched-link">Innovative & Sustainable</a></h4>
              <p>We blend modern trends with sustainable practices, creating fashion that not only looks good but also feels responsible</p>
            </div><!-- Icon-Box -->

            <div class="col-md-6 icon-box position-relative">
              <i class="fas fa-tshirt"></i>
              <h4><a href="" class="stretched-link">Your Style Partner</a></h4>
              <p>Whether it’s casual wear or bold statement pieces, Codeswear is here to complement your wardrobe and make every moment stylish</p>
            </div><!-- Icon-Box -->

          </div>
        </div>

      </div>

    </div>

  </section><!-- /About Section -->


  <!-- Tabs Section -->
  <section id="tabs" class="tabs section">

    <div class="container">

      <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1">
            <i class="bi bi-person"></i>
            <h4 class="d-none d-lg-block">Men's Wear</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2">
            <i class="bi bi-person-fill"></i>
            <h4 class="d-none d-lg-block">Women's Wear</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3">
            <i class="bi bi-emoji-smile-fill"></i>
            <h4 class="d-none d-lg-block">Kid's Wear</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4">
            <i class="bi bi-bag"></i>
            <h4 class="d-none d-lg-block">Accessories</h4>
          </a>
        </li>
      </ul><!-- End Tab Nav -->

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <div class="tab-pane fade active show" id="tabs-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Explore versatile and stylish outfits designed for the modern man. From casual to formal, we’ve got you covered</h3>
             
              <ul>
                <li><i class="bi bi-person-badge"></i> <span>T-Shirts</span></li>
                <li><i class="bi bi-person-badge"></i> <span>Shirts</span></li>
                <li><i class="i bi-emoji-smile"></i> <span>Hoodies & Sweatshirts</span></li>
                <li><i class="bi bi-slack"></i> <span>Jeans & Trousers</span></li>
                <li><i class="bi bi-snow"></i> <span>Jackets & Coats</span></li>
              </ul>
              <a href="menswear.php" class="about-btn align-self-center align-self-xl-start"><span>Explore Collections</span> <i class="bi bi-chevron-right"></i></a>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/home/menswear.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="tabs-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Celebrate elegance with our curated women’s collection. Trendy, comfortable, and perfect for every occasion</h3>
              <ul>
                <li><i class="bi bi-activity"></i> <span>Tops & Blouses</span></li>
                <li><i class="bi bi-gender-female"></i> <span>Dresses</span></li>
                <li><i class="bi bi-person-fill"></i> <span>Kurtis & Tunics</span></li>
                <li><i class="bi bi-border-style"></i> <span>Skirts & Trousers</span></li>
                <li><i class="bi bi-wind"></i> <span>Jackets & Shrugs</span></li>
              </ul>
              <a href="woamwears.php" class="about-btn align-self-center align-self-xl-start"><span>Explore Collections</span> <i class="bi bi-chevron-right"></i></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/home/womanwear.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="tabs-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Fun and functional styles for kids of all ages. Let them shine in outfits crafted for comfort and play</h3>
              <ul>
                <li><i class="bi bi-emoji-laughing"></i> <span>T-Shirts & Tops</span></li>
                <li><i class="bi bi-star-fill"></i> <span>Dresses & Frocks</span></li>
                <li><i class="bi bi-cup"></i> <span>Shorts & Skirts</span></li>
                <li><i class="bi bi-cloud"></i> <span>Hoodies & Sweaters</span></li>
                <li><i class="bi bi-moon"></i> <span>Nightwear</span></li>
              </ul>
              <a href="kidswear.php" class="about-btn align-self-center align-self-xl-start"><span>Explore Collections</span> <i class="bi bi-chevron-right"></i></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/home/kidswear.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="tabs-tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Complete your look with our premium accessories. From hats to bags, it’s all in the details.</h3>
              <ul>
                <li><i class="bi bi-brightness-alt-high"></i> <span>Caps & Hats</span></li>
                <li><i class="bi bi-slash-lg"></i> <span>Belts</span></li>
                <li><i class="bi bi-card-checklist"></i> <span>Socks</span></li>
                <li><i class="bi bi-file-earmark-richtext"></i> <span>Scarves & Stoles</span></li>
                <li><i class="bi bi-briefcase"></i> <span>Bags & Backpacks</span></li>
              </ul>
              <a href="accesories.php" class="about-btn align-self-center align-self-xl-start"><span>Explore Collections</span> <i class="bi bi-chevron-right"></i></a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/home/accessories.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

      </div>

    </div>

  </section><!-- /Tabs Section -->

  <!-- Services Section -->
  <section id="services" class="services section section-bg dark-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Elevate Your Experience with Our Services</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-scissors icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Custom Tailoring</a></h4>
              <p class="description">Get outfits designed to your exact measurements and style preferences. Experience the perfect fit, every time</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-person-lines-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Fashion Consulting</a></h4>
              <p class="description">Not sure what suits you best? Our style experts will guide you to make the right choices for every occasion</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-book-half icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Seasonal Lookbooks</a></h4>
              <p class="description">Stay updated with the latest fashion trends through our curated seasonal lookbooks, tailored just for you</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-people-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link"> Bulk Orders for Events</a></h4>
              <p class="description">Planning a special event? We provide customized clothing solutions for weddings, corporate events, and parties</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-recycle icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sustainable Fashion Line</a></h4>
              <p class="description">Discover eco-friendly designs crafted with care for the planet. Style meets responsibility in our sustainable collections</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-gift-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Exclusive Member Perks</a></h4>
              <p class="description">Join the Codeswear community and enjoy exclusive benefits, early access to new collections, and special discounts</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Portfolio Section -->


  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>What Our Customers Are Saying</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 3,
                "spaceBetween": 10
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <h3>Prashant Mehta</h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Codeswear’s collection transformed my wardrobe! The quality and fit are unparalleled. I’ll definitely be coming back for more</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <h3>Devam Pandey</h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>I love the personalized styling tips! The Fashion Consulting service helped me find outfits that fit my style perfectly. Highly recommend!</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <h3>Swapnil Shah</h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The custom tailoring service at Codeswear is amazing. I got a suit made to measure, and the fit was flawless. It’s like it was made just for me!</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <h3>Tushar Makvana</h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>As someone who loves eco-friendly fashion, I’m so happy to have found Codeswear. Their sustainable line is not only stylish but also good for the planet</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <h3>Kalpesh Cahuhan</h3>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>I ordered clothing for my wedding event through Codeswear’s bulk order service, and everything was perfect. The quality, service, and attention to detail were incredible</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section section-bg dark-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Find the Perfect Plan for Your Fashion Needs</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row g-4 g-lg-0">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3> Basic Plan</h3>
            <h4><sup>₹</sup>2000<span> / month</span></h4>
            <ul>
              <li> <span> Perfect for individuals looking for trendy yet affordable fashion. Includes access to all seasonal collections</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">
            <h3>Premium Plan</h3>
            <h4><sup>₹</sup>3500<span> / month</span></h4>
            <ul>
              <li> <span>Get exclusive access to custom tailoring, fashion consulting, and priority shipping on all orders</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>VIP Plan</h3>
            <h4><sup>₹</sup>5000<span> / month</span></h4>
            <ul>
              <li> <span> Enjoy the full Codeswear experience with all services included, including bulk orders for events, exclusive member perks, and more</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

  <!-- Faq Section -->
  <section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Frequently Asked Questions</h2>
      <p>Got questions? We're here to provide quick answers and helpful information</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

          <div class="faq-container">

            <div class="faq-item faq-active">
              <h3>What types of clothing do you offer?</h3>
              <div class="faq-content">
                <p>We offer a wide range of clothing, including men’s, women’s, and kids’ wear. Our collections feature seasonal trends, casual styles, formal outfits, and accessories.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>How can I place an order?</h3>
              <div class="faq-content">
                <p>You can browse our collections online, select the items you wish to purchase, and fill out the checkout details. We provide easy navigation and secure payment options for a smooth shopping experience</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Do you offer custom tailoring services?</h3>
              <div class="faq-content">
                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>How do I know which size to choose?</h3>
              <div class="faq-content">
                <p>We provide a detailed size guide for every product to help you make an informed decision. If you're unsure about the sizing, feel free to reach out to our customer support team for assistance.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>What payment methods do you accept?</h3>
              <div class="faq-content">
                <p>We accept various payment methods including credit/debit cards, PayPal, and secure payment gateways for your convenience.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Do you offer international shipping</h3>
              <div class="faq-content">
                <p>Yes, we offer international shipping to several countries. Shipping fees and delivery times may vary based on your location</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div><!-- End Faq Column-->

      </div>

    </div>

  </section><!-- /Faq Section -->

  <!-- Team Section -->
  <section id="team" class="team section section-bg dark-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>At Codeswear, our team is passionate about delivering top-notch fashion and excellent customer service.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Bharat Rathi</h4>
              <span>Founder & CEO</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Rupal Gohil</h4>
              <span>Head of Design</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Gautam Solanki</h4>
              <span>Lead Tailor</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nemisha Vaghela</h4>
              <span>Fashion Consultant</span>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Get in Touch with Codeswear</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>319, Fashion Street, Surat, Gujarat, 395001, India</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+91 98765 43210</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>contact@codeswear.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<?php
include('footer.php')
?>