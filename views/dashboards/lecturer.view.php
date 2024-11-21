<?php require base_path('views/partials/auth/auth.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="/styles/pasindu/dashboardlec.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Dashboard</h1>
            <p>View current progress</p>
        </header>

        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="icon-container">
                        <i class="fas fa-building"></i>
                    </div>
                    <h2 class="stat-number" data-target="15">0</h2>
                </div>
                <p class="stat-title">Companies Registered</p>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="icon-container">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h2 class="stat-number" data-target="3">0</h2>
                </div>
                <p class="stat-title">Blacklisted Companies</p>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="icon-container">
                        <i class="fas fa-users"></i>
                    </div>
                    <h2 class="stat-number" data-target="200">0</h2>
                </div>
                <p class="stat-title">No.of students Registered</p>
            </div>
        </div>
    </div>
    <script src="/scripts/pasindu/dashboardlec.js"></script>
</body>

</html>

<?php require base_path('views/partials/auth/auth-close.php') ?>