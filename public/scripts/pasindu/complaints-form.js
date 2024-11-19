document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('complaintDescription');
    const markButton = document.getElementById('markButton');
    
    // Handle textarea auto-resize
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });

    // Handle mark button click
    markButton.addEventListener('click', function() {
        if (textarea.value.trim() === '') {
            alert('Please enter a description before marking the complaint.');
            return;
        }

        // Disable the button and textarea
        this.disabled = true;
        textarea.disabled = true;
        
        // Change button text to show completion
        this.textContent = 'Marked';
        
        // Optional: Save the complaint data
        const complaintData = {
            description: textarea.value,
            timestamp: new Date().toISOString()
        };
        
        console.log('Complaint marked:', complaintData);
        
        // Optional: Show success message
        setTimeout(() => {
            alert('Complaint has been marked successfully!');
        }, 500);
    });

    // Handle sidebar item clicks
    const sidebarItems = document.querySelectorAll('.sidebar-item');
    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            sidebarItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });
});