function validateForm() {
    let isValid = true;

    // Full Name Validation
    const name = document.getElementById("buyer_name").value.trim();
    const nameError = document.getElementById("name-error");
    if (name === "") {
        nameError.innerHTML = "Full Name is required.";
        isValid = false;
    } else {
        nameError.innerHTML = "";
    }

    // Email Validation
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

    // Password Validation
    const password = document.getElementById("buyer_password").value.trim();
    const passwordError = document.getElementById("password-error");
    if (password === "") {
        passwordError.innerHTML = "Password is required.";
        isValid = false;
    } else if (password.length < 6) {
        passwordError.innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    } else {
        passwordError.innerHTML = "";
    }

    // Date of Birth Validation
    const dob = document.getElementById("buyer_dob").value.trim();
    const dobError = document.getElementById("dob-error");
    if (dob === "") {
        dobError.innerHTML = "Date of Birth is required.";
        isValid = false;
    } else {
        dobError.innerHTML = "";
    }

    // Checkbox Validation
    const checkbox = document.getElementById("buyer_offers").checked;
    const checkboxError = document.getElementById("checkbox-error");
    if (!checkbox) {
        checkboxError.innerHTML = "You must agree to the terms and conditions.";
        isValid = false;
    } else {
        checkboxError.innerHTML = "";
    }

    return isValid; // Prevent form submission if any validation fails
}