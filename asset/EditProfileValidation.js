function validateForm() {
    // Retrieve form data
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let role = document.getElementById("role").value;
    let code = document.getElementById("code").value;
    let address = document.getElementById("address").value;

    // Perform validation checks
    if (email.trim() === "") {
        alert('Please enter email.');
        return false;
    }

    if (phone.trim() === "") {
        alert('Please enter phone.');
        return false;
    }

    if (role.trim() === "") {
        alert('Please enter role.');
        return false;
    }

    if (code === "") {
        alert('Please enter code.');
        return false;
    }

    if (address === "") {
        alert('Please enter address.');
        return false;
    }

    return true;
}



