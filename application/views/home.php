<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Welcome to SL Courses</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/');?>assets/img/1.jpg"rel="icon">
  <link href="<?php echo base_url('assets/');?>assets/img/1.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url('assets/');?>assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center">

        <h1 class="sitename">SL Courses</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <img src="<?php echo base_url('assets/');?>assets/img/1.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>Welcome to SL Courses</h2>
        <p>All the online course details you need in one Sri Lankan Platform.</p>
      </div>

    </section><!-- /Hero Section -->

   <!-- About Section -->
<section id="about" class="about section text-center">

  <div class="container">

    <div class="row gy-5 justify-content-center">

      <div class="content col-lg-9 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
        <h3>About</h3>

        <p class="mt-3">
          SL Courses is a free online platform specially built for Sri Lankan learners to easily find and explore 
          " Local Online Courses ". We focus on bringing together course information offered by Sri Lankan institutes, 
          academies, training centers and online education providers all into one convenient place.
        </p>

        <p>
          Instead of browsing multiple websites and social media pages, SL Courses helps you save time by giving clear, 
          organized and trustworthy details about local courses in Sri Lanka. Whether you're looking for IT, English, 
          Graphic Design, Teaching, Business or Professional Development programs we make it simple to compare and 
          select the best option for your goals.
        </p>

        <p>
          Our mission is to support students, school leavers, job-seekers, and working professionals in Sri Lanka by 
          connecting them with the right learning opportunities that can build skills, improve careers and open new 
          paths for growth all through online learning.
        </p>

        <p>
          We carefully gather course details directly from Sri Lankan educational providers to ensure accuracy, allowing 
          you to make informed decisions with confidence before enrolling.
        </p>

      </div>

    </div>

  </div>

</section>
<!-- /About Section -->

 <!-- Courses Section -->
<section id="courses" class="courses section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Courses</h2>
    <p>Your Gateway to the Best Online Courses in Sri Lanka</p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <!-- Filter Row -->
    <div class="row mb-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 col-md-6">
        <select id="categoryFilter" class="form-select">
          <option value="*">All Categories</option>
          <option value=".it">IT & Software</option>
          <option value=".business">Business</option>
          <option value=".design">Design</option>
        </select>
      </div>

      <div class="col-lg-4 col-md-6">
        <select id="typeFilter" class="form-select">
          <option value="*">All Types</option>
          <option value=".free">Free</option>
          <option value=".paid">Paid</option>
        </select>
      </div>

      <div class="col-lg-4 col-md-12">
        <input type="text" id="searchFilter" class="form-control" placeholder="Search Course...">
      </div>
    </div>
    <!-- End Filter Row -->


    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <!-- Course Item -->
      <div class="col-lg-4 col-md-6 course-item it free">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Web Development Course">
          <div class="course-content">
            <span class="course-tag free">Free</span>
            <h4 class="course-title">Web Development for Beginners</h4>
            <p class="course-provider">ESOFT Metro Campus</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 4 Weeks</span>
              <span><i class="bi bi-layers"></i> Beginner</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>
      <!-- End Course Item -->

      <div class="col-lg-4 col-md-6 course-item business paid">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Digital Marketing Course">
          <div class="course-content">
            <span class="course-tag paid">Paid</span>
            <h4 class="course-title">Digital Marketing Essentials</h4>
            <p class="course-provider">UCSC Extension Center</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 6 Weeks</span>
              <span><i class="bi bi-layers"></i> Beginner</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 course-item design free">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Graphic Design Course">
          <div class="course-content">
            <span class="course-tag free">Free</span>
            <h4 class="course-title">Graphic Design Fundamentals</h4>
            <p class="course-provider">SLIIT Academy</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 3 Weeks</span>
              <span><i class="bi bi-layers"></i> Beginner</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>

      <!-- Duplicate cards updated with categories -->
      <div class="col-lg-4 col-md-6 course-item design free">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Graphic Course">
          <div class="course-content">
            <span class="course-tag free">Free</span>
            <h4 class="course-title">Adobe Illustrator Basics</h4>
            <p class="course-provider">SLIIT Academy</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 3 Weeks</span>
              <span><i class="bi bi-layers"></i> Beginner</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 course-item it paid">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Programming Course">
          <div class="course-content">
            <span class="course-tag paid">Paid</span>
            <h4 class="course-title">C++ Programming Mastery</h4>
            <p class="course-provider">IJSE</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 8 Weeks</span>
              <span><i class="bi bi-layers"></i> Intermediate</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 course-item business free">
        <div class="course-card">
          <img src="<?= base_url('assets/assets/img/1.jpg'); ?>" class="img-fluid course-img" alt="Business Course">
          <div class="course-content">
            <span class="course-tag free">Free</span>
            <h4 class="course-title">Entrepreneurship Basics</h4>
            <p class="course-provider">Open University of Sri Lanka</p>

            <div class="course-meta">
              <span><i class="bi bi-clock"></i> 2 Weeks</span>
              <span><i class="bi bi-layers"></i> Beginner</span>
            </div>
            <a href="#" class="btn-course">View Course</a>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /Courses Section -->


<script>
  document.addEventListener("DOMContentLoaded", function () {

    const categoryFilter = document.getElementById('categoryFilter');
    const typeFilter = document.getElementById('typeFilter');
    const searchFilter = document.getElementById('searchFilter');
    const items = document.querySelectorAll('.course-item');

    function filterCourses() {
      let category = categoryFilter.value;
      let type = typeFilter.value;
      let searchText = searchFilter.value.toLowerCase();

      items.forEach(item => {
        const matchesCategory = category === "*" || item.classList.contains(category.substring(1));
        const matchesType = type === "*" || item.classList.contains(type.substring(1));
        const matchesSearch = item.querySelector('.course-title').innerText.toLowerCase().includes(searchText);

        if (matchesCategory && matchesType && matchesSearch) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    }

    categoryFilter.addEventListener('change', filterCourses);
    typeFilter.addEventListener('change', filterCourses);
    searchFilter.addEventListener('keyup', filterCourses);
  });
</script>



    <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Have questions or need help? Send us a message and we’ll get back to you.</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <label for="name-field" class="pb-2">Your Name</label>
              <input type="text" name="name" id="name-field" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="email-field" class="pb-2">Your Email</label>
              <input type="email" class="form-control" name="email" id="email-field" required>
            </div>

            <div class="col-md-12">
              <label for="subject-field" class="pb-2">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject-field" required>
            </div>

            <div class="col-md-12">
              <label for="message-field" class="pb-2">Message</label>
              <textarea class="form-control" name="message" rows="6" id="message-field" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div>

    </div>
  </div>

</section>
<!-- /Contact Section -->

</main>

 <footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4 justify-content-between align-items-start">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center mb-2">
          <span class="sitename">SL COURSES</span>
        </a>
        <p class="small">
          Your trusted platform to find and explore online courses offered by Sri Lankan institutes.
        </p>
        <div class="footer-contact pt-3">
          <p class="mb-1"><strong>Phone :</strong> +94 70 3010634</p>
          <p><strong>Email :</strong> slcourses@gmail.com</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-social">
        <h4>Follow Us</h4>
        <p class="small">Stay updated with our latest course listings.</p>
        <div class="social-links d-flex mt-2">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <?= date('Y'); ?> <strong class="sitename">SL Courses</strong> | All Rights Reserved.</p>
</div>


</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url('assets/');?>assets/js/main.js"></script>

</body>

</html>