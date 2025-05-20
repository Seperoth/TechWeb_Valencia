<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    /* Purple navbar background */
    .bg-purple {
      background-color: #6f42c1 !important;
    }
    /* Purple button */
    .btn-purple {
      background-color: #6f42c1;
      border-color: #6f42c1;
      color: white;
    }
    .btn-purple:hover {
      background-color: #5a32a3;
      border-color: #5a32a3;
      color: white;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f5f5f5;
    }
    main {
      flex: 1 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 15px;
    }
    .form-login {
      max-width: 400px;
      width: 100%;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <!-- Purple Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-purple">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tech app!</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Signin_tech.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Login Form -->
  <main>
    <form class="form-login" action="login-result.php" method="POST">
      <h1 class="h3 mb-4 fw-normal text-center">Please Log In</h1>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" required>
        <label for="floatingEmail">Email address</label>
      </div>

      <div class="form-floating mb-4">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-purple btn-lg" type="submit">Log In</button>
    </form>
  </main>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <<footer class="bg-dark text-white pt-4 mt-5">
  <div class="container text-center text-md-start">
    <div class="row">
      
      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase">Contact Us</h5>
        <p><i class="fas fa-envelope"></i> TechiApp!@example.com</p>
        <p><i class="fas fa-phone"></i> +1 (123) 456-7890</p>
        <p><i class="fas fa-map-marker-alt"></i> 123 Main St, City, Country</p>
      </div>

      <!-- Social Media -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase">Follow Us</h5>
        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">About</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3 bg-secondary">
    © 2025 My App | All rights reserved
  </div>
</footer>
</body>
</html>
