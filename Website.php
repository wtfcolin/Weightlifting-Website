<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weightlifting App</title>
    <link rel="stylesheet" type="text/css" href="WebsiteLook.css">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
  <?php
  session_start(); // Start the session

  $mode = isset($_GET['mode']) ? $_GET['mode'] : '';

  if ($mode !== 'login' && !isset($_SESSION["username"])) {
      include("loginform.php");
      exit();
  }

  switch ($mode) {
      case 'login':
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $username = isset($_POST["username"]) ? $_POST["username"] : "-1";
              $password = isset($_POST["password"]) ? $_POST["password"] : "-1";

              // ... Your database connection and login verification code

              if ($loginSuccessful) {
                  $_SESSION["username"] = $username;
                
                  //header("Location: Website.php");
                  //include("Website.php");
                  exit();
              } else {
                echo "<p>Invalid user</p>";
                include("loginform.php");
                }
          } else {
              include("loginform.php");
          }
          break;

    case "createAccount":
      // Retrieve the form data
      $email = $_POST['username'];
      $password = $_POST['password'];

      // Implement your database connection here
      // Make sure to use prepared statements to prevent SQL injection

      // Your SQL query to insert the data into your database table
      $sql = "INSERT INTO login (username, password) VALUES (:username, :password)";

      // Execute the query using prepared statements
      // (Assuming you're using PDO for database interactions)
      // Replace 'your_connection_parameters' with your actual database connection parameters
      $pdo = new PDO('mysql:host=localhost;dbname=lifting-app', 'carlsonca20', 'cc7893');

      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $password);

      if ($stmt->execute()) {
          // If the query is successful, redirect to the login form
          header('Location: loginform.php');
          exit();
      } else {
          // Handle any error scenarios accordingly
          echo "Error occurred while adding user to the database.";
      }

          break;

      default:
          // Other cases or default action
          break;
  }
  ?>
    </div>
    <script src="WebsiteFunction.js"></script>

    <!-- Dashboard Page -->
    <div id="dashboard" style="display: flex;" class="container">
        <h1>Welcome $username</h1>
        <img src="willyMotivationPhoto.jpeg" alt="Willy Picture" class="img-fluid rounded-circle" width="150">
        <div class="inspirational-Quotes">

        </div>
        <!-- Tabs for navigation -->
        <div class="tab-navigation">
            <a href="Customize.html">Customize Workouts</a>
            <a href="Calendar.html">Calendar</a>
            <a href="Website.html">Home</a>
            <a href="Profile.html">Profile</a>
        </div>

      <div id="calendar">
          <!-- Calendar content will go here -->

          <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css' rel='stylesheet' />
          <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js'></script>
      </div>

    </div>
    <script src="WebsiteFunction.js"></script>
</body>
</html>
