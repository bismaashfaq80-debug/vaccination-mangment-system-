@extends('layout')
@section('content')
<main class="main">
  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="/assets/img/hero-carousel/4-Picsart-AiImageEnhancer.jfif" alt="">
        <div class="container">
           <h2>Welcome to VMS</h2>
          <p>Providing professional, compassionate medical care with state-of-the-art facilities and a patient-first approach.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="/assets/img/hero-carousel/1 (1).jpg" alt="">
        <div class="container">
          <h2>Your Health, Our Priority</h2>
             <p>We are dedicated to improving lives through expert healthcare, modern technology, and a team that truly cares about your well-being.</p>
          <a href="#about" class="btn-get-started">Read More</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="/assets/img/hero-carousel/3 (1).jpg" alt="">
        <div class="container">
           <h2>Advanced Medicine, Compassionate Hearts</h2>
              <p>Combining modern medical expertise with genuine empathy to deliver world-class healthcare for you and your family.</p>
          <a href="#about" class="btn-get-started">Read More</a>
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

  </section><!-- /Hero Section -->

  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
             <h4><a href="" class="stretched-link">Emergency</a></h4>
            <p>We care available 24/7 with experienced physicians and rapid response teams.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-pills icon"></i></div>
          <h4><a href="" class="stretched-link">Personalized</a></h4>
            <p>treatment plans created by our multidisciplinary medical staff.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-thermometer icon"></i></div>
            <h4><a href="" class="stretched-link">Research</a></h4>
              <p>Advanced diagnostic and laboratory services with fast, accurate results.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-dna icon"></i></div>
           <h4><a href="" class="stretched-link">Care </a></h4>
            <p>Comprehensive postoperative follow-up care to support your recovery.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Featured Services Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
              <h3>In an emergency? Need help now?</h3>
            <a class="cta-btn" href="#appointment">Make an Appointment</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>About Us<br></h2>
      <p>Our medical center combines expert physicians, modern technology, and compassionate care to provide the best outcomes for our patients. We are committed to safety, innovation, and respect for every individual we treat.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>Dedicated to Quality Healthcare.</h3>
          <p class="fst-italic">
            We focus on delivering high-quality medical services tailored to the unique needs of each patient. With experienced specialists and advanced facilities, we strive to ensure your comfort, confidence, and complete recovery
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>We provide personalized treatment plans for every patient’s condition.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>We use modern diagnostic tools for accurate and timely results.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>We focus on continuous improvement through training and research.</span></li>
          </ul>
          <p>
            Our team believes that great healthcare starts with trust and communication. From your first consultation to recovery, we are here to guide you every step of the way, ensuring you receive the care and attention you deserve.</p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-user-md flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="far fa-hospital flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-flask flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="fas fa-award flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container">

      <div class="row justify-content-around gy-4">
        <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/features.jpg" alt=""></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <h3>Laboratory / research</h3>
          <p>Our laboratory uses modern equipment and strict quality controls to deliver reliable diagnostic testing for accurate treatment planning.</p>
          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
            <div>
               <h4><a href="" class="stretched-link">Advanced Laboratory Testing</a></h4>
              <p>We use modern equipment and strict quality controls to provide fast and accurate test results for better diagnosis and treatment.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Emergency and Critical Care</a></h4>
              <p>Our emergency department is staffed 24/7 with skilled professionals ready to respond quickly to urgent medical situations.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
            <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Pharmacy and Medication Support</a></h4>
              <p>Our in-house pharmacy ensures that prescribed medicines are available promptly, with guidance from qualified pharmacists.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
            <i class="fa-solid fa-lungs flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Respiratory and Lung Health</a></h4>
              <p>We offer advanced respiratory care, including lung function testing, therapy, and ongoing management for chronic conditions.</p>

            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>

  </section><!-- /Features Section -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h2>Services</h2>
      <p>General medicine and preventive health checks to keep you well and catch issues early.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <a href="#" class="stretched-link">
               <h3>Emergency Services  </h3>
            </a>
            <p>We offer 24/7 emergency support with trained doctors and nurses who respond quickly to critical medical situations with modern facilities and equipment.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-pills"></i>
            </div>
            <a href="#" class="stretched-link">
               <h3>Cardiology</h3>
            </a>
            <p>Our cardiology department specializes in the diagnosis and treatment of heart conditions using advanced imaging, testing, and interventional procedures.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-hospital-user"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Orthopedics</h3>
            </a>
            <p>We provide expert care for bone, joint, and muscle conditions, offering both surgical and non-surgical treatments for faster recovery and mobility.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-dna"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Pediatrics</h3>
            </a>
              <p>Our pediatric specialists focus on the growth, development, and health of infants, children, and adolescents in a friendly and caring environment.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-wheelchair"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Dental Care</h3>
            </a>
            <p>We offer preventive and restorative dental treatments, including cleanings, fillings, and cosmetic procedures, to help you maintain a healthy smile.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fas fa-notes-medical"></i>
            </div>
            <a href="#" class="stretched-link">
               <h3>General Medical Care</h3>
            </a>
            <p>Our general practitioners provide comprehensive primary care, routine checkups, and early detection of health conditions to keep you and your family healthy.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->
  @if(Auth::check())
  <section id="appointment" class="appointment section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>MAKE AN APPOINTMENT</h2>
       <p>To make an appointment, select a doctor, pick a suitable date and time, and provide your contact details. You will receive a confirmation email or phone call.</p>

    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <form action="/appointment" method="Post" role="form"  class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="hospital" id="hospital" class="form-select" required="">
              <option value="">Select hospital</option>
              <option value="patel">patel</option>
              <option value="dow">south city</option>
              <option value="ashfaq">aga khan</option>
              <option value="ashfaq">jinnah</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="vaccination" id="doctor" class="form-select" required="">
              <option value="">Select vaccination</option>
              <option value="vc1">Moderna </option>
              <option value="vc2">Pfizer</option>
              <option value="vc3">CanSino</option>
              <option value="vc3">Gamaleya</option>
              <option value="vc3">Oxford</option>
            </select>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="mt-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </div>
      </form>

    </div>

  </section><!-- /Appointment Section -->
