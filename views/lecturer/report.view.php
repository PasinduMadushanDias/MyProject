<?php require base_path(path: 'views/partials/auth/auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Report</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="/styles/pasindu/report.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="container">
        <div class="report-container">
            <h1>Company Report</h1>

            <div class="form-group">
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" placeholder="Enter company name" required>
            </div>

            <div class="form-group">
                <label for="companyID">Company ID No:</label>
                <input type="text" id="companyID" placeholder="Enter company ID" required>
            </div>

            <div class="form-group">
                <label for="internStudents">Intern Students:</label>
                <input type="text" id="internStudents" placeholder="Enter number of intern students" required>
            </div>

            <div class="form-group">
                <label>What Rate this Company:</label>
                <div class="rating-container">
                    <span class="material-symbols-outlined rating-icon">star</span>
                    <span class="material-symbols-outlined rating-icon">star</span>
                    <span class="material-symbols-outlined rating-icon">star</span>
                    <span class="material-symbols-outlined rating-icon">star</span>
                    <span class="material-symbols-outlined rating-icon">star</span>
                </div>
            </div>

            <div class="form-group">
                <label for="note">Note:</label>
                <textarea id="note" placeholder="Enter any additional notes" required></textarea>
            </div>

            <button id="submitButton" class="submit-button">Submit</button>
        </div>
    </div>

    <script src="/scripts/pasindu/report.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
