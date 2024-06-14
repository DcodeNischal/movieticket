document.addEventListener('DOMContentLoaded', function() {
    const dateButtons = document.querySelectorAll('.date-button');

    function formatDate(date) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const monthIndex = date.getMonth();
        const day = date.getDate();
        const month = months[monthIndex];
        return `${month} ${day}`;
    }

    function initializeDateButtons() {
        const today = new Date();
        dateButtons.forEach(button => {
            const buttonDate = new Date(today);
            const dateOffset = parseInt(button.getAttribute('data-offset'), 10) || 0;
            buttonDate.setDate(buttonDate.getDate() + dateOffset);
            const formattedDate = formatDate(buttonDate);
            button.setAttribute('data-date', formattedDate);
            if (dateOffset === 0) {
                button.textContent = 'Today';
            } else if (dateOffset === 1) {
                button.textContent = 'Tomorrow';
            } else {
                button.textContent = formatDate(buttonDate);
            }
            button.addEventListener('click', function() {
                // Do something when a date button is clicked
                console.log('Date button clicked:', formattedDate);
            });
        });
    }

    // Initialize the date buttons to detect today's date
    initializeDateButtons();
});
document.addEventListener('DOMContentLoaded', function() {
    const times = document.querySelectorAll('.time');
    
    // Function to parse the time string and create a Date object
    function parseTime(timeString) {
        const [time, modifier] = timeString.split(' ');
        let [hours, minutes] = time.split(':');
        if (modifier === 'PM' && hours !== '12') {
            hours = parseInt(hours, 10) + 12;
        }
        if (modifier === 'AM' && hours === '12') {
            hours = '00';
        }
        return new Date().setHours(hours, minutes);
    }

    const now = new Date();

    times.forEach(time => {
        const timeValue = parseTime(time.textContent);
        if (timeValue < now) {
            time.classList.add('sold');
        } else if (time.textContent.includes('11:30 AM')) {
            time.classList.add('fast-filling');
        } else {
            time.classList.add('available');
        }
    });
});

