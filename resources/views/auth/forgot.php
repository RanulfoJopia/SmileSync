<?php
// forgot.php
// You can handle backend logic here later (sending reset link, etc.)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body class="bg-light">

  <!-- Forgot Password Card -->
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="max-width: 600px; width: 100%;">
      <div class="row g-0">
        <div class="col p-5">
          <h2 class="fw-bold" style="color: #1c6ea4;">Forgot Password?</h2>
          <p class="text-muted mb-4">Enter your registered email to reset your password.</p>

          <!-- Form submission points to process_forgot.php (to be created) -->
          <form action="process_forgot.php" method="POST">
            <!-- Email field -->
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Submit button -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary py-2">Submit</button>
            </div>

            <!-- Back to login -->
            <p class="text-center mb-0">
              Remembered your password? 
              <a href="login.php" class="fw-bold text-decoration-none" style="color: #1c6ea4;">Login here</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="text-muted text-center py-1" style="background-color: #9ECAD6;">
    <p class="mb-0">&copy; 2025 RanEditz. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
