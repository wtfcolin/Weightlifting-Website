<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lifting App - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="WebsiteLook.css">
</head>
<body>
    <div id="login-page" class="container">
        <div id="login-text-centered">
            <div id="profile-picture">
                <img src="WhitewaterLogo.webp" alt="Profile Picture" class="img-fluid rounded-circle" width="150">
            </div>
            <br>
            <h1>Welcome to the Weightlifting App</h1>
            <br>
            <div class="inspirational-Quotes">
                <!-- Quotes are added dynamically through "WebsiteFunction.js" -->
            </div>
        </div>
        <form id="CreateAccount" method="post" action="index.php?mode=createAccount" class="form-signin">
            <h3>Sign Up</h3>
            <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email" required autofocus>
            <br>
            <input type="password" class="form-control" name="psw" placeholder="Enter Password" id="psw" required>
            <br>
            <input type="password" class="form-control" name="psw-repeat" placeholder="Repeat Password" id="psw-repeat" required>
            <br>
            <div class="button-row">
                <button type="button" onclick="validateForm()" class="btn btn-lg btn-primary btn-block">Create Account</button>
            </div>
        </form>
        <p class="text-center">Already have an account?</p>
        <div class="text-center">
            <a href="loginform.php" class="btn btn-outline-primary">Sign In</a>
        </div>
    </div>
    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('psw').value;
            var repeatPassword = document.getElementById('psw-repeat').value;

            var emailValid = email.includes('@uww'); // Check if email contains '@uww'
            var passwordValid = password.length >= 8 && !password.toLowerCase().includes('select'); // Ensure password doesn't contain 'select'

            var errorMessage = 'Following items do not meet criteria:\n';

            if (!emailValid) {
                errorMessage += '- Email is not @uww.edu\n';
            }

            if (!passwordValid) {
                errorMessage += '- Password (at least 8 characters, cannot contain the word "Select")\n';
            }

            if (password !== repeatPassword) {
                errorMessage += '- Passwords do not match\n';
            }

            if (!emailValid || !passwordValid || password !== repeatPassword) {
                alert(errorMessage);
                return false; // Prevent form submission
            }

            //document.getElementById('CreateAccount').submit(); // If everything is valid, submit the form
            window.location.href = "loginform.php";
        }
    </script>
    <script src="WebsiteFunction.js"></script>
</body>
</html>