@else()

<!-- Tabs Section -->
<section id="tabs" class="tabs section">
  
  <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Departments</h2>
      <p>We bring together leading specialists across a variety of medical fields to provide expert diagnosis and treatment. Each department is equipped with modern technology and a team dedicated to delivering personalized, patient-focused care.</p>
    </div><!-- End Section Title -->
    
    @endif
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Cardiology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Neurology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Hepatology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Ophthalmologists</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tabs-tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Cardiology</h3>
                  <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                  <p>Our cardiology department specializes in the prevention, diagnosis, and treatment of heart diseases. Our experienced cardiologists use advanced imaging and diagnostic tools to manage conditions such as hypertension, arrhythmia, and coronary artery disease with personalized care.</p>

                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tabs-tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Neurology</h3>
                  <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                    <p>Our neurology team provides expert evaluation and treatment for disorders of the brain, spinal cord, and nervous system. We focus on conditions like migraines, epilepsy, stroke, and movement disorders, ensuring precise diagnosis and compassionate support for every patient.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            
            <div class="tab-pane" id="tabs-tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Hepatology</h3>
                  <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                 <p>The hepatology unit offers comprehensive care for liver, gallbladder, and pancreas diseases. Our specialists provide early detection, treatment, and long-term management of conditions such as hepatitis, fatty liver disease, and cirrhosis using the latest medical advancements.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            
            <div class="tab-pane" id="tabs-tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Ophthalmologists</h3>
                  <!-- <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> -->
                  <p>Our ophthalmologists offer advanced eye care services, including vision exams, cataract surgery, and treatment for glaucoma and other eye disorders. We are committed to preserving and improving your vision with precision and care.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Tabs Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>We’re proud to have earned the trust of our patients through compassionate care, professionalism, and outstanding results. Here are a few words from those we’ve helped on their journey to better health.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class=" bi bi-quote quote-icon-left"></i>
                     <span>The doctors and nurses treated me with kindness and respect from the moment I arrived. They listened carefully to my concerns and made me feel completely at ease during my treatment. I’m thankful for their professionalism and warmth.</span>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>My experience was excellent from start to finish. The hospital staff were efficient, friendly, and always available to answer my questions. The treatment plan was clear, and my recovery went smoothly thanks to their careful guidance.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                 <span>I was nervous about my heart condition, but the cardiology team was amazing. They explained every procedure in detail and took great care throughout my stay. I felt confident knowing I was in the best hands possible.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                 <span>The hospital environment is spotless and comfortable. The staff follow excellent hygiene standards, and everything is well-organized. It really made a difference in helping me recover peacefully and stress-free.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                 <span>My daughter received outstanding care from the pediatric team. They were gentle, patient, and made her feel relaxed during her check-up. It’s reassuring to know there’s a place where children are cared for with such dedication.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Hospitals Section -->
  <section id="hospitals"class="hospitals section">
    <div class="container-fluid">
      <div class="container section-title" data-aos="fade-up">
        <h2>HOSPITALS</h2>
        <p>Explore our network of trusted hospitals providing quality healthcare services.</p>
      </div>
      <div class="row">
        @if(isset($data) && count($data) > 0)
          @foreach($data as $p)
            <div class="col-12 col-md-3 col-lg-3 mb-5">
              <a class="hospital-item" href="#">
                <img src="/update/{{$p->hospitalfile}}" class="img-fluid hospital-thumbnail" alt="{{$p->hospitalname}}">
                <h3 class="hospital-title">{{$p->hospitalname}}</h3>
                <h3 class="hospital-title">{{$p->location}}</h3>
              </a>
            </div>
          @endforeach
        @else
          <p class="text-center">No hospital data available.</p>
        @endif
      </div>
    </div>
  </section><!-- /Hospitals Section -->

  <!-- Gallery Section -->
  <section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
     <h2>Gallery</h2>
      <p>Operating theatre with up-to-date surgical equipment.</p>
