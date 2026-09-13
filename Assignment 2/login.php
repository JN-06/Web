<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-Go-Coffee</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class = "login_re">

    <?php include("header.php"); ?>
    
    <div class="container">
        <!-- Inside Login Form -->
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <button type="reset" class="btn clear-btn">Clear</button>
            </form>
            <p>Don't have an account? <a href="registration.php" id="show-register">Register here</a></p>
        </div>
    </div>

</body>
</html>
