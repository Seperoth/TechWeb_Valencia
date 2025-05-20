<?php
// login-result.php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
// Accept any input as valid for now
$loginSuccess = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Result</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f5f5f5;
    }
    .result-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 400px;
      text-align: center;
    }
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
  </style>
</head>
<body>
  <div class="result-box">
    <h2 class="mb-3 text-success">Login Successful!</h2>
    <p>Welcome back, <?php echo htmlspecialchars($email); ?>.</p>
    <a href="orderpage.php" class="btn btn-purple mt-4">Continue to Dashboard</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
