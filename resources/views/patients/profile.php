<?php
// profile.php
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'profile';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .profile-header {
      background: linear-gradient(135deg, #0069d9, #00bcd4);
      color: white;
      padding: 40px 20px;
      border-radius: 0 0 20px 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .section-title {
      font-weight: bold;
      color: #0069d9;
    }
    .btn-dental {
      background: #0069d9;
      color: #fff;
      border-radius: 10px;
      padding: 10px 20px;
    }
    .btn-dental:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

<!-- Profile Header -->
<div class="profile-header text-center">
  <img src="https://i.pravatar.cc/150?img=6" alt="Profile" class="profile-img mb-3">
  <h2 class="fw-bold">Dr. Sopapi Monyanyo</h2>
  <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i> SmileSync Dental Clinic, Manila</p>
  <p><i class="bi bi-envelope-fill me-2"></i> dr.sopapi@smilesync.com | <i class="bi bi-telephone-fill me-2"></i> +63 912 345 6789</p>
  <a href="/index.php?page=settings" class="btn btn-light btn-sm mt-2">
    <i class="bi bi-pencil me-1"></i> Edit Profile
  </a>
</div>

<!-- Profile Content -->
<div class="container my-5">
  <div class="row g-4">
    <!-- About Me -->
    <div class="col-md-6">
      <div class="card p-4">
        <h5 class="section-title mb-3"><i class="bi bi-person-lines-fill me-2"></i> About</h5>
        <p>Experienced Dental Practitioner with over 10 years of expertise in general and cosmetic dentistry. Dedicated to improving patient oral health and providing exceptional care.</p>
        <ul class="list-group list-group-flush mt-3">
          <li class="list-group-item"><strong>Specialization:</strong> Orthodontics</li>
          <li class="list-group-item"><strong>License No:</strong> DNT-12345-PHL</li>
          <li class="list-group-item"><strong>Experience:</strong> 10+ Years</li>
        </ul>
      </div>
    </div>

    <!-- Schedule -->
    <div class="col-md-6">
      <div class="card p-4">
        <h5 class="section-title mb-3"><i class="bi bi-calendar-week me-2"></i> Schedule</h5>
        <table class="table">
          <thead>
            <tr>
              <th>Day</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday - Friday</td>
              <td>9:00 AM - 5:00 PM</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>9:00 AM - 1:00 PM</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>Closed</td>
            </tr>
          </tbody>
        </table>
        <a href="/index.php?page=appointments" class="btn btn-dental mt-3 w-100">
          <i class="bi bi-calendar-plus me-1"></i> Manage Appointments
        </a>
      </div>
    </div>

    <!-- Contact & Socials -->
    <div class="col-md-6">
      <div class="card p-4">
        <h5 class="section-title mb-3"><i class="bi bi-chat-dots-fill me-2"></i> Contact</h5>
        <p><i class="bi bi-envelope me-2"></i> dr.sopapi@smilesync.com</p>
        <p><i class="bi bi-phone me-2"></i> +63 912 345 6789</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-primary"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-info"><i class="bi bi-twitter fs-4"></i></a>
          <a href="#" class="text-danger"><i class="bi bi-instagram fs-4"></i></a>
        </div>
      </div>
    </div>

    <!-- Certifications / Documents -->
    <div class="col-md-6">
      <div class="card p-4">
        <h5 class="section-title mb-3"><i class="bi bi-award-fill me-2"></i> Certifications</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">PRC Licensed Dentist</li>
          <li class="list-group-item">Certified Orthodontic Practitioner</li>
          <li class="list-group-item">Dental Implant Training Certification</li>
        </ul>
        <button class="btn btn-dental mt-3 w-100"><i class="bi bi-upload me-1"></i> Upload Documents</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
