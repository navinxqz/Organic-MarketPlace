document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        let isValid = true;

        document.getElementById("fnameErr").innerHTML = "";
        document.getElementById("phoneErr").innerHTML = "";
        document.getElementById("nidErr").innerHTML = "";
        document.getElementById("usernameErr").innerHTML = "";
        document.getElementById("passwordErr").innerHTML = "";

        const fname = document.getElementById("fname").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const nid = document.getElementById("nid").value.trim();
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();

        if (fname.length < 3) {
            document.getElementById("fnameErr").innerHTML = "Full Name must be at least 3 characters.";
            isValid = false;
        }
        if (!/^\d{11}$/.test(phone)) {
            document.getElementById("phoneErr").innerHTML = "Phone must be exactly 11 digits.";
            isValid = false;
        }

        // NID Validation (10, 13, or 17 digits)
        if (!/^\d{10}$|^\d{13}$|^\d{17}$/.test(nid)) {
            document.getElementById("nidErr").innerHTML = "NID must be 10, 13, or 17 digits long.";
            isValid = false;
        }
        if (username.length < 5) {
            document.getElementById("usernameErr").innerHTML = "Username must be at least 5 characters.";
            isValid = false;
        }
        if (password.length < 6 || !/\d/.test(password)) {
            document.getElementById("passwordErr").innerHTML = "Password must be at least 6 characters and include a number.";
            isValid = false;
        }

        // If any validation failed, prevent form submission
        if (!isValid) {
            e.preventDefault();
        }
    });
});
