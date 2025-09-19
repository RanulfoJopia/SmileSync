<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patients List</title>
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

    /* Sidebar Navigation Links */
    .sidebar .nav-link {
      color: #000 !important;          /* default black */
      border-radius: 8px;              /* rounded look */
      padding: 10px 12px;
      transition: all 0.3s ease;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #0069d9;       /* blue background */
      color: #fff !important;          /* white text */
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
    }
    .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
    .table th {
      background-color: #0069d9;
      color: white;
    }

    /* Close button container */
    .close-btn-container {
      position: absolute;
      top: 15px;
      right: 20px;
      z-index: 9999;
      background: #fff;
      border: 2px solid #ddd;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .close-btn {
      font-size: 20px;
      font-weight: bold;
      color: #888;
      border: none;
      background: transparent;
      cursor: pointer;
      line-height: 1;
    }
    .close-btn:hover {
      color: #d9534f;
    }

    .btn-action {
      margin-right: 5px;
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
    <div class="col-md-2 sidebar bg-light p-3 shadow-sm" style="min-height: 100vh;">
      <h5 class="text-dark fw-bold">Navigation</h5>
      <ul class="nav flex-column mt-3">
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=dashboard">
            <i class="bi bi-speedometer2 me-2 text-success"></i> Dashboard
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=appointments">
            <i class="bi bi-calendar-check me-2 text-primary"></i> Appointments
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold active" href="/index.php?page=records">
            <i class="bi bi-file-earmark-medical me-2 text-danger"></i> Records
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=patientsview">
            <i class="bi bi-capsule-pill me-2 text-warning"></i> Petients
          </a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link fw-semibold" href="/index.php?page=report">
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
      <div class="card p-3 position-relative">
        <div class="close-btn-container">
          <button class="close-btn" onclick="goBack()">&times;</button>
        </div>
        <div class="mb-3">
          <h4 class="fw-bold mb-0"><i class="bi bi-people-fill text-primary"></i> Patients List</h4>
          <!-- Filter Dropdown -->
          <select class="form-select" style="width: 200px;">
            <option value="all">Category</option>
            <option value="upcoming">Upcoming</option>
            <option value="completed">Completed</option>
            <option value="overdue">Overdue</option>
          </select>
        </div>

        <!-- Patient Search -->
        <div class="input-group mb-3">
          <span class="input-group-text bg-primary text-white"><i class="bi bi-search"></i></span>
          <input type="text" class="form-control" placeholder="Search patient...">
        </div>

        <!-- Patient Table -->
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Profile</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Last Visit</th>
                <th>Upcoming Appointment</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="https://i.pravatar.cc/40?img=11" class="profile-img"></td>
                <td>Jane Smith</td>
                <td>28</td>
                <td>+63 912 345 6789</td>
                <td>Aug 20, 2025 - Tooth Extraction</td>
                <td>Sept 5, 2025 @ 10:00 AM</td>
                <td><span class="badge bg-warning">Upcoming</span></td>
                <td>
                  <button class="btn btn-sm btn-primary btn-action"><i class="bi bi-pencil"></i> Update</button>
                  <button class="btn btn-sm btn-danger btn-action"><i class="bi bi-trash"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td><img src="https://i.pravatar.cc/40?img=14" class="profile-img"></td>
                <td>Mark Johnson</td>
                <td>34</td>
                <td>+63 923 456 7890</td>
                <td>July 15, 2025 - Cleaning</td>
                <td>Sept 10, 2025 @ 2:00 PM</td>
                <td><span class="badge bg-warning">Upcoming</span></td>
                <td>
                  <button class="btn btn-sm btn-primary btn-action"><i class="bi bi-pencil"></i> Update</button>
                  <button class="btn btn-sm btn-danger btn-action"><i class="bi bi-trash"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td><img src="https://i.pravatar.cc/40?img=16" class="profile-img"></td>
                <td>Emily Davis</td>
                <td>41</td>
                <td>+63 934 567 8901</td>
                <td>June 5, 2025 - Root Canal</td>
                <td>Sept 12, 2025 @ 11:30 AM</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>
                  <button class="btn btn-sm btn-primary btn-action"><i class="bi bi-pencil"></i> Update</button>
                  <button class="btn btn-sm btn-danger btn-action"><i class="bi bi-trash"></i> Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>

</body>
</html>
