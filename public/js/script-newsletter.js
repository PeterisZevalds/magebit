
// disables form submit button on page load
window.onload = disableButton;
function disableButton() { 
    document.getElementById("submit").disabled = true;
}

function formValidation() {
    var emailField, tos, errorMessage, mailformat, error;

    // Regex for email validation
    mailformat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    // Get the values from emailForm
    emailField = document.forms["emailForm"]["email"].value;
    tos = document.forms["emailForm"]["tosCheckbox"];

    // Check if email field is empty
    if (emailField == "") {
        errorMessage = "Email address ir required";
        document.getElementById("error").textContent = errorMessage;

        // Compare email field to mailFormat REGEX
    } else if (!emailField.match(mailformat)) {
        errorMessage = "Please provide valid E-mail address";
        document.getElementById("error").textContent = errorMessage;

        // Check if email field ends with ".co"
    } else if (emailField.slice(emailField.length - 3) == ".co") {
        errorMessage = "We are not accepting subscriptions from Colombia";
        document.getElementById("error").textContent = errorMessage;

        // Checks if TOS checkbox is checked
    } else if (tos.checked == false) {
        errorMessage = "You must accept the terms and conditions";
        document.getElementById("error").textContent = errorMessage;

        // If everything passes clears error message and enables submit button
    } else {
        document.getElementById("error").textContent = "";
        document.getElementById("submit").disabled = false;
    }
}