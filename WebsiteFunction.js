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
    fetch('./quotes.txt')
        .then(response => response.text())
        .then(data => {
            const quotes = data.split('\n').filter(quote => quote.trim() !== '');
            const randomIndex = Math.floor(Math.random() * quotes.length);
            const selectedQuote = quotes[randomIndex];
            const inspirationalMessageDiv = document.getElementById('inspirationalQuote');
            inspirationalMessageDiv.innerHTML = `<strong>Inspirational Quote:</strong> ${selectedQuote}`;
        })
        .catch(error => console.error('Error fetching and selecting quote:', error));
});


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
            {
                title: 'Workout Session',
                start: '2023-11-13',
                end: '2023-11-13',
            },
            {
                title: 'Workout Session',
                start: '2023-11-14',
                end: '2023-11-14',
            },
            {
                title: 'Workout Session',
                start: '2023-11-15',
                end: '2023-11-15',
            },
            {
                title: 'Workout Session',
                start: '2023-11-16',
                end: '2023-11-16',
            },
            {
                title: 'Workout Session',
                start: '2023-11-17',
                end: '2023-11-17',
            },
            {
                title: 'Workout Session',
                start: '2023-11-20',
                end: '2023-11-20',
            },
            {
                title: 'Workout Session',
                start: '2023-11-21',
                end: '2023-11-21',
            },
            {
                title: 'Workout Session',
                start: '2023-11-22',
                end: '2023-11-22',
            },
            {
                title: 'Workout Session',
                start: '2023-11-23',
                end: '2023-11-23',
            },
            {
                title: 'Workout Session',
                start: '2023-11-24',
                end: '2023-11-24',
            },
            {
                title: 'Workout Session',
                start: '2023-11-27',
                end: '2023-11-27',
            },
            {
                title: 'Workout Session',
                start: '2023-11-28',
                end: '2023-11-28',
            },
            {
                title: 'Workout Session',
                start: '2023-11-29',
                end: '2023-11-29',
            },
            {
                title: 'Workout Session',
                start: '2023-11-30',
                end: '2023-11-30',
            },
            {
                title: 'Workout Session',
                start: '2023-12-01',
                end: '2023-12-01',
            },
            {
                title: 'Workout Session',
                start: '2023-12-04',
                end: '2023-12-04',
            },
            {
                title: 'Workout Session',
                start: '2023-12-05',
                end: '2023-12-05',
            },
            {
                title: 'Workout Session',
                start: '2023-12-06',
                end: '2023-12-06',
            },
            {
                title: 'Workout Session',
                start: '2023-12-07',
                end: '2023-12-07',
            },
            {
                title: 'Workout Session',
                start: '2023-12-08',
                end: '2023-12-08',
            },
            {
                title: 'Workout Session',
                start: '2023-12-11',
                end: '2023-12-11',
            },
            {
                title: 'Workout Session',
                start: '2023-12-12',
                end: '2023-12-12',
            },
            {
                title: 'Workout Session',
                start: '2023-12-13',
                end: '2023-12-13',
            },
            {
                title: 'Workout Session',
                start: '2023-12-14',
                end: '2023-12-14',
            },
            {
                title: 'Workout Session',
                start: '2023-12-15',
                end: '2023-12-15',
            },
            {
                title: 'Workout Session',
                start: '2023-12-18',
                end: '2023-12-18',
            },
            {
                title: 'Workout Session',
                start: '2023-12-19',
                end: '2023-12-19',
            },
            {
                title: 'Workout Session',
                start: '2023-12-20',
                end: '2023-12-20',
            },
            {
                title: 'Workout Session',
                start: '2023-12-21',
                end: '2023-12-21',
            },
            {
                title: 'Workout Session',
                start: '2023-12-22',
                end: '2023-12-22',
            },
            {
                title: 'Workout Session',
                start: '2023-12-25',
                end: '2023-12-25',
            },
            {
                title: 'Workout Session',
                start: '2023-12-26',
                end: '2023-12-26',
            },
            {
                title: 'Workout Session',
                start: '2023-12-27',
                end: '2023-12-27',
            },
            {
                title: 'Workout Session',
                start: '2023-12-28',
                end: '2023-12-28',
            },
            {
                title: 'Workout Session',
                start: '2023-12-29',
                end: '2023-12-29',
            },

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

function saveWorkoutData(selectedExercises) {
    // Assuming you have a PHP script named save_workout.php
    const url = 'save_workout.php';

    // Send selected exercises data to the server
    const xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the server's response, if needed
            console.log(xhr.responseText);
        }
    };

    // Prepare data to send to the server
    const data = 'exercises=' + JSON.stringify(selectedExercises);

    // Send the request
    xhr.send(data);
}
