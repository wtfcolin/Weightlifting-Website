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
