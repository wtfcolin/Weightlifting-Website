<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
    <body>
<style>
 .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
    .button-row {
        margin-top: 10px;
    }
</style>

<div class = "container">
      
    <form method="post" action="Website.php?mode=login" class="form-signin">
        <h3>Sign in</h3>
        <input type = "text" class = "form-control" 
            name = "username" placeholder = "username" required autofocus></br>
        <input type = "password" class = "form-control" name = "password" placeholder = "password" required>
        <p class="button-row"><button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button></p>
    </form>      
</div>
    </body>
</html>