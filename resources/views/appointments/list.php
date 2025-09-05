<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointments</title>
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
    .navbar-brand, .doctor-name {
      color: white !important;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .card:hover {
      transform: translateY(-4px);
      transition: 0.3s;
    }
    .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 10px;
    }
    .table th {
      background-color: #0069d9;
      color: white;
    }
    .badge-upcoming {
      background-color: #28a745;
    }
    .badge-completed {
      background-color: #6c757d;
    }
    .badge-cancelled {
      background-color: #dc3545;
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

<div class="container mt-4">
  <div class="card p-3">
    <h4 class="fw-bold mb-3"><i class="bi bi-calendar-check text-primary"></i> Appointments</h4>

    <!-- Appointment Search -->
    <div class="input-group mb-3">
      <span class="input-group-text bg-primary text-white"><i class="bi bi-search"></i></span>
      <input type="text" class="form-control" placeholder="Search appointments...">
    </div>

    <!-- Appointment Table -->
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead>
          <tr>
            <th>Patient</th>
            <th>Date & Time</th>
            <th>Procedure</th>
            <th>Status</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="https://i.pravatar.cc/40?img=11" class="profile-img"> Jane Smith
            </td>
            <td>Sept 5, 2025 @ 10:00 AM</td>
            <td>Tooth Extraction</td>
            <td><span class="badge badge-upcoming">Upcoming</span></td>
            <td>Requires X-ray before extraction</td>
          </tr>
          <tr>
            <td>
              <img src="https://i.pravatar.cc/40?img=14" class="profile-img"> Mark Johnson
            </td>
            <td>Sept 2, 2025 @ 2:00 PM</td>
            <td>Cleaning</td>
            <td><span class="badge badge-completed">Completed</span></td>
            <td>Suggested follow-up in 6 months</td>
          </tr>
          <tr>
            <td>
              <img src="https://i.pravatar.cc/40?img=16" class="profile-img"> Emily Davis
            </td>
            <td>Aug 30, 2025 @ 11:30 AM</td>
            <td>Root Canal</td>
            <td><span class="badge badge-cancelled">Cancelled</span></td>
            <td>Rescheduled due to patient request</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
