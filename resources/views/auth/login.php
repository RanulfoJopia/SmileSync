<?php
// login.php
// (Removed validation for now; button just routes to dashboard)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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
      background-color: rgba(255, 255, 255, 0.4);
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

    /* Social buttons */
    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: .5rem;
      font-weight: 500;
    }
    .social-btn i {
      font-size: 1.2rem;
    }

    .btn-facebook {
      background-color: #3b5998;
      color: #fff;
    }
    .btn-facebook:hover {
      background-color: #2d4373;
    }

    .btn-google {
      background-color: #db4437;
      color: #fff;
    }
    .btn-google:hover {
      background-color: #b23123;
    }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-lg border-0" style="max-width: 900px; width: 100%;">
    <div class="row g-0">
      
      <!-- Left side (Form) -->
      <div class="col-md-6 p-5">
        <h2 class="fw-bold" style="color: #1c6ea4;">Sign in to SmileSync</h2>
        <p class="text-muted mb-4">Enter your details below</p>

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
          <a href="/index.php?page=dashboard" class="btn btn-primary w-50 py-1">
            Login
          </a>
        </div>

        <!-- Social logins -->
        <p class="text-center text-muted mb-2" style="font-size: small;">Sign in with:</p>
        <div class="d-flex flex-column gap-2">
          <a href="#" class="btn btn-facebook social-btn">
            <i class="bi bi-facebook"></i> Continue with Facebook
          </a>
          <a href="#" class="btn btn-google social-btn">
            <i class="bi bi-google"></i> Continue with Google
          </a>
        </div>

        <!-- Create account -->
        <p class="text-center mt-3 mb-0">
          Don’t have an account? 
          <a href="/index.php?page=register" class="fw-bold text-decoration-none" style="color: #1c6ea4;">Create account</a>
        </p>
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
