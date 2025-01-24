<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock with Time Zones</title>

    <link rel="stylesheet" href="{{ asset('css/clock.css') }}">
    <link rel="stylesheet" href="{{ asset('js/clock.js') }}">
</head>
<body>
    <div class="clock-container">
        <label for="timezone">Select Time Zone:</label>
        <select id="timezone">
            <option value="UTC">UTC</option>
            <option value="America/New_York">New York (EST)</option>
            <option value="Europe/London">London (GMT)</option>
            <option value="Asia/Kolkata">India (IST)</option>
            <option value="Australia/Sydney">Sydney (AEST)</option>
        </select>

        <div class="clock" id="digitalClock">00:00:00</div>
    </div>
    {{-- <div class="button-container">
        <a href="{{ route('people.hierarchy') }}">
            <button>View People Hierarchy</button>
        </a>
    </div> --}}


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to update the clock with the selected time zone
            function updateClock() {
                // Get the selected time zone
                var timezone = $('#timezone').val();

                // Get current time based on the selected time zone
                var currentTime = new Date().toLocaleString("en-US", { timeZone: timezone });
                var dateObj = new Date(currentTime);

                var hours = dateObj.getHours();
                var minutes = dateObj.getMinutes();
                var seconds = dateObj.getSeconds();

                // Pad single digit numbers with leading zeros
                hours = (hours < 10) ? '0' + hours : hours;
                minutes = (minutes < 10) ? '0' + minutes : minutes;
                seconds = (seconds < 10) ? '0' + seconds : seconds;

                // Set the time inside the clock div
                $('#digitalClock').text(hours + ':' + minutes + ':' + seconds);
            }

            // Update clock immediately and then every second
            updateClock();
            setInterval(updateClock, 1000);

            // Update the clock when the timezone changes
            $('#timezone').change(function() {
                updateClock();
            });
        });
    </script>
</body>
</html>
