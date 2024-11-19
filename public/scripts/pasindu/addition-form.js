document.addEventListener('DOMContentLoaded', function() {
    const lecturerForm = document.getElementById('lecturerForm');
    const imageUpload = document.getElementById('imageUpload');
    const previewImage = document.getElementById('previewImage');
    
    // Handle image upload and preview
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
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Form validation functions
    const validators = {
        name: (value) => {
            return value.trim().length >= 2 || 'Name must be at least 2 characters long';
        },
        lecturerId: (value) => {
            return /^\d{4}\/\w+\/\d{3}$/.test(value) || 'Invalid Lecturer ID format (e.g., 2024/UCSC/001)';
        },
        email: (value) => {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) || 'Invalid email address';
        },
        contact: (value) => {
            return /^\d{10}$/.test(value) || 'Contact number must be 10 digits';
        },
        position: (value) => {
            return value.trim() !== '' || 'Please select a position';
        }
    };

    // Add input event listeners for real-time validation
    Object.keys(validators).forEach(field => {
        const input = document.getElementById(field);
        if (input) {
            input.addEventListener('input', function() {
                validateField(this);
            });
        }
    });

    // Validate individual field
    function validateField(input) {
        const errorDiv = input.parentElement.querySelector('.error-message');
        if (errorDiv) {
            errorDiv.remove();
        }

        const validator = validators[input.id];
        if (validator) {
            const result = validator(input.value);
            if (result !== true) {
                input.classList.add('error');
                const errorMessage = document.createElement('div');
                errorMessage.className = 'error-message';
                errorMessage.textContent = result;
                input.parentElement.appendChild(errorMessage);
                return false;
            } else {
                input.classList.remove('error');
                return true;
            }
        }
        return true;
    }

    // Handle form submission
    lecturerForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Validate all fields
        let isValid = true;
        Object.keys(validators).forEach(field => {
            const input = document.getElementById(field);
            if (input && !validateField(input)) {
                isValid = false;
            }
        });

        if (!isValid) {
            return;
        }

        // Get form data
        const formData = new FormData(lecturerForm);
        const data = Object.fromEntries(formData.entries());

        // Add image data if available
        if (imageUpload.files[0]) {
            data.profileImage = imageUpload.files[0];
        }

        // Simulate form submission
        submitForm(data);
    });

    // Submit form data
    function submitForm(data) {
        const submitButton = lecturerForm.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.textContent = 'Adding...';

        // Simulate API call
        setTimeout(() => {
            console.log('Form submitted with data:', data);
            
            // Reset form
            lecturerForm.reset();
            previewImage.src = '/api/placeholder/150/150';
            
            // Reset button
            submitButton.disabled = false;
            submitButton.textContent = 'Add';
            
            // Show success message
            alert('Lecturer added successfully!');
        }, 1500);
    }
});