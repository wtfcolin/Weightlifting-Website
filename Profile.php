<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Workout App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="WebsiteLook.css">
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
    <div id="login-page" class="container">
        <h1 class="text-center">User Profile</h1>
        <div class="tab-navigation">
        <a href="Customize.html"onclick="openTab('Customize.html')">Customize Workouts</a>
        <a href="Calendar.html" onclick="openTab('Calendar.html')">Calendar</a>
        <a href="Website.php" onclick="openTab('Website.php')">Home</a>
        <a href="Profile.php" onclick="openTab('Profile.php')">Profile</a>
        </div>
        <!-- Profile Information -->
        <div id="login-page">
            <div id="profile-picture">
                <img src="WhitewaterLogo.webp" alt="Profile Picture" class="img-fluid rounded-circle" width="150">
            </div>
            <h2 class="mt-3" id="displayUsername"></h2>
    
        </div>

        <!-- Workout Statistics -->
        <div id="workout-stats">
           
            <!-- Add more workout statistics as needed -->
        </div>

    <!--Bio-->
    <div id="bio">
    <h2>Bio:</h2>
    <div id="displayBio"></div>
    <!--<textarea id="bio" rows="4" cols="50" placeholder="Enter Bio Here"></textarea>
    <button onclick="saveInfo()">Save Bio</button>-->


    </div>

    <!-- Contact Info-->
    <div id="Contact-Info"> 
        
        <h2>Contact Information:</h2>
        <p id="displayPhone"></p>
        <p id="displayEmail"></p>
    </div>
    <button class="btn btn-lg btn-primary btn-block" onclick="navigateToCustomize()">Customize</button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function navigateToCustomize() {
    window.location.href = 'CustomizeProfile.html';
    }

    function displayProfileInfo() {
            // Check if the elements exist before updating them
            var usernameElement = document.getElementById('displayUsername');
            var bioElement = document.getElementById('displayBio');
            var phoneElement = document.getElementById('displayPhone');
            var emailElement = document.getElementById('displayEmail');

            // Update the elements only if they exist
            if (usernameElement) {
                usernameElement.innerText = localStorage.getItem('username') || 'Default Username';
            }

            if (bioElement) {
                bioElement.innerText = localStorage.getItem('bio') || 'No bio saved.';
            }

            if (phoneElement) {
                var savedPhone = localStorage.getItem('phone') || 'No phone saved.';
                phoneElement.innerText = 'Phone Number: ' + savedPhone;
            }

            if (emailElement) {
                emailElement.innerText = 'Email: ' + (localStorage.getItem('email') || 'No email saved.');
            }
        }

        // Display saved profile info when the page loads
        displayProfileInfo();
/*function saveInfo() {
      var bioText = document.getElementById('bio').value;
      localStorage.setItem('savedBio', bioText);
      displaySavedInfo();
    }

    function displaySavedInfo() {
      var savedBio = localStorage.getItem('savedBio');
      var displayInfo = document.getElementById('displayInfo');
      
      if (savedBio) {
        displayInfo.getElementById('bio') = "<p>Saved Bio:</p><p>" + savedBio + "</p>";
      } else {
        displayInfo.innerHTML = "<p>No bio saved.</p>";
      }
    }
    displaySavedInfo();
    */
    </script>
</body>
</html>
