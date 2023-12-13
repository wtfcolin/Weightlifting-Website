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
    // Array of inspirational quotes
    const quotes = [
        "The only bad workout is the one that didn't happen.",
        "Strength does not come from the body. It comes from the will.",
        "Your body can stand almost anything. It's your mind that you have to convince.",
        "Train like a beast, look like a beauty.",
        "Sweat is just fat crying.",
        "Your body hears everything your mind says. Stay positive.",
        "Wake up with determination, go to bed with satisfaction.",
        "The only limits that exist are the ones you place on yourself.",
        "Fitness is not about being better than someone else; it's about being better than you used to be.",
        "Success is no accident. It is hard work, perseverance, learning, studying, sacrifice, and most of all, love of what you are doing.",
        "The pain you feel today will be the strength you feel tomorrow.",
        "Fitness is not a destination; it is a journey.",
        "Don't wish for a good body, work for it.",
        "Your health is an investment, not an expense.",
        "Make your body the sexiest outfit you own.",
        "Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.",
        "Workout because you love your body, not because you hate it.",
        "The only way to do great work is to love what you do.",
        "Strive for progress, not perfection.",
        "Your body can do anything. It's your brain you have to convince.",
        "You are one workout away from a good mood.",
        "Fall in love with taking care of yourself: mind, body, and spirit.",
        "The difference between try and triumph is just a little umph!",
        "Excuses don't burn calories.",
        "It's not about having time; it's about making time.",
        "Your speed doesn't matter; forward is forward.",
        "The only bad workout is the one that didn't happen.",
        "Do it now. Sometimes 'later' becomes 'never.'",
        "Be stronger than your excuses.",
        "Your body is a reflection of your lifestyle."
    ];

    // Function to get a random quote from the array
    function getRandomQuote(quotes) {
        const randomIndex = Math.floor(Math.random() * quotes.length);
        return quotes[randomIndex];
    }

    // Function to update all div elements with the same quote
    function updateQuotes() {
        const inspirationalMessageDivs = document.querySelectorAll('.inspirational-Quotes');

        if (inspirationalMessageDivs.length > 0) {
            const selectedQuote = getRandomQuote(quotes);

            inspirationalMessageDivs.forEach(div => {
                div.innerHTML = `<h2><strong>Willy Warhawk Quote of the Day:</strong> ${selectedQuote}</h2>`;
            });
        } else {
            console.error('No elements with class "inspirational-quote" found.');
        }
    }

    // Call the function to update the quotes when the DOM is loaded
    updateQuotes();
});




/*
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
*/
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

document.addEventListener('DOMContentLoaded', function () {
    // Retrieve events from local storage
    const events = JSON.parse(localStorage.getItem('workoutEvents')) || [];

    // Render events on the calendar
    renderCalendar(events);

    // Other functions and event listeners can go here
});

function renderCalendar(events) {
    const calendarContainer = document.getElementById('calendar');

    // Check if there are events to display
    if (events.length === 0) {
        calendarContainer.innerHTML = '<p>No events available.</p>';
        return;
    }

    // Clear previous content in the calendar container
    calendarContainer.innerHTML = '';

    // Loop through each event and create elements
    events.forEach(event => {
        const eventDiv = document.createElement('div');
        eventDiv.className = 'calendar-event';

        // Create a header for the event day
        const eventDayHeader = document.createElement('h3');
        eventDayHeader.textContent = `Scheduled Workout - ${event.date}`;
        eventDiv.appendChild(eventDayHeader);

        // Create a list for exercises
        const exercisesList = document.createElement('ul');
        event.exercises.forEach(exercise => {
            const exerciseItem = document.createElement('li');
            exerciseItem.textContent = exercise;
            exercisesList.appendChild(exerciseItem);
        });

        // Append the exercises list to the event div
        eventDiv.appendChild(exercisesList);

        // Append the event div to the calendar container
        calendarContainer.appendChild(eventDiv);
    });
}













/*document.getElementById('addWorkoutButton').addEventListener('click', function () {
        
        
            

            // Optionally, you can clear the sessionStorage after adding to the calendar
            sessionStorage.removeItem('selectedExercises');
            sessionStorage.removeItem('workoutDate');
        
        });
        */
