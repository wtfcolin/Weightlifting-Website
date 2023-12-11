<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- Link to External CSS File -->
  <link rel="stylesheet" href="WebsiteLook.css">
</head>
<body>
  <div id="login-page" class="container">
  <div id="profile-picture">
      <img src="WhitewaterLogo.webp" alt="Profile Picture" class="img-fluid rounded-circle" width="150">
  </div>
  <h1>Welcome to the Weightlifting App</h1>
  <div class="inspirational-Quotes">

  </div>
    
    <div id = "login-page" class="container">
        <form method="post" action="Website.php?mode=login" class="form-signin">
            <h3>Sign in</h3>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus><br>
            <input type="password" class="form-control" name="password" placeholder="password" required>
            <p class="button-row"><button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button></p>
        </form>

        <!-- Button to create account page -->
        <p class="text-center">Don't have an account?</p>
        <div class="text-center">
            <a href="CreateAccount.php" class="btn btn-outline-primary">Create Account</a>
        </div>
    </div>
</body>
</html>
