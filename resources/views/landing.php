<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Management System</title>
    <link rel="stylesheet" href="resources/assets/css/style.css">
    <!-- Bootstrap CSS (optional if you want styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center" style="font-size: 28px;" href="index.php?page=landing">
                <img src="resources/assets/images/logo.png" alt="Dental Logo" width="40" height="40" class="me-2">
                Dental System
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=landing">Home</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=register">Register</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="/index.php?page=login">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <section class="py-5">
            <div class="container container-custom">
                <div class="row align-items-center">
                    <!-- Left Side -->
                    <div class="col-md-6 hero-left">
                        <h1 class="display-5 fw-bold">SmileSync - Dental Health Tracking System</h1>
                        <p class="lead">Track your dental journey, monitor braces adjustments, and manage appointments all in one place.</p>
                        <a href="index.php?page=register" class="btn btn-primary btn-lg">Get Started</a>
                    </div>

                    <!-- Right Side: Image -->
                    <div class="col-md-6 text-center">
                        <img src="https://www.greaterhartfordortho.com/wp-content/uploads/Young-Girl-in-Braces-920x613.jpg" 
                             alt="Dental Health" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-sm w-100">
                            <img src="https://img.freepik.com/premium-photo/closeup-dental-braces-adjustment_146482-19867.jpg?w=2000" 
                                 class="card-img-top" alt="Braces Adjustment Tracker">
                            <div class="card-body">
                                <h5 class="card-title">Braces Adjustment Tracker</h5>
                                <p class="card-text">Log every adjustment with photos, pain levels, and notes to visualize your dental progress over time.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-sm w-100">
                            <img src="https://tse3.mm.bing.net/th/id/OIP.vwOGhT2nVeAv18sN99cmmwHaEK?pid=Api&P=0&h=180" 
                                 class="card-img-top" alt="Appointment Scheduling">
                            <div class="card-body">
                                <h5 class="card-title">Appointment Scheduling</h5>
                                <p class="card-text">Book, view, and manage dental appointments with reminders sent directly to your email.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-sm w-100">
                            <img src="https://2.bp.blogspot.com/-eqwUN5Xqyag/W4KkdoEvMDI/AAAAAAAAAL8/h66cqp5w0Tc3sIFnVA-aSuz_9GnA29uVACLcBGAs/s640/colorful-progress-with-arrows-up-LearningKeeper-Homeschool-Online-Digital-Portfolio-Compliance-Record-Keeping-Software.jpg" 
                                 class="card-img-top" alt="Progress Visualization">
                            <div class="card-body">
                                <h5 class="card-title">Progress Visualization</h5>
                                <p class="card-text">See your journey with charts, timelines, and image comparisons that showcase your dental improvement.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
