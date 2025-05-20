<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .product-card img {
      height: 200px;
      object-fit: cover;
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


  <!-- Title -->
  <div class="container text-center my-4">
    <h1>Featured Products</h1>
  </div>

  <!-- Product Cards -->
  <div class="container mb-5">
    <div class="row g-4">
      <!-- Product 1 -->
      <div class="col-md-4">
        <div class="card product-card">
          <img src="headphone.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Wireless Headphones</h5>
            <p class="card-text">High-quality sound, noise-cancelling, and long battery life.</p>
            <p class="fw-bold">$99.99</p>
          </div>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4">
        <div class="card product-card">
          <img src="smart.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Smart Watch</h5>
            <p class="card-text">Track your fitness, receive notifications, and more.</p>
            <p class="fw-bold">$149.99</p>
          </div>
        </div>
      </div>
      <!-- Product 3 -->
      <div class="col-md-4">
        <div class="card product-card">
          <img src="jbl.jpg" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Bluetooth Speaker</h5>
            <p class="card-text">Portable and powerful with deep bass sound get it now.</p>
            <p class="fw-bold">$59.99</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Order Form -->
  <div class="container mb-5">
    <h3 class="mb-3">Place Your Order</h3>
    <form action="order_result.php" method="post" class="row g-3">
      <div class="col-md-6">
        <label for="customerId" class="form-label">Customer ID</label>
        <input type="text" class="form-control" id="customerId" name="customerId" required>
      </div>
      <div class="col-md-6">
        <label for="customerName" class="form-label">Customer Name</label>
        <input type="text" class="form-control" id="customerName" name="customerName" required>
      </div>
      <div class="col-md-6">
        <label for="product" class="form-label">Select Product</label>
        <select class="form-select" id="product" name="product">
          <option value="headphones">Wireless Headphones</option>
          <option value="watch">Smart Watch</option>
          <option value="speaker">Bluetooth Speaker</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary w-100">Submit Order</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
<<footer class="bg-dark text-white pt-4 mt-5">
  <div class="container text-center text-md-start">
    <div class="row">
      
      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase">Contact Us</h5>
        <p><i class="fas fa-envelope"></i> email@example.com</p>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
