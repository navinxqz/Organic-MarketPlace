document.getElementById("sellerForm").addEventListener("submit", function (e) {
    let valid = true;

    // Clear all previous errors
    document.querySelectorAll(".error").forEach(el => el.innerHTML = "");

    const fname = document.getElementById("fname").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const nid = document.getElementById("nid").value.trim();
    const sellerType = document.getElementById("seller_type").value;
    const categoryChecked = document.querySelector('input[name="seller_category"]:checked');
    const sellerArea = document.getElementById("seller_area").value;
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const agreeTerms = document.getElementById("agree_terms").checked;

    // Full name
    if (fname === "") {
        document.getElementById("fnameErr").innerHTML = "Full name is required.";
        valid = false;
    }

    // Phone
    if (phone === "") {
        document.getElementById("phoneErr").innerHTML = "Phone number is required.";
        valid = false;
    }

    // NID
    if (nid === "") {
        document.getElementById("nidErr").innerHTML = "NID number is required.";
        valid = false;
    }

    // Seller Type
    if (sellerType === "") {
        document.getElementById("sellerTypeErr").innerHTML = "Please select a seller type.";
        valid = false;
    }

    // Seller Category
    if (!categoryChecked) {
        document.getElementById("categoryErr").innerHTML = "Please select a business category.";
        valid = false;
    }

    // Seller Area
    if (sellerArea === "") {
        document.getElementById("areaErr").innerHTML = "Please select a business area.";
        valid = false;
    }
    if (username === "") {
        document.getElementById("usernameErr").innerHTML = "Username is required.";
        valid = false;
    }

    // Password
    if (password === "") {
        document.getElementById("passwordErr").innerHTML = "Password is required.";
        valid = false;
    }

    // Terms and Conditions
    if (!agreeTerms) {
        document.getElementById("termsErr").innerHTML = "You must agree to the terms and conditions.";
        valid = false;
    }

    if (!valid) {
        e.preventDefault(); // Prevent form from submitting if any validation failed
    }
});
