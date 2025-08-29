<?php
// register.php

// Example placeholder for backend logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName  = $_POST['first_name'];
    $lastName   = $_POST['last_name'];
    $middleName = $_POST['middle_name'];
    $suffix     = $_POST['suffix'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $confirmPwd = $_POST['confirm_password'];

    // Simple validation example
    if ($password === $confirmPwd) {
        // TODO: Save user into database
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Passwords do not match!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="max-width: 900px; width: 100%;">
      <div class="row g-0">

        <!-- Left side (Form) -->
        <div class="col-md-6 p-5">
          <h4 class="fw-bold" style="color: #1c6ea4;">Create Your SmileSync Account</h4>
          <p class="text-muted mb-4">Fill in your details below</p>

          <form method="POST" action="register.php">
            <!-- First + Last Name side by side -->
            <div class="row">
              <div class="col-md-6 mb-2">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control form-control-sm" required>
              </div>
              <div class="col-md-6 mb-2">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control form-control-sm" required>
              </div>
            </div>

            <!-- Middle Name + Suffix side by side -->
            <div class="row">
              <div class="col-md-6 mb-2">
                <label class="form-label">Middle Name</label>
                <input type="text" name="middle_name" class="form-control form-control-sm" required>
              </div>
              <div class="col-md-4 mb-2">
                <label class="form-label">Suffix</label>
                <input type="text" name="suffix" class="form-control form-control-sm" placeholder="e.g. Jr, Sr, III">
              </div>
            </div>

            <!-- Email -->
            <div class="mb-2">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" required>
            </div>

            <!-- Password + Confirm side by side -->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-sm" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control form-control-sm" required>
              </div>
            </div>

            <!-- Register Button -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary py-2" >Register</button>
            </div>

            <!-- Back to Login -->
            <p class="text-center mb-0">
              Already have an account? 
              <a href="/index.php?page=login" class="fw-bold text-decoration-none" style="color: #1c6ea4;">Login here</a>
            </p>
          </form>
        </div>

        <!-- Right side (Image) -->
        <div class="col-md-6 d-none d-md-block">
          <img src="resources/assets/images/Smile.png" 
            alt="Register Image" 
            class="img-fluid h-100 w-100" 
            style="object-fit: cover;">
        </div>

      </div>
    </div>
  </div>

  <!-- Footer-->
  <footer class="text-muted text-center py-1" style="background-color: #9ECAD6;">
    <p class="mb-0">&copy; 2025 RanEditz. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
