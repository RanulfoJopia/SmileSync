<?php
// appointments.php
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'appointments';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Appointments - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar { background: #0069d9; }
    .navbar-brand, .patient-name { color: white !important; }

    /* Sidebar */
    .sidebar {
      background: #fff;
      min-height: 100vh;
      border-right: 1px solid #dee2e6;
      padding: 20px;
    }
    .sidebar h5 { font-weight: bold; color: #0069d9; }
    .sidebar .nav-link {
      color: #000 !important;
      border-radius: 8px;
      padding: 10px 12px;
      display: flex;
      align-items: center;
      transition: all .2s ease-in-out;
    }
    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background: #0069d9;
      color: #fff !important;
    }
    .sidebar .nav-link.active .bi,
    .sidebar .nav-link:hover .bi {
      color: #fff !important;
    }

    /* Appointment Cards */
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
    .btn-dental {
      background: #0069d9;
      color: #fff;
      border-radius: 10px;
      padding: 10px 20px;
    }
    .btn-dental:hover { background: #0056b3; }

    /* Status badges */
    .badge-upcoming { background: #ffc107; }
    .badge-complete { background: #28a745; }
    .badge-overdue  { background: #dc3545; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
  <a class="navbar-brand fw-bold text-white" href="/index.php?page=landing">🦷 SmileSync</a>
  <div class="ms-auto d-flex align-items-center">
    <span class="patient-name fw-semibold me-3">Dr. Sopapi Monyanyo</span>
    <img src="https://i.pravatar.cc/40?img=6" alt="Patient" class="rounded-circle" style="width:40px; height:40px;">
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar">
      <h5>Navigation</h5>
      <ul class="nav flex-column mt-3">
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page === 'dashboard' ? 'active' : '' ?>" href="/index.php?page=dashboard">
            <i class="bi bi-speedometer2 me-2 text-success"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page === 'appointments' ? 'active' : '' ?>" href="/index.php?page=appointments">
            <i class="bi bi-calendar-check me-2 text-primary"></i> Appointments
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold <?= $page === 'patients' ? 'active' : '' ?>" href="/index.php?page=patients">
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
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark"><i class="bi bi-calendar-check text-primary"></i> Appointments</h3>
        <a href="/index.php?page=add_appointment" class="btn btn-dental">
          <i class="bi bi-plus-circle me-2"></i> Add Appointment
        </a>
      </div>

      <!-- Filter -->
      <div class="mb-4">
        <label for="filter" class="form-label fw-semibold">Filter by Status:</label>
        <select class="form-select w-auto d-inline-block" id="filter">
          <option value="all">All</option>
          <option value="upcoming">Upcoming</option>
          <option value="complete">Completed</option>
          <option value="overdue">Overdue</option>
        </select>
      </div>

      <!-- Appointment List -->
      <div class="row g-4">
        <!-- Example Appointment Card -->
        <div class="col-md-6">
          <div class="card p-3">
            <div class="d-flex justify-content-between">
              <div>
                <h5 class="fw-bold">John Smith</h5>
                <p class="mb-1"><i class="bi bi-person-badge"></i> Patient ID: #1024</p>
                <p class="mb-1"><i class="bi bi-clock"></i> Sept 10, 2025 @ 10:00 AM</p>
                <p class="mb-1"><i class="bi bi-person-vcard"></i> Dr. Johnson</p>
              </div>
              <span class="badge badge-upcoming align-self-start">Upcoming</span>
            </div>
            <div class="mt-3 d-flex justify-content-end gap-2">
              <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i> Update</button>
              <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card p-3">
            <div class="d-flex justify-content-between">
              <div>
                <h5 class="fw-bold">Maria Garcia</h5>
                <p class="mb-1"><i class="bi bi-person-badge"></i> Patient ID: #1025</p>
                <p class="mb-1"><i class="bi bi-clock"></i> Sept 5, 2025 @ 2:00 PM</p>
                <p class="mb-1"><i class="bi bi-person-vcard"></i> Dr. Smith</p>
              </div>
              <span class="badge badge-complete align-self-start">Completed</span>
            </div>
            <div class="mt-3 d-flex justify-content-end gap-2">
              <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i> Update</button>
              <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
            </div>
          </div>
        </div>

        <!-- More cards dynamically from DB -->
      </div>
    </div>
  </div>
</div>

</body>
</html>
