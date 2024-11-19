<?php require base_path(path: 'views/partials/auth/auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Lecturer</title>
    <link rel="stylesheet" href="/styles/pasindu/addition-form.css">
</head>
<body>
    <div class="container">
        <div class="add-lecturer-card">
            <h1>Add New Lecturer</h1>
            
            <div class="form-container">
                <h2>Addition Form</h2>
                
                <div class="image-upload-section">
                    <div class="image-container">
                        <img id="previewImage" src="/api/placeholder/150/150" alt="Profile Picture">
                        <div class="camera-icon">
                            <label for="imageUpload" class="upload-label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                                    <circle cx="12" cy="13" r="4"/>
                                </svg>
                            </label>
                            <input type="file" id="imageUpload" accept="image/*" hidden>
                        </div>
                    </div>
                </div>

                <form id="lecturerForm" class="lecturer-form">
                    <div class="form-group">
                        <label for="name">Lecturer Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name Here" required>
                    </div>

                    <div class="form-group">
                        <label for="lecturerId">Lecturer ID No:</label>
                        <input type="text" id="lecturerId" name="lecturerId" placeholder="Enter Lecturer ID No. Here" required>
                    </div>

                    <div class="form-group">
                        <label for="position">Academic Position:</label>
                        <select id="position" name="position" required>
                            <option value="">Select Position</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address Here" required>
                    </div>

                    <div class="form-group">
                        <label for="contact">Contact No:</label>
                        <input type="tel" id="contact" name="contact" placeholder="Enter Contact No Here" required>
                    </div>

                    <button type="submit" class="add-button">Add</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
