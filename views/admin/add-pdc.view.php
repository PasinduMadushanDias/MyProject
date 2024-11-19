<?php require base_path(path: 'views/partials/auth/auth.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Lecturer</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/styles/pasindu/add-pdc.css">
</head>
<body>
    <div class="container">
        <!-- <aside class="sidebar">
            <div class="sidebar-item">
                <span class="material-icons">dashboard</span>
            </div>
            <div class="sidebar-item active">
                <span class="material-icons">person</span>
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
        </aside> -->
        <main class="main-content">
            <header>
                <h1>Manage PDC</h1>
                <p>View and Manage PDC</p>
            </header>
            <div class="actions">
                <button class="delete-btn">- Delete</button>
                <button class="new-btn"><a href="additionpdc-form">+ New</a></button>
                <input type="text" placeholder="Search" class="search-input">
            </div>
            <table class="lecturer-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="lecturerTableBody">
                    <!-- Table rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="pagination">
                <button class="prev-btn">Prev</button>
                <div class="page-numbers">
                    <span class="active">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>...</span>
                    <span>8</span>
                    <span>9</span>
                    <span>10</span>
                </div>
                <button class="next-btn">Next</button>
            </div>
        </main>
    </div>
    <script src="/scripts/pasindu/add-pdc.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
