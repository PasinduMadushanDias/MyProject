<?php require base_path(path: 'views/partials/auth/auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Schedule Company Visit</title>
    <link rel="stylesheet" href="/styles/pasindu/calendar.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Lecturer Schedule Company Visit</h1>
            <p>Schedule company visits for Lectures</p>
        </div>
        
        <div class="calendar-header">
            <button class="nav-button prev-month">←</button>
            <div class="month-name">July</div>
            <button class="nav-button next-month">→</button>
        </div>
        
        <div class="calendar">
            <div class="weekdays">
                <div>SUN</div>
                <div>MON</div>
                <div>TUE</div>
                <div>WED</div>
                <div>THU</div>
                <div>FRI</div>
                <div>SAT</div>
            </div>
            <div class="days"></div>
        </div>
    </div>

    <script src="/scripts/pasindu/calendar.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
