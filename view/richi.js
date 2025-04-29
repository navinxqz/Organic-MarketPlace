document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("buyer-form");
 
    const submitButton = document.getElementById("submit-button");

    // Attach an event listener to the form's submit event
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission for demonstration

        if (validateForm()) {
            // Show the success message
            

            // Optionally, you can redirect to submit.php after showing the success message
            setTimeout(() => {
                form.submit(); // Submit the form to submit.php
            }, 2000); // Redirect after 2 seconds
        }
    });
});

function validateForm() {
    let isValid = true;

    const name = document.getElementById("buyer_name").value.trim();
    const nameError = document.getElementById("name-error");
    if (name === "") {
        nameError.innerHTML = "Full Name is required.";
        isValid = false;
    } else {
        nameError.innerHTML = "";
    }

  
    const email = document.getElementById("buyer_email").value.trim();
    const emailError = document.getElementById("email-error");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        emailError.innerHTML = "Email Address is required.";
        isValid = false;
    } else if (!emailRegex.test(email)) {
        emailError.innerHTML = "Enter a valid email address.";
        isValid = false;
    
    }

    
    const password = document.getElementById("buyer_password").value.trim();
    const passwordError = document.getElementById("password-error");
    if (password === "") {
        passwordError.innerHTML = "Password is required.";
        isValid = false;
    }
     else (password.length < 6) 
    {
        passwordError.innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    const dob = document.getElementById("buyer_dob").value.trim();
    const dobError = document.getElementById("dob-error");
    if (dob === "") {
        dobError.innerHTML = "Date of Birth is required.";
        isValid = false;
    } 

    const checkbox = document.getElementById("buyer_offers").checked;
    const checkboxError = document.getElementById("checkbox-error");
    if (!checkbox)
     {
        checkboxError.innerHTML = "You must agree to the terms and conditions.";
        isValid = false;
     }
    return isValid; 
} 
