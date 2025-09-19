<?php
// report.php – SmileSync Reports Page
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'reports';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SmileSync – Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background: #0069d9;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #fff !important;
    }
    .navbar-brand:hover, .navbar-nav .nav-link:hover {
      color: #e2e6ea !important;
    }

    /* Sidebar */
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
    .sidebar .nav-link {
      color: #000 !important;
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
    .sidebar .nav-link:hover {
      background-color: #0069d9;
      color: #fff !important;
    }
    .sidebar .nav-link.active {
      background-color: #0069d9;
      color: #fff !important;
      font-weight: bold;
      box-shadow: 0 2px 6px rgba(0,105,217,.15);
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .chart-container {
      height: 280px;
    }
    .table thead {
      background-color: #0069d9;
      color: #fff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold text-white" href="#">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center">
    <span class="patient-name fw-semibold me-3 text-white">Dr. Sopapi Monyanyo</span>
    <img src="https://i.pravatar.cc/40?img=6" alt="Patient" class="profile-img">
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar bg-light p-3 shadow-sm">
      <h5>Navigation</h5>
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
          <a class="nav-link fw-semibold" href="/index.php?page=records">
            <i class="bi bi-people me-2 text-danger"></i> Records
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=patientsview">
            <i class="bi bi-bell me-2 text-danger"></i> Patients
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=report">
            <i class="bi bi-bar-chart-line me-2 text-warning"></i> Reports
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

      <!-- Header -->
      <div class="text-center mb-4">
        <h1 class="fw-bold text-primary">Dashboard</h1>
        <p class="text-muted">Overview of patients, doctors, appointments, and medications</p>
      </div>

      <!-- Top Summary Cards -->
      <div class="row g-4 mb-4">
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-people-fill text-primary fs-1"></i>
            <h6 class="mt-2">Total Patients</h6>
            <h3 class="fw-bold">120</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-person-badge text-success fs-1"></i>
            <h6 class="mt-2">Total Doctors</h6>
            <h3 class="fw-bold">12</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-calendar-check text-warning fs-1"></i>
            <h6 class="mt-2">Appointments</h6>
            <h3 class="fw-bold">350</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-capsule-pill text-danger fs-1"></i>
            <h6 class="mt-2">Medications</h6>
            <h3 class="fw-bold">75</h3>
          </div>
        </div>
      </div>

      <!-- Charts Section -->
      <div class="row g-4 mb-4">
        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="fw-bold text-primary"><i class="bi bi-pie-chart me-2"></i> Patient Demographics</h5>
            <div class="chart-container">
              <canvas id="patientsChart"></canvas>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="fw-bold text-primary"><i class="bi bi-bar-chart me-2"></i> Appointments per Month</h5>
            <div class="chart-container">
              <canvas id="appointmentsChart"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!-- Table Section -->
      <div class="card p-3 mb-4">
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-list-ul me-2"></i> Recent Appointments</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>Patient</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>Dr. Smith</td>
                <td>2025-09-10</td>
                <td>10:00 AM</td>
                <td><span class="badge bg-success">Completed</span></td>
              </tr>
              <tr>
                <td>Jane Smith</td>
                <td>Dr. Johnson</td>
                <td>2025-09-12</td>
                <td>01:00 PM</td>
                <td><span class="badge bg-warning text-dark">Upcoming</span></td>
              </tr>
              <tr>
                <td>Mike Brown</td>
                <td>Dr. Lee</td>
                <td>2025-09-15</td>
                <td>03:00 PM</td>
                <td><span class="badge bg-danger">Cancelled</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Pie Chart (Patients Demographics)
  const patientsCtx = document.getElementById('patientsChart').getContext('2d');
  new Chart(patientsCtx, {
    type: 'pie',
    data: {
      labels: ['Male', 'Female', 'Other'],
      datasets: [{
        data: [55, 40, 5],
        backgroundColor: ['#0069d9', '#e83e8c', '#ffc107']
      }]
    }
  });

  // Bar Chart (Appointments per Month)
  const appointmentsCtx = document.getElementById('appointmentsChart').getContext('2d');
  new Chart(appointmentsCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Appointments',
        data: [30, 45, 35, 50, 60, 40],
        backgroundColor: '#0069d9'
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>
