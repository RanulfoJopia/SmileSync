<?php
// login.php
// You can handle form submission here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Example: validation (replace with database check)
    if ($username === "admin" && $password === "1234") {
        // Redirect to dashboard (replace with your page)
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <style>
    /* Background with blur */
    body {
      background: url('https://www.bostondentalgroup.com/wp-content/uploads/2015/09/Most-Important-Reasons-to-Visit-the-Dentist.jpg') no-repeat center center fixed;
      background-size: cover;
      position: relative;
    }

    /* Blur overlay */
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(8px);
      background-color: rgba(255, 255, 255, 0.4); /* slight white overlay */
      z-index: 0;
    }

    /* Card styling */
    .register-card {
      position: relative;
      z-index: 1;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
    }

    .register-card img {
      border-radius: 0 15px 15px 0;
    }
  </style>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-lg border-0" style="max-width: 900px; width: 100%;">
    <div class="row g-0">
      
      <!-- Left side (Form) -->
      <div class="col-md-6 p-5">
        <h2 class="fw-bold" style="color: #1c6ea4;">Sign in to SmileSync</h2>
        <p class="text-muted mb-4">Enter your details below</p>

        <!-- Show error if login fails -->
        <?php if (!empty($error)): ?>
          <div class="alert alert-danger py-1"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
          <!-- Email/Username -->
          <div class="mb-3">
            <label class="form-label">Email or Username</label>
            <input type="text" name="username" class="form-control" required>
          </div>

          <!-- Password -->
          <div class="mb-2">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <!-- Remember Me -->
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>

          <!-- Forgot + Login inline -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="/index.php?page=forgot" class="text-decoration-none text-muted" style="font-size: 15px;">Forgot Password?</a>
            <button type="button" class="btn btn-primary w-50 py-1"
            onclick="window.location.href='/index.php?page=dashboard'">
            Login
          </button>

          </div>

          <!-- Social logins -->
          <p class="text-center text-muted mb-2" style="font-size: small;">Sign in with:</p>
          <div class="d-flex justify-content-center gap-5 mb-3">
            <button type="button" class="btn btn-outline-primary w-50">Facebook</button>
            <button type="button" class="btn btn-outline-danger w-50">Google</button>
          </div>

          <!-- Create account -->
          <p class="text-center mb-0">
            Don’t have an account? 
            <a href="/index.php?page=register" class="fw-bold text-decoration-none" style="color: #1c6ea4;">Create account</a>
          </p>
        </form>
      </div>

      <!-- Right side (Image) -->
      <div class="col-md-6 d-none d-md-block">
        <img src="resources/assets/images/Smile.png" 
          alt="Login Image" 
          class="img-fluid h-100 w-100" 
          style="object-fit: cover;">
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
