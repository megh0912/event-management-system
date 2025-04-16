function validateSignupForm() {
    const fullName = document.getElementById("fname").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    
    // Full Name validation (alphabetic characters only)
    const nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(fullName)) {
        alert("Full name should contain only letters.");
        return false;
    }
    // Email validation (simple check)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    // Password validation (minimum 6 characters)
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }
    // Confirm Password validation
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true; // Submit the form if all checks pass
}















