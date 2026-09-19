<?php
$collegeName = "CHRISTU JYOTHI INSTITUTE OF TECHNOLOGY AND SCIENCE(College Code : 68)";
$address = "Colombonagar, Yeshwanthapur, Jangaon, Telangana – 506167, India";
$phone = "+91 9346474916";
$email = "exams@cjits.org";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CJITS | Christu Jyothi Institute of Technology and Science</title>
<meta name="description" content="Christu Jyothi Institute of Technology and Science, Jangaon, Telangana.">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="top-strip">
  <div class="container top-inner">
    <span>📍 Jangaon, Telangana, India</span>
    <span>☎ <?= $phone ?> &nbsp; | &nbsp; ✉ <?= $email ?></span>
  </div>
</div>

<header class="header">
  <div class="container brand-row">
    <a class="brand" href="index.php">
      <img src="assets/images/logo.png" alt="CJITS Logo">
      <div>
        <div class="brand-title">CHRISTU JYOTHI</div>
        <div class="brand-subtitle">INSTITUTE OF TECHNOLOGY AND SCIENCE</div>
        <div class="brand-location">Jangaon, Telangana</div>
      </div>
    </a>
    <a class="admission-btn" href="pages/admissions.php">Admissions</a>
  </div>
  <nav class="nav">
    <div class="container nav-inner">
      <button class="menu-btn" onclick="toggleMenu()">☰ Menu</button>
      <div id="mainMenu" class="menu">
        <a class="active" href="index.php">Home</a>
        <div class="drop"><a href="#">About ▾</a>
          <div class="dropdown">
            <a href="pages/about.php">About CJITS</a>
            <a href="pages/vision-mission.php">Vision & Mission</a>
            <a href="pages/principal.php">Principal</a>
          </div>
        </div>
        <div class="drop"><a href="#">Departments ▾</a>
          <div class="dropdown">
            <a href="pages/departments.php">All Departments</a>
            <a href="pages/departments.php#cse">CSE</a>
            <a href="pages/departments.php#ece">ECE</a>
            <a href="pages/departments.php#eee">EEE</a>
            <a href="pages/departments.php#mech">Mechanical</a>
            <a href="pages/departments.php#civil">Civil</a>
          </div>
        </div>
        <div class="drop"><a href="#">Academics ▾</a>
          <div class="dropdown">
            <a href="pages/academics.php">Academics</a>
            <a href="pages/syllabus.php">Syllabus</a>
            <a href="pages/examinations.php">Exam Branch</a>
          </div>
        </div>
        <a href="pages/placements.php">Placements</a>
        <a href="pages/facilities.php">Facilities</a>
        <a href="pages/gallery.php">Gallery</a>
        <a href="pages/news.php">News & Events</a>
        <a href="pages/contact.php">Contact</a>
      </div>
    </div>
  </nav>
</header>

<section class="hero">
  <img src="assets/images/college.jpg" alt="CJITS Campus">
  <div class="hero-overlay"></div>
  <div class="hero-content container">
    <span class="eyebrow">WELCOME TO CJITS</span>
    <h1>Empowering Students<br><strong>Through Engineering & Innovation</strong></h1>
    <p>Education • Technology • Character • Service</p>
    <div class="hero-buttons">
      <a href="pages/about.php" class="btn-light">Explore CJITS</a>
      <a href="pages/admissions.php" class="btn-outline">Admissions</a>
    </div>
  </div>
</section>

<div class="notice">
  <div class="container notice-inner">
    <span class="notice-label">ANNOUNCEMENT</span>
    <div class="ticker">Welcome to Christu Jyothi Institute of Technology and Science • Check the latest academic, examination, placement and campus updates.</div>
  </div>
</div>

<section class="section intro">
  <div class="container two-col">
    <div>
      <span class="section-tag">ABOUT CJITS</span>
      <h2>Building Engineers for Industry and Society</h2>
      <p>Christu Jyothi Institute of Technology and Science is an engineering institution located at Jangaon, Telangana. The institution focuses on technical education, professional development, innovation and preparing students for industry and society.</p>
      <a class="text-link" href="pages/about.php">Read More →</a>
    </div>
    <div class="quick-card">
      <h3>Quick Links</h3>
      <a href="pages/admissions.php">🎓 Admissions</a>
      <a href="pages/academics.php">📚 Academics</a>
      <a href="pages/placements.php">💼 Placements</a>
      <a href="pages/examinations.php">📝 Examination Branch</a>
      <a href="pages/syllabus.php">📖 Syllabus & Regulations</a>
      <a href="pages/contact.php">📍 Contact Us</a>
    </div>
  </div>
</section>

