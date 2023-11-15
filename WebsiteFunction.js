function login() {
    // Check the credentials (you will need to implement this)
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // If login is successful, show the dashboard; otherwise, show an error message.
    if (isValidLogin(username, password)) {
        document.getElementById("login-page").style.display = "none";
        document.getElementById("dashboard").style.display = "block";
    } else {
        alert("Invalid credentials. Please try again.");
    }
}

function isValidLogin(username, password) {
    // Implement your own validation logic here.

    // You might check against a database or use a mock data store.
    
    return true; // For demonstration purposes, return true.
}

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // You can choose the default view
        events: [
            {
                title: 'Workout Session',
                start: '2023-11-10',
                end: '2023-11-10',
            },
            // Add more events here
        ],
    });
    calendar.render();
});

// Get all tab links
const tabLinks = document.querySelectorAll('.tab-navigation a');

// Add a click event listener to each tab link
tabLinks.forEach(tabLink => {
    tabLink.addEventListener('click', function (event) {
        // Prevent the default link behavior
        event.preventDefault();

        // Get the href attribute of the clicked tab
        const href = this.getAttribute('href');

        // Load the content of the linked HTML file into the dashboard
        loadHTMLContent(href);
    });
});

// Function to load HTML content into the dashboard
function loadHTMLContent(href) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', href, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            // Replace the content of the dashboard with the loaded HTML content
            document.getElementById('dashboard').innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}
