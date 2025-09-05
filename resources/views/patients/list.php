<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Patient</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: url("https://www.frazerdentalcare.com/wp-content/uploads/2016/05/Woman-talking-with-dentist.jpg") no-repeat center center/cover;
      backdrop-filter: blur(6px);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-card {
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.15);
      padding: 30px;
      width: 100%;
      max-width: 650px;
      animation: fadeIn 0.8s ease-in-out;
    }
    .form-card h3 {
      color: #0d6efd;
      font-weight: 700;
    }
    .btn-custom {
      background: #0d6efd;
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background: #0b5ed7;
      transform: scale(1.05);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="form-card">
    <h3 class="mb-4"><i class="bi bi-person-plus-fill me-2 text-primary"></i> Add New Patient</h3>
    <form>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label fw-semibold"><i class="bi bi-person"></i> Full Name</label>
          <input type="text" class="form-control" placeholder="Enter full name" required>
        </div>
        <div class="col-md-3">
          <label class="form-label fw-semibold"><i class="bi bi-calendar"></i> Age</label>
          <input type="number" class="form-control" placeholder="Age" required>
        </div>
        <div class="col-md-3">
          <label class="form-label fw-semibold"><i class="bi bi-gender-ambiguous"></i> Gender</label>
          <select class="form-select" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold"><i class="bi bi-telephone"></i> Contact Number</label>
          <input type="text" class="form-control" placeholder="+63 912 345 6789" required>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold"><i class="bi bi-envelope"></i> Email</label>
          <input type="email" class="form-control" placeholder="Enter email" required>
        </div>
        <div class="col-md-12">
          <label class="form-label fw-semibold"><i class="bi bi-geo-alt"></i> Address</label>
          <input type="text" class="form-control" placeholder="Enter address" required>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold"><i class="bi bi-calendar-event"></i> Last Visit</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold"><i class="bi bi-calendar-check"></i> Upcoming Appointment</label>
          <input type="datetime-local" class="form-control">
        </div>
        <div class="col-md-12">
          <label class="form-label fw-semibold"><i class="bi bi-file-medical"></i> Notes</label>
          <textarea class="form-control" rows="3" placeholder="Enter additional details"></textarea>
        </div>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <button type="button" class="btn btn-outline-secondary" onclick="history.back()">
          <i class="bi bi-arrow-left"></i> Cancel
        </button>
        <button type="submit" class="btn btn-custom">
          <i class="bi bi-save2"></i> Save Patient
        </button>
      </div>
    </form>
  </div>

</body>
</html>
