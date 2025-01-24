<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
