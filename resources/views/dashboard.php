<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Dashboard</title>
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
    .navbar-brand, .nav-link, .doctor-name {
      color: white !important;
    }
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
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-icon {
      font-size: 2rem;
      margin-right: 10px;
    }
    .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
    .stat-graph {
      height: 250px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold" href="#">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center">
    <span class="doctor-name fw-semibold me-3">Dr. Ranulfo Jopia</span>
    <img src="https://i.pravatar.cc/40?img=5" alt="Doctor" class="profile-img">
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
   <div class="col-md-2 sidebar bg-light p-3 shadow-sm" style="min-height: 100vh;">
  <h5 class="text-dark fw-bold">Navigation</h5>
  <ul class="nav flex-column mt-3">
    <li class="nav-item">
      <a class="nav-link text-dark fw-semibold" href="#"  style="color: #000 !important;">
        <i class="bi bi-speedometer2 me-2 text-primary"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-semibold" href="#"  style="color: #000 !important;">
        <i class="bi bi-people-fill me-2 text-success"></i> Patients
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-semibold" href="#"  style="color: #000 !important;">
        <i class="bi bi-calendar-check me-2 text-warning"></i> Appointments
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark fw-semibold" href="#"  style="color: #000 !important;">
        <i class="bi bi-file-earmark-medical me-2 text-danger"></i> Records
      </a>
    </li>
  </ul>
</div>


    <!-- Main Content -->
    <div class="col-md-10 p-4">
      <div class="row g-4">
        <!-- Stats Cards -->
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-people-fill card-icon text-primary"></i>
            <h5>Total Patients</h5>
            <h3 class="fw-bold">128</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-calendar-event card-icon text-success"></i>
            <h5>Appointments</h5>
            <h3 class="fw-bold">32</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-clipboard2-check card-icon text-warning"></i>
            <h5>Completed</h5>
            <h3 class="fw-bold">98</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 text-center">
            <i class="bi bi-graph-up card-icon text-danger"></i>
            <h5>New Patients</h5>
            <h3 class="fw-bold">12</h3>
          </div>
        </div>
      </div>

      <!-- Patients & Schedule -->
      <div class="row g-4 mt-2">
        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-people-fill text-primary"></i> Recent Patients</h5>
            <input type="text" id="patientSearch" class="form-control mt-2 mb-2" placeholder="Search patients...">

            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item">Jane Smith - <span class="text-muted">Tooth Extraction</span></li>
              <li class="list-group-item">Mark Johnson - <span class="text-muted">Cleaning</span></li>
              <li class="list-group-item">Emily Davis - <span class="text-muted">Root Canal</span></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-3">
            <h5><i class="bi bi-calendar-week text-success"></i> Upcoming Appointments</h5>
            <ul class="list-group list-group-flush mt-2">
              <li class="list-group-item">Sept 5 - John Lee @ 10:00 AM</li>
              <li class="list-group-item">Sept 6 - Anna Brown @ 2:00 PM</li>
              <li class="list-group-item">Sept 7 - Chris White @ 11:30 AM</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Graph Section -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="card p-3">
            <h5><i class="bi bi-bar-chart-line text-danger"></i> Patient Statistics</h5>
            <canvas id="patientChart" class="stat-graph mt-3"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('patientChart').getContext('2d');
  const patientChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Patients',
        data: [20, 40, 35, 50, 70, 90],
        borderColor: '#0069d9',
        backgroundColor: 'rgba(0,105,217,0.2)',
        fill: true,
        tension: 0.4
      }]
    }
  });
</script>

</body>
</html>
