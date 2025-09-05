<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - SmileSync</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0 w-100 register-card" style="max-width: 850px;">
      <div class="row g-0">

        <!-- Left side (Form) -->
        <div class="col-md-6 p-5">
          <h4 class="fw-bold text-primary">Create Your SmileSync Account</h4>
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
              <div class="col-md-6 mb-2">
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
              <button type="submit" class="btn btn-primary py-2">Register</button>
            </div>

            <!-- Back to Login -->
            <p class="text-center mb-0">
              Already have an account? 
              <a href="/index.php?page=login" class="fw-bold text-decoration-none text-primary">Login here</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
