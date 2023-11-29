<!DOCTYPE html>
<html>
<head>
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
    <?php
  $mode = ""; // default value for the switch statement

            if (isset($_GET['mode'])) {
                $mode = $_GET['mode'];
            }

  if (!isset($_SESSION["username"]) || !isset($_POST["mode"]) !== 'login') {
      //User is trying to access the page without signing in. Display the login page
      include("loginform.php");
    // terminate the script without executing any other statements
  exit();
  }

        $parameterValues = null; // default values named parameters
        $pageTitle = ""; // define a title for each output
        $columns = array(); // define an array of column labels for a table header

        try {
              case "login":
              // read login information
              $username = (isset($_POST["username"])) ? $_POST["username"] : "-1";
              $password = (isset($_POST["password"])) ? $_POST["password"] : "-1";
              // Define SQL statement
              $sql = "SELECT * from `admin` where username=:username and password = :password ";

              $parameters =[":username" =>$username, ":password"=>md5($password)];
              print_r($parameters);

              // Execute the SQL statement
              $stm = $moviestore->prepare($sql);
              $stm->execute($parameters);
              $result = $stm->fetch();

              // validate the user
              if (isset($result) && isset($result["username"])) {
                  // Valid user. Store the username using a session variable
                  $_SESSION["username"] = $result["username"] ;

                  // You may save any other information. For example, the full name can be assigned to a session variable.
                  $_SESSION["name"] = $result["username"];
                  echo "<p>Logged in as {$_SESSION["name"]}</p>";
                  echo "<h3>Welcome to Online Movie Club<h3>";
              } else {
                  echo "<p>Invalid user</p>";
                  // Display the login form
                  include("loginform.php");
              }
              break;


    }//end of switch statements
    ?>

    <!-- Dashboard Page -->
    <div id="dashboard" style="display: none;" class="container">
        <h1>Welcome (Username)</h1>
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
