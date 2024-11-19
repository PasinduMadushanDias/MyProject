<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Complaints - Details</title>
    <link rel="stylesheet" href="/styles/pasindu/complaints-form.css">
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
            <h1>New Complaints</h1>
        </div>

        <div class="complaint-details-container">
            <div class="complaint-card">
                <h2>Complaint Details</h2>
                
                <div class="complaint-form">
                    <div class="form-group">
                        <textarea 
                            id="complaintDescription" 
                            placeholder="Description"
                            rows="10"
                        ></textarea>
                    </div>
                    
                    <div class="button-container">
                        <button id="markButton" class="btn-mark">Mark</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>