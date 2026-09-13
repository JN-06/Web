<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Brew-Go-Coffee – Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="login_re">

<?php include 'header.php'; ?>

<div class="container">
  <div class="form-container" id="register-form">
    <h2>Register</h2>

    <!-- Membership / Registration form -->
    <form action="registration_process.php" method="POST">
      <!-- Small flag lets the process-script confirm the POST really came from here -->
      <input type="hidden" name="form_type" value="register">

      <div class="input-group">
        <label for="register-name">Full Name</label>
        <input type="text" id="register-name" name="name" required>
      </div>

      <div class="input-group">
        <label for="register-email">Email</label>
        <input type="email" id="register-email" name="email" required>
      </div>

      <div class="input-group">
        <label for="register-password">Password</label>
        <input type="password" id="register-password" name="password" required>
      </div>

      <div class="input-group">
        <label for="register-confirm-password">Confirm Password</label>
        <input type="password" id="register-confirm-password" name="confirm-password" required>
      </div>

      <button type="submit" class="btn">Register</button>
      <button type="reset"  class="btn clear-btn">Clear</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</div>

</body>
</html>