<p>Emergency department team in action during a simulated drill.</p>
<p>Patient consultation room designed for privacy and comfort.</p>
<p>Our lab team preparing diagnostic tests for rapid results.</p>
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
            "centeredSlides": true,
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 0
              },
              "768": {
                "slidesPerView": 3,
                "spaceBetween": 20
              },
              "1200": {
                "slidesPerView": 5,
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/images1.jfif"><img src="/assets/img/gallery/images1.jfif" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/img3.jfif"><img src="/assets/img/gallery/img3.jfif" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/img2.jfif"><img src="/assets/img/gallery/img2.jfif" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="/assets/img/gallery/images.jfif"><img src="/assets/img/gallery/images.jfif" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Gallery Section -->

  
  <section id="doctors" class="doctors section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TEAM MEMBERS</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/team/bisma ashfaq.jpg" class="img-fluid"  width="180" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4> BISMA ASHFAQ</h4>
                <span>LEADER</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/team/tahira.jpeg"width="180" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>TAHIRA FATIMA</h4>
                <span>TEAM MEMBER</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/team/taha ahmed.jpeg" class="img-fluid" width="180" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>TAHA AHMED</h4>
                <span>TEAM MEMBER</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="/assets/img/team/rehmat.jpeg"  width="180" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4>REHMAT SAMAD</h4>
                <span>TEAM MEMBER</span>
              </div>
            </div>
          </div><!-- End Team Member -->

  <!-- Faq Section -->
  <section id="faq" class="faq section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
     
    </div><!-- End Section Title -->

    <div class="container">

      <div class="container section-title" data-aos="fade-up">
      <h2>QUESTIONS</h2>

      <div class="row justify-content-center">

        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

          <div class="faq-container">

            <div class="faq-item">
              <h3>Can I make an appointment online?</h3>
              <div class="faq-content">
                <p>Yes, we accept most major health insurance providers. Please bring your insurance card during your visit, and our billing team will help verify your coverage before your appointment or treatment.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>why we need covid 19 vaccine?</h3>
              <div class="faq-content">
                <p> COVID-19 can lead to serious, long-term health complications, including organ damage, "long COVID," or multisystem inflammatory syndrome (MIS-C). Vaccination significantly reduces the risk of developing these conditions.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>What should I bring to my first visit?</h3>
              <div class="faq-content">
                <p>Please bring a valid ID, your insurance information, a list of current medications, and any previous medical records or test results. This helps our doctors provide you with accurate and effective care.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Do you provide emergency services?</h3>
              <div class="faq-content">
                <p>Yes, our emergency department is open 24 hours a day, seven days a week. Our experienced medical staff and advanced facilities are ready to handle all kinds of urgent and critical cases.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>Can I visit a specialist without a referral?</h3>
              <div class="faq-content">
                <p>In most cases, you can schedule a consultation directly with one of our specialists. However, some insurance plans may require a referral from your primary care doctor. Our staff can assist you with the process.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3>How can I request a copy of my medical records?</h3>
              <div class="faq-content">
                <p>You can request your medical records by submitting a form at our reception desk or by emailing medicalrecords@yourhospital.com. Records are processed securely, and you will be notified once they’re ready for collection.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>


        </div><!-- End Faq Column-->

      </div>

    </div>

  </section><!-- /Faq Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
       <h2>Contact</h2>
       <p>We’re here to help you with any questions about our services, appointments, or facilities. Please reach out to us — our support team will respond as soon as possible.</p>
    </div>
      <!-- End Section Title -->

    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street, pakistan, kpk 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
          <form action="contact" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
            @csrf
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
   
@endsection