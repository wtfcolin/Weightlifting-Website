<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<form id="CreateAccount" action="CreateAccount.php" method="post" style="border: 1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>UWW Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" required>

    <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" onclick="validateForm()" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<script>
  function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('psw').value;
    var repeatPassword = document.getElementById('psw-repeat').value;

    var emailValid = email.includes('@uww'); // Check if email contains '@uww'
    var passwordValid = password.length >= 8; // Check if password is at least 8 characters long

    var errorMessage = 'Following items do not meet criteria:\n';

    if (!emailValid) {
      errorMessage += '- Email is not @uww.edu\n';
    }

    if (!passwordValid) {
      errorMessage += '- Password (at least 8 characters)\n';
    }

    if (password !== repeatPassword) {
      errorMessage += '- Passwords should match\n';
    }

    if (!emailValid || !passwordValid || password !== repeatPassword) {
      alert(errorMessage);
      return false; // Prevent form submission
    }

    document.getElementById('CreateAccount').submit(); // If everything is valid, submit the form
  }
</script>
</body>
</html>
