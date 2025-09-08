<?php
// dashboard.php (or include this at top of your page)
// Determine current page from URL (fallback 'dashboard')
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Patient Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background: #0069d9;
    }
    .navbar-brand, .patient-name {
      color: white !important;
    }

    /* Sidebar base */
    .sidebar {
      background: #ffffff;
      min-height: 100vh;
      border-right: 1px solid #dee2e6;
      padding: 20px;
    }
    .sidebar h5 {
      font-weight: bold;
      color: #0069d9;
    }

    /* Nav link styling */
    .sidebar .nav-link {
      color: #000 !important;              /* default black */
      border-radius: 8px;
      padding: 10px 12px;
      transition: all .2s ease-in-out;
      display: flex;
      align-items: center;
    }
    .sidebar .nav-link .bi {
      font-size: 1.05rem;
      margin-right: .6rem;
    }

    /* Hover */
    .sidebar .nav-link:hover {
      background-color: #0069d9;
      color: #fff !important;
    }
    .sidebar .nav-link:hover .bi {
      color: #fff !important;              /* icons turn white on hover */
    }

    /* Active state */
    .sidebar .nav-link.active {
      background-color: #0069d9;
      color: #fff !important;
      font-weight: bold;
      box-shadow: 0 2px 6px rgba(0,105,217,.15);
    }
    .sidebar .nav-link.active .bi {
      color: #fff !important;              /* icons turn white when active */
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
    .card-icon { font-size: 2rem; margin-right: 10px; }
    .profile-img { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; }
    .stat-graph { height: 250px; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold text-white" href="/index.php?page=landing">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center">
    <span class="patient-name fw-semibold me-3">Dr. Sopapi Monyanyo</span>
    <img src="https://i.pravatar.cc/40?img=6" alt="Patient" class="profile-img">
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar bg-light p-3 shadow-sm" style="min-height: 100vh;">
      <h5 class="text-dark fw-bold">Navigation</h5>
      <ul class="nav flex-column mt-3">
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold active" href="/index.php?page=dashboard">
            <i class="bi bi-speedometer2 me-2 text-success"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=appointments">
            <i class="bi bi-calendar-check me-2 text-primary"></i> Appointments
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=patients">
            <i class="bi bi-file-earmark-medical me-2 text-danger"></i> Records
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="#">
            <i class="bi bi-capsule-pill me-2 text-warning"></i> Reports
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="#">
            <i class="bi bi-bell me-2 text-danger"></i> Notifications

          </a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">
      <div class="row g-4">
        <div class="d-flex justify-content-start mb-3">
          <a href="/index.php?page=add_patient" class="btn btn-primary">
            <i class="bi bi-person-plus me-2"></i> Add Patient
          </a>
        </div>

        <!-- Stats Cards -->
        <div class="col-md-4">
          <div class="card p-3 text-center">
            <i class="bi bi-calendar-event card-icon text-primary"></i>
            <h5>Upcoming Appointments</h5>
            <h3 class="fw-bold">2</h3>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-3 text-center">
            <i class="bi bi-heart-pulse card-icon text-danger"></i>
            <h5>Completed Visits</h5>
            <h3 class="fw-bold">5</h3>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-3 text-center">
            <i class="bi bi-capsule card-icon text-warning"></i>
            <h5>Prescriptions</h5>
            <h3 class="fw-bold">3</h3>
          </div>
        </div>
      </div>

      <!-- Appointments & Records -->
      <div class="row g-4 mt-2">
        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-calendar-week text-primary"></i> Upcoming Appointments</h5>
            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item">Sept 5 - Dr. Smith @ 10:00 AM</li>
              <li class="list-group-item">Sept 12 - Dr. Johnson @ 1:00 PM</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-file-medical text-danger"></i> Previous Visits</h5>
            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item">Aug 20 - Tooth Extraction</li>
              <li class="list-group-item">July 15 - Cleaning</li>
              <li class="list-group-item">June 5 - Root Canal</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Prescriptions & Graph -->
      <div class="row g-4 mt-2">
        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-capsule-pill text-warning"></i> Prescriptions</h5>
            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item">Amoxicillin - 7 days</li>
              <li class="list-group-item">Ibuprofen - as needed</li>
              <li class="list-group-item">Mouth Rinse - 14 days</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-bar-chart-line text-primary"></i> Health Progress</h5>
            <canvas id="healthChart" class="stat-graph mt-3"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('healthChart').getContext('2d');
  const healthChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['June', 'July', 'Aug', 'Sept'],
      datasets: [{
        label: 'Dental Health Score',
        data: [60, 70, 80, 85],
        borderColor: '#0069d9',
        backgroundColor: 'rgba(0,105,217,0.12)',
        fill: true,
        tension: 0.4
      }]
    }
  });
</script>

</body>
</html>
