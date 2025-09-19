<?php
// patients.php – SmileSync Patients Page
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'patients';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SmileSync – Patients</title>
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
    .table thead {
      background-color: #0069d9;
      color: #fff;
    }
    .btn-add {
      background: #0069d9;
      color: #fff;
    }
    .btn-add:hover {
      background: #0056b3;
      color: #fff;
    }
    /* Make table row hover blue */
    .table-hover tbody tr:hover {
      background-color: #0069d9 !important;
      color: #fff !important;
    }
    .table-hover tbody tr:hover td a {
      color: #fff !important;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold text-white" href="#">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center">
    <span class="patient-name fw-semibold me-3 text-white">Admin Name</span>
    <img src="https://i.pravatar.cc/40?img=6" alt="Admin" class="rounded-circle" width="40" height="40">
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar bg-light p-3 shadow-sm">
      <h5>Navigation</h5>
      <ul class="nav flex-column mt-3">
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page==='dashboard'?'active':'' ?>" href="/index.php?page=dashboard">
            <i class="bi bi-speedometer2 me-2 text-success"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page==='appointments'?'active':'' ?>" href="/index.php?page=appointments">
            <i class="bi bi-calendar-check me-2 text-primary"></i> Appointments
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page==='records'?'active':'' ?>" href="/index.php?page=records">
            <i class="bi bi-people me-2 text-danger"></i> Records
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page==='patients'?'active':'' ?>" href="/index.php?page=patientsview">
            <i class="bi bi-person-lines-fill me-2 text-danger"></i> Patients
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page==='report'?'active':'' ?>" href="/index.php?page=report">
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
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary mb-0">Patients</h1>
        <a href="/index.php?page=addpatient" class="btn btn-add btn-sm">
          <i class="bi bi-person-plus me-1"></i> Add Patient
        </a>
      </div>

      <!-- Patients Table -->
      <div class="card p-3">
        <h5 class="fw-bold text-primary mb-3">
          <i class="bi bi-list-ul me-2"></i> Patients List
        </h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Last Visit</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Male</td>
                <td>28</td>
                <td>0912-345-6789</td>
                <td>2025-09-01</td>
                <td>
                  <a href="patient_details.php?id=1" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                  <a href="edit_patient.php?id=1" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Female</td>
                <td>34</td>
                <td>0918-765-4321</td>
                <td>2025-08-20</td>
                <td>
                  <a href="patient_details.php?id=2" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                  <a href="edit_patient.php?id=2" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Mike Brown</td>
                <td>Male</td>
                <td>40</td>
                <td>0922-111-2233</td>
                <td>2025-07-15</td>
                <td>
                  <a href="patient_details.php?id=3" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                  <a href="edit_patient.php?id=3" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
