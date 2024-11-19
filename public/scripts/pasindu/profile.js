document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');
    const imageUpload = document.getElementById('imageUpload');
    const profileImage = document.getElementById('profileImage');
    
    // Handle image upload
    imageUpload.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            // Validate file type
            if (!file.type.startsWith('image/')) {
                alert('Please upload an image file');
                return;
            }

            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                alert('File size should be less than 5MB');
                return;
            }

            // Create preview
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Handle form submission 
    profileForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Get form data
        const formData = new FormData(profileForm);
        const data = Object.fromEntries(formData.entries());
        
        // Validate form data
        if (!validateForm(data)) {
            return;
        }

        // Simulate API call
        saveChanges(data);
    });

    // Form validation
    function validateForm(data) {
        // Validate name
        if (data.name.trim().length < 2) {
            alert('Please enter a valid name');
            return false;
        }

        // Validate ID
        if (!data.id.trim()) {
            alert('Please enter a valid ID');
            return false;
        }

        // Validate contact number (basic validation)
        const contactRegex = /^\d{10}$/;
        if (!contactRegex.test(data.contact)) {
            alert('Please enter a valid 10-digit contact number');
            return false;
        }

        return true;
    }

    // Save changes function
    function saveChanges(data) {
        // Show loading state
        const saveButton = profileForm.querySelector('button[type="submit"]');
        const originalText = saveButton.textContent;
        saveButton.textContent = 'Saving...';
        saveButton.disabled = true;

        // Simulate API call with timeout
        setTimeout(() => {
            console.log('Saving profile data:', data);
            
            // Reset button state
            saveButton.textContent = originalText;
            saveButton.disabled = false;
            
            // Show success message
            alert('Profile updated successfully!');
        }, 1000);
    }

    // Initialize form validation on input
    const inputs = profileForm.querySelectorAll('input:not([readonly]), select');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.classList.remove('error');
        });
    });
});