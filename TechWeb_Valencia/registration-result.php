<?php
// Just get the posted email (or any info you sent from registration form)
$email = $_GET['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Registration Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="p-5 bg-white rounded shadow text-center" style="max-width: 400px;">
    <h2>Registration Successful!</h2>
    <p>Thank you for registering, <?php echo htmlspecialchars($email); ?>.</p>
    <a href="login.php" class="btn btn-primary mt-3">Go to Login</a>
  </div>
</body>
</html>
