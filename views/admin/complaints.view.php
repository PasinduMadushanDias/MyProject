<?php require base_path(path: 'views/partials/auth/auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Complaints</title>
    <link rel="stylesheet" href="/styles/pasindu/complaints.css">
</head>
<body>
    <!-- <div class="sidebar">
        <div class="sidebar-item">
            <i class="icon">⊞</i>
        </div>
        <div class="sidebar-item">
            <i class="icon">👤</i>
        </div>
        <div class="sidebar-item">
            <i class="icon">▲</i>
        </div>
        <div class="sidebar-item active">
            <i class="icon">📝</i>
        </div>
        <div class="sidebar-item settings">
            <i class="icon">⚙</i>
        </div>
    </div> -->

    <div class="main-content">
        <div class="header">
            <h1>Manage Complaints</h1>
            <p class="subtitle">View and Manage Complaints</p>
        </div>

        <div class="complaints-list">
            <div class="complaint-item new">
                <span class="title">New Complaints</span>
                <div class="actions">
                    <button class="btn-view"><a href="complaints-form">View</a></button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">10:00 am</span>
            </div>

            <div class="complaint-item">
                <span class="title">Checked Complaints</span>
                <div class="actions">
                    <button class="btn-view">View</button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">Aug 20</span>
            </div>

            <div class="complaint-item">
                <span class="title">Checked Complaints</span>
                <div class="actions">
                    <button class="btn-view">View</button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">Aug 19</span>
            </div>

            <div class="complaint-item">
                <span class="title">Checked Complaints</span>
                <div class="actions">
                    <button class="btn-view">View</button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">Aug 18</span>
            </div>

            <div class="complaint-item">
                <span class="title">Checked Complaints</span>
                <div class="actions">
                    <button class="btn-view">View</button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">Aug 10</span>
            </div>

            <div class="complaint-item">
                <span class="title">Checked Complaints</span>
                <div class="actions">
                    <button class="btn-view">View</button>
                    <button class="btn-mark">Mark as read</button>
                </div>
                <span class="timestamp">July 28</span>
            </div>
        </div>

        <div class="pagination">
            <button class="btn-prev">Prev</button>
            <div class="page-numbers">
                <span class="active">1</span>
                <span>2</span>
                <span>3</span>
                <span>...</span>
                <span>8</span>
                <span>9</span>
                <span>10</span>
            </div>
            <button class="btn-next">Next</button>
        </div>
    </div>

    <script src="/scripts/pasindu/complaints.js"></script>
</body>
</html>
<?php require base_path('views/partials/auth/auth-close.php') ?>
