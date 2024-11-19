<?php require base_path(path: 'views/partials/auth/auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Profile</title>
    <link rel="stylesheet" href="/styles/pasindu/profile.css">
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <h1>Lecturer Profile</h1>
            
            <div class="profile-image-section">
                <div class="image-container">
                    <img id="profileImage" src="/api/placeholder/150/150" alt="Profile Picture">
                    <div class="image-overlay">
                        <label for="imageUpload" class="upload-button">
                            <span>Change Photo</span>
                        </label>
                        <input type="file" id="imageUpload" accept="image/*" hidden>
                    </div>
                </div>
            </div>

            <form id="profileForm" class="profile-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="ajanthaathukor@ucsc.ac.lk" required>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="Ajantha Athukorala" required>
                </div>

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" value="2022/UCSC/223" required>
                </div>

                <div class="form-group">
                    <label for="position">Academic Position</label>
                    <select id="position" name="position" required>
                        <option value="Dr" selected>Dr</option>
                        <option value="Prof">Prof</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="contact">Contact No</label>
                    <input type="tel" id="contact" name="contact" value="0712233444" required>
                </div>

                <button type="submit" class="save-button">Save Changes</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
