<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Lecturer</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/styles/pasindu/addition-form.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-item active">
                <span class="material-icons">dashboard</span>
            </div>
            <div class="sidebar-item">
                <span class="material-icons">person_add</span>
            </div>
            <div class="sidebar-item">
                <span class="material-icons">group</span>
            </div>
            <div class="sidebar-item">
                <span class="material-icons">description</span>
            </div>
            <div class="sidebar-item">
                <span class="material-icons">settings</span>
            </div>
        </aside>
        <main class="main-content">
            <h1>Add New Lecturer</h1>
            <div class="form-container">
                <h2>Addition Form</h2>
                <div class="profile-picture">
                    <span class="material-icons">camera_alt</span>
                </div>
                <form id="lecturerForm">
                    <div class="form-group">
                        <label for="lecturerName">Lecturer Name :</label>
                        <input type="text" id="lecturerName" placeholder="Enter Name Here" required>
                    </div>
                    <div class="form-group">
                        <label for="lecturerId">Lecturer ID No :</label>
                        <input type="text" id="lecturerId" placeholder="Enter Lecturer ID No. Here" required>
                    </div>
                    <div class="form-group">
                        <label for="academicPosition">Academic Position :</label>
                        <input type="text" id="academicPosition" placeholder="Enter Academic position Here" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input type="email" id="email" placeholder="Enter Email Address Here" required>
                    </div>
                    <div class="form-group">
                        <label for="contactNo">Contact No :</label>
                        <input type="tel" id="contactNo" placeholder="Enter Contact No. Here" required>
                    </div>
                    <button type="submit" class="add-button">Add</button>
                </form>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>