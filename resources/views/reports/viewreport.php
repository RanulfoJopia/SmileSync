<?php
// Detect active page for sidebar highlight
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'reports';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SmileSync – Reports</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {background: #f8f9fc;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
    .navbar {background: #0069d9;}
    .navbar-brand, .patient-name {color: white !important;}

    /* Sidebar */
    .sidebar {
      background: #ffffff;
      min-height: 100vh;
      border-right: 1px solid #dee2e6;
      padding: 20px;
    }
    .sidebar h5 {font-weight: bold;color: #0069d9;}
    .sidebar .nav-link {
      color: #000 !important;
      border-radius: 8px;
      padding: 10px 12px;
      transition: all .2s ease-in-out;
      display: flex;
      align-items: center;
    }
    .sidebar .nav-link .bi {font-size: 1.05rem;margin-right: .6rem;}
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
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold text-white" href="index.php?page=landing">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center dropdown">
    <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" 
       href="#" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="patient-name fw-semibold me-2">Admin</span>
      <img src="https://i.pravatar.cc/40?img=5" alt="Profile" class="rounded-circle" style="width:40px;height:40px;">
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="profileDropdown">
      <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
      <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar bg-light p-3 shadow-sm">
      <h5>Navigation</h5>
      <ul class="nav flex-column mt-3">
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="index.php?page=dashboard">
            <i class="bi bi-speedometer2 me-2 text-success"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="index.php?page=appointments">
            <i class="bi bi-calendar-check me-2 text-primary"></i> Appointments
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=records">
            <i class="bi bi-people me-2 text-danger"></i> Records
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="index.php?page=patientsview">
            <i class="bi bi-people me-2 text-danger"></i> Patients
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold active" href="index.php?page=report">
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
      <h3 class="fw-bold mb-4"><i class="bi bi-bar-chart-line text-warning me-2"></i> Reports</h3>

      <!-- Example Reports Cards -->
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="fw-bold"><i class="bi bi-person-lines-fill text-primary me-2"></i> Patient Summary</h5>
            <p class="text-muted mb-0">Shows total patients, active users, and demographics.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-3">
            <h5 class="fw-bold"><i class="bi bi-capsule text-danger me-2"></i> Medication Reports</h5>
            <p class="text-muted mb-0">Lists prescriptions, adherence, and usage patterns.</p>
          </div>
        </div>
      </div>

      <!-- Table Example -->
      <div class="card mt-4 p-3">
        <h5 class="fw-bold"><i class="bi bi-table text-success me-2"></i> Recent Activities</h5>
        <table class="table table-hover align-middle mt-2">
          <thead class="table-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Report Name</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Patient Visit Summary</td>
              <td>2025-09-06</td>
              <td><a href="#" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> View</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Doctor Appointments Overview</td>
              <td>2025-09-04</td>
              <td><a href="#" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> View</a></td>
            </tr>
          </tbody>
        </table>
      </div>
        <!-- Export Section -->
      <div class="text-center">
        <button class="btn btn-outline-primary me-2"><i class="bi bi-file-earmark-pdf me-1"></i>Export as PDF</button>
        <button class="btn btn-outline-success"><i class="bi bi-file-earmark-excel me-1"></i>Export as Excel</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