<section class="section light-bg">
  <div class="container">
    <div class="section-heading">
      <span class="section-tag">ACADEMICS</span>
      <h2>Our Departments</h2>
      <p>Explore the engineering and supporting academic departments at CJITS.</p>
    </div>
    <div class="cards">
      <a class="card" href="pages/departments.php#cse"><span class="icon">💻</span><h3>Computer Science & Engineering</h3><p>Computing, software, AI/ML and emerging technologies.</p></a>
      <a class="card" href="pages/departments.php#ece"><span class="icon">📡</span><h3>Electronics & Communication Engineering</h3><p>Communication systems, electronics and embedded technologies.</p></a>
      <a class="card" href="pages/departments.php#eee"><span class="icon">⚡</span><h3>Electrical & Electronics Engineering</h3><p>Electrical systems, power and electronic applications.</p></a>
      <a class="card" href="pages/departments.php#mech"><span class="icon">⚙️</span><h3>Mechanical Engineering</h3><p>Mechanical systems, manufacturing and engineering design.</p></a>
      <a class="card" href="pages/departments.php#civil"><span class="icon">🏗️</span><h3>Civil Engineering</h3><p>Construction, infrastructure and civil engineering systems.</p></a>
      <a class="card" href="pages/departments.php#hs"><span class="icon">🔬</span><h3>Humanities & Science</h3><p>Foundation sciences, communication and interdisciplinary learning.</p></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-heading">
      <span class="section-tag">CAMPUS LIFE</span>
      <h2>Facilities & Student Support</h2>
    </div>
    <div class="feature-grid">
      <div><b>📚 Central Library</b><p>Reference and learning resources for students and staff.</p></div>
      <div><b>🏠 Hostels</b><p>Residential facilities with a student-focused environment.</p></div>
      <div><b>🚌 Transportation</b><p>Transport facilities for students and staff.</p></div>
      <div><b>🏥 Health Care Centre</b><p>Health-care support for students and staff.</p></div>
      <div><b>🧑‍🏫 Faculty</b><p>Experienced faculty supporting teaching and learning.</p></div>
      <div><b>🏟️ Sports & Cultural Activities</b><p>Opportunities for extracurricular development.</p></div>
    </div>
    <div class="center"><a class="primary-btn" href="pages/facilities.php">View All Facilities</a></div>
  </div>
</section>

<section class="stats">
  <div class="container stats-grid">
    <div><strong>5+</strong><span>Major Engineering Departments</span></div>
    <div><strong>120</strong><span>CSE B.Tech Intake</span></div>
    <div><strong>120</strong><span>ECE B.Tech Intake</span></div>
    <div><strong>60</strong><span>Intake in several core branches</span></div>
  </div>
</section>

<section class="section news-section">
  <div class="container two-col">
    <div>
      <span class="section-tag">LATEST</span>
      <h2>News & Events</h2>
      <div class="news-item"><span>11 APR 2026</span><a href="pages/news.php">Farewell Function to Final Years</a></div>
      <div class="news-item"><span>30 MAR 2026</span><a href="pages/news.php">Technozeal-2026</a></div>
      <div class="news-item"><span>28 MAR 2026</span><a href="pages/news.php">Industrial Visit to KTPP - J. Bhoopala Pally</a></div>
      <div class="news-item"><span>28 FEB 2026</span><a href="pages/news.php">Expert Lecture on Cyber Security</a></div>
      <div class="news-item"><span>27 FEB 2026</span><a href="pages/news.php">Mega Job Mela</a></div>
    </div>
    <div class="campus-box">
      <img src="assets/images/college.jpg" alt="CJITS campus">
      <div><b>Christu Jyothi Institute of Technology and Science</b><p>Colombonagar, Yeshwanthapur, Jangaon, Telangana – 506167</p></div>
    </div>
  </div>
</section>

<footer>
  <div class="container footer-grid">
    <div>
      <img class="footer-logo" src="assets/images/logo.png" alt="CJITS">
      <h3>CHRISTU JYOTHI INSTITUTE OF TECHNOLOGY AND SCIENCE</h3>
      <p>Jangaon, Telangana – 506167, India</p>
    </div>
    <div><h4>Quick Links</h4><a href="pages/about.php">About</a><a href="pages/departments.php">Departments</a><a href="pages/placements.php">Placements</a><a href="pages/gallery.php">Gallery</a></div>
    <div><h4>Student Links</h4><a href="pages/examinations.php">Exam Branch</a><a href="pages/syllabus.php">Syllabus</a><a href="pages/admissions.php">Admissions</a><a href="pages/contact.php">Contact</a></div>
    <div><h4>Contact</h4><p>☎ <?= $phone ?></p><p>✉ <?= $email ?></p><p>📍 <?= $address ?></p></div>
  </div>
  <div class="copyright">© <?= date("Y") ?> Christu Jyothi Institute of Technology and Science. All Rights Reserved.</div>
</footer>
<script src="assets/js/script.js"></script>
</body>
</html>