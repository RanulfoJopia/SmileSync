<?php
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'admin_dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #0069d9;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: #fff !important;
    }
    .page-title {
      color: #0069d9;
      font-weight: bold;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover {
      transform: translateY(-3px);
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
    .search-bar {
      max-width: 300px;
    }
    .table th {
      color: #0069d9;
      font-weight: bold;
    }
    .status-badge {
      padding: 6px 10px;
      border-radius: 10px;
      font-size: 0.8rem;
    }
    .nav-tabs .nav-link.active {
      background: #0069d9;
      color: #fff !important;
      border-radius: 8px 8px 0 0;
    }
    .modal-header {
      border-bottom: none;
    }
  </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">SmileSync Admin</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-gear me-1"></i> Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-box-arrow-right me-1"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container py-5">
  <!-- Page Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="page-title"><i class="bi bi-people-fill me-2"></i>Admin Dashboard</h2>
    <div class="d-flex gap-2">
      <input type="text" class="form-control search-bar" placeholder="Search...">
      <a href="/index.php?page=add_patient" class="btn btn-dental">
        <i class="bi bi-person-plus me-1"></i>Add Patient
      </a>
      <a href="/index.php?page=add_doctor" class="btn btn-outline-primary">
        <i class="bi bi-person-plus me-1"></i>Add Doctor
      </a>
    </div>
  </div>

  <!-- Stats Overview -->
  <div class="row mb-4 g-3">
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <i class="bi bi-person-check card-icon text-success fs-3"></i>
        <h6>Total Patients</h6>
        <h3 class="fw-bold text-success">45</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <i class="bi bi-person-vcard card-icon text-primary fs-3"></i>
        <h6>Total Doctors</h6>
        <h3 class="fw-bold text-primary">12</h3>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 text-center">
        <i class="bi bi-calendar-event card-icon text-warning fs-3"></i>
        <h6>Appointments Today</h6>
        <h3 class="fw-bold text-warning">8</h3>
      </div>
    </div>
  </div>

  <!-- Tabs for Patients & Doctors -->
  <ul class="nav nav-tabs mb-3" id="adminTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="patients-tab" data-bs-toggle="tab" data-bs-target="#patients" type="button" role="tab">
        <i class="bi bi-people"></i> Patients
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="doctors-tab" data-bs-toggle="tab" data-bs-target="#doctors" type="button" role="tab">
        <i class="bi bi-person-badge"></i> Doctors
      </button>
    </li>
  </ul>

  <div class="tab-content" id="adminTabContent">
    <!-- Patients Table -->
    <div class="tab-pane fade show active" id="patients">
      <div class="card p-4">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Last Visit</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Patient 1 -->
            <tr>
              <td>1</td>
              <td><img src="https://i.pravatar.cc/40?img=11" class="rounded-circle" width="40"></td>
              <td>Ranulfo Jopia</td>
              <td>jopia@example.com</td>
              <td>+63 912 345 6789</td>
              <td>Sept 5, 2025</td>
              <td><span class="status-badge bg-success text-white">Active</span></td>
              <td>
                <a href="/index.php?page=details" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <!-- Patient 2 -->
            <tr>
              <td>2</td>
              <td><img src="https://i.pravatar.cc/40?img=12" class="rounded-circle" width="40"></td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>+63 921 234 5678</td>
              <td>Sept 6, 2025</td>
              <td><span class="status-badge bg-warning text-dark">Pending</span></td>
              <td>
                <a href="/index.php?page=details" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <!-- Patient 3 -->
            <tr>
              <td>3</td>
              <td><img src="https://i.pravatar.cc/40?img=13" class="rounded-circle" width="40"></td>
              <td>Michael Cruz</td>
              <td>michael@example.com</td>
              <td>+63 922 456 7890</td>
              <td>Sept 7, 2025</td>
              <td><span class="status-badge bg-success text-white">Active</span></td>
              <td>
                <a href="/index.php?page=details" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Doctors Table -->
    <div class="tab-pane fade" id="doctors">
      <div class="card p-4">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Specialization</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Doctor 1 -->
            <tr>
              <td>1</td>
              <td><img src="https://i.pravatar.cc/40?img=21" class="rounded-circle" width="40"></td>
              <td>Dr. Angela Ramos</td>
              <td>Orthodontist</td>
              <td>angela@clinic.com</td>
              <td>+63 912 888 2222</td>
              <td><span class="status-badge bg-success text-white">Active</span></td>
              <td>
                <a href="/index.php?page=details" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <!-- Doctor 2 -->
            <tr>
              <td>2</td>
              <td><img src="https://i.pravatar.cc/40?img=22" class="rounded-circle" width="40"></td>
              <td>Dr. Carlos Bautista</td>
              <td>Endodontist</td>
              <td>carlos@clinic.com</td>
              <td>+63 915 555 3333</td>
              <td><span class="status-badge bg-warning text-dark">On Leave</span></td>
              <td>
                <a href="/index.php?page=details" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
