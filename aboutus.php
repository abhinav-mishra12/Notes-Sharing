<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>Online Notes Sharing System | Home Page</title>
   <style>
    /* ===== Base Styles ===== */
/* ===== Global Styles ===== */
body {
    font-family: 'Segoe UI', sans-serif;
    color: #333;
    background-color: #f9f9fb;
    margin: 0;
    padding: 0;
    font-size: 18px;
}

/* ===== Hero Section ===== */
.about-hero {
    background: linear-gradient(to right, #7b1fa2, #ab47bc);
    color: #ffffff;
    text-align: center;
    padding: 120px 20px 100px;
    position: relative;
    border-bottom-left-radius: 70px;
    border-bottom-right-radius: 70px;
}

.about-hero h1 {
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 10px;
}

.about-hero p {
    font-size: 1.8rem;
    font-weight: 400;
    opacity: 0.95;
}

/* ===== Content Section ===== */
.about-content {
    padding: 90px 20px 40px;
    max-width: 1100px;
    margin: auto;
}

.about-box {
    background: #fff;
    padding: 40px;
    margin-bottom: 50px;
    border-radius: 14px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-left: 6px solid #ab47bc;
    transition: all 0.3s ease;
    display: flex;
    gap: 30px;
    align-items: center;
}

.about-box:hover {
    transform: translateY(-6px);
}

.about-box img {
    width: 80px;
    height: 80px;
    object-fit: contain;
}

.about-box-content {
    flex: 1;
}

.about-box h2 {
    font-size: 2.2rem;
    color: #4a148c;
    margin-bottom: 15px;
}

.about-box p,
.about-box ul {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 0;
}

.about-box ul {
    padding-left: 20px;
}

.about-box ul li {
    margin-bottom: 8px;
}

/* ===== Services Section ===== */
.services-section {
    background: linear-gradient(120deg, #f3e5f5 10%, #ffffff 90%);
    padding: 80px 20px;
    text-align: center;
    border-top: 1px solid #ddd;
}

.services-title {
    font-size: 3.4rem;
    font-weight: 800;
    margin-bottom: 70px;
    color: #4a148c;
    position: relative;
}

.services-title::after {
    content: '';
    width: 80px;
    height: 4px;
    background: #ab47bc;
    position: absolute;
    bottom: -14px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 20px;
}

.services-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
}

.service-card {
    background: #fff;
    width: 300px;
    padding: 40px 25px;
    border-radius: 15px;
    transition: all 0.3s ease;
    box-shadow: 0 12px 25px rgba(171, 71, 188, 0.1);
    border-top: 6px solid #ab47bc;
}

.service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(171, 71, 188, 0.2);
}

.service-card i {
    font-size: 3.8rem;
    color: #7b1fa2;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #4a148c;
}

.service-card p {
    font-size: 1.1rem;
    color: #555;
}
footer {
  font-size: 0.9rem;
  color: #666;
}
/* ===== Responsive ===== */
@media (max-width: 768px) {
    .about-hero h1 {
        font-size: 3rem;
    }

    .about-hero p {
        font-size: 1.4rem;
    }

    .about-box {
        flex-direction: column;
        text-align: left;
    }

    .services-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .service-card {
        width: 100%;
        max-width: 340px;
    }
}

   </style>
  
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
       <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
<?php include_once('includes/header.php'); ?>
<main style="font-size: 1.1rem; line-height: 1.8; font-family: 'Segoe UI', sans-serif;">
<main>
<section class="about-hero">
    <div class="container">
        <h1 style="display: inline; color: white;">About Note Nest</h1>
        <br>
        <p style="display: inline; color: white;">  Your Go-To Hub for Effortless Learning & Sharing</p>
    </div>
</section>

<section class="about-content" style="padding: 60px 0; background-color: #f8f8f8;">
    <div class="container" style="display: flex; flex-direction: column; gap: 40px;">
        
        <!-- Our Mission -->
        <div class="about-box" style="display: flex; align-items: center; gap: 30px;">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Mission Icon" style="width: 100px;">
            <div>
                <h2>Our Mission</h2>
                <p>At <strong>Note Nest</strong>, we aim to simplify your learning journey by providing a collaborative platform where students can upload, access, and share high-quality notes and resources effortlessly.</p>
            </div>
        </div>

        <!-- What We Offer -->
        <section style="width: 100%; background-color: #f9f9f9;">
  <div style="display: flex; align-items: center; justify-content: space-between; gap: 30px; width: 100%; max-width: 100%; padding: 40px 5%; box-sizing: border-box;">

    <!-- Left Image -->
    <img src="assets/img/hero/aboutimg2.avif" alt="Learning Icon" 
         style="width: 50%; max-width: none; height: auto; display: block;">

    <!-- Right Side Text and Icon -->
    <div style="display: flex; align-items: center; gap: 20px; flex-direction: row-reverse; width: 45%;">
      <div>
        <h2>What We Offer</h2>
        <ul style="list-style: none; padding-left: 0;">
          <li>📚 Easy access to notes anytime, anywhere</li>
          <li>🚀 Upload your own study material & help others</li>
          <li>🤝 Learn and grow together with a vibrant community</li>
        </ul>
      </div>
    </div>

  </div>
</section>


        <!-- Meet the Creators -->
        <div class="about-box" style="display: flex; align-items: center; gap: 30px;">
            <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" alt="Creators Icon" style="width: 100px;">
            <div>
                <h2>Meet the Creators</h2>
                <p>Note Nest is built by passionate tech enthusiasts who believe in accessible education for all. Whether you're a student, teacher, or lifelong learner — this platform is for you!</p>
            </div>
        </div>
        
    </div>
</section>

<section class="services-section" style="padding: 60px 0; background-color: #ffffff;">
    <div class="container">
        <h2 class="services-title" style="text-align: center; font-size: 2.5rem; margin-bottom: 40px;">Our Services</h2>
        <div class="services-wrapper" style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px;">

            <div class="service-card" style="width: 300px; padding: 20px; background: #f1f1f1; border-radius: 12px; text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" alt="Upload Notes" style="width: 60px; margin-bottom: 15px;">
                <h3>Upload Notes</h3>
                <p>Securely upload your study materials to help peers and create a collaborative ecosystem.</p>
            </div>

            <div class="service-card" style="width: 300px; padding: 20px; background: #f1f1f1; border-radius: 12px; text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" alt="Access Notes" style="width: 60px; margin-bottom: 15px;">
                <h3>Access Notes</h3>
                <p>Browse through a wide variety of notes categorized by subjects, semesters, and more.</p>
            </div>

            <div class="service-card" style="width: 300px; padding: 20px; background: #f1f1f1; border-radius: 12px; text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/2344/2344518.png" alt="Community Support" style="width: 60px; margin-bottom: 15px;">
                <h3>Community Support</h3>
                <p>Engage with a passionate community of learners and exchange knowledge freely.</p>
            </div>

        </div>
    </div>
</section>

<!-- 2. Services Section -->
</main>



<?php include_once('includes/footer.php'); ?>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>