<?php
    include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_red.css">
<div class="flex items-start justify-center min-h-screen">
    <form method="post" action="" class="pt-7">
    <label for="dates">Kies de dagen waarop u wilt reserveren</label>
        <input type="text" value="11-6-2022" name="dates" id="dates" class="border-2">
        <button name="submit" type="submit" class="border-2">Submit</button>
    </form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/nl.js"></script>
    <script>
    function getNextMonday(date = new Date()) {
            const dateCopy = new Date(date.getTime());
            var currentTime = new Date().getHours();

            const nextMonday = new Date(
                dateCopy.setDate(
                    dateCopy.getDate() + ((7 - dateCopy.getDay() + 1) % 7 || 7),
                ),
            );

            return nextMonday;
        };

        function getLastDay(date = new Date()) {
            const dateCopy = new Date(date.getTime());

            const lastDay = new Date(
                dateCopy.setDate(
                    dateCopy.getDate() + ((20 - dateCopy.getDay() + 1) % 20 || 20),
                ),
            );

            return lastDay;
        };

    $(function(){
        $("#dates").flatpickr({
            mode: "multiple",
            dateFormat: "d-m-Y",
            inline: true,
            minDate: getNextMonday(),
            maxDate: getLastDay(),
            "locale": "nl",
        });
        
    });
    </script>
    
    
</body>

</html>