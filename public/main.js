// Define regular expressions for validation
var nameRegex = /^[a-zA-Z\s]+$/;
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
var phoneRegex = /^\d+$/;
var addressRegex = /^[a-zA-Z0-9\s,'-]+$/;
// Updated password regex to include at least one uppercase letter, one lowercase letter, one digit, and one special character
var pwdRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

// Function to validate the form
function validateForm() {
    var isValid = true;
    var errorMessage = '';

    // Validate name 
    var name = $("#name").val();
    if (!nameRegex.test(name)) {
        isValid = false;
        errorMessage += "Please enter a valid name.\n";
    }
    
    // Validate owner-name
    var owner_name = $("#owner-name").val();
    if (!nameRegex.test(owner_name)) {
        isValid = false;
        errorMessage += "Please enter a valid name.\n";
    }

    // Validate pet-name
    var pet_name = $("#pet-name").val();
    if (!nameRegex.test(pet_name)) {
        isValid = false;
        errorMessage += "Please enter a valid name.\n";
    }

    // Validate email
    var email = $("#email").val();
    if (!emailRegex.test(email)) {
        isValid = false;
        errorMessage += "Please enter a valid email address.\n";
    }

    // Validate phone
    var phone = $("#phone").val();
    if (!phoneRegex.test(phone)) {
        isValid = false;
        errorMessage += "Please enter a valid phone number.\n";
    }

    // Validate address (optional)
    var address = $("#address").val();
    if (address && !addressRegex.test(address)) {
        isValid = false;
        errorMessage += "Please enter a valid address.\n";
    }
    
    // Validate password with updated regex
    // var pwd = $("#password").val();
    // if (!pwdRegex.test(pwd)) {
    //     isValid = false;
    //     errorMessage += "Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character, with a minimum length of 8 characters.\n";
    // }
    
    // Display alert if form is not valid
    if (!isValid) {
        alert(errorMessage);
    }

    return isValid;
}

// Submit form if valid
$("form").submit(function(event) {
    if (!validateForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
});
