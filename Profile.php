<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Workout App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Bootstrap default background color */
        }

        .container {
            margin-top: 50px;
        }

        #profile-info {
            background-color: #ffffff; /* Warhawk White */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        #profile-picture {
            text-align: center;
            margin-top: 20px;
        }

        #workout-stats {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">User Profile</h1>

        <!-- Profile Information -->
        <div id="profile-info">
            <div id="profile-picture">
                <img src="profile-picture.jpg" alt="Profile Picture" class="img-fluid rounded-circle" width="150">
            </div>
            <h2 class="mt-3">John Doe</h2>
            <p>Email: john.doe@example.com</p>
            <p>Age: 25</p>
            <p>Location: City, Country</p>
            <!-- Add more user information as needed -->
        </div>

        <!-- Workout Statistics -->
        <div id="workout-stats">
            <h2>Workout Statistics</h2>
            <p>Total Workouts: 50</p>
            <p>Total Hours: 25</p>
            <p>Average Calories Burned: 300</p>
            <!-- Add more workout statistics as needed -->
        </div>
    </div>

    <?php
    //-- Logout Button---
    case "logout":
        // Remove all the session variables and display the login form
        session_unset();
        setcookie(session_name(), '', time()-1000, '/');
        $_SESSION = array();
        include("loginform.php");
        break;
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
