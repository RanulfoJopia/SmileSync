<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmileSync - Dental Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fc;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0077b6, #00b4d8);
    }
    .navbar .nav-link {
      color: white !important;
      font-weight: 500;
    }
    .navbar .nav-link:hover {
      color: #ffd166 !important;
    }

    /* Hero Section */
    .hero-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #e0f7fa, #ffffff);
    }
    .hero-left h1 {
      font-size: 3rem;
      color: #0077b6;
    }
    .hero-left p {
      font-size: 1.2rem;
      color: #495057;
    }
    .btn-primary {
      background: #0077b6;
      border: none;
      padding: 12px 25px;
      font-size: 18px;
      border-radius: 30px;
      transition: 0.3s;
    }
    .btn-primary:hover {
      background: #023e8a;
      transform: translateY(-2px);
    }

    /* Section Titles */
    .section-title {
      text-align: center;
      margin-bottom: 50px;
      color: #023e8a;
    }

    /* Features */
    .card {
      border-radius: 15px;
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }

    /* How it works */
    .step-box {
      text-align: center;
      padding: 30px;
    }
    .step-box i {
      font-size: 40px;
      color: #0077b6;
      margin-bottom: 15px;
    }

    /* Testimonials */
    .testimonial {
      text-align: center;
      padding: 30px;
      border-radius: 15px;
      background: #ffffff;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .testimonial p {
      font-style: italic;
    }
    .testimonial h6 {
      margin-top: 15px;
      font-weight: bold;
      color: #0077b6;
    }

    /* Footer */
    footer {
      background: #023e8a;
      color: white;
      padding: 40px 0 20px;
    }
    footer a {
      color: #ffd166;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand fw-bold" href="index.php?page=landing">
      <img src="resources/assets/images/logo.png" alt="Dental Logo" width="40" height="40" class="me-2">
      SmileSync
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=landing">Home</a></li>
        <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=register">Register</a></li>
        <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=login">Login</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero-section">
    <div class="container-fluid px-5">
      <div class="row align-items-center">
        <div class="col-md-6 hero-left">
          <h1>SmileSync - Dental Health Tracking System</h1>
          <p>Track your dental journey, monitor braces adjustments, and manage appointments all in one place.</p>
          <a href="index.php?page=register" class="btn btn-primary">Get Started <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-md-6 text-center">
          <img src="https://www.greaterhartfordortho.com/wp-content/uploads/Young-Girl-in-Braces-920x613.jpg" 
               alt="Dental Health" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="py-5 bg-light">
    <div class="container-fluid px-5">
      <h2 class="section-title">Our Features</h2>
      <div class="row g-4">
        <div class="col-md-3 d-flex">
          <div class="card shadow-sm w-100">
            <img src="https://img.freepik.com/premium-photo/closeup-dental-braces-adjustment_146482-19867.jpg?w=2000" alt="Braces" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-bounding-box-circles text-primary"></i> Braces Tracker</h5>
              <p>Log adjustments with photos, pain levels, and notes.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="card shadow-sm w-100">
            <img src="https://tse3.mm.bing.net/th/id/OIP.vwOGhT2nVeAv18sN99cmmwHaEK?pid=Api&P=0&h=180" alt="Appointments" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-calendar-check text-success"></i> Appointments</h5>
              <p>Book, view, and manage appointments with reminders.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="card shadow-sm w-100">
            <img src="https://2.bp.blogspot.com/-eqwUN5Xqyag/W4KkdoEvMDI/AAAAAAAAAL8/h66cqp5w0Tc3sIFnVA-aSuz_9GnA29uVACLcBGAs/s640/colorful-progress-with-arrows-up-LearningKeeper-Homeschool-Online-Digital-Portfolio-Compliance-Record-Keeping-Software.jpg" alt="Progress" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-bar-chart-line text-warning"></i> Progress</h5>
              <p>Visualize progress with charts, timelines & comparisons.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="card shadow-sm w-100">
            <img src="https://img.freepik.com/free-photo/doctor-working-with-patient-records_23-2148980723.jpg" alt="Records" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-shield-lock text-danger"></i> Secure Records</h5>
              <p>Keep patient records safe with advanced security.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="py-5">
    <div class="container-fluid px-5">
      <h2 class="section-title">How It Works</h2>
      <div class="row text-center">
        <div class="col-md-4 step-box">
          <i class="bi bi-person-plus-fill"></i>
          <h5>1. Register</h5>
          <p>Create your account to access SmileSync.</p>
        </div>
        <div class="col-md-4 step-box">
          <i class="bi bi-calendar-event-fill"></i>
          <h5>2. Schedule</h5>
          <p>Book appointments & track dental visits.</p>
        </div>
        <div class="col-md-4 step-box">
          <i class="bi bi-bar-chart-fill"></i>
          <h5>3. Track Progress</h5>
          <p>View improvements with records & graphs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5 bg-light">
    <div class="container-fluid px-5">
      <h2 class="section-title">What Our Patients Say</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimonial">
            <p>"SmileSync makes it so easy to manage my appointments. Love it!"</p>
            <h6>- Jane D.</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <p>"I can track my braces journey and see how far I’ve come."</p>
            <h6>- Mark J.</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <p>"My dentist loves how organized all my records are now."</p>
            <h6>- Emily R.</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container-fluid px-5">
      <div class="row">
        <div class="col-md-6">
          <h5>SmileSync</h5>
          <p>Your trusted partner in dental health tracking.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p><i class="bi bi-envelope"></i> support@smilesync.com | <i class="bi bi-telephone"></i> +63 912 345 6789</p>
          <p>&copy; 2025 SmileSync. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
