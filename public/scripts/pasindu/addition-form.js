document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('lecturerForm');
    
     form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Get form values
        const name = document.getElementById('lecturerName').value;
        const id = document.getElementById('lecturerId').value;
        const position = document.getElementById('academicPosition').value;
        const email = document.getElementById('email').value;
        const contact = document.getElementById('contactNo').value;
        
        // Here you would typically send this data to a server
        // For this example, we'll just log it to the console
        console.log('New Lecturer Added:', {
            name: name,
            id: id,
            position: position,
            email: email,
            contact: contact
        });
        
        // Clear the form
        form.reset();
        
        alert('Lecturer added successfully!');
    });
});