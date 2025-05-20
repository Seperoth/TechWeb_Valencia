
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap Sign-In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
  body {
    background-color: #f5f5f5;
    margin: 0;
  }

  .form-signin {
    max-width: 500px;
    padding: 50px;
    margin: 60px auto;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  .form-control {
    width: 100%;
  }

  .btn-primary {
  background-color: #6f42c1; /* Bootstrap purple */
  border-color: #6f42c1;
}

.btn-primary:hover {
  background-color: #5a32a3;
  border-color: #5a32a3;
}

  </style>
</head>
<body>
  <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark btn-primary">
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


  <main class="form-signin text-center">
    <form action="registration-result.php" method="post">
      <img class="mb-4" src="reshot-icon-twitch-NSM87GDYZ2.svg" alt="Logo" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating mb-2">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mb-3">
        <input type="date" class="form-control" name="date" id="floatingDate" required>
        <label for="floatingDate">Select Date</label>
      </div>

      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me"> Remember me</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2025</p>
    </form>
  </main>
  
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
